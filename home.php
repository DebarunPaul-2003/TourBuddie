<!DOCTYPE html>
<html lang="en">
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<title> Tourbuddie-Your Ulitmate Travel Partner</title>
  <link rel="icon" href="images/logo.jpg" sizes="300x300" type="image/png" alt="logo">


	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


<!-- custom css file link -->
  <link rel="stylesheet" type="text/css" href="css/home_style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <!-- font awsome cdn link -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- custom js file link -->
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


  
</head>
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                              BODY PART STARTS 
 ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<body>

 
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                        Menu Bar Section start
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
 <div class="container-fluid" style="padding: 5px 0px;">
    <a href="#" class="logo"><img src="images/tourbuddie.png" alt="logo" width="100%" height="80px"></a>
    <a class="navbar-brand" href="#">
     <h1> <span style="color: #FF0000;">Tour</span>Buddie</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
      
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php" style="font-size:18px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php" style="font-size:18px;">About</a>
        </li>

<li class="nav-item dropdown">
 <a class="nav-link dropdown-toggle" id="transportationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:18px;">
    Transportation
 </a>
 <div class="dropdown-menu" aria-labelledby="transportationDropdown">
    <a class="dropdown-item" href="http://localhost/Tourbuddie/flights.php">Flights</a>
    <a class="dropdown-item" href="http://localhost/Tourbuddie/trains.php">Trains</a>
 </div>
</li>

<li class="nav-item">
          <a class="nav-link" href="package.php" style="font-size:18px;">Pakages</a>
        </li>

 <li class="nav-item">
          <a class="nav-link" href="http://localhost/Tourbuddie/hotels.php" style="font-size:18px;">Hotels</a>
        </li>


        

        <li class="nav-item">
          <a class="nav-link" href="blog.php" style="font-size:18px;">Blogs</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="contactus.php" style="font-size:18px;">Contact us </a>
        </li>
        
        

<li class="nav-item">
 <a class="nav-link" href="book.php" >
    <img src="images/booknow.png" alt="User Logo" width="80" height="80" style="font-size:40px; margin-top: -20px;">

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Log in/Sign Up
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="http://localhost/Tourbuddie/admin/login_form.php">Admin</a>
        <a class="dropdown-item" href="http://localhost/Tourbuddie/login.php">User</a>
    </div>
</li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"></a>
        </li>
      
                                                           
      </ul>
 </div>
</nav>
 </header>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                      MENU BAR SECTION ENDS
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                      HEADER SECTION START
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

 
 <div id="slider-home" class="carousel slide" data-ride="carousel" data-pause="false">
        <ul class="carousel-indicators">
            <li data-target="#slider-home" data-slide-to="0" class="active"></li>
            <li data-target="#slider-home" data-slide-to="1"></li>
            <li data-target="#slider-home" data-slide-to="2"></li>
            <li data-target="#slider-home" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/demo2.jpg" alt="" style="height: 650px">
                <div class="carousel-caption">
                    <h3>Discover the World, One Adventure at a Time!</h3>
                    <p>Join us on an unforgettable adventure as we visit some of the most magnificent places on earth!</p>
                    <a class="btn" href="#" style="border-radius: 10px">Explore Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/demo1.jpg" alt="" style="height: 650px">
                <div class="carousel-caption">
                    <h3>Discover the World, One Adventure at a Time!</h3>
                    <p>Join us on an unforgettable adventure as we visit some of the most magnificent places on earth!</p>
                    <a class="btn" href="#" style="border-radius: 10px">Explore Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/demo3.jpg" alt="" style="height: 650px">
                <div class="carousel-caption">
                    <h3>Discover the World, One Adventure at a Time!</h3>
                    <p>Join us on an unforgettable adventure as we visit some of the most magnificent places on earth!</p>
                    <a class="btn" href="#" style="border-radius: 10px">Explore Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/demo4.jpg" alt="" style="height: 650px">
                <div class="carousel-caption">
                    <h3>Discover the World, One Adventure at a Time!</h3>
                    <p>Join us on an unforgettable adventure as we visit some of the most magnificent places on earth!</p>
                    <a class="btn" href="#" style="border-radius: 10px;">Explore Now</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#slider-home" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slider-home" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

