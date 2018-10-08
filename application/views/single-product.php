<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Old Is Gold</title>
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo.png" />

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body>

<?php
include "include/head.php";
?>

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shop</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="product-content-right">

                    <!--Main Product Area-->

                    <?php
                    if(isset($product)){
                        foreach ($product as $row){
                            ?>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="product-images">
                                        <div class="product-main-img">
                                            <img style="height: 350px; width: 300px" src="<?php echo base_url() ?>/uploads/<?php echo $row->file_name ?>" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="product-inner">
                                        <h2 class="product-name"><?php echo $row->product_name ?></h2>
                                        <div class="product-inner-price">
                                            <ins>Rs.<?php echo $row->product_price ?></ins>
                                        </div>
<<<<<<< HEAD
                                        <p><strong>Author: Dr. K.L. Gomber and K.L. Gogia</strong><br>
                                        Publisher: Pradeep Publications; 21st Edition edition (2011)<br>
                                        ISBN-10: 819321806X<br>
                                        ISBN-13: 978-8193218068<br>
                                        Product Dimensions: 15 x 10 x 1 cm</p>

                                        <h4>Readers Rating</h4>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <br><br>
=======
                                        <p>Author: Bal Krishna Sama</p>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star checked"></span>
                                       <span class="fa fa-star"></span>
                                       <span class="fa fa-star"></span>
                                       <br>
>>>>>>> 3ae12cb2674bb4705a4ec458d105ce7a44828a71


                                        <a href="<?php echo base_url()?>index.php/Cart?id=<?php echo $row->p_id ?>" ><button class="add_to_cart_button" type="submit">Add to cart</button></a>
                                        <br/><br/><br>

                                        <div role="tabpanel">
<!--                                            <ul class="product-tab" role="tablist">-->
<!--                                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>-->
<!---->
<!--                                            </ul>-->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                    <h2>Product Description</h2>
                                                    <p>
                                                        <?php echo $row->product_des ?>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <!--End Main Product Area-->

                    <br/><br/><br/><br/><br/>

                    <!--Start Of Related Product carousel-->

                    <div class="related-products-wrapper">
                        <h2 class="related-products-title">Related Products</h2>
                        <div class="related-products-carousel">
                            <?php
                            if(isset($relpro)){
                                foreach($relpro as $row ){
                                    ?>
                            <div class="single-product">
                            <div class="product-f-image">
                                <img style="height: 250px; width: 200px" src="<?php echo base_url() ?>uploads/<?php echo $row->file_name ?>" alt="">
                                <div class="product-hover">
                                    <a href="<?php echo base_url()?>index.php/Cart?id=<?php echo $row->p_id ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="<?php echo base_url() ?>index.php/Welcome/single?id=<?php echo $row->p_id ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>

                            <h2><a href=""><?php echo $row->product_name ?></a></h2>

                            <div class="product-carousel-price">
                                <ins>Rs.<?php echo $row->product_price ?></ins>
                            </div>
                        </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <!--End Related Product Area-->
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "include/footer.php";
?>

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>
</body>
</html>