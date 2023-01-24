<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Cosmo Home"?>
    <title>
        <?php  echo $title;?>
    </title>
   
    <?php include 'includes/head.php'  ?>


 
</head>

<body class="standard-view" style="background: var(--white);">
    
    <?php include 'includes/header.php'  ?>

    <div class="col-md-12">
        <div class="container-fluid p-0">
            <!-- banner  -->
                <div class="generalBanner" style="background-image: url(img/banner1.jpg);">
                    <div class="container">

                        <div class="row">
                            <div class="col">
                                <div class="mt-4 pt-4"></div>
                                <div class="mt-5 pt-5 d-none d-sm-block"></div>
                                <p>Home / About us / Why us</p>
                                <h2>WHY US</h2>
                                <div class="mt-5 pt-5 d-none d-sm-block"></div>
                                <div class="mt-4 pt-4"></div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
        </div>
    </div>

    <div class="pt-5 mt-5"></div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-6">
                <div class="px-4">
                    <div>
                        <img class="mb-5 img-fluid" src="img/wu1.png" alt="">
                        <p class="text-black text-center">4 Decades of BOPP Excellence</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-6">
                <div class="px-4">
                    <div>
                        <img class="mb-5 img-fluid" src="img/wu2.png" alt="">
                        <p class="text-black text-center">Widest Product Portfolio Under One Roof</p>
                    </div>
                </div>
            </div>

            <div class="pt-4 mt-4 d-block d-sm-none"></div>

            <div class="col-sm-3 col-6">
                <div class="px-4">
                    <div>
                        <img class="mb-5 img-fluid" src="img/wu3.png" alt="">
                        <p class="text-black text-center">Flexibility in Job - Line Allocation</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-6">
                <div class="px-4">
                    <div>
                        <img class="mb-5 img-fluid" src="img/wu4.png" alt="">
                        <p class="text-black text-center">Ahead in Product Development Curve</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-4 mt-4 d-none d-sm-block"></div>
        <div class="pt-4 mt-4 d-block d-sm-none"></div>


        <div class="row">
            <div class="col-sm-3 col-6">
                <div class="px-4">
                    <div>
                        <img class="mb-5 img-fluid" src="img/wu5.png" alt="">
                        <p class="text-black text-center">Global Reach</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-6">
                <div class="px-4">
                    <div>
                        <img class="mb-5 img-fluid" src="img/wu6.png" alt="">
                        <p class="text-black text-center">Global Warehousing Facilities</p>
                    </div>
                </div>
            </div>

            <div class="pt-4 mt-4 d-block d-sm-none"></div>

            <div class="col-sm-3 col-6">
                <div class="px-4">
                    <div>
                        <img class="mb-5 img-fluid" src="img/wu7.png" alt="">
                        <p class="text-black text-center">Customized Innovation</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-6">
                <div class="px-4">
                    <div>
                        <img class="mb-5 img-fluid" src="img/wu8.png" alt="">
                        <p class="text-black text-center">Key Account Teams</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="pt-5 mt-5"></div>


    <div class="container">
        <div class="me-1">
            <ul>
                <li class="text-black-50 mb-2">Experience and expertise of producing BOPP films for almost four decades</li>
                <li class="text-black-50 mb-2">Widest portfolio of BOPP based packaging, labels & lamination films and synthetic paper</li>
                <li class="text-black-50 mb-2">Multiple lines for providing flexibility in operations</li>
                <li class="text-black-50 mb-2">Multiple warehousing facilities for providing just-in-time services across the globe</li>
                <li class="text-black-50 mb-2">Dedicated BOPP films R&D infrastructure</li>
                <li class="text-black-50 mb-2">Dedicated account management teams for key global accounts</li>
            </ul>
        </div>
    </div>


    <div class="pt-5 mt-5"></div>





















    <?php include 'includes/footer.php'  ?>
    <script src="js/owlCarousel/owl.carousel.min.js"></script>
    <script>
    $(document).ready(function() {

        $('#mainCarousel').owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            loop: true,
            margin: 0,
            dots: false,
            nav: false,
            autoplay: true,
            autoplayTimeout: 5000,
            items: 1

        })
    });
    </script>
</body>

</html>