</div>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                      HEADER SECTION ENDS
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
 

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                      BOOK SECTION STARTS
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
 <div class="container">
        <h1>Book a Flight or Train</h1>
        <div class="booking-grid">
            <div class="booking-option">
                <img src="images/3125713.png" alt="Flight Logo">
                <h2>Flight</h2>
                <form>
                    <label for="flight-departure">Departure City:</label>
                    <input type="text" id="flight-departure" name="flight-departure">

                    <label for="flight-arrival">Arrival City:</label>
                    <input type="text" id="flight-arrival" name="flight-arrival">

                    <label for="flight-date">Date:</label>
                    <input type="date" id="flight-date" name="flight-date">

                    <label for="passengers">Passengers:</label>
                    <input type="number" id="passengers" name="passengers" min="1" max="50" required>
                
            
                    <label for="flight-class">Class:</label>
                    <select id="flight-class" name="flight-class">
                        <option value="economic">Economy</option>
                        <option value="economic">Premium Economy</option>
                        <option value="business">Business</option>
                    </select>
              

                    <a href="http://localhost/Tourbuddie/flights.php"> <input type="submit" value="Search Flights"></a>
                </form>
            </div>


            <div class="booking-option">
                <img src="images/train.png" alt="Train Logo">
                <h2>Train</h2>
                <form>
                    <label for="train-departure">Departure Station:</label>
                    <input type="text" id="train-departure" name="train-departure">

                    <label for="train-arrival">Arrival Station:</label>
                    <input type="text" id="train-arrival" name="train-arrival">

                     <label for="passengers">Passengers:</label>
                    <input type="number" id="passengers" name="passengers" min="1" max="50" required>

                    <label for="train-date">Date:</label>
                    <input type="date" id="train-date" name="train-date">

                 <label for="flight-class">Class:</label>
                    <select id="flight-class" name="flight-class">
                        <option value="economic">All Class</option>
                        <option value="economic">Sleeper Class</option>
                        <option value="business">3rd AC</option>
                        <option value="business">2nd AC</option>
                        <option value="business">1st AC</option>
                        <option value="business">Second Class</option>
                        <option value="business">Vistadome AC</option>
                        <option value="business">AC Chair Car</option>
                        <option value="business">First Class</option>
                        <option value="business">General</option>
                    </select>   

                    <a href="http://localhost/Tourbuddie/trains.php"> <input type="submit" value="Search Trains"></a>
                </form>
            </div>


                </form>
            </div>
        </div>
    </div>

 
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                      BOOK SECTION ENDS
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<div class="chat-container">
    <div class="chat-box">
      <div class="chat-header">
        <h3> Feel free to ask</h3>
         <button class="close-btn" onclick="closeChat()">X</button>
      </div>
      <div class="chat-body" id="chat-body">
        <div class="message received">Welcome! How can I assist you today?</div>
      </div>
      <div class="chat-footer">
        <input type="text" id="message-input" placeholder="Type your message...">
        <button onclick="sendMessage()">Send</button>
      </div>
    </div>
  </div>

  <script>
      
function sendMessage() {
  var messageInput = document.getElementById("message-input");
  var messageText = messageInput.value.trim();
  if (messageText !== "") {
    var chatBody = document.getElementById("chat-body");
    var messageElement = document.createElement("div");
    messageElement.textContent = messageText;
    messageElement.classList.add("message", "sent");
    chatBody.appendChild(messageElement);
    messageInput.value = "";
    chatBody.scrollTop = chatBody.scrollHeight;
    
    // Reply with appropriate message
    setTimeout(function() {
      var replyElement = document.createElement("div");
      replyElement.classList.add("message", "received");
      var lowerCaseMessage = messageText.toLowerCase();
      if (lowerCaseMessage.includes("contact") || lowerCaseMessage.includes("information")) {
        replyElement.textContent = "Thank you for providing your contact information! We will contact you shortly. Thank you for choosing us!";
      } else if (lowerCaseMessage.includes("hello") || lowerCaseMessage.includes("hi")) {
        replyElement.textContent = "Hello! How can I assist you today?";
      } else if (lowerCaseMessage.includes("thank")) {
        replyElement.textContent = "You're welcome! If you need any further assistance, feel free to ask.";
      } else {
        replyElement.textContent = "Our assistant will assist you. Please provide your contact information if needed.";
      }
      chatBody.appendChild(replyElement);
      chatBody.scrollTop = chatBody.scrollHeight;
    }, 1000);
  }
}


function closeChat() {
  var chatContainer = document.querySelector(".chat-container");
  chatContainer.style.display = "none";
}

        



  </script>






  

 <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                       About us section start 
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<section-2 class="my-4">
     <div class="py-4">
          <h2 class="text-center">Get to Know Us </h2>
     </div>
     <div class="container-fluid">
     <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
               <img src="images/Cover2.jpg" class="img-fluid abouting">
          </div>
          <div class="col-lg-6 col-md-6 col-12">
               <h2 class="display-4" class="text-center"> Welcome to <span style="color: #FF0000; font-weight: bold;">Tour</span><span style="color:#0000FF; font-weight: bold;">Buddie</span></h2>
               <p class="py-3" align="justify">Tourbuddie is an online based tourism management website, that mentors you in your trip from beginning to end. Our main focus is to establish a system that travel lovers can enjoy each & every second of their adventures and explore every corner of the world without any kind of harassment. We provide services for solo riders, couple tours, family tours, and package tours within your pocket-friendly budget. As an established travel management firm, we take great satisfaction in planning remarkable journeys and creating priceless experiences for tourists from all walks of life.
               </p>
               <a href="about.php"class="btn btn-primary" style="border-radius:15px" > Read More </a>
          </div>
          </div>
     </div>
</section-2>

 <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                    About us section end 
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>


