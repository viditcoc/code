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
                <div class="generalBanner" style="background-image: url(img/tree.jpg); background-size: cover;">
                    <div class="container">

                        <div class="row">
                            <div class="col">
                                <div class="mt-4 pt-4"></div>
                                <div class="mt-5 pt-5"></div>
                                <p>Home  / Sustainable Practices</p>
                                <h2>SUSTAINABILITY PRACTICES</h2>
                                <div class="mt-5 pt-5"></div>
                                <div class="mt-4 pt-4"></div>
                            </div>
                        </div>
                        
                    </div>
                </div>

             
            <!-- Flexible Packaging Films start -->
            <div class="container">
                <div class="mt-4 pt-4"></div>
                <div>
                    <h5 class="text-danger">Enabling Circular Economy</h5>
                    <br>
                    <p class="pb-3 text-black-50">
                    In the last few years, flexible plastic packaging has emerged as a clear winner over its rigid cousins owing to the numerous energy benefits that the packaging type offers. Multi-layer flexible packaging however has come under scanner in recent times due to its heterogeneous nature in most cases which makes recyclability a tad more difficult. Moving towards circular economy, one sees the packaging industry gravitating towards mono-material laminate structures.
                    <br><br> Cosmo Films has always been a focused polypropylene player and its film offerings consist of BOPP and CPP films. The two types of films could be used individually for single layer/duplex structures or in combination to form mono-material laminates without compromising on the aesthetics and performance of the pack. BOPP along with CPP could also go in construction of bulky or bigger packs. BOPP Films and CPP films also offer benefit of better yield and in turn less consumption of plastics and overall lesser laminate cost. Some specific applications such as powder or liquid packaging may require PE inclusion in the laminate; however that also is part of the same poly-olefin family and could be easily recycled along with polypropylene films. In fact, Cosmo Films has engineered number of BOPP films replacing BOPET films by providing for the desired oxygen barrier and enough heat resistance. The company also offers a suitable substitute for aluminium foil in form of its ultra-high barrier films.
                    <br><br> Today we are partnering with some of the best global brands to offer structure rationalization & recyclability solutions and have case studies to share in categories such as biscuits, noodles, tea and coffee sachets, soap wrapper, just to name a few.
                    <br><br> Apart from providing films designed for recyclability, we follow a multi-pronged strategy to enable growth that is sustainable and inclusive. This includes following green manufacturing and best energy management practices and having well-defined Environment Health & Safety systems in place.

                    </p>
                </div>
            </div>
            <!-- OUR Success Stories end -->


            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-12">
                        <img src="img/sptree.jpg" alt="">
                    </div>
                    <div class="d-none d-sm-block col-1"></div>
                    <div class="col-sm-7 col-12">
                        <h5 class="text-danger">
                            Manufacturing Practices
                        </h5>
                        <br>
                        <p class="text-black-50">
                            Cosmo Films is committed to environmentally friendly and socially responsible manufacturing processes. Cosmo strives to establish a sustainable manufacturing model by:
                            <br><br>
                            <ul>
                                <li class="mt-3">Continuous quality improvements and adherence to a right-first-time policy </li>
                                <li class="mt-3">Close monitoring of utilities consumption to optimize their usage </li>
                                <li class="mt-3">Regeneration of waste/scrap material to be used as input for production </li>
                                <li class="mt-3">Recycling of paper cores and use of plastic and aluminum cores for in-house requirements, resulting in reduced use of paper core </li>
                                <li class="mt-3">Partnering with customers for packaging structure rationalization to reduce material consumption</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            






            <!-- <div class="mt-5 pt-5"></div>
            <div class="mt-5 pt-5"></div>             -->
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