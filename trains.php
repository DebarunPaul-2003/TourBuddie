<?php session_start();
if(!isset($_SESSION["username"]))
{
    	header("Location:blockedBooking.php");
   		$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
}
?>

<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Trains Booking | Tourbuddie</title>
    
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/bootstrap-select.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/bootstrap-select.js"></script>
    	<script src="js/bootstrap-dropdown.js"></script>
    	<script src="js/jquery-2.1.1.min.js"></script>
    	<script src="js/moment-with-locales.js"></script>
    	<script src="js/bootstrap-datetimepicker.js"></script>
		<script type="text/javascript">
		
			$(function () {
				
                $('#datetimepicker3').datetimepicker({
					format: 'L',
		   			locale: 'en-gb',
					useCurrent: false,
					minDate: moment()
				});
				
				$('#datetimepicker3').on('dp.change',function(e){
					console.log(e.date.format('dddd'));
					$('#dayTrain').val(e.date.format('dddd'));
				});
            });
		
		</script>
    	
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
	
		<div class="container-fluid">
		
			<div class="trains col-sm-12">
			
			<!-- HEADER SECTION STARTS -->
				
				<div class="col-sm-12">
					
					<div class="header">
					
						<?php include("common/headerTransparentLoggedIn.php"); ?>
					
						<div class="col-sm-12">
						
						<div class="menu text-center">
							
							<ul>
								<a href="hotels.php"><li>Hotels</li></a>
								<a href="flights.php"><li>Flights</li></a>
								<li class="selected">Trains</li></a>
							</ul>
							
						</div>
						
					</div>
					
					</div> <!-- header -->
				
				</div> <!-- col-sm-12 -->
				
			<!-- HEADER SECTION ENDS -->
				
				
				
			<!-- TRAIN SEARCH SECTION STARTS -->
				
				<div class="col-sm-12">
					
					<div class="search">
   					
    					<div class="content">
    					
    					<form action="trainSearch.php" method="POST">
    					


<div class="col-sm-6">			
   							<div class="form-group">
   								 <label for="originTrain">Origin:<p> </p></label>
     
      								<select id= "originTrain"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Origin Station" name="origin" required>
       									<option value="New Delhi" data-subtext="DLI" data-tokens="DLI New Delhi">New Delhi</option>
        								<option value="Howrah" data-subtext="HWH" data-tokens="HWH Howrah">Howrah</option>
       									<option value="Guwahati" data-subtext="GHY" data-tokens="GHY Guwahati">Guwahati</option>
        								<option value="Silchar" data-subtext="SCL" data-tokens="SCL Silchar">Silchar</option>
        								<option value="Dimapur" data-subtext="DMV" data-tokens="DMV Dimapur">Dimapur</option>
      								</select>
							</div>
            			</div>
            			
            				<div class="col-sm-6">			
   							<div class="form-group">
   								 <label for="destinationTrain">Destination:<p> </p></label>
     
      								<select id= "destinationTrain"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Destination Station" name="destination" required>
       									<option value="New Delhi" data-subtext="DLI" data-tokens="DLI New Delhi">New Delhi</option>
        								<option value="Howrah" data-subtext="HWH" data-tokens="HWH Howrah">Howrah</option>
       									<option value="Guwahati" data-subtext="GHY" data-tokens="GHY Guwahati">Guwahati</option>
        								<option value="Silchar" data-subtext="SCL" data-tokens="SCL Silchar">Silchar</option>
        								<option value="Dimapur" data-subtext="DMV" data-tokens="DMV Dimapur">Dimapur</option>
      								</select>
							</div>
            			</div>
            			
            				<div class="col-sm-3">
        						<div class="form-group">
     								<label for="datetime3">Select Date:<p> </p></label>
            						<div class="input-group date" id="datetimepicker3">
                						<input id="datetime3" type="text" class="inputDate form-control" placeholder="Select Date" name="date" required/>
                						<span class="input-group-addon">
                   						<span class="fa fa-calendar"></span>
                						</span>
            						</div>
        						</div>
    						</div>
    						
    						<div class="col-sm-3">
	
							<label for="class">Select Class: <p> </p></label>
    							<div class="form-group">
    								<select id= "class" class="selectpicker form-control" data-size="5" title="Select Class" name="class" required>
  										<option value="1AC">First AC</option>
  										<option value="2AC">Second AC</option>
  										<option value="3AC">Third AC</option>
  										<option value="SL">Sleeper</option>
  										<option value="CC">AC Chair Car</option>
									</select>
								</div>
							</div>
            			
							<div class="col-sm-3">
	
							<label for="adults">No. of adults:<p> </p></label>
    							<div class="form-group">
    								<select id= "adults" class="selectpicker form-control" data-size="5" title="Aged 18 and above" name="adults" required>
  										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
  										<option value="5">5</option>
  										<option value="6">6</option>
									</select>
								</div>
							</div>
							
							<div class="col-sm-3">
							
							<label for="children">No. of children:<p> </p></label>
								<div class="form-group">
   									<select id= "children" class="selectpicker form-control" data-size="5" title="Aged upto 17" name="children" required>
  										<option value="0">0</option>
  										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
  										<option value="5">5</option>
  										<option value="6">6</option>
									</select>
								</div>
							</div>
           			
           					<input type="hidden" name="day" value="null" id="dayTrain"/>
            			
            				<div class="col-sm-12 text-center">
            			
            					<input type="submit" class="button" name="searchTrains" value="Search Trains">
            				
            				</div>
            				

            				</form>

    					</div> <!-- content -->
    					
					</div> <!-- search -->
					
				</div>
			
			<!-- TRAIN SEARCH SECTION ENDS -->
				
			</div> <!-- trains -->	
			
			