<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                    LIVE NUMBER COUNT SECTION STARTS
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->                                                         
<section id="popular-destinations"
 class="my-4"
 class="py-4">
            <h2>Explore Our Statics</h2>
            <p> Get a glimpse of our tourism endeavors through key statistics and figures, showcasing our commitment to exceptional travel records</p>
 
  <main class="counter-container">
    <div class="numbers">
      <div class="numberscount">
      </div>
       <h3 class="counter" data-count="643">0</h3>
      <p> Total Tour Packages </p>
     
    </div>

    <div class="numbers">
      <div class="numberscount">
      </div>
      <h3 class="counter" data-count="386">0</h3>
      <p> Total Destinations</p>
    </div> 


    <div class="numbers">
      <div class="numberscount">
      </div>
      <h3 class="counter" data-count="165">0</h3>
      <p> Activities Adventures</p>
    </div>

    
    <div class="numbers">
      <div class="numberscount">
      </div>
      <h3 class="counter" data-count="423">0</h3>
      <p> Customized Itineraries </p>
    </div>


  </main>

   <script>
    // select the element
    const counters = document.querySelectorAll('.counter');

    // iterate through all the counter elements
    counters.forEach(counter => {
      // function to increment the counter
      function updateCount() {
        const target = +counter.getAttribute('data-count');
        const count = +counter.innerHTML;

        const inc = Math.floor((target - count) / 100);

        if (count < target && inc > 0) {
          counter.innerHTML = (count + inc);
          // repeat the function
          setTimeout(updateCount, 1);
        }
        // if the count not equal to target, then add remaining count
        else {
          counter.innerHTML = target;
        }
      }
      updateCount();
    });
  </script>
</section>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                      LIVE NUMBER COUNT SECTION ENDS
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                   POPULAR DESTINATION SECTION STARTS
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

 <section id="popular-destinations"
 class="my-4"
 class="py-4">
            <h2>You'll fall in love with India</h2>
            <p> India's enchanting blend of rich heritage, breathtaking landscapes, and vibrant cultures is sure to ignite a lifelong love affair with this captivating nation.</p>

 <div class="destination">
                <img src="images/Destination/destination10.jpg" alt="Destination 2">
                <a href="http://localhost/Tourbuddie/destination/manali.php"><h3>Manali</h3></a>
                <div class="icon">
              <i class="fas fa-map-marker-alt"> </i></div>
                <p>Himachal Pradesh <br> Manali's snow-capped peaks promise unforgettable mountain escapes.</p>
            </div>


            <div class="destination">
                <img src="images/Destination/destination1.jpg" alt="Destination 1">
              
                <a href="http://localhost/Tourbuddie/destination/goldentemple.php"><h3>Golden Temple </h3></a>
                <div class="icon">
              <i class="fas fa-map-marker-alt"> </i></div>
           <p>Punjab<br>
           The Golden Temple in Amritsar shines as a sacred symbol of Sikhism. 
           </p>
            </div>

            <div class="destination">
                <img src="images/Destination/destination2.jpg" alt="Destination 2">
               <a href=" "> <h3>Gwalior Fort</h3></a>
                <div class="icon">
              <i class="fas fa-map-marker-alt"> </i></div>
                <p>Madhya Pradesh
                  <br>
                Gwalior Fort stands as a testament to India's rich historical heritage.</p>
            </div>


<div class="destination">
                <img src="images/Destination/destination3.jpg" alt="Destination 2">
                <a href=" "><h3>Twang</h3></a>
                <div class="icon">
              <i class="fas fa-map-marker-alt"> </i></div>
                <p> Arunachal Pradesh <br>Tawang's breathtaking landscapes captivate with their natural beauty.</p>
            </div>


<div class="destination">
                <img src="images/Destination/destination4.jpg" alt="Destination 2">
                <a href=""><h3>Alleppy</h3></a>
                <div class="icon">
              <i class="fas fa-map-marker-alt"> </i></div>
                <p> Kerala <br> Alleppey city beckons with its serene backwaters.</p>
            </div>


            <div class="destination">
                <img src="images/Destination/destination5.jpg" alt="Destination 2">
                <a href=""><h3> Sudarban</h3></a>
                <div class="icon">
              <i class="fas fa-map-marker-alt"> </i></div>
                <p> West Bengal <br> The Sundarbans, a UNESCO World Heritage Site, enchant with their unique mangrove ecosystem.</p>
            </div>


            <div class="destination">
                <img src="images/Destination/destination6.jpg" alt="Destination 2">
                <a href=""><h3>Umngot River</h3></a>
                <div class="icon">
              <i class="fas fa-map-marker-alt"> </i></div>
                <p> Meghalaya <br> The Umngot River in Meghalaya showcases crystal-clear waters amidst stunning landscapes.</p>
            </div>

            <div class="destination">
                <img src="images/Destination/destination7.jpg" alt="Destination 2">
                <a href=""><h3>Mehrangarh Fort</h3></a>
                <div class="icon">
              <i class="fas fa-map-marker-alt"> </i></div>
                <p> Rajasthan <br> Mehrangarh Fort in Jodhpur boasts imposing architecture and history.</p>
            </div>

            <div class="destination">
                <img src="images/Destination/destination8.jpg" alt="Destination 2">
                <a href=""><h3>Marine Drive</h3></a>
                <div class="icon">
              <i class="fas fa-map-marker-alt"> </i></div>
                <p>Mumbai, Maharastra <br>  Marine Drive in Mumbai offers a picturesque view of the Arabian Sea. </p>
            </div>

            <div class="destination">
                <img src="images/Destination/destination9.jpg" alt="Destination 2">

               <a href=""> <h3>Ooty</h3></a>
                <div class="icon">
              <i class="fas fa-map-marker-alt"> </i></div>
                <p>Tamil Nadu <br>  Ooty is a tranquil hill station known for its scenic beauty. </p>
            </div>

           

            <!-- Add more destination blocks as needed -->

        </section>                                                               

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                     DESTINATION SECTION ENDS
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                                                 
                                                                

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- 
                                                                  Our services section starts 
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



