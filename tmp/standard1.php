<?php
include "../db/db_conn.php";
include "../db/session.php";
if (isset($_GET['id'])) { $id= $_GET['id']; }
$ids=$_SESSION['userid'];
$sql = "SELECT * FROM event WHERE eid ='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
  // output data of each row
  while($row = $result->fetch_assoc())
   {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>INVITATION</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
    <!-- Favicons -->
    <link href="img/favicon.ico" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display:500i,700i,900i|Nunito:700,900|Raleway:300,400,500"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="vendor/fullpage/fullpage.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/animate/animate.min.css" rel="stylesheet">
    <link href="vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/slick/slick.css" rel="stylesheet">
    <link href="vendor/slick/slick-theme.css" rel="stylesheet">
    <link href="vendor/flipclock/flipclock.css" rel="stylesheet">
    

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div id="full-page">
        <!-- Header Section Start -->
        <section class="section section-1">
            <header id="header">
                <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
                <nav class="main-menu top-menu">
                    <ul>
                        <li class="active"><a href="../dashbord.php">Home</a></li>
                    </ul>
                </nav>
            </header>

            <div id="intro">
                <div class="intro-container">
                    <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                        <ol class="carousel-indicators"></ol>

                        <div class="carousel-inner" role="listbox">

                            <div class="carousel-item active">
                                <div class="carousel-background"><img src="../img/slide/<?php echo $row['image']?>"
                                        alt="" width="100%"></div>
                                <div class="carousel-container">
                                    <div class="carousel-content">
                                        <h1><?php echo $row['gfname']?></h1>
                                        <h1>&</h1>
                                        <h1><?php echo $row['bfname']?></h1>
                                        <h4>We are Getting Married</h4>
                                        <h4><?php echo date("jS F Y", strtotime($row['edate']))?></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Header Section End -->
        <!-- Story Section Start-->
        <section class="section section-2">
            <div id="story">
                <div class="container">
                    <header class="section-header">
                        <h3>Our Story</h3>
                    </header>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Story of <?php echo $row['gfname']." & ".$row['bfname']?></h4>
                            <p>
                                We meet on Tweter & love on Instagram
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Story Section end -->
        <!-- message Section Start-->
        <section class="section section-2">
            <div id="story">
                <div class="container">
                    <header class="section-header">
                        <h3>Invitation Message</h3>
                    </header>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>We are Getting Married</h4>
                            <p>
                                <?php echo $row['gdescription']." & ".$row['bdescription']?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Story Section end -->


        <!-- Party Section Start-->
        <section class="section section-4">
            <div id="party">
                <div class="container">
                    <header class="section-header">
                        <h3>The Wedding</h3>
                    </header>
                    <div class="row">
                        <div class="col-6 text-right">
                            <h4>When</h4>
                            <p><?php echo date("jS \of F Y", strtotime($row['edate']))." ".date("H:i", strtotime($row['etime']))?>
                            </p>
                        </div>
                        <div class="col-6 text-left">
                            <h4>Where</h4>
                            <p><?php echo $row['eloc']?></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Party Section end -->
        <section class="section">
                <div class="container">
                    <header class="section-header">
                        <h3>Event Team</h3>
                    </header>
                    <div class="row text-center">
                        <div class="col-12">

                            <h4 class="text-center">We're fully obligated to serve you in this wedding.<br>Click the button for more
                            information about us </h4>
                        </div>
                           </div>
                                    
                                 <div id="team"> 
                                <div class="row justify-content-center my-4 mx-auto">
                                    <div class="col-md-4 col-sm-12 pb-3">
                                        <a href="http://www.instagram.com/<?php echo $row['photographer'] ?>" target="_blank">
                                            <button  class="btn col-12">photographer & Videographer</button>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <a href="http://www.instagram.com/<?php echo $row['carRental'] ?>" target="_blank">
                                            <button type="button" class=" btn col-12">Cars Rental</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="row justify-content-center my-4 mx-auto">
                                    <div class="col-md-4 col-sm-12 pb-3">
                                        <a href="http://www.instagram.com/<?php echo $row['decor'] ?>" target="_blank">
                                            <button  class="btn col-12">Decor</button>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <a href="http://www.instagram.com/<?php echo $row['suitDresser'] ?>" target="_blank">
                                            <button type="button" class=" btn col-12">Groom's Suit Dresser</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="row justify-content-center my-4 mx-auto">
                                    <div class="col-md-4 col-sm-12 pb-3">
                                        <a href="http://www.instagram.com/<?php echo $row['dressDresser'] ?>" target="_blank">
                                            <button  class="btn col-12">Bride's Dress Dresser </button>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <a href="http://www.instagram.com/<?php echo $row['venue'] ?>" target="_blank">
                                            <button type="button" class=" btn col-12">Venue</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="row justify-content-center my-4 mx-auto">
                                    <div class="col-md-4 col-sm-12 pb-3">
                                        <a href="http://www.instagram.com/<?php echo $row['ceremony'] ?>" target="_blank">
                                            <button  class="btn col-12">Master of Ceremony</button>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <a href="http://www.instagram.com/<?php echo $row['caterer'] ?>" target="_blank">
                                            <button type="button" class=" btn col-12">Caterer</button>
                                        </a>
                                    </div>
                                </div>
                                </div> 

            </div>
        </section>

        <!-- Registry Section Start-->
        <section class="section section-6">
            <div id="registry">
                <div class="container">
                    <header class="section-header">

                        <h3>Registry</h3>
                    </header>
                    <div class="row">
                        <div class="col-12"><?php if (isset($_GET['error'])) { ?>
                            <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'error',
                                text: '<?php echo $_GET['error']; ?>'
                            })
                            </script>
                            <?php }?>
                            <?php if (isset($_GET['success'])) { ?>
                            <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'success',
                                text: '<?php echo $_GET['success']; ?>'
                            })
                            </script>

                            <?php } ?>
                            <h4>We're So Excited To Celebrate With You</h4>
                            <form id="form4" method="POST" action="../db/rsvppro.php">
                                <input type="hidden" class="form-control" name="eid" value="<?php echo $id?>">
                                <input type="hidden" class="form-control" name="eloc"
                                    value="<?php echo $row['file_location'];?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="fname" placeholder="First Name" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="lname" placeholder="Last Name" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" name="email" placeholder="Email" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="phone" placeholder="Mobile No." />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="address" placeholder="Address" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="relation"
                                            placeholder="Relation with" />
                                    </div>
                                </div>
                                <div><button  type="submit">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Registry Section end -->


        <!-- CountDown Section Start-->
        <section class="section section-8">
            <div id="clock">
                <div class="container">
                    <header class="section-header">
                        <h3>Days Left</h3>
                    </header>
                    <div class="row">
                        <div class="col-12">
                            <div class="clock">s</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CountDown Section end -->
        <?php
}}
else { echo "no data";
 //header("Location: ../404.php");
}
?>
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <!-- Uncomment below i you want to use a preloader -->
        <!-- <div id="preloader"></div> -->

    </div>

    <!-- JavaScript Libraries -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery/jquery-migrate.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/fullpage/fullpage.min.js"></script>
    <script src="vendor/easing/easing.min.js"></script>
    <script src="vendor/superfish/hoverIntent.js"></script>
    <script src="vendor/superfish/superfish.min.js"></script>
    <script src="vendor/waypoints/waypoints.min.js"></script>
    <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="vendor/touchSwipe/jquery.touchSwipe.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/flipclock/flipclock.min.js"></script>

    <!-- Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>