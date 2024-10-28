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
	
		<title>Hotels | TourBuddie</title>
    
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
       				$('#datetimepicker5').datetimepicker({
		   			format: 'L',
		   			locale: 'en-gb',
					useCurrent: false,
					minDate: moment()
	   				});
				
        			$('#datetimepicker6').datetimepicker({
            		useCurrent: false,
					format: 'L',
					locale: 'en-gb'
					});
				
					$("#datetimepicker5").on("dp.change", function (e) {
            		$('#datetimepicker6').data("DateTimePicker").minDate(e.date);
        			});
				
        			$("#datetimepicker2").on("dp.change", function (e) {
            		$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        			});
    		});
			
		</script>
    	
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
	
		<div class="container-fluid">
		
			<div class="hotels col-sm-12">
			
			<!-- HEADER SECTION STARTS -->
				
				<div class="col-sm-12">
					
					<div class="header">
					
						<?php include("common/headerTransparentLoggedIn.php"); ?>
					
						<div class="col-sm-12">
						
						<div class="menu text-center">
							
							<ul>
								<li class="selected">Hotels</li>
								<a href="flights.php"><li>Flights</li></a>
								<a href="trains.php"><li>Trains</li></a>
							</ul>
							
						</div>
						
					</div>
					
					</div> <!-- header -->
				
				</div> <!-- col-sm-12 -->
				
			<!-- HEADER SECTION ENDS -->
				
				
				
			<!-- HOTELS SEARCH SECTION STARTS -->
				
				<div class="col-sm-12">
					
					<div class="search" id="searchHotel">
   					
    					<div class="content">
    					
    					<form action="hotelSearch.php" method="GET">
    					
    						<div class="col-sm-3">			
   							<div class="form-group">
   								 <label for="city">City:<p> </p></label>
     
      								<select id= "city"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select City" name="city" required>
       									<option value="New Delhi" data-tokens="DEL New Delhi">New Delhi</option>
        								<option value="Mumbai" data-tokens="BOM Mumbai">Mumbai</option>
        								<option value="Kolkata" data-tokens="CCU Kolkata">Kolkata</option>
        								<option value="Bangalore" data-tokens="BLR Bangalore">Bangalore</option>
        								<option value="Chennai" data-tokens="MAA Chennai">Chennai</option>
        								<option value="Pune" data-tokens="PNQ Pune">Pune</option>
        								<option value="Kerala" data-tokens="KER Kerala">Kerala</option>
        								<option value="Guwahati" data-tokens="GAU Guwahati">Guwahati</option>
        								<option value="Manali" data-tokens="MAN Manali">Manali</option>
        								<option value="Shillong" data-tokens="SHL Shillong">Shillong</option>
      								</select>
							</div>
            			</div>
            			
            				<div class="col-sm-3">
        						<div class="form-group">
     								<label for="datetime5">Check-in:<p> </p></label>
            						<div class="input-group date" id="datetimepicker5">
                						<input id="datetime5" type="text" class="inputDate form-control" placeholder="Select Check-in Date" name="checkIn" required/>
                						<span class="input-group-addon">
                   						<span class="fa fa-calendar"></span>
                						</span>
            						</div>
        						</div>
    						</div>
    						
    						<div class="col-sm-3">
        						<div class="form-group">
     								<label for="datetime6">Check-out:<p> </p></label>
            						<div class="input-group date" id="datetimepicker6">
                						<input id="datetime6" type="text" class="inputDate form-control" placeholder="Select Check-out Date" name="checkOut" required/>
                						<span class="input-group-addon">
                   						<span class="fa fa-calendar"></span>
                						</span>
            						</div>
        						</div>
    						</div>
    						
							<div class="col-sm-3">
	
							<label for="rooms">No. of rooms:<p> </p></label>
    							<div class="form-group">
    								<select id= "rooms" class="selectpicker form-control" data-size="5" title="Select no. of rooms" name="rooms" required>
  										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
									</select>
								</div>
							</div>
          							
          					<div class="col-sm-3" id="r1">
	
							<label for="room1">Room 1:<p> </p></label>
    							<div class="form-group">
    								<select id= "room1" class="selectpicker form-control" data-size="5" title="Select no. of guests" name="room1">
  										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
									</select>
								</div>
							</div>
         					
         					<div class="col-sm-3" id="r2">
	
							<label for="room2">Room 2:<p> </p></label>
    							<div class="form-group">
    								<select id= "room2" class="selectpicker form-control" data-size="5" title="Select no. of guests" name="room2">
  										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
									</select>
								</div>
							</div>
         					
         					<div class="col-sm-3" id="r3">
	
							<label for="room3">Room 3:<p> </p></label>
    							<div class="form-group">
    								<select id= "room3" class="selectpicker form-control" data-size="5" title="Select no. of guests" name="room3">
  										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
									</select>
								</div>
							</div>
         					
         					<div class="col-sm-3" id="r4">
	
							<label for="room3">Room 4:<p> </p></label>
    							<div class="form-group">
    								<select id= "room4" class="selectpicker form-control" data-size="5" title="Select no. of guests" name="room4">
  										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
									</select>
								</div>
							</div>
          					
          					
          					
          					
          					
          					
           				
            				<div class="col-sm-12 text-center">
            			
            					<input type="submit" class="button" name="searchHotels" value="Search Hotels" id="searchHotelButton">
            				
            				</div>

            			</form>
            			
    					</div> <!-- content -->
    					
					</div> <!-- search -->
					
				</div>
			
			<!-- TRAIN SEARCH SECTION ENDS -->
				
			</div> <!-- trains -->	
			
			