<section class="my-4">                                                      
     <div class="py-4">
        <h2 class="text-center">Our Expertise</h2>
        <p align="middle">Explore our comprehensive range of services, tailored to make your travel dreams a reality, from seamless trip planning to exceptional customer support.</p>
      </div>
      <div class="row">
        <div class="column">
          <div class="card-1">
            <div class="icon-wrapper">
              <i class="fas fa-hotel"></i>
            </div>
            <h3>Afforable Hotels</h3>
            <p-1>
              Comfortably stay at our budget-friendly hotel with fantastic amenities and a handy location—without breaking the bank.
            </p-1>
          </div>
        </div>
        <div class="column">
          <div class="card-1">
            <div class="icon-wrapper">
              <i class="fas fa-map"></i>
            </div>
            <h3>Tour Planning</h3>
            <p-1>
            Take off on exciting travels with the help of our skillfully developed tour planning services, which will make sure that every moment of your journey is loaded with adventure and discovery.
            </p-1>
          </div>
        </div>
        <div class="column">
          <div class="card-1">
            <div class="icon-wrapper">
              <i class="fas fa-hiking"></i>
            </div>
            <h3>Adventutes</h3>
            <p-1>
             Embark on a thrilling journey of discovery and excitement with our unforgettable adventures, where every step leads to a new and extraordinary experience.
            </p-1>
          </div>
        </div>
        <div class="column">
          <div class="card-1">
            <div class="icon-wrapper">
              <i class="fas fa-plane"></i>
            </div>
            <h3>Pocket-friendly transport tickets</h3>
            <p-1>
              Discover the joy of exploring your dream destinations without breaking the bank, thanks to our pocket-friendly transport tickets that offer affordability without compromising on your travel experience.
            </p-1>
          </div>
        </div>
        <div class="column">
          <div class="card-1">
            <div class="icon-wrapper">
              <i class="fas fa-broom"></i>
            </div>
            <h3>Service Heading</h3>
            <p-1>
             Experience unparalleled service excellence that transforms your travel dreams into unforgettable memories.</p-1>
          </div>
        </div>
        <div class="column">
          <div class="card-1">
            <div class="icon-wrapper">
              <i class="fas fa-user"></i>
            </div>
            <h3>24/7 Customer Support</h3>
            <p-1>
Rest easy knowing that our dedicated 24/7 customer support team is always here to assist you, ensuring your travel experience is seamless and worry-free.</p-1>
          </div>
        </div>
     </div>
    </section>

<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                 our services section ends 
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

                                                  
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- 
                                                                    Sale Banner design starts 
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

<div class="banner-container">

    <div class="banner">
        <div class="shoe">
            <img src="images/tour1.png" alt="" style="height: 100%">
        </div>
        <div class="content">
            <span>upto</span>
            <h3>75% 0ff</h3>

            <p>offer ends after 5 days</p>
            <a href="package.php" class="btn">veiw offer</a>
        </div>
        <div class="women">
            <img src="images/women.png" alt="">
        </div>
    </div>

</div>

<!-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                 Sale banner design ends 
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ 
                                                                  Offer section start 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<section-1 class="my-4">
     <div class="py-4">
          <h2 class="text-center"> Exclusive Deals </h2>
          <p align="middle">Discover the finest offers in our best offers area for exceptional prices and exclusive discounts on a variety of goods and services. </p>
     </div> 



<div class="offer__grid">
        <div class="offer__card">
          <img src="images/flight1.jpg" alt="popular hotel" />
          <div class="offer__content">
            <div class="offer__card__header">
                <h4> Get upto 40%off on Flight booking</h4>
            </div>
            <div class="offer_coupon">
                <h5 style="font-weight: 400;"> Use coupon <span style="font-weight:bold; color: #FF0000;">FLIGHT69BOOK</span></h5>
                <a href="package.php"><button>know more</button></a>
                 <p style="font-size:12px">Valid till 25th Jan</p>
            </div>
          </div>
        </div>

        <div class="offer__card">
          <img src="images/offer_2.jpg" alt="popular hotel" />
          <div class="offer__content">
            <div class="offer__card__header">
               <h4> Get upto 65%off on your 1st hotel booking</h4>
            </div>
            <div class="offer_coupon">
                <h5 style="font-weight: 400;"> Use coupon code <span style="font-weight:bold; color: #FF0000;">YOURHOTEL65</span></h5>
                <a href="package.php"><button>know more</button></a>
                 <p style="font-size:12px">Valid till 25th Feb</p>
            </div>
          </div>
        </div>

        <div class="offer__card">
          <img src="images/blogging9.jpg" alt="popular hotel" />
          <div class="offer__content">
            <div class="offer__card__header">
             <h4> Get upto 33%off on Summar Holiday </h4>
            </div> 
            <div class="offer_coupon">
                <h5 style="font-weight: 400;"> Use coupon <span style="font-weight:bold; color: #FF0000">HOTSUMMER@23</span></h5>
                <a href="package.php"><button>know more</button></a>
                 <p style="font-size:12px">Valid till 20th March</p>
            </div>
          </div>
        </div>

         <div class="offer__card">
          <img src="images/OFFER2.jpg" alt="popular hotel" />
          <div class="offer__content">
            <div class="offer__card__header">
             <h4> Grab upto 35%off on Honeymoon Package</h4>
            </div> 
            <div class="offer_coupon">
                <h5 style="font-weight: 400;"> Use coupon <span style="font-weight:bold; color:#FF0000">Honeymoon#143</span></h5>
                <a href="package.php"><button>know more</button></a>
                 <p style="font-size:12px">Valid till 31st Mar</p>
            </div>
          </div>
        </div>
   <div class="offer__card">
          <img src="images/hillstation.jpg" alt="popular hotel" />
          <div class="offer__content">
            <div class="offer__card__header">
             <h4> Get upto 49%off on Flight booking</h4>
            </div> 
            <div class="offer_coupon">
                <h5 style="font-weight: 400;"> Use coupon <span style="font-weight:bold; color:#FF0000">@89Hillstation</span></h5>
                <a href="package.php"><button>know more</button></a>
                 <p style="font-size:12px">Valid till 25th Dec</p>
            </div>
          </div>
        </div>

      </div>


