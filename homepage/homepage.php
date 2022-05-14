<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/homepage.css">
    <link rel="stylesheet" href="../style/imageslider.css">
    <link rel="stylesheet" href="../style/popularSlider.css">
    <link rel="stylesheet" href="../style/coldHotpopularslider.css">
    <link rel="stylesheet" href="../style/popCatPopularSlider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
    <title>HomePage</title>
</head>

<body class="mainThemeColor defaultFontColor">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 mainHoldingDiv  ">
                <div class="row">
                    <div class="col-12 mainHeader sticky-top">
                        <div class="row">
                            <div class="col-1 my-auto  text-center">
                                <img src="../images/logoBgRemoved.png" class="navbarLogo" alt="">
                            </div>
                            <div class="col-11 d-none d-md-block my-auto">
                                <div class="row ">

                                    <div class="col-5 my-auto pt-1 ">
                                        <div class="row ">
                                            <div class="col-8 "><input placeholder="search for product" type="text" class=" w-100 py-1 ps-3 searchInputField "></div>
                                            <div class="col-2 text-center"><button class=" w-100 py-1 searchButton fw-bold"><i class="bi bi-search fw-bold"></i></button></div>
                                        </div>
                                    </div>
                                    <div class=" col-5    my-auto  ">
                                        <div class="row">

                                            <div class="col-12 downsideItems ">
                                                <div class="row">
                                                    <div class="col-3 navbarMainItemsDiv">
                                                        <div class="downsideItemsDiv py-1 rounded-2 text-center"><span>Items</span></div>
                                                        <div class="col-12 d-none navbarDropDownItemsDiv">
                                                            <div class="row mt-2">
                                                                <div class="col-12 py-2 navbarDropDownItems"><span>Iphones</span></div>
                                                                <div class="col-12 py-2 navbarDropDownItems"><span>Laptops</span></div>
                                                                <div class="col-12 py-2 navbarDropDownItems"><span>Monitors</span></div>
                                                                <div class="col-12 py-2 navbarDropDownItems"><span>Accesorries</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3   navbarMainItemsDiv">
                                                        <div class="downsideItemsDiv py-1 rounded-2 text-center"><span>Brands</span></div>
                                                        <div class="col-12 d-none navbarDropDownItemsDiv">
                                                            <div class="row mt-2">
                                                                <div class="col-12 py-2 navbarDropDownItems"><span>Apple</span></div>
                                                                <div class="col-12 py-2 navbarDropDownItems"><span>Acer</span></div>
                                                                <div class="col-12 py-2 navbarDropDownItems"><span>Samsung</span></div>
                                                                <div class="col-12 py-2 navbarDropDownItems"><span>Razer</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3  text-center ">
                                                        <div class="downsideItemsDiv py-1 rounded-2"><span>Deals</span></div>
                                                    </div>
                                                    <div class="col-3  text-center ">
                                                        <div class="downsideItemsDiv py-1 rounded-2"><span>Services</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-2 df ">
                                        <img id="userIconId" class="userIconPng" src="../icons/user.png" alt="" srcset="">
                                        <img class="cartIconPng" src="../icons/cart.png" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
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
                    <div class="col-12 pb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-4 offset-lg-4 text-center  py-3 ">
                                        <h1 class="text-white fw-bold divHeaderText">Cold and Hottest Offers</h1>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 popHotsliderContainerHolder py-3">
                                <div class="popHotsliderImageContainerHolder pt-2 pb-3">
                                    <div class="popHotSliderImageContainer">
                                        <img class="popHotSliderImage " src="../images/Deals.png" alt="">
                                        <img class="popHotSliderImage " src="../images/Deals.png" alt="">
                                        <img class="popHotSliderImage " src="../images/Deals.png" alt="">
                                        <img class="popHotSliderImage " src="../images/Deals.png" alt="">
                                        <img class="popHotSliderImage " src="../images/Deals.png" alt="">
                                        <img class="popHotSliderImage " src="../images/Deals.png" alt="">
                                        <img class="popHotSliderImage " src="../images/Deals.png" alt="">
                                        <img class="popHotSliderImage " src="../images/Deals3.png" alt="">
                                        <img class="popHotSliderImage  " src="../images/Deals.png" alt="">
                                        <img class="popHotSliderImage  " src="../images/Deals.png" alt="">
                                        <img class="popHotSliderImage  " src="../images/Deals3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-2 offset-5  popHotDotsDiv  text-center">
                                    <img src="../icons/circles.png" id="popNavigateCircleLeft" class="popNavigateCircles" alt="">
                                    <img src="../icons/circles.png" id="popNavigateCircleRight" class="popNavigateCircles" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12    someProductDiv pb-5">
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
                                    <div class="col-lg-3 col-6  ">
                                        <div class="row">
                                            <div class="col-lg-12 col-12   ">
                                                <div class="row">
                                                    <div class="col-10 offset-1 productDiv  productDivColor py-4">
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
                                    <div class="col-lg-3 col-6  ">
                                        <div class="row">
                                            <div class="col-lg-12 col-12   ">
                                                <div class="row">
                                                    <div class="col-10 offset-1 productDiv  productDivColor py-4">
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
                                    <div class="col-lg-3 col-6  ">
                                        <div class="row">
                                            <div class="col-lg-12 col-12   ">
                                                <div class="row">
                                                    <div class="col-10 offset-1 productDiv  productDivColor py-4">
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
                                    <div class="col-lg-3 col-6  ">
                                        <div class="row">
                                            <div class="col-lg-12 col-12   ">
                                                <div class="row">
                                                    <div class="col-10 offset-1 productDiv  productDivColor py-4">
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
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12    someProductDiv pb-5">
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
                                    <div class="col-12 popCatsliderContainerHolder py-3">
                                        <div class="popCatsliderImageContainerHolder pt-2 pb-3">
                                            <div class="popCatSliderImageContainer">
                                                <!-- <img class="popCatSliderImage " src="../images/Deals.png" alt="">
                                                <img class="popCatSliderImage " src="../images/Deals.png" alt="">
                                                <img class="popCatSliderImage " src="../images/Deals.png" alt="">
                                                <img class="popCatSliderImage " src="../images/Deals.png" alt="">
                                                <img class="popCatSliderImage " src="../images/Deals.png" alt="">
                                                <img class="popCatSliderImage " src="../images/Deals.png" alt="">
                                                <img class="popCatSliderImage " src="../images/Deals.png" alt="">
                                                <img class="popCatSliderImage " src="../images/Deals3.png" alt="">
                                                <img class="popCatSliderImage  " src="../images/Deals.png" alt="">
                                                <img class="popCatSliderImage  " src="../images/Deals.png" alt="">
                                                <img class="popCatSliderImage  " src="../images/Deals3.png" alt=""> -->

                                                <div class="col-lg-3 col-6 popCatSliderImageDivs  ">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-12   ">
                                                            <div class="row">
                                                                <div class="col-10 offset-1 productDiv  productDivColor py-4">
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
                                                <div class="col-lg-3 col-6 popCatSliderImageDivs  ">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-12   ">
                                                            <div class="row">
                                                                <div class="col-10 offset-1 productDiv  productDivColor py-4">
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
                                                <div class="col-lg-3 col-6 popCatSliderImageDivs  ">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-12   ">
                                                            <div class="row">
                                                                <div class="col-10 offset-1 productDiv  productDivColor py-4">
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
                                                <div class="col-lg-3 col-6 popCatSliderImageDivs  ">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-12   ">
                                                            <div class="row">
                                                                <div class="col-10 offset-1 productDiv  productDivColor py-4">
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
                                            </div>
                                        </div>
                                        <div class="col-2 offset-5  popCatDotsDiv  text-center">
                                            <img src="../icons/circles.png" id="popCatNavigateCircleLeft" class="popCatNavigateCircles" alt="">
                                            <img src="../icons/circles.png" id="popCatNavigateCircleRight" class="popCatNavigateCircles" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-3">
                        <img class="footerLogo" src="../images/logo.png" alt="">
                    </div>
                    <div class="col-9 py-2">
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
    <script src="homepage.js"></script>
    <script src="popCatSlider.js"></script>
</body>

</html>