<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
$page = $_GET['link'];

require 'code/components/pf.php';
date_default_timezone_set('Asia/Singapore');
$mysqltime = date ('Y-m-d H:i:s', time());
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

                <!-- Local CSS-->
                <link href="res/res-tadd/tadd.css" rel="stylesheet" type="text/css">

                <!--Font Awsome-->
                <script src="https://kit.fontawesome.com/828216c770.js" crossorigin="anonymous"></script>
            </head>

    <body className='snippet-body'>

            <!--Sidebar Navigatioon-->
            <?php require 'code/components/nav.php'; ?>


            <!--General Container-->
            <div class="height-100 bg-light">
               
                <div class="wrapper">
                    <div class="title">
                      Add Ticket 
                      
                    </div>
                   
                    
                        
                    <!-- form -->
                    <form method="POST" action="code/components/tadd/tpost.php" enctype="multipart/form-data"> 
                     <!--Hidden-->
                     <input type="hidden" name="iname" value="<?=$_SESSION['fname']?> <?=$_SESSION['mname']?> <?=$_SESSION['lname']?>" id="iname" required>
                            <input type="hidden" name="iid" value="<?=$_SESSION['id']?>" id="iid" required>
                            <input type="hidden" name="email" placeholder="email" id="txt_field" value="<?=$_SESSION['name']?>">
                            <input type="hidden" name="stat" value="pending" id="stat" required>
                            <input class="form-control" type="hidden" name="ipstion" id="ipstion" value="<?=$_SESSION['pstion']?>" />
                            <input class="form-control" type="hidden" name="img" id="img" value="<?=$_SESSION['filename']?>" />
                            <?php echo  '<input type="hidden" name="dt" value="'. $mysqltime . '" id="dt" required>'?>
                            
                      <!--Inquiry-->
                        <div class="form">
                        
                           
                          
                           <!--Type-->
                           <div class="inputfield" >
                          <label>Type:</label>
                          <div class="custom_select">
                          <select type="select" name="itype" placeholder="Type" id="itype" style="text-transform: capitalize;" required>
                          <option value="">--- Select the type of the Inquiry ---</option>
                            <option value="Hardware">Hardware</option> <!-- 2 -->
                            <option value="Software">Software</option> <!-- 2 -->
                            <option value="Account">Account</option>  <!-- 2 -->
                            <option value="Hyflex Equipment">Hyflex Equipment</option> <!-- 3 -->  
                            <option value="Borrowed Equipment">Borrowed Equipment</option> <!-- 3 -->
                            <option value="Others">Others</option>  <!-- 1 -->
                            </select>
                          </div>
                          </div> 


                          <div id="form-element-container"></div>
                          
                        
                      
                           <input class="inputfield" type="file" name="uploadfile" value="" />

                          <!--Place-->
                          <div class="inputfield" >
                          <label>Where are you:</label>
                          <div class="custom_select">
                          <select name="location" id="location">
                          <option value="">Select an option</option>
                          <option value="On-Premise">On-Premise</option>
                          <option value="Outside">Outside</option>
                          </select>
                          </div>
                          </div> 

                          <!-- HTML select input that will be shown only when option1a is selected -->
                          <div id="option2-wrapper" style="display:none;">

                          <!--floor-->
                          <div class="inputfield" >
                          <label>What Floor are you on:</label>
                          <div class="custom_select">
                          <select name="floor" id="floor">
                          <option value="">--- Select the floor you are on ---</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          </select>
                          </div>
                          </div>

                          <!--room-->
                          <div id="optroom" name="optroom" style="display:none;">
                          <div class="inputfield" >
                          <label>What room are you in:</label>
                          <div class="custom_select">
                          <select name="room" id="room">
                          </select>
                          </div>
                          </div> 
                          </div> <!--optroom-->

                           </div><!--option wrapper -->

                           <br>

                           <!-- add button -->
                          <div class="inputfield">
                            <button type="submit" class="btn" value="Post">Add Ticket</button>
                          </div>

                    </form>
                    <!-- back button -->
                          <div class="inputfield">
                            <a href="javascript:history.back()" value="Back" class="btn" style="text-decoration: none;" ><center>Back</center></a>
                          </div>
                    </div>
                </div>	

            </div><!--End-->

            <?php require "code/components/tadd/js.php";?>
                            
    </body>
</html>