</section-1>



<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ 
                                                                  Offer section ends 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- 
                                                                    Our Packages Start 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<section-1 class="my-4">
     <div class="py-4">
          <h2 class="text-center"> Best-in-Class Packages </h2>
          <p align="middle">Explore our gallery area to take a visual tour of our activities and experiences, which are beautifully captured in pictures </p>
     </div>


<div class="package-container">

<div class="package-card">
        <img src="images/biketour.jpg" alt="Package Image">
        <div class="package-details">
            <h3 align="middle" > Seven sister Bike Adventure</h3>
            <p align="middle">Experience an unforgettable journey through India's 'Seven Sisters' on our exclusive bike trip package, uncovering hidden gems in the Northeast.</p>
            <div class="duration">
            <p> Total Duration: 35 days</p>
            </div>
            <div class="package-info">
                
                <div class="price"><span style="font-size: 12px; color: black;"> Starting from</span> <br>
                    ₹1,199,999
                    <br>
                    <span style="font-size: 12px; color:goldenrod;">*Starts from Guwahati</span>
                    </div>
                   <div class="explore">
                     <a href="#">View Package Details</a>
                     </div>
                
            </div>
        </div>
    </div>


<div class="package-card">
        <img src="images/kerala_package.jpg" alt="Package Image" style="height:200px">
        <div class="package-details">
            <h3 align="middle" > Kerala Backwaters Retreat</h3>
            <p align="middle"> Enjoy a romantic gateway in Kerala's serene backwaters. Stay in traditional houseboats, go on canoe rides, and savor kerala cruisine while surrounded by lush greenary</p>
            <div class="duration">
            <p> Total Duration: 3-4 days</p>
            </div>
            <div class="package-info">
                
              <div class="price"><span style="font-size: 12px; color: black;"> Starting from</span> <br>
                    ₹19,999/person
                    <br>
                    <span style="font-size: 12px; color:goldenrod;">*Starts from Kerala</span>
                    </div>
                    <div class="explore">
                     <a href="#">View Package Details</a>
                     </div>
                </div>
            
        </div>
    </div> 

    <div class="package-card">
        <img src="images/rajastan.jpg" alt="Package Image" style="height:200px">
        <div class="package-details">
            <h3 align="middle" > Rajastan Cultural Explore</h3>
            <p align="middle">Discover the rich cultural heritage of Rajasthan, visiting iconic cities like Jaipur, Udaipur, and Jodhpur, and exploring historical forts and palaces. </p>
            <div class="duration">
            <p> Total Duration: 7-10 days</p>
            </div>
            <div class="package-info">
              
                <div class="price"><span style="font-size: 12px; color: black;"> Starting from</span> <br>
                    ₹34,999/person
                    <br>
                    <span style="font-size: 12px; color:goldenrod;">*Starts from Delhi</span>
                    </div>
                    <div class="explore">
                     <a href="#">View Package Details</a>
                     </div>
                
            </div>
        </div>
    </div> 


    <div class="package-card">
        <img src="images/andaman.jpg" alt="Package Image" style="height:200px">
        <div class="package-details">
            <h3 align="middle" > Andaman Island Adventure</h3>
            <p align="middle">Explore the underwater world of the Andaman Islands through snorkeling and scuba diving, and relax on pristine beaches </p>
            <div class="duration">
            <p> Total Duration: 5-7 days</p>
            </div>
            <div class="package-info">
            
                <div class="price"><span style="font-size: 12px; color: black;"> Starting from</span> <br>
                    ₹29,999/Person
                    <br>
                    <span style="font-size: 12px; color:goldenrod;">*Starts from Delhi</span>
                    </div>
                    <div class="explore">
                     <a href="#">View Package Details</a>
                     </div>
                
            </div>
        </div>
    </div> 


   <div class="package-card">
        <img src="images/sptivalley.jpg" alt="Package Image" style="height:200px">
        <div class="package-details">
            <h3 align="middle" > Spiti Valley Trekking Expedition</h3>
            <p align="middle">Trek through the rugged terrain of Spiti Valley, visiting monasteries and witnessing breathtaking landscapes </p>
            <div class="duration">
            <p> Total Duration: 12-14 days</p>
            </div>
            <div class="package-info">
                
                <div class="price"><span style="font-size: 12px; color: black;"> Starting from</span> <br>
                    ₹19,999/Person
                     <br>
                    <span style="font-size: 12px; color:goldenrod;">*Starts from Delhi</span>
                    </div>
                    <div class="explore">
                     <a href="#">View Package Details</a>
                     </div>
               
            </div>
        </div>
    </div> 



