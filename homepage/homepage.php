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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
    <title>HomePage</title>
</head>

<body class="mainThemeColor defaultFontColor">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 mainHoldingDiv  ">
                <div class="row">
                    <div class="col-12 mainHeader">
                        <div class="row">
                            <div class="col-1 my-auto  text-center">
                                <img src="../images/logoBgRemoved.png" class="navbarLogo" alt="">
                            </div>
                            <div class="col-11 d-none d-md-block">
                                <div class="row ">

                                    <div class="col-6 my-auto pt-2">
                                        <div class="row ">
                                            <div class="col-8 "><input type="text" class="w-100 py-1 ps-3 searchInputField "></div>
                                            <div class="col-2 text-center"><button class="w-100 py-1 searchButton fw-bold"><i class="bi bi-search fw-bold"></i></button></div>
                                        </div>
                                    </div>
                                    <div class=" col-6    my-auto  ">
                                        <div class="row">
                                            <div class="col-12 ">
                                                <div class="row">
                                                    <div class="col-12   upsideItems my-auto">
                                                        <div class="row">
                                                            <div class="col-3 text-end"><span>Jump Around</span></div>
                                                            <div class="col-3 text-end"><span>About us</span></div>
                                                            <div class="col-3 text-end"><span>Help</span></div>
                                                            <div class="col-3 text-end"><span>Log in</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 downsideItems pt-2">
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
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div style="cursor: pointer;" class="col-4   dealsImageHolder py-2">
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
                            <div class="col-8">
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
                            <div class="col-12 py-4  my-auto">
                                <div class="row">
                                    <div class="col-12 imageSliderDivHolder">
                                        <div class="row">

                                            <div class="col-12 imageSliderDiv">
                                                <div class="row">
                                                    <div class="col-12    ">
                                                        <div class="row">
                                                            <div class="sliderImages  col-12">
                                                                <div class="row">
                                                                    <div class="col-4 text-center px-2">
                                                                        <img class=" sliderSingleImage" src="../images/Deals2.png" alt="">
                                                                    </div>
                                                                    <div class="col-4 text-center px-2">
                                                                        <img class=" sliderSingleImage" src="../images/Deals2.png" alt="">
                                                                    </div>
                                                                    <div class="col-4 text-center px-2">
                                                                        <img class=" sliderSingleImage" src="../images/Deals2.png" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sliderImages hideTransistion col-12">
                                                                <div class="row">
                                                                    <div class="col-4 text-center px-2">
                                                                        <img class=" sliderSingleImage" src="../images/Deals2.png" alt="">
                                                                    </div>
                                                                    <div class="col-4 text-center px-2">
                                                                        <img class=" sliderSingleImage" src="../images/Deals2.png" alt="">
                                                                    </div>
                                                                    <div class="col-4 text-center px-2">
                                                                        <img class=" sliderSingleImage" src="../images/Deals2.png" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sliderImages hideTransistion col-12">
                                                                <div class="row">
                                                                    <div class="col-4 text-center px-2">
                                                                        <img class=" sliderSingleImage" src="../images/Deals2.png" alt="">
                                                                    </div>
                                                                    <div class="col-4 text-center px-2">
                                                                        <img class=" sliderSingleImage" src="../images/Deals2.png" alt="">
                                                                    </div>
                                                                    <div class="col-4 text-center px-2">
                                                                        <img class=" sliderSingleImage" src="../images/Deals2.png" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sliderImages hideTransistion col-12">
                                                                <div class="row">
                                                                    <div class="col-4 text-center px-2">
                                                                        <img class=" sliderSingleImage" src="../images/Deals2.png" alt="">
                                                                    </div>
                                                                    <div class="col-4 text-center px-2">
                                                                        <img class=" sliderSingleImage" src="../images/Deals2.png" alt="">
                                                                    </div>
                                                                    <div class="col-4 text-center px-2">
                                                                        <img class=" sliderSingleImage" src="../images/Deals2.png" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div>
                                                        <img id="rightArrow" class="arrowIconDivsRight" src="../icons/right.png" alt="">
                                                        <img id="leftArrow" class="arrowIconDivsLeft" src="../icons/left.png" alt="">
                                                    </div>



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
                            <div class="col-12 text-center">
                                <h3 class="text-white">Cold and Hottest Offers</h3>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 colHotProductsList">
                                                <div class="row colHotProductsListRow py-4 ">
                                                    <div class="col-12 colHotSliderItemsDiv ">
                                                        <div class="colHotSliderItemsImagesDiv">
                                                            <img class="colHotSliderItemsImages" src="../slideImages/1.png" alt="">
                                                            <img class="colHotSliderItemsImages" src="../slideImages/2.png" alt="">
                                                            <img class="colHotSliderItemsImages" src="../slideImages/3.png" alt="">
                                                            <img class="colHotSliderItemsImages" src="../slideImages/4.png" alt="">

                                                        </div>

                                                    </div>

                                                    <div class="arrowIconsDiv">

                                                        <img id="colHotSliderItemsLeftArrow" class="colHotSliderItemsarrowIconDivsLeft" src="../icons/left.png" alt="">
                                                        <img id="colHotSliderItemsRightArrow" class="colHotSliderItemsarrowIconDivsRight" src="../icons/right.png" alt="">
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
    <script src="homepage.js"></script>

</body>

</html>