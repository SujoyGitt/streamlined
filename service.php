<?php include 'utils/config/config.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Service | Streamlined</title>
    <!-- css link start here -->
    <?php include 'utils/header-link.php';?>
    <!-- css link end here -->

    <style>
      .how-it-work {
        background: #c4874a52;
      }
    </style>
  </head>
  <body>
    <!-- header start here -->
    <?php include 'utils/header.php';?>
     <!-- header end here -->

    <section class="main-service mb-5">
      <div class="container-fluid text-white bg-black py-5">
        <h2 class="section-title ms-5 ps-5">Services</h2>
      </div>
      <div class="container list-wrapper d-flex justify-content-between align-items-center flex-wrap ">
         <div class="col-12 col-md-6 col-lg-4 p-3 list-item">
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
         </div>
         <div class="col-12 col-md-6 col-lg-4 p-3 list-item">
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
         </div>
         <div class="col-12 col-md-6 col-lg-4 p-3 list-item">
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
         </div>
         <div class="col-12 col-md-6 col-lg-4 p-3 list-item">
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
         </div>
         <div class="col-12 col-md-6 col-lg-4 p-3 list-item">
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
         </div>
         <div class="col-12 col-md-6 col-lg-4 p-3 list-item"> 
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
         </div>
         <div class="col-12 col-md-6 col-lg-4 p-3 list-item">
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
         </div>
         <div class="col-12 col-md-6 col-lg-4 p-3 list-item">
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
         </div>
         <div class="col-12 col-md-6 col-lg-4 p-3 list-item">
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
      <div id="pagination-container" class="container mt-5"></div>
    </section>
    <!-- footer start here -->
    <?php include 'utils/footer.php';?>

    <!-- footer link start here -->
    <?php include 'utils/footer-link.php';?>
    <script>
         //   pagination start here
    var items = $(".list-wrapper .list-item");
    var numItems = items.length;
    var perPage = 6;

    items.slice(perPage).hide();

    $("#pagination-container").pagination({
      items: numItems,
      itemsOnPage: perPage,
      prevText: "<i class='fa-solid fa-arrow-left'></i>",
      nextText: "<i class='fa-solid fa-arrow-right'></i>",
      onPageClick: function (pageNumber) {
        var showFrom = perPage * (pageNumber - 1);
        var showTo = showFrom + perPage;
        items.hide().slice(showFrom, showTo).show();
      },
    });
    </script>
  </body>
</html>