</div>
</section-1>


<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------                                      
                                                        Our Packages section end
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------                                      
                                                        Popular Hotel section start
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
   <section-2 class="my-4">
     <div class="py-4">
          <h2 class="text-center">Popular Hotels </h2>
          <p align="middle">Experience luxury and breathtaking views at our top-rated seaside resort, where you can relax and unwind in style.</p>
     </div>

      <div class="popular__grid">
        <div class="popular__card">
          <img src="images/hotel1.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Treebo Trend Vsaffron RegencyOpens in new window</h4>
              <h4>₹3,111/night</h4>
            </div>
            <div class="icon">
              <i class="fas fa-map-marker-alt"><span style="color:black; font-weight: 200; font-size: 18px; font-family: cursive;">Alleppey, Kerala</span></i></div> 
          </div>
        </div>

        <div class="popular__card">
          <img src="images/hotel2.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Armstrong VillaOpens in new window</h4>
              <h4> ₹1,199/night </h4>
            </div>
       <div class="icon">
              <i class="fas fa-map-marker-alt"><span style="color:black; font-weight: 200; font-size: 18px; font-family: cursive;">Shilong, Meghalaya</span></i></div> 
          </div>
        </div>

        <div class="popular__card">
          <img src="images/hotel3.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Blue Ocean The Fern Resort and Spa</h4>
              <h4>₹6,599/night</h4>
            </div>
          <div class="icon">
              <i class="fas fa-map-marker-alt"><span style="color:black; font-weight: 200; font-size: 18px; font-family: cursive;">Malgund, Mumbai</span></i></div> 
          </div>
        </div>

        <div class="popular__card">
          <img src="images/hotel4.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Darjeeling Nest</h4>
              <h4>₹1,315/night</h4>
            </div>
            <div class="icon">
              <i class="fas fa-map-marker-alt"><span style="color:black; font-weight: 200; font-size: 18px; font-family: cursive;">Darjeeling, West Bengal</span></i></div> 
          </div>
        </div>

        <div class="popular__card">
          <img src="images/hotel5.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>La Vaca India Manali</h4>
              <h4>₹649/night</h4>
            </div>
            <div class="icon">
              <i class="fas fa-map-marker-alt"><span style="color:black; font-weight: 200; font-size: 18px; font-family: cursive;">Manali</span></i></div> 
          </div>
        </div>

        <div class="popular__card">
          <img src="images/hotel6.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>FabHotel Floyds</h4>
              <h4>₹ 2,369/night</h4>
            </div>
            <div class="icon">
              <i class="fas fa-map-marker-alt"><span style="color:black; font-weight: 200; font-size: 18px; font-family: cursive;">South Delhi, New Delhi</span></i></div> 
          </div>
        </div>


 <div class="popular__card">
          <img src="images/hotel7.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Dreamyard Udaipur</h4>
              <h4>₹780/night</h4>
            </div>
          <div class="icon">
              <i class="fas fa-map-marker-alt"><span style="color:black; font-weight: 200; font-size: 18px; font-family: cursive;">Udaipur, Rajasthan</span></i></div> 
          </div>
        </div>


 <div class="popular__card">
          <img src="images/hotel8.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Itsy By Treebo - Albie Stay Inns</h4>
              <h4>₹1,323/night</h4>
            </div>
            <div class="icon">
              <i class="fas fa-map-marker-alt"><span style="color:black; font-weight: 200; font-size: 18px; font-family: cursive;">Chandigarh</span></i></div> 
          </div>
        </div>



      </div>
    </section-2>


<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------                                      
                                                        Popular Hotel section ends
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------                                      
                                                       Gallery section start
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<section-1 class="my-4">
     <div class="py-4">
          <h2 class="text-center"> See It Through Our Lens </h2>
          <p align="middle">Explore our gallery area to take a visual tour of our activities and experiences, which are beautifully captured in pictures </p>
     </div>
