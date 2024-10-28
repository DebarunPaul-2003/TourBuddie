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
	
		<title>Flights Booking | Tourbuddie</title>
    
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
    	<script src="js/scrolling-nav.js"></script>
    	<script src="js/jquery.easing.min.js"></script>
		<script type="text/javascript">
		
			$(function () {
       				$('#datetimepicker1').datetimepicker({
		   			format: 'L',
		   			locale: 'en-gb',
					useCurrent: false,
					minDate: moment()
	   				});
				
        			$('#datetimepicker2').datetimepicker({
            		useCurrent: false,
					format: 'L',
					locale: 'en-gb',
					minDate: moment()
					});
				
					$("#datetimepicker1").on("dp.change", function (e) {
            		$('#datetimepicker2').data("DateTimePicker").minDate(e.date);
        			});
				
        			$("#datetimepicker2").on("dp.change", function (e) {
            		$('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
        			});
    		});
			
		</script>
    	
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
	
		<div class="container-fluid" id="book">
		
			<div class="flights col-sm-12">
			
			<!-- HEADER SECTION STARTS -->
				
				<div class="col-sm-12">
					
					<div class="header">
					
						<?php include("common/headerTransparentLoggedIn.php"); ?>
					
						<div class="col-sm-12">
						
						<div class="menu text-center">
							
							<ul>
								<a href="hotels.php"><li>Hotels</li></a>
								<li class="selected">Flights</li>
								<a href="trains.php"><li>Trains</li></a>
							</ul>
							
						</div>
						
					</div>
					
					</div> <!-- header -->
				
				</div> <!-- col-sm-12 -->
				
			<!-- HEADER SECTION ENDS -->
				
				
				
			<!-- FLIGHT SEARCH SECTION STARTS -->
				
				<div class="col-sm-12">
					
					<div class="search">
   					
    					<div class="content">
    					
    					<form name="flightSearch" action="returnTripOutboundFlightSearch.php" method="POST">
    					
    						<div class="radioContainer">
    					
    							<div class="col-sm-6 text-left">
    							
    								<input type="radio" name="flightType" value="One Way" id="oneWay">
    								<label for="oneWay"><span class="radioLeft">One Way</span></label>
 						
  									<input type="radio" name="flightType" value="Return Trip" id="returnTrip" checked>
    								<label for="returnTrip"><span class="radioLeft">Return Trip</span></label>
    							
    							</div>
    						
    							<div class="col-sm-6 text-right">
    							
    								<input type="radio" name="flightClass" value="Business Class" id="businessClass">
    								<label for="businessClass"><span class="radioRight">Business Class</span></label>
 									
  									<input type="radio" name="flightClass" value="Economy Class" id="economyClass" checked>
    								<label for="economyClass"><span class="radioRight">Economy Class</span></label>
    							
    							</div>
    						
							</div> <!-- radioContainer -->
    					
    						<div class="col-sm-6">			
   							<div class="form-group">
   								 <label for="origin">Origin:<p> </p></label>
     
      								<select id= "origin"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Origin" name="origin" required>
       									<option value="New Delhi" data-subtext="DEL" data-tokens="DEL New Delhi">New Delhi</option>
        								<option value="Mumbai" data-subtext="BOM" data-tokens="BOM Mumbai">Mumbai</option>
        								<option value="Kolkata" data-subtext="CCU" data-tokens="CCU Kolkata">Kolkata</option>
        								<option value="Bengaluru" data-subtext="BLR" data-tokens="BLR Bengaluru">Bengaluru</option>
        								<option value="Pune" data-subtext="PNQ" data-tokens="PNQ Pune">Pune</option>
        								<option value="Chennai" data-subtext="MAA" data-tokens="MAA Chennai">Chennai</option>
        								<option value="Guwahati" data-subtext="GAU" data-tokens="GAU Guwahati">Guwahati</option>
        								<option value="Bhopal" data-subtext="BHO" data-tokens="BHI Bhopal">Bhopal</option>
        								<option value="Jaipur" data-subtext="JAI" data-tokens="JAI Jaipur">Jaipur</option>
        								<option value="Ahmedabad" data-subtext="AMD" data-tokens="AMD Ahmedabad">Ahmedabad</option>
        								<option value="Hyderabad" data-subtext="HYD" data-tokens="HYD Hyderabad">Hyderabad</option>
      								</select>
							</div>
            			</div>
            			
            				<div class="col-sm-6">			
   							<div class="form-group">
   								 <label for="destination">Destination:<p> </p></label>
     
      								<select id= "destination"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Destination" name="destination" required>
       									<option value="New Delhi" data-subtext="DEL" data-tokens="DEL New Delhi">New Delhi</option>
        								<option value="Mumbai" data-subtext="BOM" data-tokens="BOM Mumbai">Mumbai</option>
        								<option value="Kolkata" data-subtext="CCU" data-tokens="CCU Kolkata">Kolkata</option>
        								<option value="Bengaluru" data-subtext="BLR" data-tokens="BLR Bengaluru">Bengaluru</option>
        								<option value="Pune" data-subtext="PNQ" data-tokens="PNQ Pune">Pune</option>
        								<option value="Chennai" data-subtext="MAA" data-tokens="MAA Chennai">Chennai</option>
        								<option value="Guwahati" data-subtext="GAU" data-tokens="GAU Guwahati">Guwahati</option>
        								<option value="Bhopal" data-subtext="BHO" data-tokens="BHI Bhopal">Bhopal</option>
        								<option value="Jaipur" data-subtext="JAI" data-tokens="JAI Jaipur">Jaipur</option>
        								<option value="Ahmedabad" data-subtext="AMD" data-tokens="AMD Ahmedabad">Ahmedabad</option>
        								<option value="Hyderabad" data-subtext="HYD" data-tokens="HYD Hyderabad">Hyderabad</option>
      								</select>
							</div>
            			</div>
            			
            				<div class="col-sm-3">
        						<div class="form-group">
     								<label for="datetime1">Select Departure Date:<p> </p></label>
            						<div class="input-group date" id="datetimepicker1">
                						<input id="datetime1" type="text" class="inputDate form-control" placeholder="Select Departure Date" name="depart" required/>
                						<span class="input-group-addon">
                   						<span class="fa fa-calendar"></span>
                						</span>
            						</div>
        						</div>
    						</div>
    						
    						<div class="col-sm-3">
       							<div class="form-group">
           							<label for="datetime2">Select Return Date:<p> </p></label>
            						<div class="input-group date" id="datetimepicker2">
                							<input  id="datetime2" type="text" class="inputDate form-control" placeholder="Select Return Date" name="return" required/>
                							<span class="input-group-addon">
                    						<span class="fa fa-calendar"></span>
                					</span>
            				</div>
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
            			
            				<div class="col-sm-12 text-center">
            			
            					<input type="submit" class="button" name="searchFlights" value="Search Flights">
            				
            				</div>
            				
            			</form>
            			
    					</div> <!-- content -->
    					
					</div> <!-- search -->
					
				</div>
			
			<!-- FLIGHT SEARCH SECTION ENDS -->
				
			</div> <!-- flights -->	
			
			

			<style>
				
.plan__container .subheader {
  margin-bottom: 1rem;
  text-align: center;
  font-weight: 600;
  color: var(--text-dark);
  letter-spacing: 5px;
}

.plan__container .section__header {
  text-align: center;
  font-size: 3rem;
  line-height: 4rem;
  margin-bottom: 1rem;
}

.plan__container .description {
  text-align: center;
  color: var(--text-light);
}

.plan__grid {
  margin-top: 4rem;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 2rem;
}

.plan__content .number {
  display: inline-block;
  padding: 5px 15px;
  margin-bottom: 0.5rem;
  font-weight: 600;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 2rem;
}

.plan__content .number:nth-child(4) {
  background-color: #e98b6d;
}

.plan__content .number:nth-child(7) {
  background-color: #ffcca3;
}

.plan__content h4 {
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-dark);
  margin-bottom: 0.5rem;
}

