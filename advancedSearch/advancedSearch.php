<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">

    <link rel="stylesheet" href="../style/advancedSearch.css">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">

    <title>Add Product</title>
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
                                           <div class="col-12"></div>
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


                    <div class="col-12 py-4">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-0 col-md-6 offset-md-3 col-8 offset-2">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1 col-12">
                                        <div class="row">
                                            <div class="col-12 py-3">
                                                <span>Select Category</span>
                                                <select name="" id="" class=" py-2 w-100">
                                                    <option value="">Category</option>
                                                    <option value="">Computer</option>
                                                    <option value="">Laptops</option>
                                                    <option value="">SmartPhones</option>
                                                    <option value="">Other Electronic Devices</option>
                                                    <option value="">Computer Accesories</option>
                                                    <option value="">Smartphone Accessories</option>
                                                </select>
                                            </div>
                                            <div class="col-12 py-3">
                                                <span>Select Brand</span>
                                                <select name="" id="" class=" py-2 w-100">
                                                    <option value="">Apple</option>
                                                    <option value="">Samsung</option>
                                                    <option value="">Sony</option>
                                                    <option value="">LG</option>
                                                    <option value="">GoPro</option>
                                                    <option value="">Dell</option>
                                                    <option value="">Lenovo</option>
                                                </select>
                                            </div>
                                            <div class="col-12 py-3">
                                                <span>Enter Product Name</span>
                                                <input type="text" class="px-2 py-2 w-100">
                                            </div>
                                            <div class="col-12 py-3">
                                                <div class="col-12">
                                                    <span>Enter Product Price</span>
                                                </div>
                                                <!-- <div  class="col-12 priceRangeSliderHolderDiv">
                                                    <input type="range" min="100" max="20000" value="200" class="priceRangeSliders-Min ">
                                                    <input type="range" min="100" max="20000" value="15000" class="priceRangeSliders-Max ">
                                                </div> -->
                                                <div class="col-12">
                                                    <div class="wrapper">
                         
                                                        <div class="price-input">
                                                            <div class="field">
                                                                <span>Min</span>
                                                                <input type="number" class="input-min py-1" value="2500">
                                                            </div>
                                                            <div class="separator">-</div>
                                                            <div class="field">
                                                                <span>Max</span>
                                                                <input type="number" class="input-max py-1" value="7500">
                                                            </div>
                                                        </div>
                                                        <div class="slider">
                                                            <div class="progress"></div>
                                                        </div>
                                                        <div class="range-input">
                                                            <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                                            <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-0 col-md-6 offset-md-3 col-8 offset-2">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1 col-12">
                                        <div class="row">
                                            <div class="col-12 py-3">
                                                <div class="row">
                                                    <div class="col-12"> <span>Select Color</span></div>
                                                    <div class="col-12">
                                                        <select name="" id="" class=" py-2 w-100">
                                                            <option value="">Red</option>
                                                            <option value="">Black</option>
                                                            <option value="">Grey</option>
                                                            <option value="">White</option>
                                                            <option value="">Dark Blue</option>
                                                            <option value="">Light Pink</option>

                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 py-3">
                                                <div class="row">
                                                    <div class="col-12"> <span>Choose Storage Sizes</span></div>
                                                    <div class="col-12"><select name="" class="py-1 px-1" id="chooseSizeBy">
                                                            <option value="1">Custom Size</option>
                                                            <option value="2">Choose options</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 py-2 d-none" id="chooseOptionsCB">
                                                        <div class="row">
                                                            <div class="col-12 ">
                                                                <div class="row">

                                                                    <div class="col-12">
                                                                        <select name="" id="" class=" py-2 w-100 ps-1">
                                                                            <option value="">Choose Size</option>
                                                                            <option value="">16GB</option>
                                                                            <option value="">32GB</option>
                                                                            <option value="">64GB</option>
                                                                            <option value="">128GB</option>
                                                                            <option value="">256GB</option>
                                                                            <option value="">512GB</option>
                                                                            <option value="">1024GB</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 py-2 " id="chooseOptionsType">
                                                        <input type="number" class="w-100 py-1 px-3">
                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="col-12 py-2">
                                <div class="row">
                                    <div class="col-6 offset-3 d-grid">
                                        <button class="cartButton py-2 px-2">Enter Product</button>
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




    <script src="advancedSearch.js"></script>
</body>

</html>