<div class="tours-container">
        <div class="tour-card" data-aos="fade-up">
            <img src="images/12.jpg" class="tour-img" alt="tour-image">
            <div class="tour-body">
                <h3 class="tour-name">Manali</h3>
               
            </div>
        </div>

        <div class="tour-card" data-aos="fade-up">
            <img src="images/13.jpg" class="tour-img" alt="tour-image">
            <div class="tour-body">
                <h3 class="tour-name">Ghum Hill station</h3>
            </div>
        </div>

        <div class="tour-card" data-aos="fade-up">
            <img src="images/15.jpg" class="tour-img" alt="tour-image">
            <div class="tour-body">
                <h3 class="tour-name">Taj Mahal,Agra</h3>
            </div>
        </div>

        <div class="tour-card" data-aos="fade-up">
            <img src="images/16.jpg" class="tour-img" alt="tour-image">
            <div class="tour-body">
                <h3 class="tour-name">khajjiar,Himachal Pradesh</h3>
                
            </div>
        </div>

        <div class="tour-card" data-aos="fade-up">
            <img src="images/14.jpg" class="tour-img" alt="tour-image">
            <div class="tour-body">
                <h3 class="tour-name">Humpi, Karnataka</h3>  
            </div>
        </div>

        <div class="tour-card" data-aos="fade-up">
            <img src="images/17.jpg" class="tour-img" alt="tour-image">
            <div class="tour-body">
                <h3 class="tour-name">Gulmarg, Jammu & Kashmir</h3>
            </div>
        </div>
              
    </div>
</section-1>


<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------                                      
                                                       Gallery section ends
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



                                                        <!-- Blog Section starts -->
<section-1 class="my-4">
     <div class="py-4">
          <h2 class="text-center"> Your Journey, Our Stories </h2>
          <p align="middle"> Explore the latest travel trends and destination updates in our travel blogs, while staying informed about travel-related news in our dedicated news section</p>

  <div class="container">
            <div class="intro my-8"></div>
            <div class="row articles">
                <div class="col-lg-4 col-md-4 col-12">
                  <a href=" http://localhost/Tourbuddie/blog/blogpost2.php"><img class="img-fluid" src="images/blog1.jpg" style="border-radius: 15px;"></a>
                    <a href=" http://localhost/Tourbuddie/blog/blogpost2.php"><h3 class="pt-3 name">Unveiling the Thrill: Top 10 Adventure Vacation Spots in India</h3></a>
                    <p class="description"> India offers diverse cultures, landscapes, and experiences, including thrilling adventures in the Himalayas and pristine beaches. Explore top 10 adventure vacation places in India. <a href="http://localhost/Tourbuddie/blog/blogpost2.php">More</a></p> 
                </div>

                
               <div class="col-lg-4 col-md-4 col-12">
            
                    <a href="#"><img class="img-fluid" src="images/blog2.jpg" style="border-radius: 15px;"></a>

                    <h3 class="pt-3 name">Roaring through the Himalayas: An Epic Motorcycle Journey in India</h3>
                    <p class="description">Strap on your helmet and rev up your engine for the motorcycle adventure of a lifetime, as we guide you through the breathtaking landscapes of the Indian Himalayas. <a href="#">More</a></p>
                     
                </div>

<div class="col-lg-4 col-md-4 col-12">
                  <a href="#"><img class="img-fluid" src="images/blog3.jpg" style="border-radius: 15px;"></a>
                    <h3 class="pt-3 name">The Golden Triangle: A Whirlwind Tour of India's Iconic Cities</h3>
                    <p class="description">Dive into the heart of India's culture, history, and heritage as we take you on a whirlwind tour of Delhi, Agra, and Jaipur, collectively known as the Golden Triangle.  <a href="#">More</a></p>
                     
                </div>

               <div class="col-lg-4 col-md-4 col-12">
                  <a href="#"><img class="img-fluid" src="images/blog4.jpg" style="border-radius: 15px;"></a>
                    <h3 class="pt-3 name">Wildlife Wonders: A Safari Experience in India's National Parks</h3>
                    <p class="description"> Embark on an unforgettable journey into India's wilderness, where tigers, elephants, and rhinoceros roam freely in their natural habitats.<a href="#">More</a></p>
                      
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                  <a href="#"><img class="img-fluid" src="images/blog5.jpg" style="border-radius: 15px;"></a>
                    <h3 class="pt-3 name">Rajasthan by Hot Air Balloon: A Bird's-Eye View of the Desert</h3>
                    <p class="description">Soar high above the desert landscapes of Rajasthan in a hot air balloon for a unique and breathtaking perspective of this royal state. <a href="#">More</a></p>
                      
                    </div>

                      <div class="col-lg-4 col-md-4 col-12">
                        <a href="#"><img class="img-fluid" src="images/blog6.jpg" style="border-radius: 15px;"></a>
                    <h3 class="pt-3 name">Yoga and Beyond: A Spiritual Retreat in Rishikesh</h3>
                    <p class="description">Find inner peace and rejuvenation amidst the serene surroundings of Rishikesh, the yoga capital of the world, where spirituality meets adventure.<a href="#">More</a> </p>
                      
                    </div>

<button class="button">
  <a href="blogs.php">More Blogs</a>
</button>

            </div>
        </div>
      </div>
    </div>





     </div>
</section-1>




                                                        <!-- Blog section ends --> 



                                                        <!-- FAQ section Starts -->
 
