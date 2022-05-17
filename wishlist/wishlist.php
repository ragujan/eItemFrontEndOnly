<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">

    <link rel="stylesheet" href="../style/cart.css">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">

    <title>Wishlist</title>
</head>

<body class="mainThemeColor defaultFontColor">
    <div class="container-fluid ">
        <div class="row">
            <div id="mainHoldingDiv" class="col-12 mainHoldingDiv  ">
                <div class="row">
                    <div id="headerDiv" class="blackBlue col-12 mainHeader sticky-top">
                        <div class="row">
                            <div class="col-md-1 col-5 my-auto  text-start text-md-center">
                                <img src="../images/logoBgRemoved.png" class="navbarLogo" alt="">
                            </div>
                            <div class="col-md-1 col-7 d-block d-md-none my-auto  text-end text-md-center pe-4">
                                <img id="burgerMenuIcon" style="cursor: pointer;width: 30px;" src="../icons/burgerMenu.png" class="navbarLogo" alt="">
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
                            <div class="secondNavbar col-12 d-block d-md-none my-auto">
                                <div class="row py-4">

                                    <div class="col-10 offset-1 my-auto pt-3 pb-3 ">
                                        <div class="row ">
                                            <div class="col-8 "><input placeholder="search for product" type="text" class=" w-100 py-1 ps-3 searchInputField "></div>
                                            <div class="col-2 offset-1 text-center"><button class=" w-100 py-1 searchButton fw-bold"><img style="width: 24px;" src="../icons/search.png" alt=""></button></div>
                                        </div>
                                    </div>
                                    <div class=" col-12    my-auto  pt-3 pb-3">
                                        <div class="row">

                                            <div class="col-12 downsideItems ">
                                                <div class="row">
                                                    <div class="col-10 offset-1 navbarMainItemsDiv py-3">
                                                        <div class="downsideItemsDiv py-1 rounded-2 text-center"><span>Items</span></div>
                                                        <div class=" col-10 offset-1 d-none navbarDropDownItemsDivSM px-0">
                                                            <div class="row mt-2">
                                                                <div class="col-10 offset-1 py-2 navbarDropDownItems"><span>Iphones</span></div>
                                                                <div class="col-10 offset-1 py-2 navbarDropDownItems"><span>Laptops</span></div>
                                                                <div class="col-10 offset-1 py-2 navbarDropDownItems"><span>Monitors</span></div>
                                                                <div class="col-10 offset-1 py-2 navbarDropDownItems"><span>Accesorries</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-10 offset-1   navbarMainItemsDiv py-3">
                                                        <div class="downsideItemsDiv py-1 rounded-2 text-center"><span>Brands</span></div>
                                                        <div class="col-10 offset-1 d-none  navbarDropDownItemsDivSM px-0">
                                                            <div class="row mt-2">
                                                                <div class="col-10 offset-1 py-2 navbarDropDownItems"><span>Apple</span></div>
                                                                <div class="col-10 offset-1 py-2 navbarDropDownItems"><span>Acer</span></div>
                                                                <div class="col-10 offset-1 py-2 navbarDropDownItems"><span>Samsung</span></div>
                                                                <div class="col-10 offset-1 py-2 navbarDropDownItems"><span>Razer</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-10 offset-1  text-center py-3">
                                                        <div class="downsideItemsDiv py-1 rounded-2"><span>Deals</span></div>
                                                    </div>
                                                    <div class="col-10 offset-1  text-center py-3">
                                                        <div class="downsideItemsDiv py-1 rounded-2"><span>Services</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 df ">
                                        <img id="userIconId" class="py-3 py-md-1 userIconPng" src="../icons/user.png" alt="" srcset="">
                                        <img class="py-3 py-md-1 cartIconPng" src="../icons/cart.png" alt="" srcset="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>




                    <div id="someProductDiv" class="col-12 blackBlue   someProductDiv pb-5">
                        <div class="row pb-3 pt-2">

                            <div class="col-12  pb-5">
                                <div class="row pt-2">

                                    <div class=" col-9  pb-lg-4 pb-4 productHolderContainerDiv">

                                        <div class="row">

                                            <div class="col-lg-12 col-12  pb-2  px-lg-4 px-3">
                                                <div class="row">
                                                    <div style="position: relative;" class="col-lg-12 col-12 productDiv  productDivColor py-4 ">
                                                        <div class="wishListAbsoluteDiv text-center d-none">
                                                            <img src="../icons/wishlist.png" alt="" srcset="">
                                                        </div>
                                                        <div class="searchIconAbsoluteDiv text-center d-none">
                                                            <img src="../icons/search.png" alt="" srcset="">
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-4 col-md-5 col-lg-4 text-center px-lg-4 px-1  py-3">

                                                                <img class="productImage " src="../images/product4.jpg" alt="">
                                                            </div>
                                                            <div class="col-8 col-md-7 col-lg-8 offset-0 py-1">
                                                                <div class="row">
                                                                    <div class="col-12 py-1 ">
                                                                        <h6 class="fw-bold">Apple iPhone 11, 64GB, Black - Unlocked (Renewed)</h6>
                                                                    </div>

                                                                    <div class="col-4 py-1 ">
                                                                        <span>$ 360</span>
                                                                    </div>
                                                                    <div class="col-8 py-1 text-start">
                                                                        <span class="fs-6 fa fa-star text-warning"></span>
                                                                        <span class="fs-6 fa fa-star text-warning"></span>
                                                                        <span class="fs-6 fa fa-star text-warning"></span>
                                                                        <span class="fs-6 fa fa-star"></span>
                                                                        <span class="fs-6 fa fa-star"></span>
                                                                    </div>
                                                                    <div class="col-lg-4 col-6 py-2">
                                                                        <span>Seller RAG</span>
                                                                    </div>
                                                                    <div class="col-lg-4 col-6 py-2">
                                                                        <span>Qty</span>
                                                                        <select class=" px-2" name="" id="">
                                                                            <option value="">1</option>
                                                                            <option value="">2</option>
                                                                            <option value="">3</option>
                                                                            <option value="">4</option>
                                                                            <option value="">5</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-8 py-3">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 offset-lg-0 col-md-10 offset-md-1 col-12 text-center py-1 px-md-2 px-3 px-lg-0">
                                                                                <button class="buyButton w-100 py-1">Remove</button>
                                                                            </div>
                                                                            <div class="col-lg-4 offset-lg-0 col-md-10 offset-md-1 col-12 text-center py-1 px-md-2 px-3 px-lg-0">
                                                                                <button class="cartButton w-100 py-1 ">Wish list</button>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-12   pb-2 px-lg-4 px-3">
                                                <div class="row">
                                                    <div style="position: relative;" class="col-lg-12 col-12 productDiv  productDivColor py-4 ">
                                                        <div class="wishListAbsoluteDiv text-center d-none">
                                                            <img src="../icons/wishlist.png" alt="" srcset="">
                                                        </div>
                                                        <div class="searchIconAbsoluteDiv text-center d-none">
                                                            <img src="../icons/search.png" alt="" srcset="">
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-4 col-md-5 col-lg-4 text-center px-lg-4 px-1  py-3">

                                                                <img class="productImage " src="../images/product4.jpg" alt="">
                                                            </div>
                                                            <div class="col-8 col-md-7 col-lg-8 offset-0 py-1">
                                                                <div class="row">
                                                                    <div class="col-12 py-1 ">
                                                                        <h6 class="fw-bold">Apple iPhone 11, 64GB, Black - Unlocked (Renewed)</h6>
                                                                    </div>

                                                                    <div class="col-4 py-1 ">
                                                                        <span>$ 360</span>
                                                                    </div>
                                                                    <div class="col-8 py-1 text-start">
                                                                        <span class="fs-6 fa fa-star text-warning"></span>
                                                                        <span class="fs-6 fa fa-star text-warning"></span>
                                                                        <span class="fs-6 fa fa-star text-warning"></span>
                                                                        <span class="fs-6 fa fa-star"></span>
                                                                        <span class="fs-6 fa fa-star"></span>
                                                                    </div>
                                                                    <div class="col-lg-4 col-6 py-2">
                                                                        <span>Seller RAG</span>
                                                                    </div>
                                                                    <div class="col-lg-4 col-6 py-2">
                                                                        <span>Qty</span>
                                                                        <select class=" px-2" name="" id="">
                                                                            <option value="">1</option>
                                                                            <option value="">2</option>
                                                                            <option value="">3</option>
                                                                            <option value="">4</option>
                                                                            <option value="">5</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-8 py-3">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 offset-lg-0 col-md-10 offset-md-1 col-12 text-center py-1 px-md-2 px-3 px-lg-0">
                                                                                <button class="buyButton w-100 py-1">Remove</button>
                                                                            </div>
                                                                            <div class="col-lg-4 offset-lg-0 col-md-10 offset-md-1 col-12 text-center py-1 px-md-2 px-3 px-lg-0">
                                                                                <button class="cartButton w-100 py-1 ">Wish list</button>
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
                                    <div class="col-3 cartCheckOutContainerDiv ps-2 darkBlue borderRound8px">
                                        <div class="row">
                                            <div class="col-12 pt-3 pb-2 text-center">
                                                <span>Subtotal</span>
                                            </div>
                                            <div class="col-12 py-1 text-center">
                                                <span> $362</span>
                                            </div>
                                            <div class="col-12 py-1 text-center">
                                            <button class="cartButton w-100 py-2 ">checkout</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
            <div style="z-index: 40;" class="col-12 blackBlue">
                <div class="row">
                    <div class="col-3 my-auto">
                        <img class="footerLogo" src="../images/logo.png" alt="">
                    </div>
                    <div class="col-9 py-2 footerOptionsDiv">
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




    <script src="wishlist.js"></script>
</body>

</html>