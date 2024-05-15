<?php include 'utils/config/config.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank You</title>
    <!-- css link start here -->
    <?php include 'utils/header-link.php';?>
    <!-- css link end here -->

    <style>
      body{
        background: #000;
      }
    </style>
  </head>
  <body>
       <!-- header start here -->
       <?php include 'utils/header.php';?>
     <!-- header end here -->

    <!-- banner start here -->
    <section class="common-banner pb-5 pb-lg-0">
      <div class="container py-5">
        <h1 class="section-title">Thank You</h1>
        <p class="text-white">For Reaching Us.</p>
      </div>
      <div class="container-fluid px-0">
        <img src="<?=$_baseurl?>assets/images/commonbanner-img.webp" alt="" />
      </div>
    </section>

    <!-- footer start here -->
    <?php include 'utils/footer.php';?>
    <!-- footer link start here -->
    <?php include 'utils/footer-link.php';?>
  </body>
</html>

