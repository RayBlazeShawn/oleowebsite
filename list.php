<?php
include "top.php";
$type = $_GET["type"];
$type = ucwords(str_replace("-"," ", $type));
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
 <section class="our-team-wrapper section-padding">
        <div class="container">
            <div class="co">
                <div class="col-md-8">
                    <div class="block-contents mb-10">
                        <div class="section-title">
                            <h5 class="textright"></h5>

                            <?php
                            $result  = mysqli_query($con, "select * from ". $databaseName.".$productTable where productType='$type'");
                            $description=mysqli_result($result,0,"productDescription");
                            ?>
                        
                            <h2 style="color: black";  style="text-align:right"><?=$type?></h2>
                            <h4 style="color: black";  style="text-align:center"><?=$description?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php

                $num = mysqli_num_rows($result);
                for($i=0;$i<$num;$i++) {
                    ?>
                    <div class="col-xl-6 col-md-12 col-24">
                        <div class="single-service-card">
                            <div class="service-banner-img bg-cover"
                                 style="background-image: url('<?=mysqli_result($result,$i,"productImageURL")?>')">     </div>
                            <div class="content">
                                <h3><a href="product.php?code=<?=mysqli_result($result,$i,"modelCode")?>" style="color: #0b0b0b;"><?=mysqli_result($result,$i,"productName")?></a></h3>
                                <p>......................................</p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
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
