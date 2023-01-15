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
                <div class="generalBanner" style="border-bottom: 7px solid red; background-image: url(img/black.jpg); background-size: cover;">
                    <div class="container">

                        <div class="row">
                            <div class="col">
                                <div class="mt-4 pt-4"></div>
                                <div class="mt-5 pt-5"></div>
                                <p>Home  / Become a supplier</p>
                                <h2>BECOME A SUPPLIER</h2>
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
                            <h1 class="text-danger text-uppercase">Become a supplier</h1>
                            <p class="mt-4 text-black-50">
                                Becoming a supplier is a great way to expand your business and open up new opportunities for success. As a supplier for a company, you will provide them with materials or products that can help them increase their efficiency, productivity, or profit. It is important to become an expert in your field and have an understanding of the packaging and printing industry to become an ideal supplier.
                                <br><br>
                                When considering the packaging and printing industry, there are a variety of different skills and knowledge that are necessary to become a successful supplier. It is important to understand the materials and processes associated with both packaging and printing. This includes the latest trends in technology, sustainable materials, and other industry advancements. It is also important to understand the customer’s needs and how to provide them with a quality product that meets their needs and desires.
                                <br><br>
                                In order to be a successful supplier, you must provide excellent customer service and be able to respond to customer requests quickly and accurately. You must also be familiar with the laws and regulations that govern the industry, as well as have a good understanding of the various technologies used in packaging and printing. Being knowledgeable in the industry and having a strong technical knowledge base will ensure that you are able to provide customers with a quality product in
                            </p>
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
                                                <input type="text" placeholder="Company Name*">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-6 p-2">
                                            <div class="border-bottom">    
                                                <input type="text" placeholder="Name of the Contact Person*">
                                            </div>
                                        </div>
                                        <div class="col-6 p-2">
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
                                                <input type="text" placeholder="Phone Number*">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-12 p-2">
                                            <div class="border-bottom">    
                                                <input type="text" placeholder="Address*">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-12 p-2">
                                            <div class="border-bottom">    
                                                <input type="text" placeholder="Website">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-12 p-2">
                                            <div class="border-bottom">    
                                                <input type="text" placeholder="Product Category*">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-12 p-2">
                                            <div class="border-bottom">    
                                                <input type="text" placeholder="Products/Services interested to Supply/Deliver*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-12 p-2">
                                            <div class="">    
                                                <label class="text-black-50 mb-2" for="exampleFormControlFile1">Product Catalogue/Technical Data Sheet/Other Details*</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-12 p-2">
                                            <div class="border-bottom">    
                                                <input type="text" placeholder="Annual Average Turnover">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-12 p-2">
                                            <div class="border-bottom">    
                                                <input type="text" placeholder="Any Other Details">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <br>
                                <button type="button" class="myButton">Submit Requirement</button>
                            </form>
                        </div>
                    </div>
                </div>
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