<?php
session_start();

require_once('php/database.php');
require_once('php/component.php');

//database
$database = new database("if19_taavi_ve_3", "producttb");

if (isset($_POST['add'])){
    // print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Toode on juba ostukorvis..!')</script>";
            //echo "<script>window.location = 'rent.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EKSAM</title>

    <!-- Bootstrap CDN-->
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
    crossorigin="anonymous"/>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" 
    integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" 
    crossorigin="anonymous" />

    <!--Font CDN-->
    <script src="https://kit.fontawesome.com/bab1532af7.js"
    crossorigin="anonymous"></script>

    <!--Slick Slider-->
    <link 
    rel="stylesheet"
    type="text/css"
    href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!--Stylesheet-->
    <link rel="stylesheet" href="style.css">

    
    
</head>
<body>

    <?php
    require_once('./php/header.php');
    ?>
 

    <!--Main-->

    <main>

        <!--First Slider-->
        <div class="container-fluid p-0">
            <div class="site-slider">
                <div class="slider-one">
                    <div>
                        <img src="./Pictures/Festival pic.jpg" class="img-fluid" alt="Banner 1">
                    </div>
                    <div>
                        <img src="./Pictures/Festival pic1.jpg" class="img-fluid" alt="Banner 2">
                    </div>
                    <div>
                        <img src="./Pictures/Festival pic 2.jpg" class="img-fluid" alt="Banner 3">
                    </div>
                </div>
                <div class="slider-btn">
                    <span class="prev position-top">
                        <i class="fas fa-caret-left"></i></span>
                    <span class="next position-top right-0">
                        <i class="fas fa-caret-right"></i></span>
                </div>
            </div>
        </div>




        <!--Second Slider-->
        <div class="container-fluid p-2">
            <div class="site-slider-two px-md-4">
                <div class="row slider-two text-center">
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./Pictures/Truss system.jpg" alt="Product 1">
                        <span class="border site-btn btn-span">Raamistikud</span>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./Pictures/Lighting.jpg" alt="Product 2">
                        <span class="border site-btn btn-span">Valgustid</span>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./Pictures/Beam.jpg" alt="Product 3">
                        <span class="border site-btn btn-span">Laserid</span>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./Pictures/Speaker3.jpg" alt="Product 4">
                        <span class="border site-btn btn-span">Kõlarid</span>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./Pictures/Mic.jpg" alt="Product 6">
                        <span class="border site-btn btn-span">Mikrofonid</span>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./Pictures/Curtain.jpg" alt="Product 7">
                        <span class="border site-btn btn-span">Muu</span>
                    </div>
                </div>
                <div class="slider-btn">
                    <span class="prev position-top">
                        <i class="fas fa-caret-left fa-2x text-secondary"></i></span>
                    <span class="next position-top right-0">
                        <i class="fas fa-caret-right fa-2x text-secondary"></i></span>
                </div>
            </div>      

        </div>


    






    <div class="shop-item">
        <div class="row text-center">
            <!--<div class="col-md-2 product pt-md-5 pt-4 pd-10">
                    <form action="rent.php" method="post">
                        <div class="card shadow">
                            <div>
                                <img class="Image img-fluid card-img-top" src="./Pictures/Wash lights.jpg" alt="Product 1">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Laserid</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <p class="car-text">
                                    Valgustab sind nii füüsiliselt kui ka vaimselt
                                </p>
                                <h5>
                                    <small><s class="text-secondary">69.99€</s></small>
                                    <span class="Price">59.99€</span>
                                </h5>

                            </div>
                            <button type="submit" class="btn btn-primary shop-item-button" name="add">Rendi<i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </form>
            </div>-->
               
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_ID'], $row['product_name'], $row['product_price'], $row['product_full'], $row['product_desc'], $row['product_image']);
                }
            

            ?>



        </div>
            <?php 
                require_once('./php/footer.php');
            ?>
    </main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>

    <script type="text/javascript"
    src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="./main.js"></script>
    </div>
</body>
</html>