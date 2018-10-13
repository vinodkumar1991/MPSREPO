<script>

$(document).ready(function(){

	 $('.brands').click(function() {                    
            var objBrand = {};
            intBrand = $(this).data("id");            
            strBrandName = $(this).data("brand_name");
            objBrand = {
                brandId: intBrand,
                vehicle_type_id: <?php echo $vehicleType; ?>,
                vehicle_folder_path: '<?php echo $vehicleModelFolderPath; ?>',
                vehicle_right_folder_path: '<?php echo $vehicleModelRightFolderPath; ?>',
            };
            $.post('<?php echo Yii::app()->params['webURL'] . '/Booking/BookAService/getVehicleBrandModels' ?>', objBrand, function (response) {
                if (response.length > 0) {
                    $("#modellist").html("");
                    $("#modellist").append(response);
                     $('#makes_id').val(objBrand.brandId);
                } else {
                    $("#modellist").html("");
                }
                return true;
            });
        });

/*$('#bikelist li').click(function() {

    

       var vmakeid = $(this).attr('id');

	  $('#makes_id').val(vmakeid);

				$.post('<?php //echo  $this->createUrl('/mPSVEHICLES_DETAILS/FetchBikeModels');?>',{

						makeid:vmakeid,

					},

					function(data)

					{

						$("#modellist").html(data);

						

						

							

					});

			

   });*/

 $("#modellist").on('click','li',function (){

	  $('#estamt').val('0');

	   $('#bamount').val('0');

	  //on click

	    var modelid = $(this).attr('id');

	   $('#model_id').val(modelid);

				text1=$(this).text();

						$('#span1').text(text1);

	   $.post('<?php echo  $this->createUrl('/mPSVEHICLES_DETAILS/FetchbikemodelImage');?>',{

						

						modelid:modelid

					},

					function(data)

					{

							//alert(data);

							datas=data.split('**');

							 $('#carimg').html("<img src=http://metrepersecond.com/MPS"+datas[0]+" name='carimg' id='carimg' height='100%' width='100%'>");

							 $('#brand').html('<b>'+datas[1]+'</b>');

							 $('#model').html('<b>'+datas[2]+'</b>');

						

					});

   

   

});

});

</script>       
<section class="page-section find-car modification">
    <div class="container">
            <div class="col-md-12 wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
                    <h2 class="caption-title">Car and Bike Modification</h2>
                    <h3 class="caption-subtitle">We help <i class="fa fa-arrow-right" aria-hidden="true"></i>drive head</h3>
            </div>

            <div class="vehiclestype">
            <div class="col-sm-6 text-center">
                <a href="<?php echo Yii::app()->params['webURL'].'Modificationshop/Car';?>"><i class="fa fa-car" aria-hidden="true"></i>
                <h2>Car</h2>
                </a>
            </div>
            <div class="col-sm-6 text-center">
                <a  class="active" href="<?php echo Yii::app()->params['webURL'].'Modificationshop/Bike';?>"><i class="fa fa-motorcycle" aria-hidden="true"></i>
                <h2>Bike</h2>
                </a>
            </div>
            </div>
        <form method="POST" action="" class="form-find-car">
        <input type="hidden" name="makes_id" id="makes_id" >
        <input type="hidden" name="model_id" id="model_id">
                <div class="row">
                    <div class="form-search light col-md-12">
                        <div class="col-md-3">
                            <div class="form-group has-icon has-label booksel">
                            <label for="formSearchOffLocation3">Brand</label>
                            <div id="carsbrand" class="wrapper-dropdown-3" tabindex="1">
                            <span>--Select Brand--</span>
                                <ul class="dropdown scrollable-menu" id="bikelist" require>
                                <?php
                                if (!empty($bikebrands)) {
                                   foreach ($bikebrands as $arrBrand) {?>
                                    <li  class="cl">
                                        <a href="#" data-id='<?php echo $arrBrand['id']; ?>' data-brand_name ='<?php echo $arrBrand['name']; ?>' class='brands'><?php echo $arrBrand['name']; ?><img src='<?php echo Yii::app()->params['adminImgURL'] . $vehicleFolderPath . $arrBrand['logo']; ?>'/></a>
                                    </li>
                                 <?php
                                     }
                                }
                                ?>   
                                </ul>
                            <div class="form-control-icon"><i class="fa fa-sort-desc" aria-hidden="true"></i></div>
                            </div>
                            </div>
                        </div>
                            <div class="col-md-3">
                                    <div class="form-group has-icon has-label booksel">
                                    <label for="formSearchOffLocation3">Model</label>
                                        <div id="carsmodel" class="wrapper-dropdown-3" tabindex="1">
                                                <span id="span1">--Select Model--</span>
                                                <ul class="dropdown scrollable-menu" id="modellist">
                                                </ul>
                                        <div class="form-control-icon">
                                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                        </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                    <label for="formFindCarCategory">Type of Modifications</label>
                                            <select class="form-control selectpicker" name="modlist" id="modlist" >
                                            <option value="">--Select Modification--</option>
                                            <?php 
                                            if(isset($types) && !empty($types)){
                                                    foreach($types as $arrService) { ?>
                                                    <option value="<?php echo $arrService['id']; ?>">
                                                    <?php echo $arrService['name']; ?></option>
                                                    <?php } 
                                            }?>
                                            </select>
                                    </div>
                            </div>
                            <div class="col-md-3 wow fadeInDown" data-wow-offset="200" data-wow-delay="500ms" style="margin-top:37px">
                            <div class="form-group has-icon has-label">
                            <input type="button" name="search" class="dropdown-toggle btn ripple-effect btn-theme" onclick="return validation();" value="Search Now" /> 
                            </div>
                            </div>
                    </div>
                </div>
        </form>
    </div>
