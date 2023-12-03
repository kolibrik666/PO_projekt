<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Liberty Template - NFT Item Detail Page</title>

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
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <?php
  include_once "parts/header.php";

  if(!isset($common)) {
      $common = new stdClass();
  }
  ?>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading normal-space">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Liberty NFT Market</h6>
          <h2>View Item Details</h2>
          <span>Home > <a href="#">Item Details</a></span>
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
        <div class="col-lg-12">
          <div class="current-bid">
            <div class="row">
              <div class="col-lg-6">
                <div class="mini-heading"><h4>Current Biddings Prices ( ETH )</h4></div>
              </div>
              <div class="col-lg-6">
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item">
                  <div class="left-img">
                    <img src="assets/images/current-01.jpg" alt="">
                  </div>
                  <div class="right-content">
                    <h4>David Walker</h4>
                    <a href="#">@davidwalker</a>
                    <div class="line-dec"></div>
                    <h6>Bid: <em>0.06 ETH</em></h6>
                    <span class="date">24/07/2022, 22:00</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item">
                  <div class="left-img">
                    <img src="assets/images/current-02.jpg" alt="">
                  </div>
                  <div class="right-content">
                    <h4>David Walker</h4>
                    <a href="#">@davidwalker</a>
                    <div class="line-dec"></div>
                    <h6>Bid: <em>0.06 ETH</em></h6>
                    <span class="date">24/07/2022, 22:00</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item">
                  <div class="left-img">
                    <img src="assets/images/current-03.jpg" alt="">
                  </div>
                  <div class="right-content">
                    <h4>David Walker</h4>
                    <a href="#">@davidwalker</a>
                    <div class="line-dec"></div>
                    <h6>Bid: <em>0.06 ETH</em></h6>
                    <span class="date">24/07/2022, 22:00</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item">
                  <div class="left-img">
                    <img src="assets/images/current-02.jpg" alt="">
                  </div>
                  <div class="right-content">
                    <h4>David Walker</h4>
                    <a href="#">@davidwalker</a>
                    <div class="line-dec"></div>
                    <h6>Bid: <em>0.06 ETH</em></h6>
                    <span class="date">24/07/2022, 22:00</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item">
                  <div class="left-img">
                    <img src="assets/images/current-04.jpg" alt="">
                  </div>
                  <div class="right-content">
                    <h4>David Walker</h4>
                    <a href="#">@davidwalker</a>
                    <div class="line-dec"></div>
                    <h6>Bid: <em>0.06 ETH</em></h6>
                    <span class="date">24/07/2022, 22:00</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item">
                  <div class="left-img">
                    <img src="assets/images/current-01.jpg" alt="">
                  </div>
                  <div class="right-content">
                    <h4>David Walker</h4>
                    <a href="#">@davidwalker</a>
                    <div class="line-dec"></div>
                    <h6>Bid: <em>0.06 ETH</em></h6>
                    <span class="date">24/07/2022, 22:00</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="create-nft">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Create Your NFT & Put It On The Market.</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="main-button">
            <a href="create.php">Create Your NFT Now</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item first-item">
            <div class="number">
              <h6>1</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-02.png" alt="">
            </div>
            <h4>Set Up Your Wallet</h4>
            <p>There are 5 different HTML pages included in this NFT <a href="https://templatemo.com/page/1" target="_blank" rel="nofollow">website template</a>. You can edit or modify any section on any page as you required.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item second-item">
            <div class="number">
              <h6>2</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-04.png" alt="">
            </div>
            <h4>Add Your Digital NFT</h4>
            <p>If you would like to support our TemplateMo website, please visit <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">our contact page</a> to make a PayPal contribution. Thank you.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-06.png" alt="">
            </div>
            <h4>Sell Your NFT &amp; Make Profit</h4>
            <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many different kinds of NFTs in the industry.</p>
          </div>
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