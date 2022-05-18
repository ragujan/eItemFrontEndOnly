<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">

    <link rel="stylesheet" href="../style/addProduct.css">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">

    <title>Cart</title>
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
                                        <span>Enter Product Price</span>
                                        <input type="number" class="px-2 py-2 w-100">
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
                                                    <div class="col-lg-4 col-md-6 col-6">
                                                        <div class="row">
                                                            <div class="col-8"><span>Red</span></div>
                                                            <div class="col-4"> <input class="py-2 " type="radio" name="colorSelect"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-6">
                                                        <div class="row">
                                                            <div class="col-8"><span>Black</span></div>
                                                            <div class="col-4"> <input class="py-2 " type="radio" name="colorSelect"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-6">
                                                        <div class="row">
                                                            <div class="col-8"><span>Grey</span></div>
                                                            <div class="col-4"> <input class="py-2 " type="radio" name="colorSelect"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-6">
                                                        <div class="row">
                                                            <div class="col-8"><span>White</span></div>
                                                            <div class="col-4"> <input class="py-2 " type="radio" name="colorSelect"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-6">
                                                        <div class="row">
                                                            <div class="col-8"><span>Dark Blue</span></div>
                                                            <div class="col-4"> <input class="py-2 " type="radio" name="colorSelect"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-6">
                                                        <div class="row">
                                                            <div class="col-8 "><span>Light Pink</span></div>
                                                            <div class="col-4"> <input class="py-2 " type="radio" name="colorSelect"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 py-3">
                                                <div class="row">
                                                    <div class="col-12"> <span>Choose Storage Sizes</span></div>
                                                    <div class="col-12"><select name="" class="py-1 px-2" id="chooseSizeBy">
                                                            <option value="1">Custom Size</option>
                                                            <option value="2">Choose options</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 py-2 d-none" id="chooseOptionsCB">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="row">
                                                                    <div class="col-8"><span>32GB</span></div>
                                                                    <div class="col-4"> <input class="py-2 px-2" type="checkbox"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="row">
                                                                    <div class="col-8"><span>64GB</span></div>
                                                                    <div class="col-4"> <input class="py-2 px-2" type="checkbox"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="row">
                                                                    <div class="col-8"><span>128GB</span></div>
                                                                    <div class="col-4"> <input class="py-2 px-2" type="checkbox"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="row">
                                                                    <div class="col-8"><span>256GB</span></div>
                                                                    <div class="col-4"> <input class="py-2 px-2" type="checkbox"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="row">
                                                                    <div class="col-8"><span>512GB</span></div>
                                                                    <div class="col-4"> <input class="py-2 px-2" type="checkbox"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="row">
                                                                    <div class="col-8"><span>1024GB</span></div>
                                                                    <div class="col-4"> <input class="py-2 px-2" type="checkbox"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 py-2 " id="chooseOptionsType">
                                                        <input type="number" class="w-100 py-1 px-3">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 ">
                                                <div class="row">
                                                    <div class="col-12"> <span>Max Qty</span></div>
                                                    <div class="col-12">
                                                        <input type="number" class="w-100 py-1 px-3">
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-12 py-2">
                                                <div class="row">
                                                    <div class="col-12"> <span>Product Images</span></div>
                                                    <div class="col-12">
                                                        <label for="productImageFiles" class="w-100 py-2 px-3 bg-white text-dark">Choose 3 Images</label>
                                                        <input type="file" multiple id="productImageFiles" class="w-100  d-none">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-12 offset-lg-0 col-md-6 offset-md-3 col-12 uploadedImagesDiv">
                                <div class="row py-1">
                                    <div class="col-lg-4 offset-lg-0 col-8 offset-2 text-center px-5  py-3">
                                        <img class="uploadedImages" src="../icons/productIcon.png" alt="">
                                    </div>
                                    <div class="col-lg-4 offset-lg-0 col-8 offset-2 text-center px-5  py-3">
                                        <img class="uploadedImages" src="../icons/productIcon.png" alt="">
                                    </div>
                                    <div class="col-lg-4 offset-lg-0 col-8 offset-2 text-center px-5  py-3">
                                        <img class="uploadedImages" src="../icons/productIcon.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                <div class="col-10 offset-1 ">
                                        <span>Product About Description</span>
                                    </div>
                                    <div class="col-10 offset-1 py-3">
                                        <textarea class="w-100 px-4 py-3" name="" id="" cols="30" rows="10"></textarea>
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




    <script src="updateProduct.js"></script>
</body>

</html>