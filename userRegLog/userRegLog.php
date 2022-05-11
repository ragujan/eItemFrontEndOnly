<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>UserLogIN</title>
</head>

<body class="mainThemeColor defaultFontColor">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 mainHoldingDiv  ">
                <div class="row">
                    <div class="col-12 text-center">
                        <img class="logoImageMega" src="../images/logo.png" alt="">
                    </div>
                    <div id="signInInputDiv" class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12 offset-0  signinInputDiv">
                        <div class="row">

                            <div  class="col-8 offset-2 signinSignupSingleElement py-2">
                                <div class="row">

                                    <div class="col-12">
                                        <input placeholder="Email" type="text " class="w-100 px-2 py-2">
                                    </div>
                                </div>

                            </div>
                            <div class="col-8 offset-2 signinSignupSingleElement py-2">
                                <div class="row">

                                    <div class="col-12">
                                        <input placeholder="Password" type="text " class="w-100 px-2 py-2">
                                    </div>
                                </div>

                            </div>
                            <div class="col-8 offset-2 signinSignupSingleElement py-2">
                                <div class="row">

                                    <div class="col-12">
                                        <button class="w-100 px-2 py-2   ">Sign in</button>
                                    </div>
                                </div>

                            </div>
                            <div class="col-8 offset-2 signinSignupSingleElement py-2">
                                <div class="row">

                                    <div class="col-12 text-center py-2">
                                        <span class="spanlinks">Forgot Password</span>
                                    </div>
                                    <div class="col-12 text-center py-0">
                                        <span onclick="showSignUpDiv();" class="spanlinks">Sign Up</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="signUpInputDiv" class="col-6 offset-3 signUpInputDiv  d-none">
                        <div class="row">

                            <div class="col-8 offset-2 signinSignupSingleElement py-2">
                                <div class="row">

                                    <div class="col-12">
                                        <input placeholder="UserName" type="text " class="w-100 px-2 py-2">
                                    </div>
                                </div>

                            </div>
                            <div class="col-8 offset-2 signinSignupSingleElement py-2">
                                <div class="row">

                                    <div class="col-12">
                                        <input placeholder="Email" type="text " class="w-100 px-2 py-2">
                                    </div>
                                </div>

                            </div>
                            
                            <div class="col-8 offset-2 signinSignupSingleElement py-2">
                                <div class="row">

                                    <div class="col-12">
                                        <input placeholder="Password" type="text " class="w-100 px-2 py-2">
                                    </div>
                                </div>

                            </div>
                            <div class="col-8 offset-2 signinSignupSingleElement py-2">
                                <div class="row">

                                    <div class="col-12">
                                        <input placeholder="Re-Enter Password" type="text " class="w-100 px-2 py-2">
                                    </div>
                                </div>

                            </div>
                            <div class="col-8 offset-2 signinSignupSingleElement py-2">
                                <div class="row">

                                    <div class="col-12">
                                        <button class="w-100 px-2 py-2   ">Sign up</button>
                                    </div>
                                </div>

                            </div>
                            <div class="col-8 offset-2 signinSignupSingleElement py-2">
                                <div class="row">

                              
                                    <div class="col-12 text-center py-0">
                                        <span onclick="showSignInDiv();" class="spanlinks">Sign In</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="userRegLog.js"></script>
</body>

</html>