<?php include 'utils/config/config.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Streamlined</title>
    <!-- css link start here -->
    <?php include 'utils/header-link.php';?>
  

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

    <section class="main-fleet">
      <div class="container-fluid px-0 fleet-top">
        <div
          class="container py-5 d-flex justify-content-between align-items-center flex-wrap"
        >
          <div class=""><h2 class="section-title">Fleet</h2></div>
          <div class="dropdown">
            <button
              class="dropbtn fleet-dropbtn d-flex justify-content-between align-items-center"
            >
              <span>Vehicle Type</span><i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="fleet-dropdown-content">
              <a href="#" class="dropdown-item" data-category="category1"
                >Category 1</a
              >
              <a href="#" class="dropdown-item" data-category="category2"
                >Category 2</a
              >
              <a href="#" class="dropdown-item" data-category="category3"
                >Category 3</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid py-5">
        <div class="category-cards">
          <div
            class="main-fleet-carousel main-fleet-active"
            data-category="category1"
            style="display: none"
          >
            <div
              class="container list-wrapper d-flex justify-content-between flex-wrap gap-lg-4"
            >
              <div class="item col-12 col-md-6 col-lg-4 col-xl-3 list-item">
                <h3 class="section-subtitle">E Class</h3>
                <p>
                  Searching for a dependable and punctual chauffeur service in
                  London? We understands the importance of your time. Our
                  commitment to punctuality ensures you arrive at your
                  destination on schedule, every time.
                </p>
                <img src="<?=$_baseurl?>assets/images/demo-car.webp" alt="" />
                <ul class="d-flex gap-3">
                  <li>
                    <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                  <li>
                    <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                </ul>
              </div>
              <div class="item col-12 col-md-6 col-lg-4 col-xl-3 list-item">
                <h3 class="section-subtitle">E Class</h3>
                <p>
                  Searching for a dependable and punctual chauffeur service in
                  London? We understands the importance of your time. Our
                  commitment to punctuality ensures you arrive at your
                  destination on schedule, every time.
                </p>
                <img src="<?=$_baseurl?>assets/images/demo-car.webp" alt="" />
                <ul class="d-flex gap-3">
                  <li>
                    <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                  <li>
                    <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                </ul>
              </div>
              <div class="item col-12 col-md-6 col-lg-4 col-xl-3 list-item">
                <h3 class="section-subtitle">E Class</h3>
                <p>
                  Searching for a dependable and punctual chauffeur service in
                  London? We understands the importance of your time. Our
                  commitment to punctuality ensures you arrive at your
                  destination on schedule, every time.
                </p>
                <img src="<?=$_baseurl?>assets/images/demo-car.webp" alt="" />
                <ul class="d-flex gap-3">
                  <li>
                    <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                  <li>
                    <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                </ul>
              </div>
              <div class="item col-12 col-md-6 col-lg-4 col-xl-3 list-item">
                <h3 class="section-subtitle">E Class</h3>
                <p>
                  Searching for a dependable and punctual chauffeur service in
                  London? We understands the importance of your time. Our
                  commitment to punctuality ensures you arrive at your
                  destination on schedule, every time.
                </p>
                <img src="<?=$_baseurl?>assets/images/demo-car.webp" alt="" />
                <ul class="d-flex gap-3">
                  <li>
                    <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                  <li>
                    <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                </ul>
              </div>
              <div class="item col-12 col-md-6 col-lg-4 col-xl-3 list-item">
                <h3 class="section-subtitle">E Class</h3>
                <p>
                  Searching for a dependable and punctual chauffeur service in
                  London? We understands the importance of your time. Our
                  commitment to punctuality ensures you arrive at your
                  destination on schedule, every time.
                </p>
                <img src="<?=$_baseurl?>assets/images/demo-car.webp" alt="" />
                <ul class="d-flex gap-3">
                  <li>
                    <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                  <li>
                    <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                </ul>
              </div>
              <div class="item col-12 col-md-6 col-lg-4 col-xl-3 list-item">
                <h3 class="section-subtitle">E Class</h3>
                <p>
                  Searching for a dependable and punctual chauffeur service in
                  London? We understands the importance of your time. Our
                  commitment to punctuality ensures you arrive at your
                  destination on schedule, every time.
                </p>
                <img src="<?=$_baseurl?>assets/images/demo-car.webp" alt="" />
                <ul class="d-flex gap-3">
                  <li>
                    <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                  <li>
                    <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                </ul>
              </div>
              <div class="item col-12 col-md-6 col-lg-4 col-xl-3 list-item">
                <h3 class="section-subtitle">E Class</h3>
                <p>
                  Searching for a dependable and punctual chauffeur service in
                  London? We understands the importance of your time. Our
                  commitment to punctuality ensures you arrive at your
                  destination on schedule, every time.
                </p>
                <img src="<?=$_baseurl?>assets/images/demo-car.webp" alt="" />
                <ul class="d-flex gap-3">
                  <li>
                    <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                  <li>
                    <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                </ul>
              </div>
              <div class="item col-12 col-md-6 col-lg-4 col-xl-3 list-item">
                <h3 class="section-subtitle">E Class</h3>
                <p>
                  Searching for a dependable and punctual chauffeur service in
                  London? We understands the importance of your time. Our
                  commitment to punctuality ensures you arrive at your
                  destination on schedule, every time.
                </p>
                <img src="<?=$_baseurl?>assets/images/demo-car.webp" alt="" />
                <ul class="d-flex gap-3">
                  <li>
                    <img src="<?=$_baseurl?>assets/images/passenger.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                  <li>
                    <img src="<?=$_baseurl?>assets/images/trolly.webp" alt="" />
                    <p>max. 3</p>
                  </li>
                </ul>
              </div>
            </div>
            <div id="pagination-container" class="container mt-5"></div>
          </div>
          <div class="main-fleet-carousel" data-category="category2">
            Content for Category 2
          </div>
          <div class="main-fleet-carousel" data-category="category3">
            Content for Category 3
          </div>
        </div>
      </div>
    </section>
     <!-- footer start here -->
     <?php include 'utils/footer.php';?>

     <!-- footer link start here -->
     <?php include 'utils/footer-link.php';?>

   

  </body>
</html>