</section>
<!-- /PAGE -->

<section class="page-section modify-ctn-list">
	<div class="container">
		<div class="row">
			<div data-wow-delay="100ms" data-wow-offset="200" class="col-md-6 wow fadeInLeft">
			<h2 class="section-title text-left">
			<small>Modification</small>
			<span>Over View of Modifications</span>
			</h2>
			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </p>
				<ul class="list-icons">
				<li><i class="fa fa-check-circle"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
				<li><i class="fa fa-check-circle"></i>Proin tempus sapien non iaculis pretium.</li>
				</ul>
			</div>
			<div data-wow-delay="300ms" data-wow-offset="200" class="col-md-6 wow fadeInRight">
				<img src="<?php echo Yii::app()->baseUrl; ?>/images/modification.jpg">
			</div>
		</div>
		<div class="row mdf-dntng">                
		<div data-wow-delay="300ms" data-wow-offset="200" class="col-md-6 wow fadeInRight">
		<img src="<?php echo Yii::app()->baseUrl; ?>/images/modification-denting.jpg">
		</div>
			<div data-wow-delay="100ms" data-wow-offset="200" class="col-md-6 wow fadeInLeft">
			<h2 class="section-title text-left">
			<span>Modifications Denting</span>
			</h2>
			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </p>
			<ul class="list-icons">
				<li><i class="fa fa-check-circle"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
				<li><i class="fa fa-check-circle"></i>Proin tempus sapien non iaculis pretium.</li>
			</ul>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">

        	function DropDown(el) {

				this.carsbrand = el;

				this.placeholder = this.carsbrand.children('span');

				this.opts = this.carsbrand.find('ul.dropdown > li');

				this.val = '';

				this.index = -1;

				this.initEvents();

			}

			DropDown.prototype = {

				initEvents : function() {

					var obj = this;



					obj.carsbrand.on('click', function(event){

						$(this).toggleClass('active');

						return false;

					});



					obj.opts.on('click',function(){

						var opt = $(this);

						obj.val = opt.text();

						obj.index = opt.index();

						obj.placeholder.text(obj.val);

					});

				},

				getValue : function() {

					return this.val;

				},

				getIndex : function() {

					return this.index;

				}

			}



			$(function() {



				var carsbrand = new DropDown( $('#carsbrand') );



				$(document).click(function() {

					// all dropdowns

					$('.wrapper-dropdown-3').removeClass('active');

				});



			});

			

			

			function DropDown(el) {

				this.carsmodel = el;

				this.placeholder = this.carsmodel.children('span');

				this.opts = this.carsmodel.find('ul.dropdown > li');

				this.val = '';

				this.index = -1;

				this.initEvents();

			}

			DropDown.prototype = {

				initEvents : function() {

					var obj = this;



					obj.carsmodel.on('click', function(event){

						$(this).toggleClass('active');

						return false;

					});



					obj.opts.on('click',function(){

						var opt = $(this);

						obj.val = opt.text();

						obj.index = opt.index();

						obj.placeholder.text(obj.val);

					});

				},

				getValue : function() {

					return this.val;

				},

				getIndex : function() {

					return this.index;

				}

			}



			$(function() {



				var carsmodel = new DropDown( $('#carsmodel') );



				$(document).click(function() {

					// all dropdowns

					$('.wrapper-dropdown-3').removeClass('active');

				});



				//select dropdown

				$('.selectpicker').selectpicker();

				$( ".caret" ).wrap( "<div class='form-control-icon'></div>" );



			});

function validation(){
var name = document.getElementById("modlist").value;
var brand = document.getElementById("makes_id").value;
var model_id = document.getElementById("model_id").value;

if( brand ===''){
alert("Please select  Brand Name..!!!!!!");
return false;
}else if( model_id ===''){
alert("Please select Model Name..!!!!!!");
return false;
}else if( name ===''){
alert("Please select Modification type..!!!!!!");
return false;
}
var url='<?php echo  Yii::app()->params['webURL'].'Modificationshop/SearchModificationShops'; ?>?vehicleType=2&brandID='+brand+'&serviceID='+name;
window.location=url;
}
</script>