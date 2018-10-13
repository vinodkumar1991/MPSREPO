<?php

?>
<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/assets/js/dist/locationpicker.jquery.min.js"></script>
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
		
		$('#btnsub').click(function()
		{
			
			carservices_sel=$('#bikeservices_sel').val();
			
			if(carservices_sel=='general')
			{
					 
			}
			else if(carservices_sel=='repairJob')
			{
				
					value=$('#valrep3').val();
					uname=$('#uname').val();
					model_id=$('#model_id').val();
					makes_id=$('#makes_id').val();
					$.post('Updateuserpackage',{
							  uname:uname,
							  value:value,
							  model_id:model_id,
							  makes_id:makes_id,
							  
							 
					 },
						 function(data)
						 {
						//alert(data);
						 if(data==1)
						{
							$("#loginerror").html('<font color=red>Invalid username and password</font>');
						}
						else
						{
							window.location="AddVehicle";
						} 
						 }); 
			}
			else
			{
			// model_id=$("#model_id").val();
					var uname= $("#uname").val();
					var password= $("#password").val();
					
					var makes_id= $("#makes_id").val();
					var model_id= $("#model_id").val();
					var pickadrs= $("#adrs").val();
					var picdate= $("#picdate").val();
					
					var pickhr= $("#pickhr").val(); 
					var amount= $("#amount").val(); 
			
					var packageid= $("#package").val(); 
			
			 $.post('loginuser',{
							  uname:uname,
							  password:password,
							  pickadrs:pickadrs,
							  picdate:picdate,
							  pickhr:pickhr,
							  makes_id:makes_id,
							  model_id:model_id, 
							  amount:amount,
							  packageid:packageid,
							  
							 
					},
						 function(data)
						 {
						//alert(data);
						if(data==1)
						{
							$("#loginerror").html('<font color=red>Invalid username and password</font>');
						}
						else
						{
							window.location="AddVehicle";
						}
						 });  
			}
		});
	
	$('#bikelist li').click(function() {
    
       var vmakeid = $(this).attr('id');
	  $('#make_id').val(vmakeid);
				$.post('FetchBikeModels',{
						makeid:vmakeid,
					},
					function(data)
					{
						$("#modellist").html(data);
						
						
							
					});
			
   });
   
   
   $("#modellist").on('click','li',function (){
	   var modelid = $(this).attr('id');
	   $('#model_id').val(modelid);
	   	text1=$(this).text();
						$('#span1').text(text1);
	   $.post('FetchbikemodelImage',{
						
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
//-----------------------------------------------
$('#bikeservices_sel').change(function(){
		carservices_sel=$('#bikeservices_sel').val();
		
	if(carservices_sel=='general')
	{
		model_id=$('#model_id').val();
	 
		  $.post('FetchBikegenServiceDetails',{
						model_id:model_id
					},
					function(data)
					{
						alert(data);
						datas=data.split('**');
						 $('#generaljob').html(datas[0]);
						 $('#estamt').html('Rs.'+datas[1]);
						 $("#typeservice").html("General Service");
					
							
					}); 
	}
	else if(carservices_sel=='repairJob')
	{
		  model_id=$('#model_id').val();
		  $.post('FetchBikerepairServiceDetails',{
						model_id:model_id
					},
					function(data)
					{
						
						  datas=data.split('**');
						 // alert(datas[0]);
						 $('#generaljob').html(datas[0]);
						  $('#amount').html("Rs."+datas[1]);
						/* $("#typeservice").html("Repair Job");   */
							
					}); 
	}
	

            $('.servicelist').hide();
            $('#' + $(this).val()).show();
        });
		
		
   //---------------------
   
      
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
 <input type="hidden" name="make_id" id="makes_id">
				    <input type="hidden" name="model_id" id="model_id">
<input type="hidden" name="amount" id="amount"/>
<input type="hidden" name="package" id="package"/>

<div class = "customer-signup modal fade" id = "signup-model" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content pull-left">
      <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;</button>       
         <div class = "modal-body pull-left">
            <div class="aside-signup col-md-4">
                <h3 class="block-title">Signup Today and You will be able to</h3>
                    <ul class="list-check">
                        <li>Online Order Status</li>
                        <li>See Ready Hot Deals</li>
                        <li>Love List</li>
                        <li>Sign up to receive exclusive news and private sales</li>
                        <li>Quick Buy Stuffs</li>
                    </ul>
            </div><div class="col-md-8">
                <ul id = "myTab" class = "nav nav-tabs">
                    <li class = "active">
                        <a href = "#logintab" data-toggle = "tab">Login</a>
                    </li>
                    <li>
                        <a href = "#signuptab" data-toggle = "tab">Sign Up</a>
                    </li>   
                </ul>

				
				<!---login block-->
				<div id = "myTabContent" class = "tab-content">
                   <div class = "tab-pane fade in active" id = "logintab">
                      <div class="col-sm-12">
                        
						<input type="hidden" name="makes_idd" id="makes_idd">
				    <input type="hidden" name="model_idd" id="model_idd">
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
                                <div class="col-md-12 text-center">
								
								<div id="loginerror"></div>
								<input type="submit" value="Login" id="btnsub" name="btnsub" class="col-md-12 btn btn-theme"></div>
                                <div class="col-md-6 mrg-top-20">
                                    <a href="#" class="btn btn-theme btn-block btn-icon-left facebook"><i class="fa fa-facebook"></i>Login with Facebook</a>
                                </div>
                                <div class="col-md-6 mrg-top-20">
                                    <a href="#" class="btn btn-theme btn-block btn-icon-left google"><i class="fa fa-google-plus" aria-hidden="true"></i>Login with Google</a>
                                </div>                                
                                
                        
                    </div>
                   </div>                   
                   <div class = "tab-pane fade" id = "signuptab">
				 
                    <div class="col-md-12">
                        <div class="form-group"><input class="form-control alt" type="text" name="regemail" id="regemail"  placeholder="Enter Email*" required></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><input class="form-control alt" type="text" name="reguname" id="reguname" placeholder="Name" required></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-icon has-label">
                            <input type="text" class="form-control alt" id="regmobNo" name="regmobNo" placeholder="Enter Mobile Number*" maxlength="10" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><input class="form-control alt" type="password" name="regupwd" id="regupwd" placeholder="Enter Password*" required></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><input class="form-control alt" type="password" name="cpwd" id="cpwd" placeholder="Enter Confirm Password*" required></div>
                        <div class="col-md-6">                    
                    </div>
                   </div>
				  
                   <div class="col-md-12 text-center"><input type="button" value="Create Account" id="register1" name="register1" class="col-md-12 btn btn-theme"></div>
                   <div class="col-md-6 mrg-top-20">
				   <div id="emailerror">dfggsdg</div>
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

<!-- BREADCRUMBS -->
 <form method="post" action="Bookingsevicedetails" enctype="multipart/form-data">
        <section class="bookservice-main page-section breadcrumbs">
            <div class="container">
            <div class="col-md-6">
                <div class="page-header">
                    <div class="form-group has-icon has-label col-sm-12">
                      <label>&nbsp;</label>
                     <input class="form-control alt geocomplete" type="text" name="adrs" id="adrs" placeholder="picked customer location address" value="" required>
                      <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>  
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group has-icon has-label">
                        <label>&nbsp;</label>
                        <input type="text" class="form-control" id="picdate" name="picdate" placeholder="Picking Up Date" value="" required>
                        <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group has-icon has-label">
                        <label>&nbsp;</label>
                        <input type="text" class="form-control" id="pickhr" name="pickhr" placeholder="Picking Up Hour" value="" required>
                        <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                    </div>
                    </div>
            </div>
            </div>            
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
                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">
                   
                    <div class="form-group has-icon has-label">
                        <h2 class="vhls-title">Vehicle Category</h2>
                        <div class="vehiclestype">
                            <div class="col-sm-6 text-center">
                                <a href="<?php echo $this->createUrl('mPSVEHICLES_DETAILS/Booking');?>"><i aria-hidden="true" class="fa fa-car"></i>
                                <h2>Car</h2></a>
                            </div>
                            <div class="col-sm-6 text-center">
                                <a href="#addbike" class="active"><i aria-hidden="true" class="fa fa-motorcycle"></i>
                                <h2>Bike</h2></a>
                            </div>
                        </div>
                    </div>

                    <!-- Vehicle Category Bike -->
                    <div id="addbike" class="vehicles">
                    <div class="row">
                    <div class="col-sm-4">
                                    <div class="form-group has-icon has-label booksel">
                                    <label for="formSearchOffLocation3">Select Brand</label>
                                    <div id="carsbrand" class="wrapper-dropdown-3" tabindex="1">
									<span>Select The Car Brands</span>
									<ul class="dropdown scrollable-menu" id="bikelist" require>
										<?php
										
										 foreach($bikebrands as $bikemakes) {
																					//echo $vmake['makes_name'];

																			echo '<li id="'.$bikemakes['brand_id'].'" class="cl">
																			<a href="#">'.$bikemakes['brand_name'].'
																			<img src="http://metrepersecond.com/MPS'.$bikemakes['brand_logo_path'].'"></a></li>';
																			
																				}
										?>
									</ul>
									<div class="form-control-icon"><i class="fa fa-sort-desc" aria-hidden="true"></i></div>
                                    </div>
                                    
                                    </div>
                                </div>
                            <div class="col-sm-4">
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
                            <div class="col-sm-4 bookingvhlc">                                    
							 <div class="form-group has-icon has-label booksel">
							 <label for="formSearchOffLocation3">Select Service</label>
                                <select id="bikeservices_sel" class="form-control services">
                                    <option>Select Services</option>
                                    <option value="general">General</option>
                                    <option value="repairJob">RepairJob</option>
                                        
                                </select> 
                            </div>                         
                            </div>
                            </div>
                            <!-- General Service Code Start -->
                            <div class="row">
                            <div class="tab-content clearfix">
                                    <br/><br/>
                                      <div id="generaljob"></div>                                 
                                 
								   </div>
                           <div class="bottomservice-btn overflowed reservation-now">
								<a class="btn btn-theme pull-right btn-theme-dark" href="#">Cancel</a>
								<a class="btn btn-theme pull-right" id="btnsub1" data-toggle = "modal" data-target="#signup-model">Book a Service</a>
							</div> 
									</div>
									</div>
							</form>
                      
                    </div>
                    <!-- /CONTENT -->

                    <!-- SIDEBAR -->
                    <aside class="col-md-3 sidebar" id="sidebar">
                    <!-- widget Vehicle Servicing Details -->
                        <div class="widget shadow widget-helping-center estimate-widget">
                            <h4 class="widget-title">Vehicle Servicing</h4>
                            <div class="widget-content">
                             <div class="aside-vhls-dtls">                            
	                           	<div id="carimg"></div>
	                        <span class="brnd-name" id="brand"></span><br>
	                        <span class="mdl-name" id="model"></span>
                            </div>
                            <div class="aside-srvs-dtls">
                                <h5>Type of Service</h5>
								<div id="typeserve">
									<div id="typeservice">
								</div>
							</div>
                            <div class="aside-hour-dtls">
                            	<h5>Estimated Hour</h5>
								<div id="esthour" class="est-hour">
									<i class="fa fa-clock-o" aria-hidden="true"></i> 00:00:00</div>
							</div>
							<div class="aside-amt-dtls">
                                <h5>Estimated Amount</h5>
                               	<div id="estamt" class="est-amount">
                               		<i class="fa fa-inr" aria-hidden="true"></i> 1000.00
                               	</div>
                            </div>								
                            </div>
                        </div>
                        
                        <!-- widget helping center -->
                        <div class="widget shadow widget-helping-center">
                            <h4 class="widget-title">Helping Center</h4>
                            <div class="widget-content">
                                <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>
                                <h5 class="widget-title-sub">+91 999 666 44 44</h5>
                                <p><a href="mailto:support@supportcenter.com">support@supportcenter.com</a></p>
                            </div>
                        </div>
                        <!-- /widget helping center -->
                    </aside>
                    <!-- /SIDEBAR -->

                </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->
			
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
    
</script>

<script src="<?php echo Yii::app()->baseUrl; ?>/assets/js/dropdownscript.js"></script>
