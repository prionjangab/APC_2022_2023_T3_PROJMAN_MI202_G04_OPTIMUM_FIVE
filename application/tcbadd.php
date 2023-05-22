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
                      Add Chatbot Entry 
                    </div>
                   
                    
                        
                    <!-- form -->
                    <form method="POST" action="code/components/cbadd/tcbpost.php" enctype="multipart/form-data"> 
                      <!--Query ht-->
                      <div class="help-tip" style="margin-left: 60px; margin-top: 50px; width: 25px; height: 25px;">
                              <p style = "width: 180px;" > If theres many possible queries use " | " sign example: <br>  hey | hello | hellow  
                          </div>
                      <!--Query-->
                        <div class="form">
                        <div class="inputfield">
                          <label>Query:</label>
                          <textarea class="textarea" name="queries" placeholder="Query" id="txt_field" required></textarea>
                           </div> 
                  
                           <!--Replies ht-->
                    <div class="help-tip" style="margin-left: 60px; margin-top: 50px; width: 25px; height: 25px;">
                              <p style = "width: 180px;" > HTML codes can be used in the Replies like break and horizontal line. that also includes links  
                          </div>
                        <!--Replies-->
                        <div class="form">
                        <div class="inputfield">
                          <label>Reply:</label>
                          <textarea class="textarea" name="replies" placeholder="Reply" id="txt_field" required></textarea>
                       </div> 

                       <!--link-->
                       <div class="form">
                        <div class="inputfield">
                          <label>Link:</label>
                          <textarea class="textarea" name="link" placeholder="Link" id="txt_field" ></textarea>
                       </div> 

                       <!--Message-->
                       <div class="form">
                        <div class="inputfield">
                          <label>Message of link:</label>
                          <textarea class="textarea" name="msg" placeholder="Message of link" id="txt_field" ></textarea>
                       </div> 
                       
                       <!-- submit button -->
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

  
                            
    </body>
</html>