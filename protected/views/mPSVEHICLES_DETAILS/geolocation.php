
  
<script>
$(document).ready(function()
{
	 $('#carlist li').click(function() {
     //Get the id of list items
       var vmakeid = $(this).attr('id');
	   $('#makes_id').val(vmakeid);
	
				$.post('index.php/mPSVEHICLES_DETAILS/Getvmodel',{
						Maker:vmakeid,
					},
					function(data)
					{
							//alert(data);
							
					     $("#modellist").html(data);
							
					});
			
   });
   $("#modellist").on('click','li',function (){
	   var modelid = $(this).attr('id');
	    $('#model_id').val(modelid);
	  
    text1=$(this).text();
	$('#span1').text(text1);
	
});
   
   
});



</script>
  

<!--<img src="bookAservice/images/uploadimages/models/car/test.jpg" name="a" id="a"/>-->


<link href="<?php echo Yii::app()->baseUrl; ?>/assets/plugins/owl-carousel2/assets/owl.carousel.min.css" rel="stylesheet">

	<script src="<?php echo Yii::app()->baseUrl; ?>/assets/js/dropdownscript.js"></script>

    <script src="<?php echo Yii::app()->baseUrl; ?>/assets/plugins/jquery-ui/jquery-ui.js"></script>

        <!-- PAGE -->
        <section class="page-section no-padding slider">
                    <div class="container full-width">

                        <div class="main-slider">
                            <div class="owl-carousel" id="main-slider">

                                <!-- Book a Service slide -->
                                <div class="item slide1 ver1">
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <h2 class="caption-title">All Discounts Just For You</h2>
                                                        <h3 class="caption-subtitle">Book a Service</h3>
                                                        <!-- Search form -->
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10 col-md-offset-1">

                                                                <div class="form-search dark">
                                                                    <form action="Savebookservice" method="post">
                                                                        <div class="form-title">
                                                                            <i class="fa fa-globe"></i>
                                                                            <h2>Get your vehicle service here</h2>
                                                                        </div>

                                                                        <div class="row row-inputs">
                                                                            <div class="container-fluid">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group has-icon has-label">
                                                                                        <label>Picking Up Location</label>
                                                                                        <input type="text" class="geocomplete form-control" id="bookloc" name="bookloc" placeholder="Airport or Anywhere">
                                                                                        <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                                                                                    </div>
                                                                                    <div>
                                                                                        <a href="#" class="btn btn-submit btn-theme"><i class="fa fa-map-marker"></i> use zippr map</a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <div class="form-group has-icon has-label">
                                                                                        <label for="picdate">Picking Up Date</label>
                                                                                        <input type="text" class="form-control" id="picdate" name="picdate" placeholder="dd/mm/yyyy">
                                                                                        <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <div class="form-group has-icon has-label selectpicker-wrapper">
                                                                                        <label>Picking Up Hour</label>
                                                                                        <input type="text" class="form-control" id="pictimer" name="bookhour" placeholder="00:00:00">
                                                                                        <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row row-submit">
                                                                            <div class="container-fluid">
                                                                                <div class="inner">
                                                                                   <!-- <i class="fa fa-plus-circle"></i> <a href="#">Advanced Search</a> -->
                                                                                    <button type="submit" id="formSearchSubmit" class="btn btn-submit btn-theme pull-right">Book a Service</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- /Search form -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Book a Service slide End -->

                                <!-- Add Your Vehicle Slide  -->
                                <div class="item slide0 ver0">
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <!-- Search form -->
                                                        <div class="form-search light">
                                                            <form action="index.php/mPSVEHICLES_DETAILS/saveVehicle" method="post">
                                                            <input type="hidden" name="makes_id" id="makes_id">
                                                            <input type="hidden" name="model_id" id="model_id">
                                                                <div class="form-title">
                                                                    <h2>Add Your Vehicle</h2>
                                                                </div>
                                                                
                                                                <div class="row row-inputs">
                                                                    <div class="container-fluid">
                                                                    <div class="vehiclestype">
                                                                    <div class="col-sm-6 text-center">
                                                                        <a href="#addcar"><i class="fa fa-car" aria-hidden="true"></i>
                                                                        <h2>Car</h2></a>
                                                                    </div>
                                                                    <div class="col-sm-6 text-center">
                                                                        <a href="#addbike"><i class="fa fa-motorcycle" aria-hidden="true"></i>
                                                                        <h2>Bike</h2></a>
                                                                    </div>
                                                                    </div>
                                                                    <!-- Add Vehicle Car -->
                                                                    <div id="addcar" class="vehicles">
                                                                    <div class="row row-inputs">
                                                                    <div class="container-fluid">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group has-icon has-label">
                                                                            <label for="formSearchOffLocation3">Choose Brand</label>
                                                                            <div id="carsbrand" class="wrapper-dropdown-3" tabindex="1">
                                                                            <span>Select The Car Brands</span>
                                                                                <ul class="dropdown scrollable-menu" id="carlist">
                                                                                    <!--<li><a href="#">Audi <img src="assets/img/vhls-models/ford-EcoSport.png"></a></li>
                                                                                    <li><a href="#">BMW <img src="assets/img/vhls-models/ford-EcoSport.png"></a></li>
                                                                                    <li><a href="#">Maruthi <img src="assets/img/vhls-models/ford-EcoSport.png"></a></li>-->
                                                                                    <?php
                                                                             foreach ($vmakelist as $vmake) {
                                                                                    //echo $vmake['makes_name'];

                                                                            echo '<li id="'.$vmake['makes_id'].'" class="cl"><a href="#">'.$vmake['makes_name'].' <img src="'.Yii::app()->request->baseUrl.''.$vmake['logo_img'].'"></a></li>';
                                                                            
                                                                                } 
                                                                                ?>
                                                                                </ul>
                                                                                <div class="form-control-icon"><i class="fa fa-sort-desc" aria-hidden="true"></i></div>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group has-icon has-label">
                                                                            <label for="formSearchOffLocation3">Choose Model</label>
                                                                            <!-- <ul class="dropdown"></ul> -->
                                                                            <div id="carsmodel" class="wrapper-dropdown-3" tabindex="1">
                                                                                <span id="span1">Select The Model</span>
                                                                                <ul class="dropdown scrollable-menu" id="modellist">
                                                                                    
                                                                                </ul>
                                                                            <div class="form-control-icon"><i class="fa fa-sort-desc" aria-hidden="true"></i></div>
                                                                            </div>                                                                            
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-inputs">
                                                                    <div class="container-fluid">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group has-icon has-label">
                                                                                <label>Select Variant</label>
                                                                                <select class="form-control" name="variant" id="variant">
                                                                                    <option>Diesel</option>
                                                                                    <option>Petrol</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group has-icon has-label">
                                                                                <label>Last Service On</label>
                                                                                <input type="text" class="form-control datepicker-date" id="lastservice_on" name="lastservice_on" placeholder="dd/mm/yyyy">
                                                                                <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-inputs">
                                                                    <div class="container-fluid">
                                                                        <div class="col-sm-6">
                                                                        <label>Vehicle age</label>
                                                                            <input type="text" class="form-control" name="vehicle_age" id="vehicle_age">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                        <label>Vehicle No.</label>
                                                                            <input type="text" class="form-control" name="regno" id="regno">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-submit">
                                                                    <div class="container-fluid">
                                                                        <div class="addvhlcbtn">
                                                                            <button type="submit" id="formSearchSubmit2" class="btn btn-submit btn-theme pull-right">Add Vehicle</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Add Vehicle Car End -->

                                                                <!-- Add Vehicle Bike -->
                                                                <div id="addbike" class="vehicles">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group has-icon has-label">
                                                                                <label for="formSearchUpLocation2">Select Mechanic Type</label>
                                                                                <select class="form-control" id="sel1">
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group has-icon has-label">
                                                                                <label for="formSearchOffLocation2">Pick Location for Mechanic</label>
                                                                                <input id="formSearchOffLocation2" class="geocomplete form-control" type="text" placeholder="Location">
                                                                                <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Add Vehicle Bike End -->
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- /Search form -->
                                                        <h2 class="caption-subtitle">Add Your Vehicle</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Your Vehicle slide Ending -->    

                                <!-- Hire a Mechanic Slide -->
                                <div class="item slide2 ver2">
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <!-- Search form -->
                                                        <div class="form-search light">
                                                            <form action="#">
                                                                <div class="form-title">
                                                                    <i class="fa fa-globe"></i>
                                                                    <h2>Hire a Mechanic</h2>
                                                                </div>

                                                                <div class="row row-inputs">
                                                                    <div class="container-fluid">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group has-icon has-label">
                                                                                <label for="formSearchUpLocation2">Select Mechanic Type</label>
                                                                                <select class="form-control" id="sel1">
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group has-icon has-label">
                                                                                <label for="formSearchOffLocation2">Pick Location for Mechanic</label>
                                                                                <input id="formSearchOffLocation2" class="geocomplete form-control" type="text" placeholder="Location">
                                                                                <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row row-submit">
                                                                    <div class="container-fluid">
                                                                        <div class="inner">
                                                                            <i class="fa fa-plus-circle"></i> <a href="#">Advanced Search</a>
                                                                            <button type="submit" id="formSearchSubmit2" class="btn btn-submit btn-theme pull-right">Search</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- /Search form -->
                                                        <h2 class="caption-subtitle">Find Your Mechanic</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hire a Mechanic Slide End -->

                                <!-- Self Drive Slide -->
                                <div class="item slide3 ver3">
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <!-- Search form -->
                                                        <div class="form-search light">
                                                            <form action="#">
                                                                <div class="form-title">
                                                                    <i class="fa fa-globe"></i>
                                                                    <h2>Search for vehicle for your journey here.</h2>
                                                                </div>

                                                                <div class="row row-inputs">
                                                                    <div class="container-fluid">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group has-icon has-label">
                                                                            <label for="formSearchOffLocation3">Choose Brand</label>
                                                                            <select name="fancySelect" class="makeMeFancy">
                                                                            <option value="0" selected="selected" data-skip="1">Choose Your Product</option>
                                                                            <option value="1" data-icon="assets/img/vhlc-brands/audi.png" data-html-text="Audi">Audi</option>
                                                                            <option value="2" data-icon="assets/img/vhlc-brands/Honda_logo.png" data-html-text="Honda">Honda</option>
                                                                            <option value="3" data-icon="assets/img/vhlc-brands/Hyundai_logo.png" data-html-text="Hyundai">Hyundai</option>
                                                                            </select>
                                                                            <span class="form-control-icon"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group has-icon has-label">
                                                                            <label for="formSearchOffLocation3">Choose Model</label>
                                                                            <select name="fancySelect" class="makeMeFancyModel">
                                                                            <option value="0" selected="selected" data-skip="1">Choose Your Product</option>
                                                                            <option value="1" data-icon="assets/img/vhls-models/ford-EcoSport.png" data-html-text="EcoSport">EcoSport</option>
                                                                            <option value="2" data-icon="assets/img/vhls-models/ford-endeavour.png" data-html-text="Endeavour">Endeavour</option>
                                                                            <option value="3" data-icon="assets/img/vhls-models/ford-fiesta.png" data-html-text="Fiesta">Fiesta</option>
                                                                            </select>
                                                                            <span class="form-control-icon"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row row-inputs">
                                                                    <div class="container-fluid">
                                                                        <div class="col-sm-7">
                                                                            <div class="form-group has-icon has-label">
                                                                                <label for="formSearchUpDate3">Start Trip Date</label>
                                                                                <input type="text" class="form-control datepicker-date" id="formSearchUpDate3" placeholder="dd/mm/yyyy">
                                                                                <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <div class="form-group has-icon has-label selectpicker-wrapper">
                                                                                <label>Picking Up Hour</label>
                                                                                <select
                                                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                                                    data-toggle="tooltip" title="Select">
                                                                                    <option>20:00 AM</option>
                                                                                    <option>21:00 AM</option>
                                                                                    <option>22:00 AM</option>
                                                                                </select>
                                                                                <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row row-inputs">
                                                                    <div class="container-fluid">
                                                                        <div class="col-sm-7">
                                                                            <div class="form-group has-icon has-label">
                                                                                <label for="formSearchOffDate3">End Trip Date</label>
                                                                                <input type="text" class="form-control datepicker-date" id="formSearchOffDate3" placeholder="dd/mm/yyyy">
                                                                                <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <div class="form-group has-icon has-label selectpicker-wrapper">
                                                                                <label>End Off Hour</label>
                                                                                <select
                                                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                                                    data-toggle="tooltip" title="Select">
                                                                                    <option>20:00 AM</option>
                                                                                    <option>21:00 AM</option>
                                                                                    <option>22:00 AM</option>
                                                                                </select>
                                                                                <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row row-submit">
                                                                    <div class="container-fluid">
                                                                        <div class="inner">
                                                                            <i class="fa fa-plus-circle"></i> <a href="#">Advanced Search</a>
                                                                            <button type="submit" id="formSearchSubmit3" class="btn btn-submit btn-theme pull-right">Find Car</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- /Search form -->

                                                        <h2 class="caption-title">For rental Cars</h2>
                                                        <h3 class="caption-subtitle">Self Drive</h3>
                                                        <p class="caption-text">
                                                            Sales Up  %45 Off<br/>
                                                            All Rental Cars Start from  49$
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Self Drive Slide End -->

                            </div>
                        </div>

                    </div>
                </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">

                <div class="row">
                    <div class="col-md-4 wow flipInY" data-wow-offset="70" data-wow-duration="1s">
                        <div class="thumbnail thumbnail-featured no-border no-padding">
                            <div class="media">
                                <a class="media-link" href="#">
                                    <div class="caption">
                                        <div class="caption-wrapper div-table">
                                            <div class="caption-inner div-cell">
                                                <div class="caption-icon"><i class="fa fa-support"></i></div>
                                                <h4 class="caption-title">7/24 Car Support</h4>
                                                <div class="caption-text">Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque,lacinia at tempor vitae, porta at arcu.</div>
                                                <div class="buttons">
                                                    <span class="btn btn-theme ripple-effect btn-theme-transparent">Read More</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption hovered">
                                        <div class="caption-wrapper div-table">
                                            <div class="caption-inner div-cell">
                                                <div class="caption-icon"><i class="fa fa-support"></i></div>
                                                <h4 class="caption-title">7/24 Car Support</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow flipInY" data-wow-offset="70" data-wow-duration="1s" data-wow-delay="200ms">
                        <div class="thumbnail thumbnail-featured no-border no-padding">
                            <div class="media">
                                <a class="media-link" href="#">
                                    <div class="caption">
                                        <div class="caption-wrapper div-table">
                                            <div class="caption-inner div-cell">
                                                <div class="caption-icon"><i class="fa fa-calendar"></i></div>
                                                <h4 class="caption-title">Reservation Anytime</h4>
                                                <div class="caption-text">Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque,lacinia at tempor vitae, porta at arcu.</div>
                                                <div class="buttons">
                                                    <span class="btn btn-theme ripple-effect btn-theme-transparent">Read More</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption hovered">
                                        <div class="caption-wrapper div-table">
                                            <div class="caption-inner div-cell">
                                                <div class="caption-icon"><i class="fa fa-calendar"></i></div>
                                                <h4 class="caption-title">Reservation Anytime</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow flipInY" data-wow-offset="70" data-wow-duration="1s" data-wow-delay="400ms">
                        <div class="thumbnail thumbnail-featured no-border no-padding">
                            <div class="media">
                                <a class="media-link" href="#">
                                    <div class="caption">
                                        <div class="caption-wrapper div-table">
                                            <div class="caption-inner div-cell">
                                                <div class="caption-icon"><i class="fa fa-map-marker"></i></div>
                                                <h4 class="caption-title">Lots of Locations</h4>
                                                <div class="caption-text">Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque,lacinia at tempor vitae, porta at arcu.</div>
                                                <div class="buttons">
                                                    <span class="btn btn-theme ripple-effect btn-theme-transparent">Read More</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption hovered">
                                        <div class="caption-wrapper div-table">
                                            <div class="caption-inner div-cell">
                                                <div class="caption-icon"><i class="fa fa-map-marker"></i></div>
                                                <h4 class="caption-title">Lots of Locations</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section dark">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="100ms">
                        <h2 class="section-title text-left">
                            <small>What Do You Know About Us</small>
                            <span>Who We Are ?</span>
                        </h2>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </p>
                        <ul class="list-icons">
                            <li><i class="fa fa-check-circle"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li><i class="fa fa-check-circle"></i>Proin tempus sapien non iaculis pretium.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="300ms">
                        <div class="owl-carousel img-carousel">
                            <div class="item"><a href="assets/img/preview/slider/slide-775x500x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/slider/slide-775x500x1.jpg" alt=""/></a></div>
                            <div class="item"><a href="assets/img/preview/slider/slide-775x500x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/slider/slide-775x500x1.jpg" alt=""/></a></div>
                            <div class="item"><a href="assets/img/preview/slider/slide-775x500x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/slider/slide-775x500x1.jpg" alt=""/></a></div>
                            <div class="item"><a href="assets/img/preview/slider/slide-775x500x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/slider/slide-775x500x1.jpg" alt=""/></a></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- HAPPY COSTUMERS PAGE -->
        <section class="page-section image">
            <div class="container">

                <div class="row">
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
                        <div class="thumbnail thumbnail-counto no-border no-padding">
                            <div class="caption">
                                <div class="caption-icon"><i class="fa fa-heart"></i></div>
                                <div class="caption-number">5657</div>
                                <h4 class="caption-title">Happy costumers</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-offset="200" data-wow-delay="200ms">
                        <div class="thumbnail thumbnail-counto no-border no-padding">
                            <div class="caption">
                                <div class="caption-icon"><i class="fa fa-car"></i></div>
                                <div class="caption-number">100</div>
                                <h4 class="caption-title">Total Service Centers</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-offset="200" data-wow-delay="300ms">
                        <div class="thumbnail thumbnail-counto no-border no-padding">
                            <div class="caption">
                                <div class="caption-icon"><i class="fa fa-flag"></i></div>
                                <div class="caption-number">1000</div>
                                <h4 class="caption-title">No. of Bookings</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-offset="200" data-wow-delay="400ms">
                        <div class="thumbnail thumbnail-counto no-border no-padding">
                            <div class="caption">
                                <div class="caption-icon"><i class="fa fa-comments-o"></i></div>
                                <div class="caption-number">1255</div>
                                <h4 class="caption-title">Total Mechanics</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- HAPPY COSTUMERS /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">

                <h2 class="section-title wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
                    <small>Select What You Want</small>
                    <span>Our awesome Rental Fleet cars</span>
                </h2>

                <div class="tabs awesome wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
                    <ul id="tabs1" class="nav"><!--
                        --><li class=""><a href="#tab-x1" data-toggle="tab">Economic cars</a></li><!--
                        --><li class="active"><a href="#tab-x2" data-toggle="tab">Business cars</a></li><!--
                        --><li class=""><a href="#tab-x3" data-toggle="tab">Premium cars</a></li><!--
                        --><li class=""><a href="#tab-x4" data-toggle="tab">Luxury cars</a></li>
                    </ul>
                </div>

                <div class="tab-content wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
                    <!-- tab 1 -->
                    <div class="tab-pane fade" id="tab-x1">
                        <div class="car-big-card">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="tabs awesome-sub">
									
                                        <ul id="tabs4" class="nav">
										<!--
                                            --><li class=""><a href="#tab-x1x1" data-toggle="tab">VW Passat CC 2.0 TDI</a></li><!--
                                            --><li class="active"><a href="#tab-x1x2" data-toggle="tab">VW Polo 1.6 TDI Comfortline</a></li><!--
                                            --><li class=""><a href="#tab-x1x3" data-toggle="tab">Toyota Corolla 1.6 Elegant</a></li><!--
                                            --><li class=""><a href="#tab-x1x4" data-toggle="tab">Honda Civic Elegance</a></li><!--
                                            --><li class=""><a href="#tab-x1x4" data-toggle="tab">Renoult Megane</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">

                                    <!-- Sub tabs content -->
                                    <div class="tab-content">

                                        <div class="tab-content">

                                            <div class="tab-pane fade" id="tab-x1x1">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <!-- Swiper -->
                                                        <div class="swiper-container" id="swiperSlider1x1">
                                                            <div class="swiper-wrapper">
														 <?php
														 
														 /* foreach($fetch as $fetchModel)
														 {
														echo '<div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="http://10.10.10.28/'.$fetchModel['imgpath'].'" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="http://10.10.10.28/'.$fetchModel['imgpath'].'" data-gal="prettyPhoto"><img class="img-responsive" src="http://10.10.10.28/'.$fetchModel['imgpath'].'" alt=""/></a>
                                                                </div>';
														 } */	
                                                             ?>   
                                                               
                                                            </div>
                                                            <!-- Add Pagination -->
                                                            <div class="row car-thumbnails"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="car-details">
                                                            <div class="price">
                                                                <strong>111.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                            </div>
                                                            <div class="list">
                                                                <ul>
                                                                    <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                    <li>Under 25,000 Km</li>
                                                                    <li>Transmission Manual</li>
                                                                    <li>5 Year service included</li>
                                                                    <li>Manufacturing Year 2014</li>
                                                                    <li>5 Doors and Panorama View</li>
                                                                </ul>
                                                            </div>
                                                            <div class="button">
                                                                <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade active in" id="tab-x1x2">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <!-- Swiper -->
                                                        <div class="swiper-container" id="swiperSlider1x2">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                            <!-- Add Pagination -->
                                                            <div class="row car-thumbnails"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="car-details">
                                                            <div class="price">
                                                                <strong>112.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                            </div>
                                                            <div class="list">
                                                                <ul>
                                                                    <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                    <li>Under 25,000 Km</li>
                                                                    <li>Transmission Manual</li>
                                                                    <li>5 Year service included</li>
                                                                    <li>Manufacturing Year 2014</li>
                                                                    <li>5 Doors and Panorama View</li>
                                                                </ul>
                                                            </div>
                                                            <div class="button">
                                                                <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-x1x3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <!-- Swiper -->
                                                        <div class="swiper-container" id="swiperSlider1x3">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                            <!-- Add Pagination -->
                                                            <div class="row car-thumbnails"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="car-details">
                                                            <div class="price">
                                                                <strong>113.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                            </div>
                                                            <div class="list">
                                                                <ul>
                                                                    <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                    <li>Under 25,000 Km</li>
                                                                    <li>Transmission Manual</li>
                                                                    <li>5 Year service included</li>
                                                                    <li>Manufacturing Year 2014</li>
                                                                    <li>5 Doors and Panorama View</li>
                                                                </ul>
                                                            </div>
                                                            <div class="button">
                                                                <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-x1x4">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <!-- Swiper -->
                                                        <div class="swiper-container" id="swiperSlider1x4">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                            <!-- Add Pagination -->
                                                            <div class="row car-thumbnails"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="car-details">
                                                            <div class="price">
                                                                <strong>114.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                            </div>
                                                            <div class="list">
                                                                <ul>
                                                                    <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                    <li>Under 25,000 Km</li>
                                                                    <li>Transmission Manual</li>
                                                                    <li>5 Year service included</li>
                                                                    <li>Manufacturing Year 2014</li>
                                                                    <li>5 Doors and Panorama View</li>
                                                                </ul>
                                                            </div>
                                                            <div class="button">
                                                                <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-x1x5">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <!-- Swiper -->
                                                        <div class="swiper-container" id="swiperSlider1x5">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                            <!-- Add Pagination -->
                                                            <div class="row car-thumbnails"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="car-details">
                                                            <div class="price">
                                                                <strong>115.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                            </div>
                                                            <div class="list">
                                                                <ul>
                                                                    <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                    <li>Under 25,000 Km</li>
                                                                    <li>Transmission Manual</li>
                                                                    <li>5 Year service included</li>
                                                                    <li>Manufacturing Year 2014</li>
                                                                    <li>5 Doors and Panorama View</li>
                                                                </ul>
                                                            </div>
                                                            <div class="button">
                                                                <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- /Sub tabs content -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tab 2 -->
                    <div class="tab-pane fade active in" id="tab-x2">

                        <div class="car-big-card">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="tabs awesome-sub">
                                        <ul id="tabs-x2" class="nav"><!--
                                            --><li class=""><a href="#tab-x2x1" data-toggle="tab">VW Passat CC 2.0 TDI</a></li><!--
                                            --><li class="active"><a href="#tab-x2x2" data-toggle="tab">VW Polo 1.6 TDI Comfortline</a></li><!--
                                            --><li class=""><a href="#tab-x2x3" data-toggle="tab">Toyota Corolla 1.6 Elegant</a></li><!--
                                            --><li class=""><a href="#tab-x2x4" data-toggle="tab">Honda Civic Elegance</a></li><!--
                                            --><li class=""><a href="#tab-x2x5" data-toggle="tab">Renoult Megane</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">

                                    <!-- Sub tabs content -->
                                    <div class="tab-content">

                                        <div class="tab-pane fade" id="tab-x2x1">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider2x1">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>121.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade active in" id="tab-x2x2">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider2x2">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>122.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x2x3">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider2x3">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>123.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x2x4">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider2x4">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>124.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x2x5">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider2x5">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>125.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /Sub tabs content -->

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- tab 3 -->
                    <div class="tab-pane fade" id="tab-x3">

                        <div class="car-big-card">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="tabs awesome-sub">
                                        <ul id="tabs-x3" class="nav"><!--
                                            --><li class=""><a href="#tab-x3x1" data-toggle="tab">VW Passat CC 2.0 TDI</a></li><!--
                                            --><li class="active"><a href="#tab-x3x2" data-toggle="tab">VW Polo 1.6 TDI Comfortline</a></li><!--
                                            --><li class=""><a href="#tab-x3x3" data-toggle="tab">Toyota Corolla 1.6 Elegant</a></li><!--
                                            --><li class=""><a href="#tab-x3x4" data-toggle="tab">Honda Civic Elegance</a></li><!--
                                            --><li class=""><a href="#tab-x3x5" data-toggle="tab">Renoult Megane</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">

                                    <!-- Sub tabs content -->
                                    <div class="tab-content">

                                        <div class="tab-pane fade" id="tab-x3x1">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider3x1">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>131.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade active in" id="tab-x3x2">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider3x2">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>132.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x3x3">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider3x3">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>133.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x3x4">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider3x4">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>134.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x3x5">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider3x5">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>135.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /Sub tabs content -->

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- tab 4 -->
                    <div class="tab-pane fade" id="tab-x4">

                        <div class="car-big-card">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="tabs awesome-sub">
                                        <ul id="tabs-x4" class="nav"><!--
                                            --><li class=""><a href="#tab-x4x1" data-toggle="tab">VW Passat CC 2.0 TDI</a></li><!--
                                            --><li class="active"><a href="#tab-x4x2" data-toggle="tab">VW Polo 1.6 TDI Comfortline</a></li><!--
                                            --><li class=""><a href="#tab-x4x3" data-toggle="tab">Toyota Corolla 1.6 Elegant</a></li><!--
                                            --><li class=""><a href="#tab-x4x4" data-toggle="tab">Honda Civic Elegance</a></li><!--
                                            --><li class=""><a href="#tab-x4x5" data-toggle="tab">Renoult Megane</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">

                                    <!-- Sub tabs content -->
                                    <div class="tab-content">

                                        <div class="tab-pane fade" id="tab-x4x1">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider4x1">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>141.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade active in" id="tab-x4x2">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider4x2">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>142.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x4x3">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider4x3">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>143.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x4x4">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider4x4">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>144.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x4x5">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider4x5">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>145.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /Sub tabs content -->

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->
        
        <!-- FIND MECHANICS PAGE -->
        <section class="page-section find-car dark">
            <div class="container">

                <form action="#" class="form-find-car">
                    <div class="row">

                        <div class="col-md-3 wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">

                            <h2 class="section-title text-left no-margin">
                                <small>Find Your</small>
                                <span>Mechanic</span>
                            </h2>

                        </div>
                        <div class="col-md-7 wow fadeInDown" data-wow-offset="200" data-wow-delay="200ms">
                            <div class="form-group has-icon has-label">
                                <label for="formFindCarLocation">Pull Location</label>
                                <input type="text" class="form-controtel geocomplete" name="adrsvalue" id="formFindCarLocation" placeholder="Default Location">
                                <span class="form-control-icon"><i class="fa fa-location-arrow"></i></span>
                            </div>
                        </div>
                        <div class="col-md-2 wow fadeInDown" data-wow-offset="200" data-wow-delay="500ms">
                            <div class="form-group">
                               <!-- <input type="button" id="formFindCarSubmit" class="btn btn-block btn-submit ripple-effect btn-theme clickserch">Search</button>-->
							   <input type="button" id="clickbtn" value="Search"/>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </section>
        <!-- FIND MECHANICS PAGE /PAGE -->

        <!-- PAGE -->
        <section class="page-section no-padding no-bottom-space-off">
            <div class="container full-width">
					<body onload="load()">
					<div id="map" align="center" style="width: 1200px; height: 1000px"></div>
						 <!--<div id="map-canvas" class="map"></div>-->
					  </body>
                <!-- Google map -->
                <!--<div class="google-map">
                    <div id="map-canvas"></div>
                </div>-->
                <!-- /Google map -->

            </div>
        </section>
        <!-- /PAGE -->

        <!-- TESTMONIALS PAGE -->
        <section class="page-section testimonials">
            <div class="container wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
                <div class="testimonials-carousel">
                    <div class="owl-carousel" id="testimonials">
                        <div class="testimonial">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object testimonial-avatar" src="assets/img/preview/avatars/testimonial-140x140x1.jpg" alt="Testimonial avatar">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                                    <div class="testimonial-name">Chandhu <span class="testimonial-position">Founder at MPS</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object testimonial-avatar" src="assets/img/preview/avatars/testimonial-140x140x1.jpg" alt="Testimonial avatar">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                                    <div class="testimonial-name">Rakesh <span class="testimonial-position">Co- founder at MPS</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object testimonial-avatar" src="assets/img/preview/avatars/testimonial-140x140x1.jpg" alt="Testimonial avatar">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                                    <div class="testimonial-name">Venkat <span class="testimonial-position">Customer</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- TESTMONIALS /PAGE -->

        <!-- FAQ'S PAGE -->
        <section class="page-section">
            <div class="container">

                <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
                    <small>See What People Ask to Us</small>
                    <span>FAQS</span>
                </h2>

                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms">
                        <!-- FAQ -->
                        <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
                            <!-- faq1 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading1">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            <span class="dot"></span> How can ı dorp the rental car?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                                    <div class="panel-body">
                                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet.
                                    </div>
                                </div>
                            </div>
                            <!-- /faq1 -->
                            <!-- faq2 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            <span class="dot"></span> Where can I rent a car?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                    <div class="panel-body">
                                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet.
                                    </div>
                                </div>
                            </div>
                            <!-- /faq2 -->
                            <!-- faq3 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading3">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            <span class="dot"></span> If I crash a car. What happens?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                    <div class="panel-body">
                                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet.
                                    </div>
                                </div>
                            </div>
                            <!-- /faq3 -->
                        </div>
                        <!-- /FAQ -->
                    </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="200ms">
                        <!-- FAQ -->
                        <div class="panel-group accordion" id="accordion2" role="tablist" aria-multiselectable="true">
                            <!-- faq1 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading21">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                            <span class="dot"></span> How can ı dorp the rental car?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21">
                                    <div class="panel-body">
                                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet.
                                    </div>
                                </div>
                            </div>
                            <!-- /faq1 -->
                            <!-- faq2 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading22">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse22" aria-expanded="true" aria-controls="collapse22">
                                            <span class="dot"></span> Where can I rent a car?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse22" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading22">
                                    <div class="panel-body">
                                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet.
                                    </div>
                                </div>
                            </div>
                            <!-- /faq2 -->
                            <!-- faq3 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading23">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                            <span class="dot"></span> If I crash a car. What happens?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23">
                                    <div class="panel-body">
                                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet.
                                    </div>
                                </div>
                            </div>
                            <!-- /faq3 -->
                        </div>
                        <!-- /FAQ -->
                    </div>
                </div>
                <div class="outer required col-md-3 col-md-offset-5">
                    <div class="form-group af-inner">
                        <a href="#" class="form-button form-button-submit btn btn-block btn-theme ripple-effect btn-theme-dark">More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ'S /PAGE -->

        <!-- PAGE -->
        <section class="page-section image subscribe">
            <div class="container">

                <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
                    <small>Part of our</small>
                    <span>Metre Per Second</span>
                </h2>

                <div class="row wow fadeInDown" data-wow-offset="200" data-wow-delay="200ms">
                    <div class="col-md-8 col-md-offset-2">

                        <p class="text-center">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

                    <!-- Contact form -->
                        <form name="contact-form" method="post" action="#" class="contact-form" id="contact-form">

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="outer required">
                                        <div class="form-group af-inner has-icon">
                                            <label class="sr-only" for="name">Workshop Name</label>
                                            <input
                                                    type="text" name="name" id="name" placeholder="Workshop Name*" value="" size="30"
                                                    data-toggle="tooltip" title="Name is required"
                                                    class="form-control placeholder"/>
                                            <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="outer required">
                                        <div class="form-group af-inner has-icon">
                                            <label class="sr-only" for="email">Contact Name*</label>
                                            <input
                                                    type="text" name="email" id="email" placeholder="Contact Name*" value="" size="30"
                                                    data-toggle="tooltip" title="Email is required"
                                                    class="form-control placeholder"/>
                                            <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="outer required">
                                <div class="form-group af-inner has-icon">
                                    <label class="sr-only" for="subject">Mobile</label>
                                    <input
                                            type="text" name="subject" id="subject" placeholder="Mobile" value="" size="30"
                                            data-toggle="tooltip" title="Subject is required"
                                            class="form-control placeholder"/>
                                    <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                                </div>
                            </div>

                            <div class="form-group af-inner has-icon">
                                <label class="sr-only" for="input-message">Message</label>
                                <textarea
                                        name="message" id="input-message" placeholder="Message" rows="4" cols="50"
                                        data-toggle="tooltip" title="Message is required"
                                        class="form-control placeholder"></textarea>
                                <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                            </div>

                            <div class="outer required">
                                <div class="form-group af-inner">
                                    <input type="submit" name="submit" class="form-button form-button-submit btn btn-block btn-theme ripple-effect btn-theme-dark" id="submit_btn" value="Send message" />
                                </div>
                            </div>

                        </form>
                        <!-- /Contact form -->

                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

