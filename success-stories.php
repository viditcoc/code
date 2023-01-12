<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Cosmo Home"?>
    <title>
        <?php  echo $title;?>
    </title>
   
    <?php include 'includes/head.php'  ?>


 
</head>

<body class="standard-view bg-light" style="background: var(--white);">
    
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
                                <p>Home / About us / Success Stories</p>
                                <h2>SUCCESS STORIES</h2>
                                <div class="mt-5 pt-5"></div>
                                <div class="mt-4 pt-4"></div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>

             
            <!-- OUR Success Stories start -->
            <div class="container">
                <div class="mt-4 pt-4"></div>
                <div class="mt-5 pt-5"></div>
                <div class="row">
                    <div class="col m-3">
                        <h1>OUR Success Stories</h1>
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
            <!-- OUR Success Stories end -->


            <!-- cards start -->
            <div class="container">
                <div class="row d-flex d-flex justify-content-between">
                    <div class="col-6 p-4 bg-white">
                        <div>
                            <img src="img/sscard1.jpg" alt="">
                            <br><br>
                            <h5>Recyclable Laminate For Tea Packaging</h5>
                            <p>
                                Fuga et debitis numquam omnis sed explicabo rem. Temporibus aut earum harum sint enim quia sit. Odit blanditiis illum amet doloribus adipisci corrupti explicabo. Qui non omnis eum consequatur voluptas aut ut dolor aut.
                            </p>
                        </div>
                    </div>

                     <div class="col-6 p-4 bg-white">
                        <div>
                            <img src="img/sscard2.jpg" alt="">
                            <br><br>
                            <h5>Recyclable Laminate For Tea Packaging</h5>
                            <p>
                                Fuga et debitis numquam omnis sed explicabo rem. Temporibus aut earum harum sint enim quia sit. Odit blanditiis illum amet doloribus adipisci corrupti explicabo. Qui non omnis eum consequatur voluptas aut ut dolor aut.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 d-flex d-flex justify-content-between">
                    <div class="col-6 p-4 bg-white">
                        <div>
                            <img src="img/sscard3.jpg" alt="">
                            <br><br>
                            <h5>Recyclable Laminate For Tea Packaging</h5>
                            <p>
                                Fuga et debitis numquam omnis sed explicabo rem. Temporibus aut earum harum sint enim quia sit. Odit blanditiis illum amet doloribus adipisci corrupti explicabo. Qui non omnis eum consequatur voluptas aut ut dolor aut.
                            </p>
                        </div>
                    </div> 
                </div>
                
            </div>

            







            
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