.plan__content p {
  color: var(--text-light);
  margin-bottom: 2rem;
}

.plan__image {
  position: relative;
}

.plan__image img {
  position: absolute;
  top: 50%;
  left: 50%;
  border-radius: 10rem;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
}

.plan__image img:nth-child(1) {
  max-width: 250px;
  transform: translate(calc(-50% - 9rem), calc(-50% + 5rem));
  z-index: 3;
}

.plan__image img:nth-child(2) {
  max-width: 260px;
  transform: translate(-50%, calc(-50% - 5rem));
  z-index: 2;
}

.plan__image img:nth-child(3) {
  max-width: 230px;
  transform: translate(calc(-50% + 9rem), calc(-50% + 5rem));
}


.travellers__grid {
  margin-top: 4rem;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 2rem;
}

.travellers__card {
  border-radius: 5rem;
  overflow: hidden;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
}

.travellers__card__content {
  position: relative;
  padding: 1rem;
  text-align: center;
}

.travellers__card__content img {
  position: absolute;
  max-width: 70px;
  top: 0;
  left: 50%;
  transform: translate(-50%, -50%);
  border: 5px solid var(--extra-light);
  border-radius: 100%;
}

.travellers__card__content h4 {
  margin-top: 1.5rem;
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-dark);
}