<script src="<?php echo Yii::app()->baseUrl; ?>/assets/plugins/owl-carousel2/owl.carousel.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/assets/plugins/swiper/js/swiper.jquery.min.js"></script>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/assets/js/jquery.geocomplete.js"></script>

<script>
      $(function(){
        $(".geocomplete").geocomplete({
        
          details: "form",
          types: ["geocode", "establishment"],
        });

      
      });
</script>

<script>
$(document).ready(function(){
        
		
		
		$('#clickbtn').click(function(){
		location='http://10.10.10.28/mps/bookAservice/index.php/mPSVEHICLES_DETAILS/AddVehicle?location='+location;
		adrs=$('#formFindCarLocation').val();
		
		 downloadUrls("index.php/mPSVEHICLES_DETAILS/FetchmechanicsonLocations",location, function(data) {
		
		      var xml = data.responseXML;
			 
			  var markers = xml.documentElement.getElementsByTagName("marker");
			alert(markers.length);
		 	    for (var i = 0; i < markers.length; i++) {
					 var address = markers[i].getAttribute("location");
					  //var type = markers[i].getAttribute("type");
				     var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("longitude")),
              parseFloat(markers[i].getAttribute("latitude")));
			  
			   var html = "<b>" + point + "</b> <br/>";
          var icon = customIcons['http://labs.google.com/ridefinder/images/mm_20_blue.png'] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
					
			   }  
      
      
			});
		});
		
        $('.vehiclestype').each(function(){
        
            var $active, $content, $links = $(this).find('a');

            $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
            $active.addClass('active');
            $content = $($active.attr('href'));
            
            $links.not($active).each(function () {
                $($(this).attr('href')).hide();
            });
            
            $(this).on('click', 'a', function(e){
                var c = this;
                $active.removeClass('active');
                $content.fadeOut("slow", function()
                                 {
                                     $active = $(c);
                                     $content = $($(c).attr('href'));
                                     
                                     $active.addClass('active');
                                     $content.fadeIn("slow");
                                 });
                e.preventDefault();
            });
        });


        
    });
</script>
 
     <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
       // var infoWindow = new google.maps.InfoWindow({map: map});
		var infoWindow = new google.maps.InfoWindow;
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
			
			var marker = new google.maps.Marker({
				position: pos,
				title:"Hello World!"
			});


			marker.setMap(map)
			
            map.setCenter(pos);
          }, function() {
            //handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

		  
		  
		  /*  function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    } */
		  
		  
		  
      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
    </script>
	
	<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->


	
	
	