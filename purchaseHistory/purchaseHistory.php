<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">

    <link rel="stylesheet" href="../style/purshaseHistory.css">




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
                    <div class="col-12 py-5">
                        <div class="row">
                            <div class="col-4 offset-4 text-center">
                                <h1 class="divHeaderText text-white">Purchase History</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pb-4">
                        <div class="row">
                            <div class="col-12 px-5">
                                <div class="row">
                                    <table id="invoicetable">
                                        <tr>
                                            <th>id</th>
                                            <th>product</th>
                                            <th>qty</th>
                                            <th>subtotal</th>
                                            <th>Date & Time</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td>001</td>
                                            <td>Iphone 11 </td>
                                            <td>4</td>
                                            <td>$500</td>
                                            <td>2022/04/25</td>
                                            <td class="actiontd"><button class="w-100 py-1 px-2"><img class="loudSpeaker" src="../icons/loudSpeaker.png" alt=""></button>
                                                <button class="w-100 py-1 px-2"><img class="dumpBin" src="../icons/delete.png" alt=""></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>001</td>
                                            <td>Iphone 11 </td>
                                            <td>4</td>
                                            <td>$500</td>
                                            <td>2022/04/25</td>
                                            <td class="actiontd"><button class="w-100 py-1 px-2"><img class="loudSpeaker" src="../icons/loudSpeaker.png" alt=""></button>
                                                <button class="w-100 py-1 px-2"><img class="dumpBin" src="../icons/delete.png" alt=""></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>001</td>
                                            <td>Iphone 11 </td>
                                            <td>4</td>
                                            <td>$500</td>
                                            <td>2022/04/25</td>


                                            <td class="actiontd"><button class="w-100 py-1 px-2"><img class="loudSpeaker" src="../icons/loudSpeaker.png" alt=""></button>
                                                <button class="w-100 py-1 px-2"><img class="dumpBin" src="../icons/delete.png" alt=""></button>
                                            </td>

                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>







                </div>
            </div>
            <footer class="">
                <div class="row">
                    <div style="z-index: 40;" class="col-12 blackBlue ">
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
            </footer>
        </div>
    </div>




    <script src="purchaseHistory.js"></script>
</body>

</html>