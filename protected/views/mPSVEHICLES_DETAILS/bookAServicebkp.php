<?php
// Yii::app()->session['bookloc'];
 
 

?>

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
$(document).ready(function()
{
	
	
	
	
	$('.services').change(function() {
		services=$('.services').val();
		$("#servnm").val(services);
	});
	$('#carlist li').click(function() {
     //Get the id of list items
       var vmakeid = $(this).attr('id');
	   $('#makes_id').val(vmakeid);
		//return false;
     // alert($( "li " ).text());
	 
				//alert(vmakeid);
				$.post('Getvmodel',{
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

<style type="text/css">
.modal-header{
    border-bottom: none;
}
    @media screen and (min-width: 768px) {
        .modal-dialog {
          width: 760px; /* New width for default modal */
        }
        .modal-sm {
          width: 380px; /* New width for small modal */
        }
    }
    @media screen and (min-width: 992px) {
        .modal-lg {
          width: 950px; /* New width for large modal */
        }
    }
</style>
<!-- BREADCRUMBS -->
        <section class="bookservice-main page-section breadcrumbs">
            <div class="container">			
			<?php
			if(empty(Yii::app()->session['username']) && isset(Yii::app()->session['bookloc']) && isset(Yii::app()->session['picdate']) && isset(Yii::app()->session['bookhour']))
						{
							echo '<div class="col-md-6">
                <div class="page-header">
                    <div class="form-group has-icon has-label col-sm-6 no-pading-left">
                      <label>Your Pickup Location</label>
                      <input class="form-control alt geocomplete" type="text" name="adrs" id="adrs" placeholder="picked customer location address" value="'.Yii::app()->session['bookloc'].'" required>
                      <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>  
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group has-icon has-label">
                        <label>Picking Up Date</label>
                        <input type="text" class="form-control" id="pickhr" name="pickhr" placeholder="Picking Up Hour" value="'.Yii::app()->session['bookhour'].'" required>
                        <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                    </div>
                    </div>
					<div class="col-sm-6 no-pading-left">
                    <div class="form-group has-icon has-label">
                        <label>Picking Up Date</label>
                        <input type="text" class="form-control" id="picdate" name="picdate" placeholder="Picking Up Date" value="'.Yii::app()->session['picdate'].'" required>
                        <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                    </div>
                    </div>
                    <div class="col-sm-6 no-pading-right">
                        <div class="form-group has-icon has-label">
                            <label>Type of Vehicle</label>
                            <select class="form-control" name="variant" id="variant" required>
                                <option>Vehicle type</option>
                                <option>Car</option>
                                <option>Bike</option>
                            </select>
                        </div>
                </div>
            </div>
            </div>';
						}
						if(empty(Yii::app()->session['username']) && !isset(Yii::app()->session['bookloc']) && 
						!isset(Yii::app()->session['picdate']) && !isset(Yii::app()->session['bookhour']))
						{
							echo '<div class="col-md-6">
                <div class="page-header">
                    <div class="form-group has-icon has-label col-sm-12">
                      <label>&nbsp;</label>
                      <input class="form-control alt geocomplete" type="text" name="adrs" id="adrs" placeholder="picked customer location address" value="'.Yii::app()->session['bookloc'].'" required>
                      <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>  
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group has-icon has-label">
                        <label>&nbsp;</label>
                        <input type="text" class="form-control" id="picdate" name="picdate" placeholder="Picking Up Date" value="'.Yii::app()->session['picdate'].'" required>
                        <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group has-icon has-label">
                        <label>&nbsp;</label>
                        <input type="text" class="form-control" id="pickhr" name="pickhr" placeholder="Picking Up Hour" value="'.Yii::app()->session['bookhour'].'" required>
                        <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                    </div>
                    </div>
            </div>
            </div>';
						}
						else{
							
							echo '
                      <input class="form-control alt geocomplete" type="hidden" name="adrs" id="adrs" placeholder="picked customer location address" value="'.Yii::app()->session['bookloc'].'" required>
                     <input type="hidden" class="form-control" id="pickhr" name="pickhr" placeholder="Picking Up Hour" value="'.Yii::app()->session['bookhour'].'"
					 <input type="text" class="form-control" id="picdate" name="picdate" placeholder="Picking Up Date" value="'.Yii::app()->session['picdate'].'" required>
					 
					 ';
					 
						}
						
			
			?>
            
            <div class="col-md-6 text-right">
                <div class="page-header">
                    <h1>Book a Service</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Booking &amp; Payment</li>
                </ul>
            </div>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class="page-section with-sidebar sub-page">
            <div class="container">
                <div class="row">
				    <input type="hidden" name="makes_id" id="makes_id">
				    <input type="hidden" name="model_id" id="model_id">
				    <input type="hidden" name="servnm" id="servnm">
				    <input type="hidden" class="form-control alt"  name="location" id="location" placeholder="Enter Your Location">
                </div>
                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">
                    <form method="post" action="Bookingsevicedetails" enctype="multipart/form-data">
                    <div class="form-group has-icon has-label">
                        <h2>Vehicle Category</h2>
                        <div class="vehiclestype">
                            <div class="col-sm-6 text-center">
                                <a href="#addcar" class="active"><i aria-hidden="true" class="fa fa-car"></i>
                                <h2>Car</h2></a>
                            </div>
                            <div class="col-sm-6 text-center">
                                <a href="#addbike"><i aria-hidden="true" class="fa fa-motorcycle"></i>
                                <h2>Bike</h2></a>
                            </div>
                        </div>
                    </div>

                    <!-- Vehicle Category Car -->
                    <div id="addcar" class="vehicles">
						<?php
			if(empty(Yii::app()->session['username']))
						{
                           
                       echo '<div class="row">
                            <div class="col-sm-6">
                                    <div class="form-group has-icon has-label booksel">
                                    <label for="formSearchOffLocation3">Select Brand</label>
                                    <div id="carsbrand" class="wrapper-dropdown-3" tabindex="1">
									<span>Select The Car Brands</span>
									<ul class="dropdown scrollable-menu" id="carlist">';
										foreach($vmakelist as $vmake) {
																					//echo $vmake['makes_name'];

																			echo '<li id="'.$vmake['makes_id'].'" class="cl"><a href="#">'.$vmake['makes_name'].' <img src="'.Yii::app()->request->baseUrl.''.$vmake['logo_img'].'"></a></li>';
																			
																				}
									echo'</ul>
									<div class="form-control-icon"><i class="fa fa-sort-desc" aria-hidden="true"></i></div>
                                    </div>
                                    
                                    </div>
                                </div>
                            <div class="col-sm-6">
                                <div class="form-group has-icon has-label booksel">
                                    <label for="formSearchOffLocation3">Select Model</label>
                                    <div id="carsmodel" class="wrapper-dropdown-3" tabindex="1">
									<span id="span1">Select The Model</span>
									<ul class="dropdown scrollable-menu" id="modellist">
										
									</ul>
									<div class="form-control-icon"><i class="fa fa-sort-desc" aria-hidden="true"></i></div>
                                    </div>
                                    
                                </div>
                            </div>
                            </div>';
						}
						else if(!empty(Yii::app()->session['username']))
						{
							     echo '<div class="row">
                         
                            <div class="col-sm-6">
                                <div class="form-group has-icon has-label booksel">
                                    <label for="formSearchOffLocation3">Select Model</label>
                                    <div id="carsmodel" class="wrapper-dropdown-3" tabindex="1">
									<span id="span1">Select The Model</span>
									<ul class="dropdown scrollable-menu" id="modellist">';
									if(!empty($vmodel))
									{
										foreach($vmodel as $vmode) {
																					//echo $vmake['makes_name'];

																			echo '<li id="'.$vmode['models_id'].'" class="cl"><a href="#">'.$vmode['models_name'].' <img src="'.Yii::app()->request->baseUrl.''.$vmode['imgpath'].'"></a></li>';
																			
																				}
						     }
								echo'</ul>
									<div class="form-control-icon"><i class="fa fa-sort-desc" aria-hidden="true"></i></div>
                                    </div>
                                    
                                </div>
                            </div>
                            </div>';
						}
						?>                        
					    <div class="row">
                            <div class="col-md-12 bookingvhlc">
							 <div class="form-group">
                                <select id="carservices_sel" class="form-control services">
                                    <option>Select Services</option>
                                    <option value="general_serv">General</option>
                                    <option value="periodic_serv">Periodic</option>
                                    <option value="repair_serv">Repair Job</option>
                                    <option value="other_serv">Others</option>
                                    <option value="notsoure_serv">Not Sure</option>         
                                </select> 
                            </div>                         
                            </div>
                            <!-- General Service Code Start -->
                            <div id="general_serv" class="servicelist" style="display:none;">
                            <div id="general_servtab"> 
                                <ul  class="nav nav-pills">
                                    <li class="active"><a  href="#general_basic_plns" data-toggle="tab">Basic</a></li>
                                    <li><a href="#general_elite_plns" data-toggle="tab">Elite</a></li>
                                    <li><a href="#general_advanced_plns" data-toggle="tab">Advanced</a></li>
                                </ul>
                                <!-- Plans list tabs strat -->
                                <div class="tab-content clearfix">
                                <!-- Basic Plans list strat -->
                                    <div class="tab-pane active" id="general_basic_plns">
                                    <div class="row clear">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Lighting</h3>
                                        <ul class="list-check">
                                            <li>Head Lamp Check</li>
                                            <li>Tail Lamp Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Air Conditioning</h3>
                                        <ul class="list-check">
                                            <li>Compressor Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Battery</h3>
                                        <ul class="list-check">
                                            <li> Battery Water Topup</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Horns</h3>
                                        <ul class="list-check">
                                            <li>Horns Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Spark Plugs</h3>
                                        <ul class="list-check">
                                            <li>Spark Plugs Clean</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Instrument Clustor</h3>
                                        <ul class="list-check">
                                            <li>Instrument Clustor Check</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Oils &amp; fluids</h3>
                                        <ul class="list-check">
                                            <li>Coolant Topup</li>
                                            <li>Engine Oil Replace</li>
                                            <li>Grease Topup</li>
                                            <li>Wiper Fluid Topup</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Filters</h3>
                                        <ul class="list-check">
                                            <li>Air Filte Replace</li>
                                            <li>Engine Oil Filte Replace</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Clutch</h3>
                                            <ul class="list-check">
                                                <li>Clutch Plate</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="block-title">Steering</h3>
                                        <ul class="list-check">
                                            <li>Basic Steering Functionality Check</li>
                                            <li>Power Steering Check</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3 class="block-title">Spring</h3>
                                        <ul class="list-check">
                                            <li>Basic Ball Joints Functionality Check</li>
                                        </ul>
                                    </div>                                        
                                    <div class="col-md-4">
                                        <h3 class="block-title">Hydrulic Brakes</h3>
                                        <ul class="list-check">
                                            <li>Basic Brakes Functionality Check</li>
                                        </ul>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="block-title">Parking Brake</h3>
                                            <ul class="list-check">
                                                <li>Brake Lever Check</li>
                                            </ul>                                        
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Exterior Cleaning</h3>
                                            <ul class="list-check">
                                                <li>Body &amp; Polish Clean</li>
                                                <li>Bumpers Cleaning Clean</li>
                                                <li>Doors Cleaning Clean</li>
                                                <li>Windows Cleaning Clean</li>
                                                <li>Windsheild Cleaning</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Interior Cleaning</h3>
                                            <ul class="list-check">
                                                <li>Indoor Gates Cleaning</li>
                                                <li>Indoor Glass Cleaning</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="block-title">Under the hood cleaning</h3>
                                            <ul class="list-check">
                                                <li>Battery Terminal Corrosion Clean</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Wheel</h3>
                                            <ul class="list-check">
                                                <li>Alignment Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Mirrors</h3>
                                            <ul class="list-check">
                                                <li>ORVM Check</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="block-title">Locking</h3>
                                            <ul class="list-check">
                                                <li>Central Locking Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Wiring</h3>
                                            <ul class="list-check">
                                                <li>Harnessing Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Exterior Body</h3>
                                        <ul class="list-check">
                                            <li>Bumpers Check</li>
                                            <li>Door Handles Check</li>
                                            <li>Door Hinges Check</li>
                                            <li>Door Locking System Check</li>
                                            <li>Windsheild Check</li>
                                            <li>Wiper Check</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Interior Body</h3>
                                        <ul class="list-check">
                                            <li>Console Check</li>
                                            <li>Door Latch System Check</li>
                                            <li>Panels Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Denting / Painting</h3>
                                        <ul class="list-check">
                                            <li>Dent Check</li>
                                            <li>Full Body Paint Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Under the Hood Noice</h3>
                                        <ul class="list-check">
                                            <li>Belts &amp; Pulleys Noise Check</li>
                                            <li>Dead Battery Noise Check</li>
                                            <li>Hoses Noise Check</li>
                                            <li>Manifold Noise Check</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4">
                                        <h3 class="block-title">Under the Body Noice</h3>
                                        <ul class="list-check">
                                            <li>Brake Noise Check</li>
                                            <li>Exhaust System Noise Check</li>
                                            <li>Suspension Noise Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Outside the Car Noice</h3>
                                            <ul class="list-check">
                                                <li>Tyre &amp; Aerodynamic Noise</li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- End Basic Plans list strat -->

                                    <!-- Elite Plans list strat -->
                                    <div class="tab-pane" id="general_elite_plns">
                                        <div class="row clear">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Lighting</h3>
                                        <ul class="list-check">
                                            <li>Fog lamp Check</li>
                                            <li>Head Lamp Check</li>
                                            <li>Tail Lamp Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Air Conditioning</h3>
                                        <ul class="list-check">
                                            <li>Blower Check</li>
                                            <li>Compressor Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Starter</h3>
                                        <ul class="list-check">
                                            <li>Starter MotorC Heck</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Battery</h3>
                                        <ul class="list-check">
                                            <li>Battery Water Topup</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Horns</h3>
                                        <ul class="list-check">
                                            <li>Horns Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Spark Plugs</h3>
                                        <ul class="list-check">
                                            <li>Spark Plugs Clean</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="block-title">Instrument Clustor</h3>
                                        <ul class="list-check">
                                            <li>Instrument Clustor Check</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                    <h3 class="block-title">Oils &amp; fluids</h3>
                                    <ul class="list-check">
                                        <li>Brake Fluid Topup</li>
                                        <li>Engine Oil Replace</li>
                                        <li>Grease Topup</li>
                                        <li>Steering Fluid Topup</li>
                                        <li>Wiper Fluid Topup</li>
                                    </ul>
                                    </div>                                       
                                    <div class="col-md-4">
                                    <h3 class="block-title">Filters</h3>
                                    <ul class="list-check">
                                        <li>Air Filte Replace</li>
                                        <li>Engine Oil Filte Replace</li>
                                    </ul>
                                    </div>
                                    </div>
                                    <div class="row">                                    
                                    <div class="col-md-4">
                                        <h3 class="block-title">Belts</h3>
                                        <ul class="list-check">
                                            <li>AC Belt Check</li>
                                            <li>Power Steering Belt Check</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3 class="block-title">Clutch</h3>
                                        <ul class="list-check">
                                            <li>Clutch Plate Check</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3 class="block-title">Steering</h3>
                                        <ul class="list-check">
                                            <li>Basic Steering Functionality</li>
                                            <li>Power Steering Check</li>
                                        </ul>
                                    </div>
                                    </div>
                                    <div class="row">                                     
                                    <div class="col-md-4">
                                        <h3 class="block-title">Spring</h3>
                                        <ul class="list-check">
                                            <li>Basic Ball Joints Functionality Check</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3 class="block-title">Hydrulic Brakes</h3>
                                        <ul class="list-check">
                                            <li>Basic Brakes Functionality Check</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3 class="block-title">Parking Brake</h3>
                                        <ul class="list-check">
                                            <li>Brake Lever Check</li>
                                        </ul>
                                    </div>                                    
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="block-title">Exterior Cleaning</h3>
                                            <ul class="list-check">
                                                <li>Alloy Wheels Clean</li>
                                                <li>Body &amp; Polish Clean</li>
                                                <li>Body Cleaning Clean</li>
                                                <li>Bumpers Cleaning Clean</li>
                                                <li>Doors Cleaning Clean</li>
                                                <li>Windows Cleaning Clean</li>
                                                <li>Windsheild Cleaning</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Interior Cleaning</h3>
                                            <ul class="list-check">
                                                <li>AC Vents Cleaning Clean</li>
                                                <li>Car Seats Cleaning Clean</li>
                                                <li>Carpet Cleaning Clean</li>
                                                <li>Dashboard Polishing Clean</li>
                                                <li>Indoor Gates Cleaning</li>
                                                <li>Indoor Glass Cleaning</li>
                                                <li>Plastic Part Polish Clean</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Under the hood cleaning</h3>
                                            <ul class="list-check">
                                                <li>Battery Terminal Corrosion Clean</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h3 class="block-title">Wheel</h3>
                                            <ul class="list-check">
                                                <li>Alignment Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 class="block-title">Mirrors</h3>
                                            <ul class="list-check">
                                                <li>ORVM Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 class="block-title">Locking</h3>
                                            <ul class="list-check">
                                                <li>Central Locking Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 class="block-title">Wiring</h3>
                                            <ul class="list-check">
                                                <li>Harnessing Check</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="block-title">Tyre</h3>
                                            <ul class="list-check">
                                                <li>Rotation Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Exterior Body</h3>
                                        <ul class="list-check">
                                            <li>Bumpers Check</li>
                                            <li>Door Handles Check</li>
                                            <li>Door Hinges Check</li>
                                            <li>Door Locking System Check</li>
                                            <li>Windsheild Check</li>
                                            <li>Wiper Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Interior Body</h3>
                                        <ul class="list-check">
                                            <li>Console Check</li>
                                            <li>Door Latch System Check</li>
                                            <li>Panels Check</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Denting / Painting</h3>
                                        <ul class="list-check">
                                            <li>Dent Check</li>
                                            <li>Full Body Paint Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Under the Hood Noice</h3>
                                        <ul class="list-check">
                                            <li>Belts &amp; Pulleys Noise Check</li>
                                            <li>Dead Battery Noise Check</li>
                                            <li>Hoses Noise Check</li>
                                            <li>Manifold Noise Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Under the Body Noice</h3>
                                        <ul class="list-check">
                                            <li>Brake Noise Check</li>
                                            <li>Exhaust System Noise Check</li>
                                            <li>Suspension Noise Check</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="block-title">Outside the Car Noice</h3>
                                            <ul class="list-check">
                                                <li>Tyre &amp; Aerodynamic Noise</li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- End Elite Plans list strat -->

                                    <!-- Advanced Plans list strat -->
                                    <div class="tab-pane" id="general_advanced_plns">
                                        <div class="row clear">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Lighting</h3>
                                        <ul class="list-check">
                                            <li>Fog lamp Check</li>
                                            <li>Head Lamp Check</li>
                                            <li>Room Lamp Check</li>
                                            <li>Tail Lamp Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Air Conditioning</h3>
                                        <ul class="list-check">
                                            <li>Blower Check</li>
                                            <li>Compressor Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Air Starter</h3>
                                        <ul class="list-check">
                                            <li>Starter MotorC Heck</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Battery</h3>
                                        <ul class="list-check">
                                            <li>Battery Check</li>
                                            <li> Battery Water Topup</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Horns</h3>
                                        <ul class="list-check">
                                            <li>Horns Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Fuse</h3>
                                        <ul class="list-check">
                                            <li>Fuse Box Check</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Spark Plugs</h3>
                                        <ul class="list-check">
                                            <li>Spark Plugs Clean</li>
                                        </ul>
                                        <div class="row">
                                        <div class="col-md-12">
                                        <h3 class="block-title">Filters</h3>
                                        <ul class="list-check">
                                            <li>Air Filte Replace</li>
                                            <li>Cabin Air Filte Clean</li>
                                            <li>Engine Oil Filte Replace</li>
                                            <li>Fuel Filter Replace</li>
                                        </ul>
                                        </div>    
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Instrument Clustor</h3>
                                        <ul class="list-check">
                                            <li>Instrument Clustor Check</li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <h3 class="block-title">Belts</h3>
                                            <ul class="list-check">
                                                <li>AC Belt Check</li>
                                                <li>Power Steering Belt Check</li>
                                            </ul>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Oils &amp; fluids</h3>
                                        <ul class="list-check">
                                            <li>Brake Fluid Topup</li>
                                            <li>Coolant Topup</li>
                                            <li>Differential Fluid Topup</li>
                                            <li>Engine Oil Replace</li>
                                            <li>Grease Topup</li>
                                            <li>Lubricants Topup</li>
                                            <li>Steering Fluid Topup</li>
                                            <li>Transmission Oil Topup</li>
                                            <li>Wiper Fluid Topup</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="block-title">Spring</h3>
                                            <ul class="list-check">
                                                <li>Ball Joint Check</li>
                                                <li>Basic Ball Joints Functionality Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Hydrulic Brakes</h3>
                                            <ul class="list-check">
                                                <li>Basic Brakes Functionality Check</li>
                                                <li>Brake Master Cylinder Check</li>
                                                <li>Brake Pump Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Drum Brakes</h3>
                                            <ul class="list-check">
                                                <li>Brake Shoes Check</li>
                                                <li>Drums Check</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="block-title">Parking Brake</h3>
                                            <ul class="list-check">
                                                <li>Brake Lever Check</li>
                                            </ul>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="block-title">Under the hood cleaning</h3>
                                                <ul class="list-check">
                                                    <li>Battery Terminal Corrosion Clean</li>
                                                    <li>Engine Decarbourising Clean</li>
                                                    <li>Engine Flushing Clean</li>
                                                    <li>Fuel System Cleaning</li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Exterior Cleaning</h3>
                                            <ul class="list-check">
                                                <li>Alloy Wheels Clean</li>
                                                <li>Body &amp; Polish Clean</li>
                                                <li>Body Cleaning Clean</li>
                                                <li>Bumpers Cleaning Clean</li>
                                                <li>Doors Cleaning Clean</li>
                                                <li>Tyre Wash &amp; Polish Clean</li>
                                                <li>Windows Cleaning Clean</li>
                                                <li>Windsheild Cleaning</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Interior Cleaning</h3>
                                            <ul class="list-check">
                                                <li>AC Vents Cleaning Clean</li>
                                                <li>Car Seats Cleaning Clean</li>
                                                <li>Carpet Cleaning Clean</li>
                                                <li>Dashboard Polishing Clean</li>
                                                <li>Indoor Gates Cleaning</li>
                                                <li>Indoor Glass Cleaning</li>
                                                <li>Plastic Part Polish Clean</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="block-title">Mileage Improvement Treatment Repair</h3>
                                            <ul class="list-check">
                                                <li>Radiator Flushing Clean</li>
                                                <li>Under the car Cleaning</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 class="block-title">Wheel</h3>
                                            <ul class="list-check">
                                                <li>Alignment Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 class="block-title">Mirrors</h3>
                                            <ul class="list-check">
                                                <li>ORVM Check</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h3 class="block-title">Locking</h3>
                                            <ul class="list-check">
                                                <li>Central Locking Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 class="block-title">Wiring</h3>
                                            <ul class="list-check">
                                                <li>Harnessing Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 class="block-title">Exhaust System</h3>
                                            <ul class="list-check">
                                                <li>Muffler Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 class="block-title">Tyre</h3>
                                            <ul class="list-check">
                                                <li>Rotation Check</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Exterior Body</h3>
                                        <ul class="list-check">
                                            <li>Bumpers Check</li>
                                            <li>Door Handles Check</li>
                                            <li>Door Hinges Check</li>
                                            <li>Door Locking System Check</li>
                                            <li>Windsheild Check</li>
                                            <li>Wiper Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Interior Body</h3>
                                        <ul class="list-check">
                                            <li>Console Check</li>
                                            <li>Door Latch System Check</li>
                                            <li>Panels Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Denting / Painting</h3>
                                        <ul class="list-check">
                                            <li>Dent Check</li>
                                            <li>Full Body Paint Check</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Under the Hood Noice</h3>
                                        <ul class="list-check">
                                            <li>Belts &amp; Pulleys Noise Check</li>
                                            <li>Dead Battery Noise Check</li>
                                            <li>Hoses Noise Check</li>
                                            <li>Manifold Noise Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Under the Body Noice</h3>
                                        <ul class="list-check">
                                            <li>Brake Noise Check</li>
                                            <li>Exhaust System Noise Check</li>
                                            <li>Suspension Noise Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Outside the Car Noice</h3>
                                            <ul class="list-check">
                                                <li>Tyre &amp; Aerodynamic Noise</li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- End Advanced Plans list strat -->   
                            </div>
                            <div class="bottomservice-btn overflowed reservation-now">
                            <!-- <div class="checkbox pull-left">
                                <input id="checkboxa1" type="checkbox">
                                <label for="checkboxa1">I accept all information and Payments etc</label>
                            </div> -->
                           <!-- <a class="btn btn-theme pull-right" href="#">Book a Service</a>-->
                             <a class="btn btn-theme pull-right btn-theme-dark" href="#">Cancel</a>

                            <!-- <input type="submit" name="books" id="books" value="Book a Service" class="btn btn-theme pull-right"> -->

                            <a class = "btn btn-theme pull-right" data-toggle = "modal" data-target = "#signup-model">Book a Service</a>
                          
                        </div> 
                            <!-- End Plans list tabs strat -->
                            </div>
                            </div>
                            <!-- Periodic Service Code -->
                            <div id="periodic_serv" class="servicelist" style="display:none;">
                                <div class="col-md-12">
                                <div class="form-group">
                                <select class="form-control" id="periodic_list">
                                    <option>Select Kms</option>
                                    <option value="periodic_list1">1000</option>
                                    <option value="periodic_list2">5000</option>
                                    <option value="periodic_list3">10000</option>
                                    <option value="periodic_list4">20000</option>
                                    <option value="periodic_list5">30000</option>
                                    <option value="periodic_list6">40000</option>
                                    <option value="periodic_list7">50000</option>
                                    <option value="periodic_list8">60000 +</option>         
                                </select> 
                            </div>
                            </div>
                            <div id="periodic_list1" class="periodic-services" style="display:none;">
                            <div class="col-md-12">
                                <div class="row clear">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Lighting</h3>
                                        <ul class="list-check">
                                            <li>Head Lamp Check</li>
                                            <li>Tail Lamp Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Air Conditioning</h3>
                                        <ul class="list-check">
                                            <li>Compressor Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Battery</h3>
                                        <ul class="list-check">
                                            <li> Battery Water Topup</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Horns</h3>
                                        <ul class="list-check">
                                            <li>Horns Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Spark Plugs</h3>
                                        <ul class="list-check">
                                            <li>Spark Plugs Clean</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Instrument Clustor</h3>
                                        <ul class="list-check">
                                            <li>Instrument Clustor Check</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Oils &amp; fluids</h3>
                                        <ul class="list-check">
                                            <li>Coolant Topup</li>
                                            <li>Engine Oil Replace</li>
                                            <li>Grease Topup</li>
                                            <li>Wiper Fluid Topup</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Filters</h3>
                                        <ul class="list-check">
                                            <li>Air Filte Replace</li>
                                            <li>Engine Oil Filte Replace</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Clutch</h3>
                                            <ul class="list-check">
                                                <li>Clutch Plate</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="block-title">Steering</h3>
                                        <ul class="list-check">
                                            <li>Basic Steering Functionality Check</li>
                                            <li>Power Steering Check</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3 class="block-title">Spring</h3>
                                        <ul class="list-check">
                                            <li>Basic Ball Joints Functionality Check</li>
                                        </ul>
                                    </div>                                        
                                    <div class="col-md-4">
                                        <h3 class="block-title">Hydrulic Brakes</h3>
                                        <ul class="list-check">
                                            <li>Basic Brakes Functionality Check</li>
                                        </ul>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="block-title">Parking Brake</h3>
                                            <ul class="list-check">
                                                <li>Brake Lever Check</li>
                                            </ul>                                        
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Exterior Cleaning</h3>
                                            <ul class="list-check">
                                                <li>Body &amp; Polish Clean</li>
                                                <li>Bumpers Cleaning Clean</li>
                                                <li>Doors Cleaning Clean</li>
                                                <li>Windows Cleaning Clean</li>
                                                <li>Windsheild Cleaning</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Interior Cleaning</h3>
                                            <ul class="list-check">
                                                <li>Indoor Gates Cleaning</li>
                                                <li>Indoor Glass Cleaning</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="block-title">Under the hood cleaning</h3>
                                            <ul class="list-check">
                                                <li>Battery Terminal Corrosion Clean</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Wheel</h3>
                                            <ul class="list-check">
                                                <li>Alignment Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Mirrors</h3>
                                            <ul class="list-check">
                                                <li>ORVM Check</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="block-title">Locking</h3>
                                            <ul class="list-check">
                                                <li>Central Locking Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Wiring</h3>
                                            <ul class="list-check">
                                                <li>Harnessing Check</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Exterior Body</h3>
                                        <ul class="list-check">
                                            <li>Bumpers Check</li>
                                            <li>Door Handles Check</li>
                                            <li>Door Hinges Check</li>
                                            <li>Door Locking System Check</li>
                                            <li>Windsheild Check</li>
                                            <li>Wiper Check</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        <h3 class="block-title">Interior Body</h3>
                                        <ul class="list-check">
                                            <li>Console Check</li>
                                            <li>Door Latch System Check</li>
                                            <li>Panels Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Denting / Painting</h3>
                                        <ul class="list-check">
                                            <li>Dent Check</li>
                                            <li>Full Body Paint Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                        <h3 class="block-title">Under the Hood Noice</h3>
                                        <ul class="list-check">
                                            <li>Belts &amp; Pulleys Noise Check</li>
                                            <li>Dead Battery Noise Check</li>
                                            <li>Hoses Noise Check</li>
                                            <li>Manifold Noise Check</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-4">
                                        <h3 class="block-title">Under the Body Noice</h3>
                                        <ul class="list-check">
                                            <li>Brake Noise Check</li>
                                            <li>Exhaust System Noise Check</li>
                                            <li>Suspension Noise Check</li>
                                        </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="block-title">Outside the Car Noice</h3>
                                            <ul class="list-check">
                                                <li>Tyre &amp; Aerodynamic Noise</li>
                                            </ul>
                                        </div>
                                        </div>
                            </div>
                            </div>    
                            </div>
                            <!-- Repair Job Service Code -->
                            <div id="repair_serv" class="servicelist" style="display:none;">
                                Repair Job
                            </div>
                            <!-- Others Service Code -->
                            <div id="other_serv" class="servicelist" style="display:none;">
                                Others
                            </div>
                            <!-- Not source Service Code -->
                            <div id="notsoure_serv" class="col-md-12 servicelist" style="display:none;">
                                    <div class="form-group">
                                    <textarea class="form-control alt" placeholder="Addıtıonal Informatıon" name="addinfo" id="addinfo" cols="30" rows="10" style="height:120px;"></textarea></div>
                                    <h3 class="block-title alt describe">Describe More</h3>
                                    <div class="form-group">
                                        <div class="text-right"><i class="fa fa-headphones" aria-hidden="true"></i> | 
                                        <i class="fa fa-video-camera" aria-hidden="true"></i></div>
                                        <input type="file" name="vefinfo" id="vefinfo" class="form-control">
                                    </div>  
                            </div>                           
                            </div>
                            </div>
                         <!-- End Vehicle Category Car -->

                         <!-- Vehicle Category Bike -->
                            <div id="addbike" class="vehicles">
                                Bike
                            </div>
                         <!-- End Vehicle Category Bike -->
	<?php
			if(empty(Yii::app()->session['username']))
						{
                           
                      echo '<!-- <h3 class="block-title alt">Customer Information</h3>
                       
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="radio radio-inline">
                                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                        <label for="inlineRadio1">Mr</label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <input type="radio" id="inlineRadio2" value="option1" name="radioInline">
                                        <label for="inlineRadio2">Ms</label>
                                    </div>
                                </div>
                               <div class="col-md-6">
                                    <div class="form-group"><input class="form-control alt" type="text" name="uname" id="uname" placeholder="Name:*" required></div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-group"><input class="form-control alt" type="text" name="emailId" id="emailId" placeholder="Your Email Address:*" required></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-icon has-label">
                                        <input type="text" class="form-control alt" id="mobNo" name="mobNo" placeholder="Mobile Number:" maxlength="10" required>
                                    </div>
                                </div>
								
								<div class="col-md-12"><h3 class="block-title alt">Create Account</h3></div>
                                <div class="col-md-12">
                                    <div class="form-group"><input class="form-control alt" type="text" name="Usernmame" id="Usernmame"  placeholder="Enter User Name:*" required></div>
								</div>
								<div class="col-md-12">
									<div class="form-group"><input class="form-control alt" type="password" name="upwd" id="upwd" placeholder="Enter Password:" required></div>
                                </div>
                                <div class="col-md-12">
									<div class="form-group"><input class="form-control alt" type="password" name="cpwd" id="cpwd" placeholder="Enter Confirm Password:" required></div>
                                </div>
                            </div> -->
                       ';
						}?>
                    </form>
                    </div>
                    <!-- /CONTENT -->

                    <!-- SIDEBAR -->
                    <aside class="col-md-3 sidebar" id="sidebar">
                    <!-- widget Vehicle Servicing Details -->
                        <div class="widget shadow widget-helping-center estimate-widget">
                            <h4 class="widget-title">Vehicle Servicing</h4>
                            <div class="widget-content">
                                <h5>Type of Service</h5>
                                <ul>
                                    <li>oil Service</li>
                                    <li>Washing<li>
                                    <li>General Service<li>
                                </ul>
                                <h5>Estimated Hour</h5>
                                <span><?php echo Yii::app()->session['bookhour'];?></span>
                                <h5>Estimated Amount</h5>
                                <span>2000.00</span>
                            </div>
                        </div>
                        <!-- widget testimonials -->
                        <div class="widget shadow">
                            <div class="widget-title">Testimonials</div>
                            <div class="testimonials-carousel">
                                <div class="owl-carousel" id="testimonials">
                                    <div class="testimonial">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                                                <div class="testimonial-name">John Doe <span class="testimonial-position">Co- founder at Rent It</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                                                <div class="testimonial-name">John Doe <span class="testimonial-position">Co- founder at Rent It</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                                                <div class="testimonial-name">John Doe <span class="testimonial-position">Co- founder at Rent It</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /widget testimonials -->
                        <!-- widget helping center -->
                        <div class="widget shadow widget-helping-center">
                            <h4 class="widget-title">Helping Center</h4>
                            <div class="widget-content">
                                <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>
                                <h5 class="widget-title-sub">+90 555 444 66 33</h5>
                                <p><a href="mailto:support@supportcenter.com">support@supportcenter.com</a></p>
                                <div class="button">
                                    <a href="#" class="btn btn-block btn-theme btn-theme-dark">Support Center</a>
                                </div>
                            </div>
                        </div>
                        <!-- /widget helping center -->
                    </aside>
                    <!-- /SIDEBAR -->

                </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->

        <!-- PAGE -->
        <section class="page-section contact dark">
            <div class="container">

                <!-- Get in touch -->

                <h2 class="section-title">
                    <small>Feel Free to Say Hello!</small>
                    <span>Get in Touch With Us</span>
                </h2>

                <div class="row">
                    <div class="col-md-6">
                        <!-- Contact form -->
                        <form name="contact-form" method="post" action="#" class="contact-form alt" id="contact-form">

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="outer required">
                                        <div class="form-group af-inner has-icon">
                                            <label class="sr-only" for="name">Name</label>
                                            <input
                                                    type="text" name="name" id="name" placeholder="Name" value="" size="30"
                                                    data-toggle="tooltip" title="Name is required"
                                                    class="form-control placeholder"/>
                                            <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="outer required">
                                        <div class="form-group af-inner has-icon">
                                            <label class="sr-only" for="email">Email</label>
                                            <input
                                                    type="text" name="email" id="email" placeholder="Email" value="" size="30"
                                                    data-toggle="tooltip" title="Email is required"
                                                    class="form-control placeholder"/>
                                            <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                        </div>
                                    </div>

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
                                    <input type="submit" name="submit" class="form-button form-button-submit btn btn-block btn-theme" id="submit_btn" value="Send message" />
                                </div>
                            </div>

                       
                        <!-- /Contact form -->
                    </div>
                    <div class="col-md-6">

                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>

                        <ul class="media-list contact-list">
                            <li class="media">
                                <div class="media-left"><i class="fa fa-home"></i></div>
                                <div class="media-body">Adress: 1600 Pennsylvania Ave NW, Washington, D.C.</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><i class="fa fa"></i></div>
                                <div class="media-body">DC 20500, ABD</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><i class="fa fa-phone"></i></div>
                                <div class="media-body">Support Phone: 01865 339665</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><i class="fa fa-envelope"></i></div>
                                <div class="media-body">E mails: info@example.com</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><i class="fa fa-clock-o"></i></div>
                                <div class="media-body">Working Hours: 09:30-21:00 except on Sundays</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><i class="fa fa-map-marker"></i></div>
                                <div class="media-body">View on The Map</div>
                            </li>
                        </ul>

                    </div>
                </div>

                <!-- /Get in touch -->

            </div>
        </section>
        <!-- /PAGE -->

<!-- Registration Sign up Modal -->
<div class = "customer-signup modal fade" id = "signup-model" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content pull-left">
      <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;</button>       
         <div class = "modal-body pull-left">
            <div class="aside-signup col-md-4">
                <h3 class="block-title">Signup Today and You'll be able to</h3>
                    <ul class="list-check">
                        <li>Online Order Status</li>
                        <li>See Ready Hot Deals</li>
                        <li>Love List</li>
                        <li>Sign up to receive exclusive news and private sales</li>
                        <li>Quick Buy Stuffs</li>
                    </ul>
            </div>
            <div class="col-md-8">
                <ul id = "myTab" class = "nav nav-tabs">
                    <li class = "active">
                        <a href = "#logintab" data-toggle = "tab">Login</a>
                    </li>
                    <li>
                        <a href = "#signuptab" data-toggle = "tab">Sign Up</a>
                    </li>   
                </ul>

                <div id = "myTabContent" class = "tab-content">
                   <div class = "tab-pane fade in active" id = "logintab">
                      <div class="col-sm-12">
                        <form method="post" class="form-login" action="loginuser">
                                <div class="col-md-12">
                                    <div class="form-group"><input class="form-control" type="text" name="uname" id="uname" placeholder="User name or email"></div>
                                </div>                               
                                <div class="col-md-12">
                                    <div class="form-group"><input class="form-control" type="password" name="password" id="password" placeholder="Enter Password"></div>
                                </div>
                                <div class="bottomservice-btn overflowed reservation-now col-md-12 col-lg-6">
                                    <div class="checkbox pull-left">
                                        <input type="checkbox" name="remember" id="checkboxa1">
                                        <label for="checkboxa1">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 text-right-lg">
                                    <a href="#" class="forgot-password">forgot password?</a>
                                </div>
                                <div class="col-md-12 text-center"><input type="submit" value="Login" id="btnsub" name="btnsub" class="col-md-12 btn btn-theme"></div>
                                <div class="col-md-6 mrg-top-20">
                                    <a href="#" class="btn btn-theme btn-block btn-icon-left facebook"><i class="fa fa-facebook"></i>Login with Facebook</a>
                                </div>
                                <div class="col-md-6 mrg-top-20">
                                    <a href="#" class="btn btn-theme btn-block btn-icon-left google"><i class="fa fa-google-plus" aria-hidden="true"></i>Login with Google</a>
                                </div>                                
                                
                        </form>
                    </div>
                   </div>                   
                   <div class = "tab-pane fade" id = "signuptab">
                    <div class="col-md-12">
                        <div class="form-group"><input class="form-control alt" type="text" name="Usernmame" id="Usernmame"  placeholder="Enter Email*" required></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><input class="form-control alt" type="text" name="uname" id="uname" placeholder="Name" required></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-icon has-label">
                            <input type="text" class="form-control alt" id="mobNo" name="mobNo" placeholder="Enter Mobile Number*" maxlength="10" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><input class="form-control alt" type="password" name="upwd" id="upwd" placeholder="Enter Password*" required></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><input class="form-control alt" type="password" name="cpwd" id="cpwd" placeholder="Enter Confirm Password*" required></div>
                        <div class="col-md-6">                    
                    </div>
                   </div>
                   <div class="col-md-12 text-center"><input type="submit" value="Create Account" id="btnsub" name="btnsub" class="col-md-12 btn btn-theme"></div>
                   <div class="col-md-6 mrg-top-20">
                        <a href="#" class="btn btn-theme btn-block btn-icon-left facebook"><i class="fa fa-facebook"></i>Sign in with Facebook</a>
                    </div>
                    <div class="col-md-6 mrg-top-20">
                        <a href="#" class="btn btn-theme btn-block btn-icon-left google"><i class="fa fa-google-plus" aria-hidden="true"></i>Sign in with Google</a>
                    </div>
                   </div>
            </div>
         </div>
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  
</div><!-- /.Registration Sign up Modal -->
</div>
		
<script type="text/javascript">
//vehicle category code
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
                $content.fadeOut(300, function()
                                 {
                                     $active = $(c);
                                     $content = $($(c).attr('href'));
                                     
                                     $active.addClass('active');
                                     $content.fadeIn(300);
                                 });
                e.preventDefault();
            });
        });
    // services selct options
    $('#carservices_sel').change(function(){
            $('.servicelist').hide();
            $('#' + $(this).val()).show();
        });
    $('#periodic_list').change(function(){
            $('.periodic-services').hide();
            $('#' + $(this).val()).show();
        });
</script>

<script src="<?php echo Yii::app()->baseUrl; ?>/assets/js/dropdownscript.js"></script>
