<?php
include "top.php";
$code = $_GET["code"];

//getting product details
$productDetails = mysqli_query($con,"select * from ". $databaseName.".$productTable where modelCode = '$code'") or die(mysqli_error($con));
$productName = mysqli_result($productDetails,0,"productName");
$productType = mysqli_result($productDetails,0,"productType");
$modelCode = mysqli_result($productDetails,0,"modelCode");
$productImageURL = mysqli_result($productDetails,0,"productImageURL");

?>
<!DOCTYPE html>
<html lang="en">

<?php
include "head.php";
?>

<body class="body-wrapper">    
    <!-- preloader -->
    <?php
    include "preloader.php";
    ?>
    <div class="top-bar-wrapper d-none d-sm-block">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="top-left">
                <a href="tel:987-098-098-09"><i class="fal fa-phone-volume"></i>...........</a>
               
            </div>
            <div class="top-right">
                
                <a href="mailto:info@example.com"><i class="fal fa-envelope"></i>info@example.com</a>
            </div>
           
        </div>
    </div>

    <?php
    include "header.php";
    ?>
    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/page-banner.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1><?=$productName?></h1>
            </div>
        </div>
    </div>

    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="list.php?type=<?=str_replace(" ", "-", $productType)?>"><?=$productType?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?=$productName?></li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="team-member-details-wrapper section-padding">
        <div class="container">
            <div class="member-profile-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-xl-3 col-md-4">
                        <img src="<?=$productImageURL?>" alt="<?=$productName?>">
                    </div>
                    <div class="col-lg-8 d-sm-flex justify-content-between col-md-8 col-xl-9">
                        <div class="member-info">
                            <h2><?=$productName?></h2>
                            <span><?=$productType?></span>
                            <p>Space for description</p>


                        </div>
                        <div class="member-contact-info">
                            <div class="single-contact">
                                <h6>Technical Specification 1</h6>
                                <p>Value</p>
                            </div>
                            <div class="single-contact">
                                <h6>Technical Specification 1</h6>
                                <p>Value 2</p>
                            </div>
                            <div class="single-contact">
                                <h6>Technical Specification 1</h6>
                                <p>Value 3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!--            <div class="member-biography">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-3 col-md-4 text-center col-12">-->
<!--                        <div class="icon-box">-->
<!--                            <div class="icon">-->
<!--                                <i class="fal fa-user-alt"></i>-->
<!--                            </div>-->
<!--                            <h2>Biography</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-9 col-md-8 col-12">-->
<!--                        <div class="biography-info">-->
<!--                            <p>Business blogging is as essential to marketing a business as the yellow pages. A business blog is a marketing channel that helps businesses increase visibility online. Now, this one is flat-out wrong today. There are millions being made off of blogging these days. At the time, they were all valid points to consider, These six statements represent common beliefs that still exist today.</p>-->
<!---->
<!--                            <div class="single-bio-data">-->
<!--                                <div class="key-data">name</div>-->
<!--                                <div class="value-data">Jone Doe</div>-->
<!--                            </div>-->
<!--                            <div class="single-bio-data">-->
<!--                                <div class="key-data">Age</div>-->
<!--                                <div class="value-data">30 years</div>-->
<!--                            </div>-->
<!--                            <div class="single-bio-data">-->
<!--                                <div class="key-data">Language</div>-->
<!--                                <div class="value-data">English, Hindi</div>-->
<!--                            </div>-->
<!--                            <div class="single-bio-data">-->
<!--                                <div class="key-data">Experience</div>-->
<!--                                <div class="value-data">8+ years</div>-->
<!--                            </div>-->
<!--                            <div class="single-bio-data">-->
<!--                                <div class="key-data">Availability </div>-->
<!--                                <div class="value-data">Full time employee</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <div class="member-skill">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="icon-box text-center">
                            <div class="icon">
                                <i class="flaticon-delivery"></i>
                            </div>
                            <h2>Technical Advantages</h2>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="skill-bars">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="single-progress-bar">
                                        <div class="title justify-content-between d-flex align-items-center">
                                            <h5>Delivery</h5>
                                            <span class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1s">90%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".1s" role="progressbar" style="width: 90%;"></div>
                                        </div>
                                    </div>
                                    <div class="single-progress-bar">
                                        <div class="title justify-content-between d-flex align-items-center">
                                            <h5>Support</h5>
                                            <span class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.3s">75%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".5s" role="progressbar" style="width: 75%;"></div>
                                        </div>
                                    </div>
                                    <div class="single-progress-bar">
                                        <div class="title justify-content-between d-flex align-items-center">
                                            <h5>Bike</h5>
                                            <span class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.6s">93%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".9s" role="progressbar" style="width: 93%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="single-progress-bar">
                                        <div class="title justify-content-between d-flex align-items-center">
                                            <h5>Car Ride</h5>
                                            <span class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1s">60%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".1s" role="progressbar" style="width: 60%;"></div>
                                        </div>
                                    </div>
                                    <div class="single-progress-bar">
                                        <div class="title justify-content-between d-flex align-items-center">
                                            <h5>Engineering</h5>
                                            <span class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.3s">87%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".5s" role="progressbar" style="width: 87%;"></div>
                                        </div>
                                    </div>
                                    <div class="single-progress-bar">
                                        <div class="title justify-content-between d-flex align-items-center">
                                            <h5>Feedback</h5>
                                            <span class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.6s">75%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".9s" role="progressbar" style="width: 75%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>



    <?php
    include "footer.php";
    ?> 
     <!--  ALl JS Plugins
    ====================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imageload.min.js"></script>
    <script src="assets/js/scrollUp.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/slick-animation.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/metismenu.js"></script>
    <script src="assets/js/nice-select2.js"></script>
    <script src="assets/js/active.js"></script>
</body>

</html>
