<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">

    <link rel="stylesheet" href="../style/invoice.css">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">

    <title>Invoice</title>
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




                    <div class="col-lg-10 offset-lg-1 col-12 pb-3 mb-5 border border-1 rounded-2 px-lg-5 px-5">
                        <div class="row">
                            <div class="col-12 text-center py-3">
                                <div class="row">
                                    <div class="col-4 offset-4">
                                        <h1 class="divHeaderText text-center">Invoice</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6">
                                <div class="row">
                                    <div class="col-12 recipientAddress">
                                        <h5>Recipient Address</h5>
                                        <div class="row pt-1"><span>Beaverly Hilss,100450</span></div>
                                        <div class="row pt-1"><span>Los Angeles, CA, USA</span></div>
                                        <div class="row pt-1"><span>+45 8889663</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-6 my-auto text-end   ">
                                <h3 class="pe-lg-4 me-lg-5 fw-bolder ">Rag ESHOP</h3>
                            </div>

                            <hr class="text-white mt-3">
                            <div class="col-lg-4 col-6">
                                <div class="row">
                                    <div class="col-12 recipientAddress">
                                        <h5>Sender Address</h5>
                                        <div class="row pt-1"><span>High all the time,100450</span></div>
                                        <div class="row pt-1"><span>Los Angeles, CA, USA</span></div>
                                        <div class="row pt-1"><span>+45 8889663</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-6 my-auto  dateDetails">
                                <div class="row">
                                    <div class="col-lg-7 col-4"></div>
                                    <div class="col-lg-5 col-8  ">
                                        <div class="row pt-1"><span>Date : 2022/11/11</span></div>
                                        <div class="row pt-1"><span>Quote : 44444</span></div>
                                        <div class="row pt-1"><span>Valid Date : 2022/11/15</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 pt-5">
                                <div class="row">
                                    <div class="col-12 bg-dark py-2 borderRounded">
                                        <div class="row">
                                            <div class="col-lg-4 col-5"><span>Item Description</span></div>
                                            <div class="col-lg-2 col-2"><span>Qty</span></div>
                                            <div class="col-lg-3 col-3"><span>Unit Price</span></div>
                                            <div class="col-lg-3 col-2"><span>Total</span></div>
                                        </div>
                                    </div>

                                    <div class="col-12 pt-3 blackBlue">
                                        <div class="row">
                                            <div class="col-12 py-2 invoiceRows ">
                                                <div class="row">
                                                    <div class="col-lg-4 col-5"><span>Apple iPhone 11, 64GB, Black - Unlocked (Renewed)</span></div>
                                                    <div class="col-lg-2 col-2"><span>5</span></div>
                                                    <div class="col-lg-3 col-3"><span>$354.00</span></div>
                                                    <div class="col-lg-3 col-2"><span>$1600</span></div>
                                                </div>
                                            </div>
                                            <div class="col-12 py-2 invoiceRows ">
                                                <div class="row">
                                                    <div class="col-lg-4 col-5"><span>Apple iPhone 11, 64GB, Black - Unlocked (Renewed)</span></div>
                                                    <div class="col-lg-2 col-2"><span>5</span></div>
                                                    <div class="col-lg-3 col-3"><span>$354.00</span></div>
                                                    <div class="col-lg-3 col-2"><span>$1600</span></div>
                                                </div>
                                            </div>
                                            <div class="col-12 py-2 invoiceRows ">
                                                <div class="row">
                                                    <div class="col-lg-4 col-5"><span>Apple iPhone 11, 64GB, Black - Unlocked (Renewed)</span></div>
                                                    <div class="col-lg-2 col-2"><span>5</span></div>
                                                    <div class="col-lg-3 col-3"><span>$354.00</span></div>
                                                    <div class="col-lg-3 col-2"><span>$1600</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="col-12  px-0">
                                <div class="offset-lg-8 col-lg-4 col-md-5 offset-md-7 col-6 offset-6 blackBlue borderRounded ">
                                    <div class="row py-2">
                                        <div class="col-12 text-center ">
                                            <span>Sub Total $135,000</span>
                                        </div>
                                        <div class="col-12 text-center ">
                                            <span>Discout $1000</span>
                                        </div>
                                        <div class="col-12 text-center ">
                                            <span>Shipping & Delivery $250</span>
                                        </div>
                                        <div class="col-12 text-center ">
                                            <span>Grand Total $50000</span>
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




                <script src="invoice.js"></script>
</body>

</html>