.travellers__card__content p {
  font-weight: 500;
  color: var(--text-light);
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







			<section class="section__container plan__container">
      <p class="subheader">TRAVEL SUPPORT</p>
      <h2 class="section__header">Plan your travel with confidence</h2>
      <p class="description">
        Find help with your bookings and travel plans, and seee what to expect
        along your journey.
      </p>
      <div class="plan__grid">
        <div class="plan__content">
          <span class="number">01</span>
          <h4>Travel Requirements for Dubai</h4>
          <p>
            Stay informed and prepared for your trip to Dubai with essential
            travel requirements, ensuring a smooth and hassle-free experience in
            this vibrant and captivating city.
          </p>
          <span class="number">02</span>
          <h4>Multi-risk travel insurance</h4>
          <p>
            Comprehensive protection for your peace of mind, covering a range of
            potential travel risks and unexpected situations.
          </p>
          <span class="number">03</span>
          <h4>Travel Requirements by destinations</h4>
          <p>
            Stay informed and plan your trip with ease, as we provide up-to-date
            information on travel requirements specific to your desired
            destinations.
          </p>
        </div>
        <div class="plan__image">
          <img src="images/plan-1.jpg" alt="plan" />
          <img src="images/plan-2.jpg" alt="plan" />
          <img src="images/plan-3.jpg" alt="plan" />
        </div>
      </div>
    </section>


    <section class="section__container travellers__container">
      <h2 class="section__header" style="text-align:center; font-weight: bold;">Best travellers of the month</h2>
      <div class="travellers__grid">
        <div class="travellers__card">
          <img src="images/traveller-1.jpg" alt="traveller" />
          <div class="travellers__card__content">
            <img src="images/client-1.jpg" alt="client" />
            <h4>Emily Johnson</h4>
            <p>Delhi</p>
          </div>
        </div>
        <div class="travellers__card">
          <img src="images/traveller-2.jpg" alt="traveller" />
          <div class="travellers__card__content">
            <img src="images/client-2.jpg" alt="client" />
            <h4>David Smith</h4>
            <p>Mumbai</p>
          </div>
        </div>
        <div class="travellers__card">
          <img src="images/traveller-3.jpg" alt="traveller" />
          <div class="travellers__card__content">
            <img src="images/client-3.jpg" alt="client" />
            <h4>Olivia Brown</h4>
            <p>Kolkata</p>
          </div>
        </div>
        <div class="travellers__card">
          <img src="images/traveller-4.jpg" alt="traveller" />
          <div class="travellers__card__content">
            <img src="images/client-4.jpg" alt="client" />
            <h4>Daniel Taylor</h4>
            <p> Guwahati</p>
          </div>
        </div>
      </div>
    </section>

			
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