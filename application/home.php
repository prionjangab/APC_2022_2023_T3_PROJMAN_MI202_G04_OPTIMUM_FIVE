<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;

   
}
require 'code/components/connect.php';
//home
$page = $_GET['link'];
?>

<!DOCTYPE html>
        <html>
            <head>
                
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <title>Home</title>

                <!--Outsource Bootstrap-->
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
                <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

                <!--Outsource Fontawsome-->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
                                
                <!-- Local CSS-->
                <link href="res/res-chatbot/chatbot.css" rel="stylesheet" type="text/css">
                <link href="res/res-home/home.css" rel="stylesheet" type="text/css">

                <!--Font Awsome-->
                <script src="https://kit.fontawesome.com/828216c770.js" crossorigin="anonymous"></script>
                </head>


    <body className='snippet-body'>
    
            <!--Sidebar Navigatioon-->
            <?php require 'code/components/nav.php'; ?>

            <!--General Container-->
            <div class="height-100 bg-light">

                <!--Landon Welcome-->
                <div>
                 <section id="headerwel">
                    <div class="containerwel">
                            <div class="container-fluidwel"></div>                
                        <div class="middlewel">
                            <h1 class="text-white display-3 fw-bold">Welcome to RAM-IT:<br>
                                ITRO's ChatBot & Ticketing System,<br><span class="theme-text"><?=$_SESSION['fname']?> <?=$_SESSION['mname']?> <?=$_SESSION['lname']?></span></h1>
                        </div>
                    </div>
                    </section>
                </div>

               <br>

                <?php if ($_SESSION['pstion'] == 'student'){?>
                    <!--Content Slider-->
                <div class="slider">
                    <div class="slides">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
            
                        <div class="slide first">
                            <img src="res/res-home/1.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="res/res-home/2.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="res/res-home/3.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="res/res-home/4.png" alt="">
                        </div>
            
                        <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                        </div>
                    </div>
            
                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
                </div>
                <!-- charts -->
                <?php } else{ require 'code/components/home/homecharts.php'; ?>
                            <div style = " position: relative; left: 510px; bottom: 450px; width:200px; height:250px;">
                            <?php    require 'code/components/home/itrocharts.php';} ?>   
                            </div>
                                
                 <!--Chatbot -->
                 <?php require 'code/components/chatbot/cb.php';?>

                <!--Space Division-->
                <div style="height:5%;"></div>
                <br>
                <br>
                <br>
                <br>
                
               
            <!--Slideshow Script Script-->
            <script type="text/javascript">
                var counter = 1;
                setInterval(function(){
                    document.getElementById('radio' + counter).checked = true;
                    counter++;
                    if (counter > 4){
                        counter = 1;
                    }
                }, 12000);
            </script>

            
               

    </body>
</html>

