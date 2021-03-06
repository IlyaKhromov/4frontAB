<?php session_start(); ?>
<?php
    $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
    unset($_SESSION['msg']);
    echo $statusMsg;
?>

<!doctype html>
<html>
	<head>

		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="robots" content="" />

        <title>SONY product registration</title>
		
		<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,600i" rel="stylesheet">

        <!-- Styles -->
        <link href="styles/bootstrap.min.css" rel="stylesheet">
        <link href="styles/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="styles/core.css">
		<link rel="shortcut icon" href="https://djdzi85khno9j.cloudfront.net/system/images/4260/original/sony_favicon.ico?1469239007">
	</head>

	<body>

		<header>

			<div class="container">
			 	<div class="row">
			 		<div class="col-xs-6 text-left">
				 		<div class="branding">
				            <a href="#">
				                <img class="logo_mob" src="images/sony_logo_white.png" alt="sony_logo">
				            </a>
	        			</div>	
	        		</div>
	        		<div class="col-xs-6 text-right">
	        			<div class="country">
			                <img class="language" src="images/us_flag.png" alt="us_flag">
			            </div>
			        </div>
			 	</div>
		    </div>
		</header>
		
		<section class="s-form"> 
			<div class="container">
	    		<div class="row">
	        		<div class="col-sm-4">
						<div class="bl-form well">

							<form name="form" action="action.php" method="POST">
															
								<div class="form-header">
									<h3>Register product</h3>
									<p>* Indicates a required field</p>
								</div>
								<div class="form-group">
									<label for="MERGE0">Email Address *</label>
									<input type="email" class="form-control" name="MERGE0" id="MERGE0" placeholder="john77@gmail.com" required>
								</div>

								<div class="form-group">
									<label for="MERGE1">First Name *</label>
									<input type="text" class="form-control" name="MERGE1" id="MERGE1" required>
								</div>

								<div class="form-group">
									<label for="MERGE2">Last Name *</label>
									<input type="text" class="form-control" name="MERGE2" id="MERGE2" required>
								</div>

								<div class="form-group">
									<label for="MERGE3">Birthday (MM/DD) *</label>
									<input type="text" class="form-control" name="MERGE3" id="MERGE3" placeholder="MM/DD" required>
								</div>

								<div class="form-group">
									<label for="MERGE4">Product Code (3 letters, 6 numbers) *</label>
									<input type="text" class="form-control" name="MERGE4" id="MERGE4" placeholder="abc123456" required pattern="[a-zA-Z]{3}[0-9]{6}" title="Product Code should consist of 9 characters (first 3 should be letters, other 6 - numbers)"  onchange="validateProductcode()">
								</div>

								<div class="form-group">
									<label for="MERGE5">Country *</label>
									<input list="countries" class="form-control" name="MERGE5" id="MERGE5" required>
									<datalist id="countries">
										<option value="Austria">
										<option value="Belgium">
										<option value="Denmark">
										<option value="Finland">
										<option value="France">
										<option value="Germany">
										<option value="Ireland">
										<option value="Sweden">
										<option value="United Kingdom">
										<option value="Ukraine">
									</datalist>
								</div>

								<div class="form-group">
									<label for="MERGE6">Product Info *</label>
									<div id="MERGE6"> 
										<label class="radio-inline" for="MERGE6-0"><input type="radio" name="MERGE6" id="MERGE6-0" value="YES" required>YES</label>
										<label class="radio-inline" for="MERGE6-1"><input type="radio" name="MERGE6" id="MERGE6-1" value="NO" required>NO</label>
									</div>
								</div>

								<div class="form-group">
									<label for="MERGE7">Marketing Info *</label>
									<div id="MERGE7"> 
										<label class="radio-inline" for="MERGE7-0"><input type="radio" name="MERGE7" id="MERGE7-0" value="YES" required>YES</label>
										<label class="radio-inline" for="MERGE7-1"><input type="radio" name="MERGE7" id="MERGE7-1" value="NO" required>NO</label>
									</div>
								</div>
								
								<div class="checkbox">
									<label class="checkbox" for="group_1"><input type="checkbox" id="group_1" name="termscond" value="1" required>Accept Terms &amp; Conditions *</label>
								</div>

								<button type="submit" name="submit" class="btn btn-lg btn-primary" value="SUBSCRIBE" >Register</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="s-description">
		    <div class="container">
		    	<div class="row">
		    		<div class="col-xs-12 text-center">
		    			<h2>Why register your product?</h2>
		    		</div>
		    	</div>
                <div class="row">
                    <div class="col-sm-4 item text-center">
                      	<div class="bl-logo logo-ownership"></div>
                        <div>
                            <h3>Proof of Ownership</h3>
                            <p>
                            	In case your product is ever lost or stolen.
                            </p>
						</div>
					</div>
					<div class="col-sm-4 item text-center">
                      	<div class="bl-logo logo-search"></div>
                        <div>
                            <h3>No more searching</h3>
                            <p>
                            	We will send you all the product info including product manuals, drivers, and warranty information.
                            </p>
						</div>
					</div>
					<div class="col-sm-4 item text-center">
                      	<div class="bl-logo logo-notification"></div>
                        <div>
                            <h3>Receive Notifications</h3>
                            <p>
                            	You will be provided with latest firmware and software updates to get the most out of your product.
                            </p>
						</div>
					</div>
				</div>
			</div>	
		</section>

		<footer>
			<div class="container">
			    <div class="row">
			    	<div class="col-xs-6 text-left">
			    		<span>&copy; 2017 </span><a href="#">Sony Inc.</a> 
                    </div>
			        <div class="col-xs-6 text-right">
			            <p>Join our community or follow us on</p>
			            <div class="social-media">
			                <div class="row">
			                   	<div class="col-xs-3 col-sm-9"></div>
			                    <div class="col-xs-1">
			                        <a href="#"><i class="fa fa-facebook"></i></a>
			                    </div>
			                    <div class="col-xs-1">
			                        <a href="#"><i class="fa fa-google"></i></a>
			                    </div>
			                    <div class="col-xs-1">
			                        <a href="#"><i class="fa fa-youtube"></i></a>
			                    </div>
			                </div>
			            </div>
			        </div>	
			    </div>
			</div>
		</footer>

		<script src="scripts/jquery-1.11.3.min.js"></script>
		<script src="scripts/bootstrap.min.js"></script>

		<script type="text/javascript">
			function validateProductcode() {

				var productCode = document.getElementById('MERGE4').value;
				var regexp1 = /^[a-zA-Z]{3}[0-9]{6}/;
				var productCodeResult = regexp1.test(productCode);

				if(productCodeResult == false){
					alert("Product Code should consist of 9 characters (first 3 should be letters, other 6 - numbers)");
					return false;
				}
				return true;
			}	
		</script>
	</body>
</html>	

