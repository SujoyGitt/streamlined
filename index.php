<?php include 'utils/config/config.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Streamlined</title>
     <!-- css link start here -->
     <?php include 'utils/header-link.php';?>
    <!-- css link end here -->
  </head>
  <body>
     <!-- header start here -->
     <?php include 'utils/header.php';?>
     <!-- header end here -->

    <!-- banner start here -->
    <section class="banner pb-5 pb-lg-0">
      <div
        class="container-fluid d-flex justify-content-between align-items-center px-2 px-lg-0 flex-wrap"
      >
        <div class="left col-12 col-lg-6 pl-150">
          <h1>Hire Professional Chauffeur Service in London</h1>
          <a href="<?=$_baseurl?>book-now/" class="commonbtn mt-4">Book Now</a>
        </div>
        <div
          class="right col-12 col-lg-6 d-lg-flex justify-content-center align-items-center"
        >
          <div class="bg-img">
            <img
              src="<?=$_baseurl?>assets/images/banner-right-img1.webp"
              class="img1"
              alt=""
            />
            <img
              src="<?=$_baseurl?>assets/images/banner-right-img2.webp"
              class="img2"
              alt=""
            />
          </div>
          <booking-widget
            primarycolor="black"
            masteraccountid="2085823"
            bookingpageurl="https://steppercode.com/raining360cabs/book-now/"
          ></booking-widget>
        </div>
      </div>
    </section>

    <!-- feature start here -->
    <section class="feature py-5">
      <div
        class="container d-flex flex-wrap justify-content-between align-items-center"
      >
        <div class="col-12 col-lg-4 col-xl-3 feature-card">
          <img src="<?=$_baseurl?>assets/images/hand.webp" alt="" />
          <h3>Easy Booking Process</h3>
          <p>Make a reservation in a few taps on your device, without leaving the comfort of your home. The process is simple, fast, and efficient. Enjoy the convenience of our ride-booking mobile app and website.</p>
        </div>
        <div class="col-12 col-lg-4 col-xl-3 feature-card">
          <img src="<?=$_baseurl?>assets/images/confirmation.webp" alt="" />
          <h3>Real-time Ride Updates</h3>
          <p>Our push notification feature allows you to receive updates on your trip. Stay updated on the go about any traffic changes, weather conditions, the driver’s ETA, and many more important details.</p>
        </div>
        <div class="col-12 col-lg-4 col-xl-3 feature-card">
          <img src="<?=$_baseurl?>assets/images/realtime-gps.webp" alt="" />
          <h3>GPS Tracking</h3>
          <p>Our GPS tracking system keeps you and us, aware of your current location for your safety and to find alternate routes to your destination if there are any. Stay in the loop on your journey.</p>
        </div>
      </div>
    </section>

    <section class="fleet">
      <div class="container d-flex justify-content-between flex-wrap">
        <h2 class="section-title">Our Vehicles</h2>
        <a
          href="<?=$_baseurl?>fleet/"
          class="d-flex justify-content-between align-items-center more"
          >More Fleet <img src="<?=$_baseurl?>assets/images/right-top-arrow.webp" alt=""
        /></a>
      </div>
      <div class="container-fluid pl-150 pe-0">
        <div class="owl-carousel owl-theme fleet-carousel">
          <a href="<?=$_baseurl?>vehicles/bmw/" class="item d-block">
            <h3 class="section-subtitle">BMW 7 Series</h3>
            <p>The BMW 7 Series puts luxury and innovation to a different level. Book our BMW chauffeur service and get a ride in a smartly designed car providing advanced technology and unparalleled comfort. The vehicle also offers a spacious interior and refined craftsmanship
            </p>
            <img src="<?=$_baseurl?>assets/images/bmw-7.webp" alt="" />
            <ul class="d-flex gap-3">
              <li>
                <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                <p>Max 4 passengers</p>
              </li>
              <li>
                <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                <p>Max 2 Bag</p>
              </li>
            </ul>
          </a>
          <a href="<?=$_baseurl?>vehicles/range-rover-sport/" class="item d-block">
            <h3 class="section-subtitle">Range Rover Sport</h3>
            <p>The Range Rover Sport combines rugged capability with refined luxury, making it the perfect choice for urban and off-road adventures. With its powerful engine, advanced features, and plush interior, the Range Rover Sport offers a thrilling driving experience.
            </p>
            <img src="<?=$_baseurl?>assets/images/range-rover-sport.webp" alt="" />
            <ul class="d-flex gap-3">
              <li>
                <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                <p>Max  5 passengers</p>
              </li>
              <li>
                <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                <p>Max 3 Bags</p>
              </li>
            </ul>
          </a>
          <a href="<?=$_baseurl?>vehicles/range-rover-vogue/" class="item d-block">
            <h3 class="section-subtitle">Range Rover Vogue</h3>
            <p>Our Range Rover Vogue chauffeur service sets the standard for luxury SUVs. This car has an iconic design, a lavish interior, and cutting-edge technology. Whether you're travelling city streets or country roads, the Range Rover Vogue delivers uncompromising comfort
            </p>
            <img src="<?=$_baseurl?>assets/images/rr-vogue.webp" alt="" />
            <ul class="d-flex gap-3">
              <li>
                <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                <p>Max 5 passengers</p>
              </li>
              <li>
                <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                <p>Max 3 Bags</p>
              </li>
            </ul>
          </a>
          <a href="<?=$_baseurl?>vehicles/rolls-royce-ghost-chauffeur/" class="item d-block">
            <h3 class="section-subtitle">Rolls Royce Ghost</h3>
            <p>The Rolls Royce Ghost delivers high-class luxury and refinement. Ride with our skilled chauffeurs for a truly indulgent driving experience. With its exquisite design, whisper-quiet cabin, and effortless power, the Rolls Royce Ghost ensures that every journey is extraordinary.
            </p>
            <img src="<?=$_baseurl?>assets/images/rolls-royce-ghost.webp" alt="" />
            <ul class="d-flex gap-3">
              <li>
                <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                <p>Max 4 passengers</p>
              </li>
              <li>
                <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                <p>Max 2 Bags</p>
              </li>
            </ul>
          </a>
          <a href="<?=$_baseurl?>vehicles/mercedes-s-class-london/" class="item d-block">
            <h3 class="section-subtitle">Mercedes S Class</h3>
            <p>Our Mercedes S Class has been selected for its standard for luxury. It is made with advanced technology and has a warm and welcoming interior, perfect for rest, work or meetings on the move. Renowned for its comfort and performance, the Mercedes S Class offers a serene and luxurious ride.</p>
            <img src="<?=$_baseurl?>assets/images/mercedes-s-class.webp" alt="" />
            <ul class="d-flex gap-3">
              <li>
                <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                <p>Max 4 passengers</p>
              </li>
              <li>
                <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                <p>Max 2 Bags</p>
              </li>
            </ul>
          </a>
          <a href="<?=$_baseurl?>vehicles/mercedes-e-class-london/" class="item d-block">
            <h3 class="section-subtitle">Mercedes E Class</h3>
            <p>The Mercedes E Class combines elegance with athleticism, offering a perfect balance of style, comfort, and performance. It has a refined interior and advanced features, and you can ride in this vehicle for a smooth ride. The Mercedes E Class is ideal for passengers seeking both luxury and practicality.</p>
            <img src="<?=$_baseurl?>assets/images/mercedes-e-class.webp" alt="" />
            <ul class="d-flex gap-3">
              <li>
                <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                <p>Max 4 passengers</p>
              </li>
              <li>
                <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                <p>Max 2 Bags</p>
              </li>
            </ul>
          </a>
          <a href="<?=$_baseurl?>vehicles/mercedes-v-class-london/" class="item d-block">
            <h3 class="section-subtitle">Mercedes V Class</h3>
            <p>The Mercedes V Class redefines luxury MPVs with its spacious interior, versatile seating, and premium amenities. Whether you're travelling with family or colleagues, the Mercedes V Class offers exceptional comfort and flexibility.</p>
            <img src="<?=$_baseurl?>assets/images/mercedes-v-class.webp" alt="" />
            <ul class="d-flex gap-3">
              <li>
                <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                <p>Max 4 passengers</p>
              </li>
              <li>
                <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                <p>Max 8 Bags</p>
              </li>
            </ul>
          </a>
          <a href="<?=$_baseurl?>vehicles/bentley-flying-spur-chauffeur/" class="item d-block">
            <h3 class="section-subtitle">Bentley Flying Spur</h3>
            <p>The Bentley Flying Spur represents luxury and performance, combining exquisite design, complete comfort, and breathtaking power. The Bentley Flying Spur offers a truly unforgettable experience with its handcrafted interior and refined driving dynamics.</p>
            <img src="<?=$_baseurl?>assets/images/bently-flying-spur.webp" alt="" />
            <ul class="d-flex gap-3">
              <li>
                <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                <p>Max 4 passengers</p>
              </li>
              <li>
                <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                <p>Max 3 Bags</p>
              </li>
            </ul>
          </a>
        </div>
      </div>
    </section>

    <!-- how it start -->
    <section class="how-it-work mt-5">
      <h2 class="section-title text-center">Enjoy Luxury Chauffeur Service in London</h2>
      <div class="container d-flex flex-wrap justify-content-around align-items-center pt-5">
        <div class="left col-12 col-lg-6 col-xl-5 d-flex justify-content-between py-5 py-lg-0" >
          <div class="line text-center col-2 col-lg-1 d-flex flex-column gap-2 align-items-center" >
            <div class="number">1</div>
            <img src="<?=$_baseurl?>assets/images/dotted-line.webp" alt="" />
            <div class="number">2</div>
            <img src="<?=$_baseurl?>assets/images/dotted-line.webp" alt="" />
            <div class="number">3</div>
            <img src="<?=$_baseurl?>assets/images/dotted-line.webp" alt="" />
            <div class="number">4</div>

          </div>
          <div class="col-10 px-3 px-lg-0">
            <div class="text-content">
              <h3 class="section-subtitle">Fast and efficient Reservation Process</h3>
              <p>When you make a reservation with us, you'll immediately see how we stand apart for our attention to detail. </p>
            </div>
            <div class="text-content mt-4 mt-sm-5">
              <h3 class="section-subtitle">Experience Peak Customer Service</h3>
              <p>Our drivers in London are professional, kind, and committed to making your trip enjoyable. </p>
            </div>
            <div class="text-content mt-4 mt-sm-5">
              <h3 class="section-subtitle">Travel In Utmost Safety And Comfort</h3>
              <p>We make sure you travel in elegance by providing a selection of high-end cars.  </p>
            </div>
            <div class="text-content mt-4 mt-sm-5">
              <h3 class="section-subtitle">Relax And Enjoy Your Service With Us</h3>
              <p>You can always count on dependability, timeliness, and a stress-free trip when you hire our chauffeur service in London. </p>
            </div>
          </div>
        </div>
        <div class="right col-12 col-lg-6 col-xl-5 d-flex justify-content-end">
          <img src="<?=$_baseurl?>assets/images/how-it-works-right.webp" alt="" />
        </div>
      </div>
    </section>

    <!-- service section start hrer -->
    <section class="service">
      <div class="container d-flex justify-content-between flex-wrap">
        <h2 class="section-title">Chauffeur Services We Offer</h2>
        <a
          href="<?=$_baseurl?>service/"
          class="d-flex justify-content-between align-items-center more"
          >More Services
          <img src="<?=$_baseurl?>assets/images/right-top-arrow-service.webp" alt=""
        /></a>
      </div>
      <div class="container-fluid pe-0 pl-150">
        <div class="owl-carousel owl-theme service-carousel">
          <div class="item">
            <div class="card-img">
              <img src="<?=$_baseurl?>assets/images/airport-transfer.webp" alt="" />
            </div>
            <div class="card-content">
              <h3>Airport Transfers</h3>
              <p>Enjoy a smooth and stress-free transition to or from the airport, with guaranteed on-time arrival and assistance with your luggage.</p>
              <a  href="<?=$_baseurl?>services/airport-transfers-london/" class="service-btn"
                ><img src="<?=$_baseurl?>assets/images/right-top-arrow-service.webp" alt=""
              /></a>
            </div>
          </div>
          <div class="item">
            <div class="card-img">
              <img src="<?=$_baseurl?>assets/images/corporate-transfer.webp" alt="" />
            </div>
            <div class="card-content">
              <h3>Corporate Services</h3>
              <p> Make a professional impression by arriving in a chauffeur-driven vehicle. Our chauffeurs are experienced in managing time and traffic, ensuring you arrive punctually.</p>
              <a  href="<?=$_baseurl?>services/corporate-chauffeurs-london/" class="service-btn"
                ><img src="<?=$_baseurl?>assets/images/right-top-arrow-service.webp" alt=""
              /></a>
            </div>
          </div>
          <div class="item">
            <div class="card-img">
              <img src="<?=$_baseurl?>assets/images/wedding.webp" alt="" />
            </div>
            <div class="card-content">
              <h3>Weddings</h3>
              <p>Upgrade your wedding transportation with our wedding chauffeur service. We provide luxury transportation that adds a touch of elegance to your occasion.</p>
              <a  href="<?=$_baseurl?>services/wedding-chauffeur-cars-london/" class="service-btn"
                ><img src="<?=$_baseurl?>assets/images/right-top-arrow-service.webp" alt=""
              /></a>
            </div>
          </div>
          <div class="item">
            <div class="card-img">
              <img src="<?=$_baseurl?>assets/images/executive-chauffeur.webp" alt="" />
            </div>
            <div class="card-content">
              <h3>Executive Chauffeur Service</h3>
              <p>With individualised transportation options catered to your business requirements, our executive chauffeur service will elevate your corporate trip experience.</p>
              <a  href="<?=$_baseurl?>services/executive-chauffeur-cars-london/" class="service-btn"
                ><img src="<?=$_baseurl?>assets/images/right-top-arrow-service.webp" alt=""
              /></a>
            </div>
          </div>
          <div class="item">
            <div class="card-img">
              <img src="<?=$_baseurl?>assets/images/vip.webp" alt="" />
            </div>
            <div class="card-content">
              <h3> VIP Chauffeur London</h3>
              <p> Designed for individuals who want the finest standards of comfort and confidentiality, our VIP chauffeur service in London is the pinnacle of exclusivity and luxury.</p>
              <a href="<?=$_baseurl?>services/vip-chauffeur-cars-london/" class="service-btn"
                ><img src="<?=$_baseurl?>assets/images/right-top-arrow-service.webp" alt=""
              /></a>
            </div>
          </div>
          <div class="item">
            <div class="card-img">
              <img src="<?=$_baseurl?>assets/images/event-chauffeur.webp" alt="" />
            </div>
            <div class="card-content">
              <h3>Event Chauffeur Services</h3>
              <p>Whether it's a corporate function, wedding, or gala, make a big impression at your next event with our event chauffeur services, which guarantee you arrive in style and on time.</p>
              <a  href="<?=$_baseurl?>services/event-transportation/" class="service-btn"
                ><img src="<?=$_baseurl?>assets/images/right-top-arrow-service.webp" alt=""
              /></a>
            </div>
          </div>
          <div class="item">
            <div class="card-img">
              <img src="<?=$_baseurl?>assets/images/private-jet.webp" alt="" />
            </div>
            <div class="card-content">
              <h3>Private Jet Chauffeur</h3>
              <p>For a smooth and convenient travel experience, take advantage of our private jet chauffeur service for ground transportation to and from private jet ports.</p>
              <a  href="<?=$_baseurl?>services/private-avaition/" class="service-btn"
                ><img src="<?=$_baseurl?>assets/images/right-top-arrow-service.webp" alt=""
              /></a>
            </div>
          </div>
          <div class="item">
            <div class="card-img">
              <img src="<?=$_baseurl?>assets/images/global-chauffeur.webp" alt="" />
            </div>
            <div class="card-content">
              <h3>Global Chauffeur Service</h3>
              <p> Take advantage of our first-rate chauffeur service outside of London by travelling the world with our worldwide chauffeur service, which provides dependable and polished transportation options.</p>
              <a  href="<?=$_baseurl?>services/worldwide-chauffeuring/" class="service-btn"
                ><img src="<?=$_baseurl?>assets/images/right-top-arrow-service.webp" alt=""
              /></a>
            </div>
          </div>
          <div class="item">
            <div class="card-img">
              <img src="<?=$_baseurl?>assets/images/london-seightseeing.webp" alt="" />
            </div>
            <div class="card-content">
              <h3> London Sightseeing Chauffeur</h3>
              <p> With our sightseeing chauffeur service, you can discover the city's well-known sites and little-known secrets while you sit back, unwind, and take it all in while our professional drivers take care of the rest.</p>
              <a  href="<?=$_baseurl?>services/sight-seeing/" class="service-btn"
                ><img src="<?=$_baseurl?>assets/images/right-top-arrow-service.webp" alt=""
              /></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- reliablity start here -->
    <section class="reliablity py-5">
      <div
        class="container d-flex justify-content-around align-items-center flex-wrap"
      >
        <div class="left col-12 col-lg-5">
          <div class="img1">
            <img src="<?=$_baseurl?>assets/images/riliablity-left-1.webp" alt="" />
          </div>
          <div class="img2 d-flex gap-3 align-items-start mt-4 w-100">
            <img
              src="<?=$_baseurl?>assets/images/riliablity-left-2.webp"
              alt=""
              class="img2-1"
            />
            <img
              src="<?=$_baseurl?>assets/images/riliablity-left-3.webp"
              alt=""
              class="img2-2"
            />
          </div>
        </div>
        <div class="right col-12 col-lg-5 col-xl-4">
          <h2 class="section-title">Our Professional Chauffeurs </h2>
          <p class="py-3">Our professional chauffeurs in London are the heart of our service. They are skilled and they understand the importance of customer service, ensuring you enjoy a reliable ride every time. Our chauffeurs are:
          </p>
          <ul>
            <li class="d-flex gap-2 align-items-center py-2">
              <img src="<?=$_baseurl?>assets/images/tick.webp" alt="" />Punctual
            </li>
            <li class="d-flex gap-2 align-items-center py-2">
              <img src="<?=$_baseurl?>assets/images/tick.webp" alt="" />Courteous
            </li>
            <li class="d-flex gap-2 align-items-center py-2">
              <img src="<?=$_baseurl?>assets/images/tick.webp" alt="" />Flexible
            </li>
            <li class="d-flex gap-2 align-items-center py-2">
              <img src="<?=$_baseurl?>assets/images/tick.webp" alt="" />Professional
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- testimonial start here -->
    <?php include 'utils/testimonial.php';?>

    <!-- trained secttion start here -->
    <section class="trained">
      <div
        class="container d-flex justify-content-center align-items-center py-5 flex-wrap"
      >
        <div class="col-12 col-md-6 col-lg-2 mt-3">
          <span>Fun facts about our company</span>
          <h2 class="section-subtitle">Numbers Speak</h2>
        </div>
        <div class="col-12 col-md-6 col-lg-2 mt-3 ps-lg-5">
          <h3 class="section-subtitle">200+</h3>
          <p>Trained Chauffeurs</p>
        </div>

        <div class="col-12 col-md-6 col-lg-2 mt-3">
          <h3 class="section-subtitle">200+</h3>
          <p>Trained Chauffeurs</p>
        </div>

        <div class="col-12 col-md-6 col-lg-2 mt-3">
          <h3 class="section-subtitle">200+</h3>
          <p>Trained Chauffeurs</p>
        </div>
      </div>
    </section>

    <!-- download section start here -->
    <?php include 'utils/download.php';?>
    <!-- section end here -->

    <!-- footer start here -->
    <?php include 'utils/footer.php';?>

    <!-- footer link start here -->
    <?php include 'utils/footer-link.php';?>

  </body>
</html>
