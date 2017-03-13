<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->



<?php
	$host = db;
	$port = 5432;
	$db = 'woodymarket';
	$username = 'woodytoys';
	$password = 'superwoody';
	$dbstatus = "";

	try {
		$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;user=$username;password=$password");

		if ($pdo) {
			echo "ok";
			$dbstatus =
				"<p>Connecté avec succès à la base de données<strong>postgresql</strong>.<br />
				Powered with Docker.</p>";
		} else {
			echo "pas ok";
			$dbstatus =
				"<p>Non Connecté à la base de données<strong>postgresql</strong>.<br />
				Problème de configuration ?</p>";
		}

		$pdo->closeCursor();

	} catch (PDOException $e) {
		echo $e->getMessage();
	}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Woodytoys - Marketplace</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500,900' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	<script type="text/javascript" src="js/jquery.fancybox-media.js"></script>	
</head>
<body>
  <div class="header" id="home">
  	  <div class="header_top">
	   <div class="wrap">
		 	     <div class="logo">
						<a href="index.html">Woodytoys</a>
					</div>	
						<div class="menu">
						    <ul>
						    	<li><a href="#home" class="scroll">Home</a></li>
								<li><a href="#features" class="scroll">Features</a></li>
								<li><a class="popup-with-zoom-anim" href="#small-dialog">Pricing</a></li>
								<li><a href="#dashboard" class="scroll">Examples</a></li>
								<li><a href="#customers" class="scroll">Support</a></li>				    
								<li class="login" >
									<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
						                <div id="loginBox">                
						                    <form id="loginForm">
						                        <fieldset id="body">
						                            <fieldset>
						                                <label for="email">Email Address</label>
						                                <input type="text" name="email" id="email">
						                            </fieldset>
						                            <fieldset>
						                                <label for="password">Password</label>
						                                <input type="password" name="password" id="password">
						                            </fieldset>
						                            <input type="submit" id="login" value="Sign in">
						                            <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						                        </fieldset>
						                        <span><a href="#">Forgot your password?</a></span>
						                    </form>
						                </div>
						               </div>
								   </li>
								<div class="clear"></div>
							</ul>
						</div>							
	    		 <div class="clear"></div>
	        </div>
	    </div>
	 </div>			      	
     <div class="main">
	 	<div class="content">	
	 		 <div class="content_top">  
	 		     <div class="wrap">                                  		
            	   <div class="banner_desc">
            		<h1>Woodytoys - <span>Marketplace</span></h1>  
            		<h3>Premium Quality<br /> 100% money-back guarantee.</h3>
            		<a class="play_icon fancybox-media" href="http://vimeo.com/33790882"><img src="images/play-icon.png" alt="" /></a>
            		<h3>B2B for<span>Wood Toys</span>.</h3>
            		<p>No credit card required.</p>
            		 <div class="sign_up">				  	
					 <form>
					  		<input type="text" value="E-mail address " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}"> 
					 		<input type="submit" value="Sign Up">
					  </form>
				    </div>
                </div>  
                     <div class="ipad">
            		     <img src="images/ipad.png" alt="" />
            	     </div>
             <div class="clear"></div>
        </div>
     </div>
           <div class="features" id="features">
                 <div class="wrap">                             	
                 		  <h2>Start accepting orders <span>today</span></h2>
                 		    <h4><?= dbstatus ?>></h4>
                 		        <div class="features_grids">
							     <div class="section group">
									<div class="grid_1_of_4 images_1_of_4">
										 <img src="images/beautyful-teplates.png" alt="" />
										 <h3>Beautiful Templates</h3>
										 <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt Lorem Ipsum available, in some form .</p>
									</div>
									<div class="grid_1_of_4 images_1_of_4">
										 <img src="images/mobile.png" alt="" />
										 <h3>Mobile Ready</h3>
										 <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor velit esse cillum dolore eu fugiat nulla pariatur .</p>
									</div>
									<div class="grid_1_of_4 images_1_of_4">
										 <img src="images/security.png" alt="" />
										  <h3>Increased Security</h3>
										  <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor sed do eiusmod tempor incididunt .</p>
									</div>
									<div class="grid_1_of_4 images_1_of_4">
										 <img src="images/payment.png" alt="" />
										  <h3>Payment Options</h3>
										  <p>Lorem ipsum dolor sit amet, sed do velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
					              </div>
					              <div class="button"><a class="popup-with-zoom-anim" href="#small-dialog">See all features <img src="images/arrow.png" alt="" /></a>
					              	
					              	<div id="small-dialog" class="mfp-hide">
					                           	    <div class="plans_table">
  			 	
								  			 	<table width="100%" cellspacing="0" class="compare_plan">
												<thead>
								   					<tr>
								        				<th class="plans-list"><h3>Plan Features</h3></th>
								        				<th class="plans-list"><h3>Basic</h3><h4>$5<small>/month</small></h4></th>
								        				<th class="plans-list"><h3>Economy</h3><h4>$9<small>/month</small></h4></th>
								    				</tr>
												</thead>
													<tfoot>
									    			<tr>
												        <td> </td>
								        				<td class="order_now"><a href="#account" class="scroll"><button>Order Now</button></a></td>
								        				<td class="order_now"><a href="#account" class="scroll"><button>Order Now</button></a></td>
													</tr>
													</tfoot>				
								   				<tbody>
								   					<tr>
									        			<td class="plan_list_title">Web Space</td>
												        <td class="price_body">Unlimited</td>
												        <td class="price_body">Unlimited</td>
									    			</tr>
								    				<tr>
								        				<td class="plan_list_title">Bandwidth</td>
														<td class="price_body">Unlimited</td>
										        		<td class="price_body">Unlimited</td>
								    				</tr>
								    				<tr>
								        				<td class="plan_list_title">25 GB Storage</td>
											    	    <td class="price_body"><img src="images/icon-remove.png" alt="img"></td>
											        	<td class="price_body">Unlimited</td>
													</tr>
								    				<tr>
											    	    <td class="plan_list_title">iPhone App</td>
											        	<td class="price_body"><img src="images/icon-remove.png" alt="img"></td>
												        <td class="price_body">Unlimited</td>
								    				</tr>
								    				<tr>
								        				<td class="plan_list_title">Enhanced Security</td>
									        			<td class="price_body"><img src="images/tickmark-icon.png" alt="img"></td>
												        <td class="price_body"><img src="images/tickmark-icon.png" alt="img"></td>
								    				</tr>
									    			<tr>
								    	    			<td class="plan_list_title">E-mail</td>
								        				<td class="price_body"><img src="images/tickmark-icon.png" alt="img"></td>
												        <td class="price_body"><img src="images/tickmark-icon.png" alt="img"></td>
									    			</tr>
								    				<tr>
								        				<td class="plan_list_title">Wordpress Support</td>
												        <td class="price_body"><img src="images/icon-remove.png" alt="img"></td>
											    	    <td class="price_body"><img src="images/tickmark-icon.png" alt="img"></td>
								    				</tr>
								    				<tr>
								        				<td class="plan_list_title">24/7 Support</td>
								        				<td class="price_body"><img src="images/tickmark-icon.png" alt="img"></td>
											        	<td class="price_body"><img src="images/tickmark-icon.png" alt="img"></td>
								    				</tr>
								    				<tr>
								        				<td class="plan_list_title">Backups</td>
												    	<td class="price_body"><img src="images/tickmark-icon.png" alt="img"></td>
												        <td class="price_body"><img src="images/tickmark-icon.png" alt="img"></td>
								    				</tr>
								    				<tr>
								        				<td class="plan_list_title">Dedicated IP</td>
												        <td class="price_body">$2/mo</td>
												        <td class="price_body">$2/mo</td>
								    				</tr>
												</tbody></table>  			 	
  											 </div>
												</div>
											   <script>
													$(document).ready(function() {
														$('.popup-with-zoom-anim').magnificPopup({
															type: 'inline',
													
															fixedContentPos: false,
															fixedBgPos: true,
													
															overflowY: 'auto',
													
															closeBtnInside: true,
															preloader: false,
															
															midClick: true,
															removalDelay: 300,
															mainClass: 'my-mfp-zoom-in'
														});
																					
													});
													</script>
					              	
					              </div>
					        </div>
						</div>
           			</div>
           			 
           	  <div class="dashborder_img" id="dashboard">
                   <div class="wrap">                             	
                 		  <h2>Powerful new <span>dashboard</span></h2>
                 		    <h4>Track and manage your budiness from anywhere</h4>
                 		      <img src="images/dashboard.jpg" alt="" />  
						</div>
           			</div>
                       
          <div class="content_bottom" id="customers">
              <div class="wrap">            
                 		  <h2>Highest Customer <span>Satisfaction</span></h2>
                 		    <h4>Our success is measured through the success of our customers.</h4>
                 		        <div class="customers_grids">
							       <div class="section group">
									  <div class="grid_1_of_3 images_1_of_3">
									  	 <div class="customer_desc">
									  	 	<span class="quotes up"> </span><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p><span class="quotes down"> </span> 
										   <span class="testimonial-arrow"> </span>
										 </div> 
										  <img src="images/customer-img1.jpg" alt="" />
										  <h3><a href="#">Uku Mason</a></h3>
										  <h5>Marketing Expert</h5>
									</div>
									<div class="grid_1_of_3 images_1_of_3">
										<div class="customer_desc">
									  	 	<span class="quotes up"> </span><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p><span class="quotes down"> </span>
										  <span class="testimonial-arrow"> </span>
										 </div> 
										    <img src="images/customer-img2.jpg" alt="" />
										    <h3><a href="#">Ro Kanth</a></h3>
										  <h5>Photographer</h5>
									</div>
									<div class="grid_1_of_3 images_1_of_3">
										 <div class="customer_desc">
									  	 	<span class="quotes up"> </span><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p><span class="quotes down"> </span>
										    <span class="testimonial-arrow"> </span>
										 </div> 
										    <img src="images/customer-img3.jpg" alt="" />
										    <h3><a href="#">Anna Alexander</a></h3>
										    <h5>Professional Model</h5>
									</div>
								</div>
					        </div>
           			  </div>             
       			</div>
     		</div>
  		 </div>	
   <div class="footer">
   	 <div class="wrap">
   	 <div class="section group example">
				<div class="col_1_of_4 span_1_of_4 list">
				   <h3>Overview</h3>
				   <ul>
				   	<li><a href="#">About Us</a></li>
				   	<li><a href="#">Features</a></li>
				   	<li><a href="#">Pricing</a></li>
				   	<li><a href="#">Examples</a></li>
				   	<li><a href="#">Careers</a></li>
				   	<li><a href="#">Privacy Policy</a></li>
				   	<li><a href="#">Terms of services</a></li>				   
				   </ul>				   
 				</div>
 				<div class="col_1_of_4 span_1_of_4 list">
				   <h3>Support</h3>
				   <ul>
				   	<li><a href="#">Support Portal</a></li>
				   	<li><a href="#">Community Forum</a></li>
				   	<li><a href="#">Tutorials</a></li>
				   	<li><a href="#">Online Seminars</a></li>
				   	<li><a href="#">Extensions</a></li>
				   	<li><a href="#">API</a></li>				   
				   </ul>				   
 				</div>
				<div class="col_1_of_4 span_1_of_4 list">
				   <h3>Partners</h3>
				   <ul>
				   	<li><a href="#">Paypal</a></li>
				   	<li><a href="#">Visa</a></li>
				   	<li><a href="#">Mastercard</a></li>
				   	<li><a href="#">Amex</a></li>
				   	<li><a href="#">Royal Bank</a></li>				   
				   </ul>				   
 				</div>
				<div class="col_1_of_4 span_1_of_4 list">
				   <h3>Contact Us</h3>
				   <ul>
				   	<li><a href="#">1-888-125-0328</a></li>
				   	<li><a href="#">Cantact@ascend.com</a></li>				   
				   </ul>	
				        <div class="social-icons">
							<h3>Stay in touch</h3>
					   		  <ul>
							      <li><a href="#" target="_blank"> <img src="images/facebook.png" alt="" /> Facebook</a></li>
							      <li class="twitter"><a href="#" target="_blank"> <img src="images/twitter.png" alt="" /> Twitter</a></li>
							      <li class="googleplus"><a href="#" target="_blank"><img src="images/googleplus.png" alt="" />  Google+</a></li>
							      <li class="pinterest"><a href="#" target="_blank"><img src="images/pinterest.png" alt="" /> Pinterest</a></li>
							      <li class="likedin"><a href="#" target="_blank"><img src="images/likedin.png" alt="" /> Likedin</a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>			   
 				</div>
				<div class="clear"></div>
		    </div>
		  </div> 
       </div> 
		     <div class="copy_right">
		     	<div class="wrap">
				    <p>© 2012-2013 Ascend Inc. Design by  <a href="http://designerfirst.com/" target="_blank"> Designer First </a> . Template by <a href="http://w3layouts.com">W3layouts</a></p>
		     	</div>
		   	</div>		 		 
	</body>
</html>

