<?php
$path = $_SERVER['SCRIPT_NAME'];
$page = basename($path);
include "../db/db_conn.php";
include "../db/session.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$ids = $_SESSION['userid'];
$sql = "SELECT * FROM event WHERE eid ='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <title>Memorylane</title>
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta content="" name="keywords">
            <meta content="" name="description">

            <!-- Favicons -->
            <link href="img/favicon.ico" rel="icon">
            <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Playfair+Display:500i,700i,900i|Nunito:700,900|Raleway:300,400,500" rel="stylesheet">

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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script src="vendor/flipclock/flipclock.js"></script>
            <script src="vendor/fullpage/fullpage.min.js"></script>


            <!-- Main Stylesheet File -->
            <link href="css/style.css" rel="stylesheet">
            <link rel="stylesheet" href="css/new.css">
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
                                        <div class="carousel-background"><img src="../uploads-standard/<?php echo $row['cover_img'] ?>" alt="" width="100%"></div>
                                        <div class="carousel-container">
                                            <div class="carousel-content">
                                                <h1><?php echo $row['gfname'] ?></h1>
                                                <h2>&</h2>
                                                <h1><?php echo $row['bfname'] ?></h1>
                                                <p>We are Getting Married</p>
                                                <h4><?php echo date("jS F Y", strtotime($row['edate'])) ?></h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Header Section End -->
                <section class="section section-4">
                    <div id="party bg-success">
                        <header class="section-header">
                            <h3>Groom and Bride Profile</h3>
                        </header>
                        <div>
                            <div class="row">
                                <div class="col-6 text-right">

                                    <h4>Groom Profile.</h4>
                                    <p><?php echo $row['gfname'] ?></p>
                                    <div id="groom"><img src="../uploads-standard/<?php echo $row['groom_img'] ?>" alt="groom"></div>
                                </div>
                                <div class="col-6 text-left">
                                    <h4>Bride Profile.</h4>
                                    <p><?php echo $row['bfname'] ?></p>
                                    <div id="bride"><img src="../uploads-standard/<?php echo $row['bride_img'] ?>" alt="bride"></div>
                                </div>
                            </div>
                        </div>



                    </div>
                </section>

                <!-- Story Section Start-->
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
                                        Family of Mr & Mrs XYZ of <?php echo $row['gfname'] ?> & <?php echo $row['bfname'] ?>
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
                                    <p><?php echo date("jS F Y", strtotime($row['edate'])) ?></p>
                                </div>
                                <div class="col-6 text-left">
                                    <h4>Where</h4>
                                    <p><?php echo $row['venue'] ?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- Party Section end -->

                <section class="section section-6">
                    <div id="registry">
                        <div class="container">
                            <header class="section-header">
                                <h3>Wedding Team</h3>
                            </header>
                            <div class="row">
                                <div class="col-12">
                                    <h4>We're fully obligated to serve you in this wedding.<br>Click the button for more information about us </h4>
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <a href="<?php echo $row['decor'] ?>" class="btn btn-primary">Photo/videographer</a>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <a href="<?php echo $row['decor'] ?>" class="btn btn-primary">Master of Ceremony</a>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <a href="<?php echo $row['decor'] ?>" class="btn btn-primary">Groom's Suit Dresser</a>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <a href="<?php echo $row['decor'] ?>" class="btn btn-primary">Bride's Dress Dresser</a>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <a href="<?php echo $row['decor'] ?>" class="btn btn-primary">Decor personal</a>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <a href="<?php echo $row['decor'] ?>" class="btn btn-primary">Caterer personel</a>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <a href="<?php echo $row['decor'] ?>" class="btn btn-primary">Car rental</a>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <a href="<?php echo $row['decor'] ?>" class="btn btn-primary">Venue</a>
                                            </div>
                                        </div>
                                    </form>
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
                                <div class="col-12">
                                    <?php if (isset($_GET['error'])) { ?>
                                        <script>
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'error',
                                                text: '<?php echo $_GET['error']; ?>'
                                            })
                                        </script>
                                    <?php } ?>
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
                                    <form action="../db/rsvppro.php" method="post">
                                        <input type="hidden" name="eid" value="<?php echo $id ?>">
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
                                                <input type="text" class="form-control" name="relation" placeholder="Relation with" />
                                            </div>
                                        </div>
                                        <div><button type="submit">Submit</button></div>
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
                                <h3>Days Left Countdown</h3>
                            </header>
                            <div class="row">
                                <div class="col-12">
                                    <div class="clock"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <script>
                    var edate = "<?php echo $row['edate'] ?>";
                    var etime = "<?php echo $row['etime'] ?>";

                    (function($) {
                        var date = new Date(edate);
                        var now = new Date();
                        var diff = (date.getTime() / 1000) - (now.getTime() / 1000);
                        $('.clock').FlipClock(diff, {
                            clockFace: 'DailyCounter',
                            countdown: true
                        });
                    })(jQuery);

                    new fullpage("#full-page", {
                        scrollBar: true,
                        scrollingSpeed: 500,
                        autoScrolling: true,
                        fitToSection: true,
                        navigation: true,
                        navigationPosition: "left",
                        paddingTop: "0",
                        paddingBottom: "0",
                        verticalCentered: true,
                        showActiveTooltip: false,
                        navigationTooltips: [
                            "HOME",
                            "INVITATION",
                            "THE WEDDING",
                            "WEDDING TEAM",
                            "REGISTRY",
                        ],
                        sectionsColor: ["#ffffff"],
                    });
                </script>
                <!-- CountDown Section end -->
        <?php

    }
} else {
    echo "no data";
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