<?php
//include "../db/session.php";
if (isset($_GET['id'])) { $id= $_GET['id']; }

include "db/db_conn.php";
include "db/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Invite</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="dashbord.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Invite</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['username']?></h6>
                        <span>User</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="dashbord.php" class="nav-item nav-link active"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="event.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>My Event</a>
                    <a href="rsvp.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>RSVP</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['username']?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="profile.php" class="dropdown-item">My Profile</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                   <div class="col-sm-12 col-xl-6">
                    <?php if (isset($_GET['error'])) { ?>
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
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Event Registration</h6>
                            <form method="post" action="db/eformpro.php" enctype="multipart/form-data">
                                 <div class="row">
                                    <div class="col">
                                    <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="gfn" id="floatingInput">
                                        <label for="floatingInput">Groom First Name</label>
                                    </div>
                                    </div>

                                    <div class="col">
                                         <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="gln" id="floatingInput">
                                <label for="floatingInput">Groom Last Name</label>
                            </div>
                                    </div>

                                 </div>
                                 <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="bfn" id="floatingInput">
                                <label for="floatingInput">Bride First Name</label>
                            </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="bln" id="floatingInput">
                                <label for="floatingInput">Bride Last Name</label>
                            </div> 
                                    </div>
                                 </div>
                                <div class="row">
                                    <div class="col">
                                      <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="edate" min="<?php echo date('Y-m-d'); ?> id="floatingInput">
                                <label for="floatingInput">Event Date</label>
                            </div>   
                                    </div>
                                    <div class="col">
                                        
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" name="etime" id="floatingInput">
                                <label for="floatingInput">Event Time</label>
                            </div>
                                    </div>
                                </div>
                        
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="eloc" id="floatingInput">
                                <label for="floatingInput">Location/Place</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="message"
                                    id="floatingTextarea" style="height: 100px;"></textarea>
                                <label for="floatingTextarea">Invitation Message</label>
                            </div>
                            
                            </div>
                            <div class="row d-flex justify-content-center">
                                       
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-floating">
                                                <h5>Cover image</h5>
                                                <input type="hidden" name="Bmage" value="<?php echo $row['eid'] ?>">
                                            <input class="form-control" type="file" name="image1" id="fileToUpload">
                                         
                                          
                                            </div>
                                        </div>
                                    </div>


                            <h3 class="mb-4 my-5 text-info">Event Team</h3>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" name="photographer" 
                                                    id="floatingInput">
                                                <label for="floatingInput">Photographer</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" name="car"
                                                    id="floatingInput">
                                                <label for="floatingInput">Cars Rental</label>
                                            </div>
                                        </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" name="decor" id="floatingInput">
                                                <label for="floatingInput">Decor</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" name="suitDresser"
                                                    id="floatingInput">
                                                <label for="floatingInput">Groom's Suit Dresser</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" name="dressDresser"
                                                    id="floatingInput">
                                                <label for="floatingInput">Bride's Dress Dresser</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" name="venue" id="floatingInput">
                                                <label for="floatingInput">Venue</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" name="ceremony"
                                                    id="floatingInput">
                                                <label for="floatingInput">Master of Ceremony</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" name="caterer"
                                                    id="floatingInput">
                                                <label for="floatingInput">Caterer</label>
                                            </div>
                                    
                            <h6 class="mb-4">Event Registration</h6>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            <button type="clear" class="btn btn-primary">Clear</button>
                    </div>
                </form>
                        </div>
                        
                    </div>
                </div>                                                                

            <!-- Blank End -->

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-6-12 col-6-sm-6 text-center text-sm-start">
                            &copy; <a href="#"> Site </a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>