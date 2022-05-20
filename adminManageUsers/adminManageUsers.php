<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">

    <link rel="stylesheet" href="../style/adminManageUsers.css">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">

    <title>Admin Manage Products</title>
</head>

<body class="mainThemeColor defaultFontColor">
    <div class="container-fluid ">
        <div class="row">
            <div id="mainHoldingDiv" class="col-12 mainHoldingDiv  ">
                <div class="row">





                    <div id="someProductDiv" class="col-12 blackBlue   someProductDiv pb-5">
                        <div class="row pb-3 pt-2">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-3 text-start">
                                        <a href="../adminPanel/adminPanel.php">Admin Panel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center py-3">
                                <div class="row">
                                    <div class="col-lg-4 offset-lg-4 col-12">
                                        <h1 class="divHeaderText text-center">Admin Manage Users</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12  pb-5">
                                <div class="row pt-2">
                                    <div class="col-lg-2 col-md-3  pb-lg-4 pb-4">
                                        <div class="row ">
                                            <div class="col-12 py-2 text-center px-4 ">

                                                <select name="" id="" class=" py-1 w-100 text-center">
                                                    <option value="">Category</option>
                                                    <option value="">Computer</option>
                                                    <option value="">Laptops</option>
                                                    <option value="">SmartPhones</option>
                                                    <option value="">Other Electronic Devices</option>
                                                    <option value="">Computer Accesories</option>
                                                    <option value="">Smartphone Accessories</option>
                                                </select>
                                            </div>
                                            <div class="col-12 py-2 text-center px-4">
                                                <select name="" id="" class=" py-1 w-100 text-center">
                                                    <option value="">Brand</option>
                                                    <option value="">Apple</option>
                                                    <option value="">Samsung</option>
                                                    <option value="">Sony</option>
                                                    <option value="">LG</option>
                                                    <option value="">GoPro</option>
                                                    <option value="">Dell</option>
                                                    <option value="">Lenovo</option>
                                                </select>
                                            </div>
                                            <div class="col-12 py-2 text-center px-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <span>Seller Rate</span>
                                                    </div>
                                                    <div class="col-12 py-1">
                                                        <span>High to Low</span>
                                                        <input type="radio" name="pr" class="px-1 py-1">
                                                    </div>
                                                    <div class="col-12 py-1">
                                                        <span>Low to High</span>
                                                        <input type="radio" name="pr" class="px-1 py-1">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 py-2 text-center px-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <span>Time Duration </span>
                                                    </div>
                                                    <div class="col-12 py-1">
                                                        <span>New to Old</span>
                                                        <input type="radio" name="nTo" class="px-1 py-1">
                                                    </div>
                                                    <div class="col-12 py-1">
                                                        <span>Old to New</span>
                                                        <input type="radio" name="nTo" class="px-1 py-1">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 py-2 text-center px-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <span>Search by Seller</span>
                                                    </div>
                                                    <div class="col-12 py-1">
                                                        <div class="row">
                                                            <div class="col-12 py-1"><input type="text" class="py-1 px-1"></div>
                                                            <div class="col-12 py-1 "> <button class="px-1 py-1 checkoutBtn">Search By User </button></div>
                                                        </div>


                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-10 col-md-9 pb-lg-4 pb-4 productHolderContainerDiv">

                                        <div class="row">

                                            <div class="col-lg-3 col-md-6 col-sm-6 col-8 offset-2 offset-sm-0  pb-2  px-lg-4 px-3">
                                                <div class="row">
                                                    <div style="position: relative;" class="col-lg-12 col-12 productDiv  productDivColor py-4 ">

                                                        <div class="row">

                                                            <div class="col-12 col-lg-12 text-center px-lg-4 px-1  py-3">

                                                                <img class="productImage " src="../images/person2.jpg" alt="">
                                                            </div>
                                                            <div class="col-12 col-lg-12 offset-0 py-1">
                                                                <div class="row">
                                                                    <div class="col-12 py-1 text-center">
                                                                        <h6 class="fw-bold">Mark Hunter</h6>
                                                                    </div>

                                                                    <div class="col-12 py-1 ">
                                                                        <span></span>
                                                                    </div>
                                                                    <div class="col-12 py-1 text-center">
                                                                        <span class="fs-6 fa fa-star text-warning"></span>
                                                                        <span class="fs-6 fa fa-star text-warning"></span>
                                                                        <span class="fs-6 fa fa-star text-warning"></span>
                                                                        <span class="fs-6 fa fa-star"></span>
                                                                        <span class="fs-6 fa fa-star"></span>
                                                                    </div>



                                                                    <div class="col-lg-12 col-12 pt-3 px-4">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 offset-lg-0 col-md-10 offset-md-1 col-12 text-center py-1 px-md-2 px-3 px-lg-0">
                                                                                <button class="buyButton w-100 py-1">Block User</button>
                                                                            </div>
                                                                            <div class="col-lg-12 offset-lg-0 col-md-10 offset-md-1 col-12 text-center py-1 px-md-2 px-3 px-lg-0">
                                                                                <button class="cartButton w-100 py-1 ">Contact Seller</button>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-8 offset-2 offset-sm-0  pb-2  px-lg-4 px-3">
                                                <div class="row">
                                                    <div style="position: relative;" class="col-lg-12 col-12 productDiv  productDivColor py-4 ">

                                                        <div class="row">

                                                            <div class="col-12 col-lg-12 text-center px-lg-4 px-1  py-3">

                                                                <img class="productImage " src="../images/person1.jpg" alt="">
                                                            </div>
                                                            <div class="col-12 col-lg-12 offset-0 py-1">
                                                                <div class="row">
                                                                    <div class="col-12 py-1 text-center">
                                                                        <h6 class="fw-bold">Jenny Rose</h6>
                                                                    </div>

                                                                    <div class="col-12 py-1 ">
                                                                        <span></span>
                                                                    </div>
                                                                    <div class="col-12 py-1 text-center">
                                                                        <span class="fs-6 fa fa-star text-warning"></span>
                                                                        <span class="fs-6 fa fa-star text-warning"></span>
                                                                        <span class="fs-6 fa fa-star text-warning"></span>
                                                                        <span class="fs-6 fa fa-star"></span>
                                                                        <span class="fs-6 fa fa-star"></span>
                                                                    </div>



                                                                    <div class="col-lg-12 col-12 pt-3 px-4">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 offset-lg-0 col-md-10 offset-md-1 col-12 text-center py-1 px-md-2 px-3 px-lg-0">
                                                                                <button class="buyButton w-100 py-1">Block User</button>
                                                                            </div>
                                                                            <div class="col-lg-12 offset-lg-0 col-md-10 offset-md-1 col-12 text-center py-1 px-md-2 px-3 px-lg-0">
                                                                                <button class="cartButton w-100 py-1 ">Contact Seller</button>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 py-3">
                                                <div class="row">
                                                    <div class="col-8 offset-2">
                                                        <div class="row">
                                                            <div class="col-3  text-center">
                                                                <button class="px-3 py-1 buyButton">Prev</button>
                                                            </div>
                                                            <div class="col-6 text-center ">
                                                                <div class="row">
                                                                    <div class="col-12">

                                                                        <button class="px-3 py-1 buyButton">1</button>
                                                                        <button class="px-3 py-1 buyButton">2</button>
                                                                        <button class="px-3 py-1 buyButton">3</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3  text-center">
                                                                <button class="px-3 py-1 buyButton">Next</button>
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




    <script src="adminManageProducts.js"></script>
</body>

</html>