<!-- offer section Start -->


<div class="py-4">

<div class="text-center">
    <h2 class="mt-4">Treading Offers</h2>
    <p> Ride the Rails, Save the Smiles: Unbeatable Offers Await Your Next Journey!!</p>
  </div>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .offer-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 20px;
            padding: 20px;
        }
        .offer {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }
        h2 {
            margin-top: 0;
        }
        .offer img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }

   /*footer section starts*/
footer {
  background: #16222A;
  background: -webkit-linear-gradient(59deg, #191970, #000080);
  background: linear-gradient(59deg, #191970, #000080);
  color: white;
  
}

footer a {
  color: #fff;
  font-size: 20px;
  transition-duration: 0.2s;
}

footer a:hover {
  color: #FA944B;
  text-decoration: none;
}

.copy {
  font-size: 20px;
  padding: 10px;
  border-top: 1px solid #FFFFFF;
}

.footer-middle {
  padding-top: 2em;
  color: white;
}


/*SOCİAL İCONS*/

/* footer social icons */

ul.social-network {
  list-style: none;
  display: inline;
  margin-left: 0 !important;
  padding: 0;
}

ul.social-network li {
  display: inline;
  margin: 0 5px;
}


/* footer social icons */

.social-network a.icoFacebook:hover {
  background-color: #3B5998;
}

.social-network a.icoLinkedin:hover {
  background-color: #007bb7;
}

.social-network a.icoFacebook:hover i,
.social-network a.icoLinkedin:hover i {
  color: #fff;
}

.social-network a.socialIcon:hover,
.socialHoverClass {
  color: #44BCDD;
}

.social-circle li a {
  display: inline-block;
  position: relative;
  margin: 0 auto 0 auto;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  text-align: center;
  width: 30px;
  height: 30px;
  font-size: 15px;
}

.social-circle li i {
  margin: 0;
  line-height: 30px;
  text-align: center;
}

.social-circle li a:hover i,
.triggeredHover {
  -moz-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  -ms--transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  -ms-transition: all 0.2s;
  transition: all 0.2s;
}

.social-circle i {
  color: #595959;
  -webkit-transition: all 0.8s;
  -moz-transition: all 0.8s;
  -o-transition: all 0.8s;
  -ms-transition: all 0.8s;
  transition: all 0.8s;
}

.social-network a {
  background-color: #F9F9F9;
}

                                                                          /* Footer section ends */




        
    </style>

    <div class="offer-container">
        <div class="offer">
            <img src="images/toffer1.jpeg" alt="Spring Sale">
            <h2>Spring Sale</h2>
            <p>Enjoy up to 30% off on select domestic and international flights. Book now!</p>
        </div>
        <div class="offer">
            <img src="images/toffer2.jpg" alt="Weekend Getaway">
            <h2>Weekend Getaway</h2>
            <p>Get exclusive discounts on weekend flights to popular destinations. Limited time offer!</p>
        </div>
        <div class="offer">
            <img src="images/toffer3.jpeg" alt="Family Vacation Deals">
            <h2>Family Vacation Deals</h2>
            <p>Save big on family vacation packages including flights, hotels, and activities.</p>
        </div>
        <!-- Add more offers here -->

  <div class="offer">
            <img src="images/toffer4.jpeg" alt="Family Vacation Deals">
            <h2>Adventure Express</h2>
            <p> Embark on an adrenaline-fueled expedition with our adventure package, providing discounted fares and exclusive access to outdoor excursions at your destination.</p>
        </div>


          <div class="offer">
            <img src="images/toffer5.jpeg" alt="Family Vacation Deals">
            <h2>Romantic Rail Retreat</h2>
            <p> Sweep your loved one off their feet with our enchanting romance package, featuring cozy compartments and special treats for an unforgettable journey together.</p>
        </div>


    </div>

</div>
<!-- offer section end -->




















			<div class="footer col-sm-12">
		</div>
			
			
			<!-- FOOTER SECTION STARTS -->
					
				
	<section-1 class="my-2">
<footer class="mainfooter" role="contentinfo">
  <div class="footer-middle">
   
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">

        <!--Column1-->
        <div class="footer-pad">
          <h4>Quick Links</h4>
          <ul class="list-unstyled">
            <li><a href="#"></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="#">Packages</a></li>
            <li><a href="#">Special offers</a></li>
            <li><a href="#">Blogs</a></li>
          </ul>
        </div>
      </div>


      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Famous Places</h4>
          <ul class="list-unstyled">
            <li><a href="#">Kashmir</a></li>
            <li><a href="#">Kerala</a></li>
            <li><a href="#">Assam</a></li>
            <li><a href="#">Darjeeling</a></li>
            <li><a href="#">Pandicheery</a></li>
            <li><a href="#">Goa</a></li>
            
          </ul>
        </div>
      </div>

<div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Hotels</h4>
          <ul class="list-unstyled">
            <li><a href="#">Goa</a></li>
            <li><a href="#">ooty</a></li>
            <li><a href="#">Jaipur</a></li>
            <li><a href="#">Mumbai</a></li>
            <li><a href="#">Manali</a></li>
            <li><a href="#">Shimla</a></li>
            
          </ul>
        </div>
      </div>


      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Helps & Support</h4>
          <ul class="list-unstyled">
            <li><a href="#"> FAQ</a></li>
            <li><a href="#">Ask Queries</a></li>
            <li><a href="#">24x7 Customer Support</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Condition</a></li>
            <li>
              <a href="#"></a>
            </li>
          </ul>
        </div>
      </div>



     

      <div class="col-md-3">
        <h4>Follow Us</h4>
            <ul class="social-network social-circle">
             <li><a href="#" class="iconFacebook" title="Facebook"><i class="fab fa-facebook"></i></a></li>
             <li><a href="#" class="iconinstagram" title="Instagram"><i class="fab fa-instagram"></i></a></li>
             <li><a href="#" class="iconTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
             <li><a href="#" class="iconYoutube" title="Youtube"><i class="fab fa-youtube"></i></a></li>
             <li><a href="#" class="iconLinkedin" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
            </ul>       
    </div>
    </div>
  <div class="row">
    <div class="col-md-12 copy">
      <p class="text-center">&copy; Copyright 2023 - TourBuddie  All rights reserved.</p>
    </div>
  </div>
  </div>
  </div>
</footer>
</div>
</section-1>







				 <!-- footer -->
				
			<!-- FOOTER SECTION ENDS -->
			
			
		
		</div> <!-- container-fluid -->
	
	</body>
	
	<!-- BODY TAG ENDS -->
	
</html>