<style>
	
.grid-container_1 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* This will create a responsive grid */
            grid-gap: 10px;
            padding: 50px;
        }

        /* Style each accommodation item */
       .accommodation-item {

            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }

       .accommodation-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

       .accommodation-item h3,
       .accommodation-item p {
        text-align: center;
            margin: 10px;
        }


/*       */

.hotel-listings {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.hotel-listing {
  width: 300px;
  margin: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.hotel-listing img {
  width: 100%;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.hotel-info {
  padding: 10px;
}

.hotel-info h2 {
  margin-top: 0;
}

.hotel-info p {
  margin: 5px 0;
}

@media screen and (max-width: 768px) {
  .hotel-listing {
    width: 100%;
  }
}

/*      */












/*      */

.gallery {
  display: flex;
  flex-wrap: wrap;
}

.gallery-item {
  flex: 0 0 calc(20% - 20px); /* Five photos horizontally */
  margin: 10px;
  position: relative;
  overflow: hidden;
}

.gallery-item img {
  width: 100%;
  height: auto;
  display: block;
  transition: transform 0.3s ease;
}

.gallery-item:hover img {
  transform: scale(1.1);
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.gallery-item:hover .overlay {
  opacity: 1;
}

.overlay h3, .overlay p {
  margin: 0;
}

.overlay p {
  font-size: 14px;
}


/*      */

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

			
			
				<div class="text-center">
    <h2 class="mt-4" style="text-align: center; font-weight: bold;">Browse Your Prefered Property</h2>
    <p>Browse your preferred property and discover your perfect vacation spot with ease on our website!!</p>
  </div>
<div class="grid-container_1">
    <div class="accommodation-item">
        <img src="images/hotel4.jpg" alt="Hotel">
        <h3>Hotel</h3>
        <p>A hotel is an establishment that provides paid lodging on a short-term basis.</p>
    </div>

    <div class="accommodation-item">
        <img src="images/airbnb.jpeg" alt="Airbnb">
        <h3>Airbnb</h3>
        <p>Airbnb is a service that allows travelers to rent short-term accommodations in residential properties.</p>
    </div>

    <div class="accommodation-item">
        <img src="images/villa.jpeg" alt="Villa">
        <h3>Villa</h3>
        <p>A villa is a large, luxurious vacation home, often located in a scenic or exotic location.</p>
    </div>

    <div class="accommodation-item">
        <img src="images/apartment.jpeg" alt="Apartment">
        <h3>Apartment</h3>
        <p>An apartment is a self-contained housing unit that occupies only part of a building.</p>
    </div>
</div>


<h2 style="text-align: center; font-weight: bold;"> Hotel Listing </h2>
  <section class="hotel-listings">
    <div class="hotel-listing">
      <img src="images/hotell1.jpeg" alt="Hotel 1">
      <div class="hotel-info">
        <h2>Hotel Le Roi, Delhi</h2>
        <p>Location: Paharganj, Delhi</p>
        <p>Price:  INR 2000 per night</p>
        <p>Ratings: 4.5/5</p>
        <p>Facilities: Free Wi-Fi, Restaurant, 24-hour front desk, Room service</p>
      </div>
    </div>


<div class="hotel-listing">
      <img src="images/hotell3.jpg" alt="Hotel 1">
      <div class="hotel-info">
        <h2>Hotel Swagath Grand</h2>
        <p>Location:  Kondapur, Hyderabad</p>
        <p>Price:  INR 2500 per night</p>
        <p>Ratings: 4.0/5</p>
        <p>Facilities: Free Wi-Fi, Restaurant, Fitness center, Room service</p>
      </div>
    </div>



<div class="hotel-listing">
      <img src="images/hotell2.jpeg" alt="Hotel 1">
      <div class="hotel-info">
        <h2>Hotel White Pearl</h2>
        <p>Location: Sindhi Camp, Jaipur</p>
        <p>Price: INR 1800 per night</p>
        <p>Ratings: 4.4/5</p>
        <p>Facilities: Free Wi-Fi, Restaurant, 24-hour front desk, Laundry service</p>
      </div>
    </div>


    <div class="hotel-listing">
      <img src="images/hotell4.jpg" alt="Hotel 1">
      <div class="hotel-info">
        <h2>Hotel Surya</h2>
        <p>Location: Varanasi Cantt, Varanasi</p>
        <p>Price:  INR 1800 per night</p>
        <p>Ratings: 4.3/5</p>
        <p>Facilities: Free Wi-Fi, Restaurant, 24-hour front desk, Tour desk</p>
      </div>
    </div>

 <div class="hotel-listing">
      <img src="images/hotell5.jpg" alt="Hotel 1">
      <div class="hotel-info">
        <h2>Hotel Sai Miracle</h2>
        <p>Location: Varanasi Cantt, Varanasi</p>
        <p>Price:  INR 1800 per night</p>
        <p>Ratings: 4.3/5</p>
        <p>Facilities: Free Wi-Fi, Restaurant, 24-hour front desk, Tour desk</p>
      </div>
    </div>

     <div class="hotel-listing">
      <img src="images/hotell6.jpg" alt="Hotel 1">
      <div class="hotel-info">
        <h2>Hotel Anand Bhawan</h2>
        <p>Location: Esplanade, Kolkata</p>
        <p>Price: INR 2300 per night</p>
        <p>Ratings: 4.1/5</p>
        <p>Facilities: Free Wi-Fi, Restaurant, 24-hour front desk, Laundry service</p>
      </div>
    </div>

     <div class="hotel-listing">
      <img src="images/hotell7.jpg" alt="Hotel 1">
      <div class="hotel-info">
        <h2>Hotel Park Inn</h2>
        <p>Location: Egmore, Chennai</p>
        <p>Price:  INR 2100 per night</p>
        <p>Ratings: 4.0/5</p>
        <p>Facilities: Free Wi-Fi, Restaurant, 24-hour front desk, Room service</p>
      </div>
    </div>

     <div class="hotel-listing">
      <img src="images/hotell8.jpg" alt="Hotel 1">
      <div class="hotel-info">
        <h2>Hotel Shiva Intercontinental</h2>
        <p>Location: Ratanada, Jodhpur</p>
        <p>Price:  INR 1900 per night</p>
        <p>Ratings: 4.3/5</p>
        <p>Facilities: Free Wi-Fi, Restaurant, 24-hour front desk, Tour desk</p>
      </div>
    </div>

    

    <!-- Add more hotel listings here -->
  </section>






<!--------------------------------------------------------------------- Gallery Section Section Starts ------------------------------------------------------------------------>

<h2 style="text-align: center; font-weight: bold;"> Gallery </h2>
  <section class="gallery">
    <div class="gallery-item">
      <img src="images/hotel/1.jpg" alt="Hotel 1">
      <div class="overlay">
        <h3>Hotel Name</h3>
        <p>Location: City, Country</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="images/hotel/2.jpg" alt="Hotel 2">
      <div class="overlay">
        <h3>Hotel Name</h3>
        <p>Location: City, Country</p>
      </div>
    </div>
    <!-- Add more gallery items here -->
    <div class="gallery-item">
      <img src="images/hotel/3.jpg" alt="Hotel 2">
      <div class="overlay">
        <h3>Hotel Name</h3>
        <p>Location: City, Country</p>
      </div>
    </div>

    <div class="gallery-item">
      <img src="images/hotel/4.jpg" alt="Hotel 2">
      <div class="overlay">
        <h3>Hotel Name</h3>
        <p>Location: City, Country</p>
      </div>
    </div>

    <div class="gallery-item">
      <img src="images/hotel/5.jpg" alt="Hotel 2">
      <div class="overlay">
        <h3>Hotel Name</h3>
        <p>Location: City, Country</p>
      </div>
    </div>

    <div class="gallery-item">
      <img src="images/hotel/6.jpg" alt="Hotel 2">
      <div class="overlay">
        <h3>Hotel Name</h3>
        <p>Location: City, Country</p>
      </div>
    </div>

    <div class="gallery-item">
      <img src="images/hotel/7.jpg" alt="Hotel 2">
      <div class="overlay">
        <h3>Hotel Name</h3>
        <p>Location: City, Country</p>
      </div>
    </div>


<div class="gallery-item">
      <img src="images/hotel/8.jpg" alt="Hotel 2">
      <div class="overlay">
        <h3>Hotel Name</h3>
        <p>Location: City, Country</p>
      </div>
    </div>


    <div class="gallery-item">
      <img src="images/hotel/9.jpg" alt="Hotel 2">
      <div class="overlay">
        <h3>Hotel Name</h3>
        <p>Location: City, Country</p>
      </div>
    </div>


    <div class="gallery-item">
      <img src="images/hotel/10.jpg" alt="Hotel 2">
      <div class="overlay">
        <h3>Hotel Name</h3>
        <p>Location: City, Country</p>
      </div>
    </div>




  </section>













			
			
			<!-- FOOTER SECTION STARTS -->
					
				<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                                        <!-- Footer section start -->
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------- -->
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

				
			<!-- FOOTER SECTION ENDS -->
			
			
		
		</div> <!-- container-fluid -->
	
	</body>
	
	<!-- BODY TAG ENDS -->
	
</html>