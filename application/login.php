<?php
// We need to use sessions, so you should always start sessions using the below code.
// If the user is not logged in redirect to the login page...
if(session_id() == '') {
    session_start();
}
if (isset($_SESSION['loggedin'])) {
	header('Location: home.php?link=home');
	exit;
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device, initial-scale=1.0">
        <title>Log In</title>

        <!-- Main Bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       
        <!-- Local CSS-->
        <link href="res/res-login/login.css" rel="stylesheet" type="text/css">

        <!--Outsource Bootstrap Resources-->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>


    </head>
    <body>
        
        <div class="container-fluid">
            <div class="row ">
                <!-- IMAGE CONTAINER BEGIN -->
                <div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>
                <!-- IMAGE CONTAINER END -->
    
                <!-- FORM CONTAINER BEGIN -->
                <div class="col-lg-6 col-md-6 infinity-form-container">				
                    <div class="col-lg-9 col-md-12 col-sm-9 col-xs-12 infinity-form">
                        <!-- Company Logo -->
                        <div class="text-center mb-1 mt-1">
                            <img src="res/res-login/logo.png" width="150px">
                        </div>
                        <div class="text-center mb-1">
                      <h4>Login using your <img src="res/res-login/365.png" width="230px"> Account</h4>
                    </div>
                    <!-- Login Form -->
                        <form class="px-3" action="authenticate.php" method = "post">
                            <!-- Input Box -->
                            <div class="form-input">
                                <span><i class="fa fa-envelope-o"></i></span>
                                <input type="email" name="email" placeholder="Email Address" tabindex="10" required>
                            </div>
                            <div class="form-input">
                                <span><i class="fa fa-lock"></i></span>
                                <input type="password" name="pswd" placeholder="Password" required>
                            </div>
                            <div class="row mb-3">             
                         </div>

                         <div class="toc">
                         <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required>
                         <label for="tocs"> <p class="agree" style="color: white;">Do you agree with RAM-IT's <a href="https://www.privacy.gov.ph/data-privacy-act/">Privacy Policy</a>?</p></label>
                        </div>

                         <!-- Login Button -->
                      <div class="mb-3"> 
                                <button type="submit" class="btn btn-block" value="Login">Login</button>
                            </div>
                                    
                         </div>
                        </form>
                    </div>					
                </div>
                <!-- FORM CONTAINER END -->
            </div>
        </div>	


        <!-- Main Bootstrap Javascript (Bundle)-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Main Bootstrap Javascript (Seperate)-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</php>