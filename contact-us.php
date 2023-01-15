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
                <div class="generalBanner" style="background-image: url(img/black.jpg); background-size: cover;">
                    <div class="container">

                        <div class="row">
                            <div class="col">
                                <div class="mt-4 pt-4"></div>
                                <div class="mt-5 pt-5"></div>
                                <p>Home  / Contact us</p>
                                <h2>CONTACT US</h2>
                                <div class="mt-5 pt-5"></div>
                                <div class="mt-4 pt-4"></div>
                            </div>
                        </div>
                        
                    </div>
                </div>

             
            

            <div class="container-flued bg-white mt-5">
                <div class="container row d-flex">
                    <div class="col-12 col-sm-6">
                        <div class="p-5">
                            <h1 class="text-danger text-uppercase">Cosmo Films (A Business of Cosmo First Limited)</h1>
                            <p class="mt-4 text-black-50">
                                1008, DLF Tower - A, Jasola District Centre, <br>
                                New Delhi - 110 025, India <br>
                                Phone : + 91-11-49 49 49 49 <br>
                                Fax : + 91-11-49 49 49 50 <br>
                                Email : enquiry@cosmofilms.com



                            </p>
                            <br><br>
                            <img src="img/barcode.png" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="p-5">
                            <p class="text-black-50">Call us or fill out the form and one of our executives will contact you in the next 24 hours.</p>
                            <form class="myForm" action="">
                            <div class="container">
                                    <div class="row">
                                        <div class="col-12 p-2">
                                            <div class="border-bottom">    
                                                <input type="text" placeholder="Name*">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-12 p-2">
                                            <div class="border-bottom">    
                                                <input type="text" placeholder="Company">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-12 p-2">
                                            <div class="border-bottom">    
                                                <input type="text" placeholder="City">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-6 p-2">
                                            <div class="border-bottom">    
                                                <input type="text" placeholder="Select Country">
                                            </div>
                                        </div>
                                        <div class="col-6 p-2">
                                            <div class="border-bottom">    
                                                <input type="text" placeholder="MOQ">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-12 p-2">
                                            <div class="border-bottom">    
                                                <input type="text" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-12 p-2">
                                            <div class="border-bottom">    
                                                <input type="text" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-12 p-2">
                                            <div class="border-bottom">    
                                                <input type="text" placeholder="Query">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button type="button" class="myButton">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-flued map" style="border-bottom: 7px solid red;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6455.200187010669!2d77.2848272980054!3d28.53872334935889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce401d6a51d87%3A0x66c293a6a4f15f75!2sCosmo%20First%20Limited!5e0!3m2!1sen!2sin!4v1673693422610!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>





            <!-- <div class="mt-5 pt-5"></div>
            <div class="mt-5 pt-5"></div>             -->
            <!-- <div class="mt-5 pt-5 bg-white"></div> -->
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