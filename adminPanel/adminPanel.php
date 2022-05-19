<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- <link rel="stylesheet" href="../sliderResources/css1.css"> -->
    <link rel="stylesheet" href="../sliderResources/css2.css">
    <link rel="stylesheet" href="../sliderResources/css3.css">

    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/homepage.css">
    <link rel="stylesheet" href="../style/imageslider.css">
    <link rel="stylesheet" href="../style/popularSlider.css">
    <link rel="stylesheet" href="../style/coldHotpopularslider.css">

    <script src="../sliderResources/upScript1.js"></script>
    <script src="../sliderResources/upScript2.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/owlCarouselItem.css">
    <title>Admin Panel</title>
</head>

<body class="mainThemeColor defaultFontColor">
    <div class="container-fluid ">
        <div class="row">
            <div id="mainHoldingDiv" class="col-12 mainHoldingDiv  ">
                <div class="row">
            

                    <div id="homeSliderDiv" class="darkBlue col-12 ">
                        <div class="row">
                            <div style="cursor: pointer;" class="d-none col-4   dealsImageHolder py-2">
                                <div class="row">
                                    <div class="col-10 offset-1 dealsImageDiv  text-center">
                                        <div>
                                            <img class="dealsImage " src="../images/Deals.png" alt="" srcset="">
                                        </div>
                                        <div class="absoluteContentDiv">
                                            <img style="visibility: hidden;" class="dealsImage " src="../images/Deals.png" alt="" srcset="">
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 topProductsList">
                                        <div class="row topProductsListRow py-4 ">
                                            <div class="col-12 popularSliderItemsDiv ">
                                                <div class="popularSliderItemsImagesDiv">
                                                    <img class="popularSliderItemsImages" src="../slideImages/1.png" alt="">
                                                    <img class="popularSliderItemsImages" src="../slideImages/2.png" alt="">
                                                    <img class="popularSliderItemsImages" src="../slideImages/3.png" alt="">
                                                    <img class="popularSliderItemsImages" src="../slideImages/4.png" alt="">

                                                </div>

                                            </div>

                                            <div class="arrowIconsDiv">

                                                <img id="popularSliderItemsLeftArrow" class="popularSliderItemsarrowIconDivsLeft" src="../icons/left.png" alt="">
                                                <img id="popularSliderItemsRightArrow" class="popularSliderItemsarrowIconDivsRight" src="../icons/right.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div id="someProductDiv" class="col-12 blackBlue   someProductDiv pb-5">
                        <div class="row pb-3 pt-2">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-4 offset-lg-4 text-center  py-5 ">
                                        <h1 class="text-white fw-bold divHeaderText">Products</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12  pb-5">
                                <div class="row pt-2">
                                    <?php
                                    for ($i = 0; $i < 8; $i++) {
                                        # code...
                                    ?>
                                        <div class="col-lg-3 col-6  py-lg-4 py-4 productHolderContainerDiv">

                                            <div class="row">

                                                <div class="col-lg-12 col-12    px-lg-4 px-3">
                                                    <div class="row">
                                                        <div style="position: relative;" class="col-lg-12 col-12 productDiv  productDivColor py-4 ">
                                                            <div class="wishListAbsoluteDiv text-center">
                                                                <img src="../icons/wishlist.png" alt="" srcset="">
                                                            </div>
                                                            <div class="searchIconAbsoluteDiv text-center">
                                                                <img src="../icons/search.png" alt="" srcset="">
                                                            </div>
                                                            <div class="row">

                                                                <div class="col-12 text-center px-lg-4 px-1  py-3">
                                                                    <img class="productImage " src="../images/product.png" alt="">
                                                                </div>
                                                                <div class="col-12 offset-0 text-center">
                                                                    <div class="row">
                                                                        <div class="col-12 py-1 text-center">
                                                                            <h4 class="fw-bold">Product 1</h4>
                                                                        </div>
                                                                        <div class="col-12 py-1 text-center">
                                                                            <span class="fa fa-star checked"></span>
                                                                            <span class="fa fa-star checked"></span>
                                                                            <span class="fa fa-star checked"></span>
                                                                            <span class="fa fa-star"></span>
                                                                            <span class="fa fa-star"></span>
                                                                        </div>
                                                                        <div class="col-12 py-1 ">
                                                                            <span>360$</span>
                                                                        </div>
                                                                        <div class="col-12 text-center py-2 px-md-5 px-3">
                                                                            <button class="viewButton w-100 py-1">View</button>
                                                                        </div>
                                                                        <div class="col-12 text-center py-2 px-md-5 px-3">
                                                                            <button class="cartButton w-100 py-1 ">Cart</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>


                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="highDemandProductDiv" class="col-12 darkBlue py-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-4 offset-lg-4 text-center  py-5 ">
                                        <h1 class="text-white fw-bold divHeaderText">Products High Demand</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section id="demos">
                            <div class="row">
                                <div class="large-12 columns">
                                    <div class="owl-carousel abc2 owl-theme row ">
                                        <?php
                                        for ($i = 0; $i < 10; $i++) {
                                        ?>
                                            <div class="item owlCaroItem col-12 blackBlue">
                                                <div class="row">
                                                    <div class="col-lg-12 offset-lg-0 col-8 offset-2   ">
                                                        <div class="row">
                                                            <div class="col-12 px-3 productDiv  py-4">
                                                                <div class="row">
                                                                    <div class="col-12 text-center px-lg-5 px-5  py-3">
                                                                        <img class="productImageOwl1 " src="../images/product.png" alt="">
                                                                    </div>
                                                                    <div class="col-12 offset-0 text-center">
                                                                        <div class="row">
                                                                            <div class="col-12 py-1 text-center">
                                                                                <h4 class="fw-bold">Product 1</h4>
                                                                            </div>
                                                                            <div class="col-12 py-1 text-center">
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                            </div>
                                                                            <div class="col-12 py-1 ">
                                                                                <span>360$</span>
                                                                            </div>
                                                                            <div class="col-12 text-center py-2 px-5">
                                                                                <button class="viewButton w-100 py-1">View</button>
                                                                            </div>
                                                                            <div class="col-12 text-center py-2 px-5">
                                                                                <button class="cartButton w-100 py-1 ">Cart</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        <?php
                                        }
                                        ?>


                                    </div>

                                    <script src="../sliderResources/downScript1.js"></script>
                                    <script src="../sliderResources/downScript2.js"></script>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div id="newArrivalsProductDiv" class="col-12  blackBlue   py-5">
                        <div class="row">
                            <div class="col-12 py-3 text-center">
                                <div class="row">
                                    <div class="col-6 offset-3">
                                        <h1 class="text-white fw-bold divHeaderText">New Arrivals</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12  px-5">
                                <div class="row g-5">
                                    <?php
                                    for ($i = 0; $i < 3; $i++) {
                                        # code...
                                    ?>
                                        <div class=" col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-10 offset-1  newArrivalDivContainer">
                                            <div class="row">
                                                <div class="col-12 px-lg-4 px-md-3 px-1 rounded ">
                                                    <div class="row">
                                                        <div class="col-12  px-lg-5 px-md-3 px-1 pt-3 darkBlue">
                                                            <h2>Streaming</h2>
                                                        </div>
                                                        <div class="col-12  newArrivalsImagesDiv darkBlue">
                                                            <div class="row">
                                                                <div class="col-6 py-3 text-center ">
                                                                    <img src="../images/inkCartridge.jpg" alt="" srcset="">
                                                                </div>
                                                                <div class="col-6 py-3 text-center">
                                                                    <img src="../images/headphone.jpg" alt="" srcset="">
                                                                </div>
                                                                <div class="col-6 py-3 text-center">
                                                                    <img src="../images/cableJack.jpg" alt="" srcset="">
                                                                </div>
                                                                <div class="col-6 py-3 text-center">
                                                                    <img src="../images/streamingStick.jpg" alt="" srcset="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    <?php
                                    }
                                    ?>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="specialProductDiv" class="col-12 specialProductDiv  darkBlue">
                        <div class="row my-auto">
                            <div class="specialProductBgImageDiv d-none  col-12 text-center text-lg-end px-0 ">
                                <img src="../images/pyor.webp" class="specialProductImage" alt="">
                            </div>
                            <div class="col-12 py-5 px-4 px-lg-3  specialProductDetailsDiv">

                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2 col-12 offset-0 ">
                                        <div class=" text-center">
                                            <div class="col-6 offset-3">
                                                <h1 class="divHeaderText fw-bold">Special product of the week</h1>
                                            </div>

                                        </div>
                                        <div class=" px-4  py-md-4 py-2 py-sm-2 specialProductParaDiv">
                                            <p class="fw-bold"> - This pre-owned product is not Apple certified, but has been professionally inspected, tested and cleaned by Amazon-qualified suppliers.</p>
                                            <p class="fw-bold"> - There will be no visible cosmetic imperfections when held at an arm’s length.</p>
                                            <p class="fw-bold"> - This product will have a battery which exceeds 80% capacity relative to new.</p>
                                            <p class="fw-bold"> - Accessories may not be original, but will be compatible and fully functional. Product may come in generic Box.</p>
                                        </div>
                                        <div class=" py-md-4 py-2 py-sm-2 text-center">
                                            <button class="py-lg-3 py-md-2 px-lg-5 px-md-3 px-4 py-2  checkoutBtn">Checkout</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="hotNewProductDiv" style="z-index: 40;" class="col-12  blackBlue  py-5">
                        <div class="row">
                            <div class="col-6 offset-3">
                                <div class="row">
                                    <div class="col-12 text-center py-5">
                                        <h1 class="divHeaderText fw-bold">Hot new releases</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section id="demos">
                            <div class="row pb-5">
                                <div class="large-12 columns">
                                    <div class="owl-carousel owlcaro2 owl-theme row ">
                                        <?php
                                        for ($i = 0; $i < 10; $i++) {
                                        ?>
                                            <div class="item owlCaroItem col-12 darkBlue">
                                                <div class="row">
                                                    <div class="col-lg-12 offset-lg-0 col-8 offset-2   ">
                                                        <div class="row">
                                                            <div class="col-12 px-3 productDiv  py-4">
                                                                <div class="row">
                                                                    <div class="col-12 text-center px-lg-5 px-md-3 px-sm-3 px-5  py-3">
                                                                        <img class="productImageOwl1" src="../images/product.png" alt="">
                                                                    </div>
                                                                    <div class="col-12 offset-0 text-center">
                                                                        <div class="row">
                                                                            <div class="col-12 py-1 text-center">
                                                                                <h4 class="fw-bold">Product 1</h4>
                                                                            </div>
                                                                            <div class="col-12 py-1 text-center">
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                            </div>
                                                                            <div class="col-12 py-1 ">
                                                                                <span>360$</span>
                                                                            </div>
                                                                            <div class="col-12 text-center py-2 px-5">
                                                                                <button class="viewButton w-100 py-1">View</button>
                                                                            </div>
                                                                            <div class="col-12 text-center py-2 px-5">
                                                                                <button class="cartButton w-100 py-1 ">Cart</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        <?php
                                        }
                                        ?>


                                    </div>

                                    <script src="../sliderResources/downScript1.js"></script>
                                    <script src="../sliderResources/downScript2.js"></script>
                                </div>
                            </div>
                        </section>
                    </div>


                </div>
            </div>
            <div style="z-index: 40;" class="col-12 blackBlue">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-2 my-auto">
                        <img class="footerLogo" src="../images/logo.png" alt="">
                    </div>
                    <div class="col-lg-9 col-md-9 col-10 py-2 footerOptionsDiv">
                        <div class="row">
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-12 py-3">
                                        <span>Delivery</span>
                                    </div>
                                    <div class="col-12 py-3">
                                        <span>About us</span>
                                    </div>
                                    <div class="col-12 py-3">
                                        <span>Secure payment</span>
                                    </div>
                                    <div class="col-12 py-3">
                                        <span>New products</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-12 py-3">
                                        <span>Delivery</span>
                                    </div>
                                    <div class="col-12 py-3">
                                        <span>About us</span>
                                    </div>
                                    <div class="col-12 py-3">
                                        <span>Secure payment</span>
                                    </div>
                                    <div class="col-12 py-3">
                                        <span>New products</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-12 py-3">
                                        <span>Delivery</span>
                                    </div>
                                    <div class="col-12 py-3">
                                        <span>About us</span>
                                    </div>
                                    <div class="col-12 py-3">
                                        <span>Secure payment</span>
                                    </div>
                                    <div class="col-12 py-3">
                                        <span>New products</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="adminPanel.js"></script>

    <script src="../sliderResources/downScript3.js"></script>
    <script src="../sliderResources/downScript4.js"></script>
</body>

</html>