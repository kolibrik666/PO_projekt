<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Liberty Template - Create NFT Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
<!--  <div id="js-preloader" class="js-preloader">-->
<!--    <div class="preloader-inner">-->
<!--      <span class="dot"></span>-->
<!--      <div class="dots">-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <?php
  include_once "parts/header.php";
  ?>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading normal-space">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Liberty NFT Market</h6>
          <h2>Create Your NFT Now.</h2>
          <span>Home > <a href="#">Create Yours</a></span>
          <div class="buttons">
            <div class="main-button">
              <a href="explore.php">Explore Our Items</a>
            </div>
            <div class="border-button">
              <a href="create.php">Create Your NFT</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="item-details-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Apply For <em>Your Item</em> Here.</h2>
          </div>
        </div>
        <div class="col-lg-12">

            <form id="contact" action="submitForm.php" method="post">
            <div class="row">
              <div class="col-lg-4">
                <fieldset>
                  <label for="title">Item Title</label>
                  <input type="title" name="title" id="title" placeholder="Ex. Lyon King" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-4">
                <fieldset>
                  <label for="description">Description For Item</label>
                  <input type="description" name="description" id="description" placeholder="Give us your idea" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-4">
                <fieldset>
                  <label for="username">Your Username</label>
                  <input type="username" name="username" id="username" placeholder="Ex. @alansmithee" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="price">Price Of Item</label>
                  <input type="price" name="price" id="price" placeholder="Price depends on quality. Ex. 0.06 ETH" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="royalties">Royalties</label>
                  <input type="royalties" name="royalties" id="royalties" placeholder="Common royalties 1-25%" autocomplete="on" required>
                </fieldset>
              </div>
                <div class="col-lg-4">
                    <fieldset>
                        <label for="date">Ends in</label>
                        <input type="date" name="date" id="date" placeholder="Date" autocomplete="on" required>
                    </fieldset>
                </div>
              <div class="col-lg-8 text-center">
                <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Submit Your Applying</button>
                </fieldset>
              </div>

            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <?php
  include_once "parts/footer.php";
  ?>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>

  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
  </body>
</html>