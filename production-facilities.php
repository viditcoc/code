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
                                <div class="mt-5 pt-5"></div>
                                <p>Home / About us / Production Facilities</p>
                                <h2>PRODUCTION FACILITIES</h2>
                                <div class="mt-5 pt-5"></div>
                                <div class="mt-4 pt-4"></div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>

             
            <!-- Production Facilities start -->
            <div class="container">
                <div class="mt-4 pt-4"></div>
                <div class="mt-5 pt-5"></div>
                <div class="row">
                    <div class="col m-3">
                        <h1>PRODUCTION <br>FACILITIES</h1>
                    </div>
                    <div class="col m-3">
                        <p>
                            Established in 1981, Cosmo Films (A Business of Cosmo First Limited) today is a global leader in speciality films for packaging, lamination and labeling applications. Its films offerings include biaxially oriented polypropylene (BOPP) films, cast polypropylene (CPP) films and soon to be offered biaxially oriented polyethylene terephthalate (BOPET) films.
                        </p>
                    </div>
                    <div class="mt-5 pt-5"></div>
                    <div class="mt-4 pt-4"></div>

                </div>
            </div>
            <!-- Production Facilities end -->


            <!-- Cosmo has 4 state-of-the-art manufacturing facilities spread across India and Koreaa start -->
            <div class="container">
                <p>Cosmo has 4 state-of-the-art manufacturing facilities spread across India and Koreaa</p>
            </div>
            
            <div class="container">
                <div class="row d-flex pf-card">
                    <div class="col-8 ">
                        <img src="img/pf-card1.jpg" alt="">
                        <div class="bg-dark pf-cardTitle">
                            <p>Shendra,Aurangabad,India</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <img src="img/pf-card2.jpg" alt="">
                        <div class="bg-dark pf-cardTitle">
                            <p>Shendra,Aurangabad,India</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5 pt-5"></div>

            <div class="container ">
                <div class="row d-flex pf-card">
                    <div class="col-4 ">
                        <img src="img/pf-card3.jpg" alt="">
                        <div class="bg-dark pf-cardTitle">
                            <p>Waluj,Aurangabad,India</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <img src="img/pf-card4.jpg" alt="">
                        <div class="bg-dark pf-cardTitle">
                            <p>Asan,Korea</p>
                        </div>
                    </div>
                    <div class="col-4">
                        
                    </div>
                </div>
            </div>
            <!-- Cosmo has 4 state-of-the-art manufacturing facilities spread across India and Koreaa end -->

            <div class="container mt-5 pt-5"></div>

            <!-- Table start  -->
            <div class="container mt-5">
                <img src="img/table.jpg" alt="">
            </div>
            <!-- Table end  -->

            
            <div class="mt-5 pt-5"></div>
        </div>
    </div>
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