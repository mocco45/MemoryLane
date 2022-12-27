<!DOCTYPE html>
<html lang="en">
  <style>
   .list ul{
    
    list-style: none;
  
  
  }      
  .list ul li:before {
    content: '✓';
    margin-right: 10px;
    font-weight: bold;
    padding-top: 20px;
    }
  </style>
<head>
  <meta charset="utf-8">
  <title>Memorylane</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="home/img/favicon.png" rel="icon">
  <link href="home/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
  <!-- Bootstrap CSS File -->
  <link href="home/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="home/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="home/lib/animate/animate.min.css" rel="stylesheet">
  <link href="home/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="home/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="home/css/style.css" rel="stylesheet">
  
</head>
<body>
  <!--==========================
    Header
  ============================--> 
  <header id="header">
    <div class="container-fluid">

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
         
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  <section>
  <div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6">Memorylane payment means</h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Tigopesa </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fas fa-credit-card mr-2"></i> Mitandao mingine.</a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Banking </a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form" onsubmit="event.preventDefault()">
                                <div class="form-group"> <label for="username">
                                        <h6>Pay by Tigo-Pesa as following the </h6>

                                        <h6>Press *150*01#  then</h6>
                                        <h6>Select "1"  then</h6>
                                        <h6>Select "1"  then</h6>
                                        <h6>Enter "0714 339 191"  then</h6>
                                        <h6>Enter "Amount in TSh."  then</h6>
                                        <h6>Enter "Tigopesa PIN "  then</h6>
                                        <h6>Enter "Make sure the name matches: Christian  Gabriel Mwalo"  then</h6>
                                <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment by selecting "1" </button></div>
                             <p> Note: Please contact the admin via +255 714 339 191 after payment for your plan.</p>
                            </form>
                        </div>
                    </div> <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">
                        <h6 class="pb-2">Select payment network method</h6>
                        <div class="form-group "> 
                        <label class="radio-inline"> <input type="radio" name="optradio" checked> M-pesa </label>
                            <label class="radio-inline"> <input type="radio" name="optradio" checked> Airtel-Money </label>
                            <label class="radio-inline"> <input type="radio" name="optradio" checked>Halopesa </label>
                        </div>
                        <p> <button type="button" class="btn btn-primary "><i class="fas fa-credit-card mr-2"></i> Pay via:  +255 714 339 191</button> </p>
                        <p class="text-muted"> Please follow the recommended instruction of paying to different netwaork to pay via Tigo-pesa usind the number above.<br> Please contact the admin via +255 714 339 191 after payment for your plan. </p>
                    </div> <!-- End -->
                    <!-- bank transfer info -->
                    <div id="net-banking" class="tab-pane fade pt-3">
                        <div class="form-group "> <label for="Select Your Bank">
                                <h6>Select your Bank</h6>
                            </label> <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>--Please select your Bank--</option>
                                <option>CRDB </option>
                                <option>NMB</option>
                                <option>NBC</option>
                                <option>DTB</option>
                                <option>EXIM</option>
                              
                            </select> </div>
                        <div class="form-group">
                            <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
                        </div>
                        <p class="text-muted">Note: Banking payment still under process. </p>
                    </div> <!-- End -->
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- JavaScript Libraries -->
  <script src="home/lib/jquery/jquery.min.js"></script>
  <script src="home/lib/jquery/jquery-migrate.min.js"></script>
  <script src="home/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="home/lib/easing/easing.min.js"></script>
  <script src="home/lib/superfish/hoverIntent.js"></script>
  <script src="home/lib/superfish/superfish.min.js"></script>
  <script src="home/lib/wow/wow.min.js"></script>
  <script src="home/lib/waypoints/waypoints.min.js"></script>
  <script src="home/lib/counterup/counterup.min.js"></script>
  <script src="home/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="home/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="home/lib/lightbox/js/lightbox.min.js"></script>
  <script src="home/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="home/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="home/js/main.js"></script>

</body>
</html>