<div class="text-center">
    <h2 class="mt-4">Answers to Your Curiosities</h2>
    <p>Welcome to our Tourism FAQ – your go-to resource for answers to common questions about your upcoming travel adventure!</p>
  </div>
  <section class="container my-5" id="maincontent">
    <section id="accordion">
      <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-1" aria-expanded="false" data-toggle="collapse" href="#faq-1" role="button">
        <div class="position-relative">
          <h2 class="h4 m-0 pr-3">
            What should I pack for my adventure trip to India?
          </h2>
          <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
            <i class="fa fa-plus"></i>
          </div>
        </div>
      </a>
      <div class="collapse" id="faq-1" style="">
        <div class="card card-body border-0 p-0">
          <p>Packing essentials for an adventure trip to India may include comfortable clothing suitable for the season and region, sturdy footwear for walking and trekking, a first-aid kit, necessary medications, insect repellent, a power adapter, and a photocopy of your passport and important documents. Check our Adventure Travel Checklist for more tips and recommendations specific to your adventure type and location.</p>

        </div>
      </div>

      <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-2" aria-expanded="false" data-toggle="collapse" href="#faq-2" role="button">
        <div class="position-relative">
          <h2 class="h4 m-0 pr-3">
            How can I book accommodations in India?
          </h2>
          <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
            <i class="fa fa-plus"></i>
          </div>
        </div>
      </a>
      <div class="collapse" id="faq-2" style="">
        <div class="card card-body border-0 p-0">
          <p> You can book accommodations in India through various online platforms like Booking.com, Airbnb, Expedia, or by directly visiting the websites of hotels, resorts, and guesthouses in your desired location. Additionally, travel agencies can help you plan and book accommodations as part of a tour package.</p>
          <p>
          </p>
        </div>
      </div>

      <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-3" aria-expanded="false" data-toggle="collapse" href="#faq-3" role="button">
        <div class="position-relative">
          <h2 class="h4 m-0 pr-3">
             What is the best time to visit India for a holiday?
          </h2>
          <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
            <i class="fa fa-plus"></i>
          </div>
        </div>
      </a>
      <div class="collapse" id="faq-3" style="">
        <div class="card card-body border-0 p-0">
          <p>The ideal time to visit India varies by region and the type of experience you seek. Generally, the months from October to March are considered the best for most parts of the country when the weather is pleasant. However, some regions, like Ladakh and Himachal Pradesh, are best visited during the summer months for adventure activities, while Kerala is lovely year-round.</p>
          <p>
          </p>
        </div>
      </div>

      <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary  border-top" aria-controls="faq-4" aria-expanded="false" data-toggle="collapse" href="#faq-4" role="button">
        <div class="position-relative">
          <h2 class="h4 m-0 pr-3">
            How can I obtain a tourist visa for India?
          </h2>
          <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
            <i class="fa fa-plus"></i>
          </div>
        </div>
      </a>
      <div class="collapse" id="faq-4">
        <div class="card card-body border-0 p-0">
          <p>To apply for a tourist visa to India, visit the official website of the Indian Visa Application Center (VFS Global) or the Indian embassy/consulate in your country. Follow the application process, provide the required documents, and schedule an appointment if necessary. Be sure to check the latest visa requirements and updates.</p>
          <p>
          </p>
        </div>
      </div>

      <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary  border-top" aria-controls="faq-5" aria-expanded="false" data-toggle="collapse" href="#faq-5" role="button">
        <div class="position-relative">
          <h2 class="h4 m-0 pr-3">
            What are the top tourist destinations in India?
          </h2>
          <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
            <i class="fa fa-plus"></i>
          </div>
        </div>
      </a>
      <div class="collapse" id="faq-5">
        <div class="card card-body border-0 p-0">
          <p>India boasts a rich tapestry of attractions. Some must-visit destinations include the iconic Taj Mahal in Agra, the historic Amber Fort in Jaipur, the serene backwaters of Kerala, the spiritual city of Varanasi, and the vibrant beaches of Goa. Explore our Destination Guide for more recommendations.</p>
          <p>
          </p>
        </div>
      </div>

      <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary  border-top" aria-controls="faq-6" aria-expanded="false" data-toggle="collapse" href="#faq-6" role="button">
        <div class="position-relative">
          <h2 class="h4 m-0 pr-3">
            Are there any safety tips for female travelers in India?
          </h2>
          <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
            <i class="fa fa-plus"></i>
          </div>
        </div>
      </a>
      <div class="collapse" id="faq-6">
        <div class="card card-body border-0 p-0">
          <p>Yes, safety is a top priority. Female travelers in India should dress modestly, avoid walking alone at night, and use reputable transportation services. It's advisable to carry a local SIM card for communication and to research safe accommodations in advance. Be cautious of unwanted attention and trust your instincts. Many tourist destinations in India are safe, but being vigilant is essential.</p>
          <p>
          </p>
        </div>
      </div>
    </section>
  </section>

                                                          <!-- FAQ section ends -->
                                                        
       

      <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------->
                                                                  <!-- Call to action  -->
<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">

            <h2 class="h2 section-title">Ready For Unforgatable Travel. Remember Us!</h2>

            <p class="section-text">
              Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque
              laudantium. Sit ornare
              mollitia tenetur, aptent.
            </p>
          </div>

         <a href="contact.php"> <button class="btn btn-primary">Talk with us!</button></a>

        </div>
      </section>

    </article>
  </main>


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
             <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook"></i></a></li>
             <li><a href="#" class="icoinstagram" title="Instagram"><i class="fab fa-instagram"></i></a></li>
             <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
             <li><a href="#" class="icoYoutube" title="Youtube"><i class="fab fa-youtube"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
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





<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                                                    <!-- footer section ends -->

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
                                       
    <script src="script.js"></script> 

</body> 
</html>