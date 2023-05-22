<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
require 'code/components/pf.php';

$page = $_GET['link'];

?>
<!DOCTYPE html>
        <html>
            <head>
            
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <title>Home</title>

                <!--Outsource Bootstrap (NAV and PAGE)-->
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
                <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

                <!--Outsource Fontawsome-->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

                <!--Outsource Bootstrap (PROFILE)-->
                <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>               
                
                <!--Outsource Fontawsome-->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

                <!-- Local CSS-->
                <link href="res/res-profile/profile.css" rel="stylesheet" type="text/css">
                <link href="res/res-chatbot/chatbot.css" rel="stylesheet" type="text/css">

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
                           <h1 class="text-white display-3 fw-bold">
                               <span class="theme-text">Profile</span></h1>
                       </div>
                   </div>
                   </section>
               </div>

               <br>
               
                <!--Space Division-->
                <div style="height:5%;"></div>

            <!--Profile-->
           <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                            <img src="res/accountimg/<?=$_SESSION['filename']?>" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4><?=$_SESSION['fname']?> <?=$_SESSION['mname']?> <?=$_SESSION['lname']?></h4>
                                    <hr>
                                    <p class="text-secondary mb-1">Bachleor of Science in Information and Technology</p>
                                    <p class="text-muted font-size-sm">Mobile and Internet</p>
                                </div>
                            </div>
                        </div>
                    </div>

            <div class="card mt-3">
            </div>
            </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-sm-3">
                            <h6 class="mb-0">Email:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?=$email?>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-sm-3">
                            <h6 class="mb-0">ID #:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            <h6 class="mb-0"><?=$_SESSION['id']?></h6>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-sm-3">
                            <h6 class="mb-0">Position:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            <h6 class="mb-0" style="text-transform: uppercase;"><?=$pstion?></h6>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!--Chatbot -->
             <?php require 'code/components/cb.php';?>

             <!-- charts -->
             <?php
             if ($_SESSION['pstion'] == 'it') {
                    
                    $sqlopen = "SELECT * FROM ticket where stat='open' AND assignid = ".$_SESSION['id']." ORDER BY tid";
                    $sqlclosed = "SELECT * FROM ticket where stat='closed' AND assignid = ".$_SESSION['id']." ORDER BY tid";

                    $o = 0;
                    $c = 0;

                    $oresult = mysqli_query($con,$sqlopen);
                    $cresult = mysqli_query($con,$sqlclosed);

                    while($orow = mysqli_fetch_array($oresult)){ $o++; } 
                    while($crow = mysqli_fetch_array($cresult)){ $c++; } 

                    ?>
                    
                    <div style="width: 180px; position: relative; left: 710px; bottom: 190px;">
                    <input id="open" type="hidden" value="<?=$o?>"></input>
                    <input id="close" type="hidden" value="<?=$c?>"></input>
                    <canvas id="tickets"></canvas>
                    </div>
                    
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>

                        var open = $("#open").val(); 
                        var close = $("#close").val();
                        
                    const ctx = document.getElementById('tickets');
                   
                    
                    
                    new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                        labels: ['Open = <?=$o?>', 'Closed = <?=$c?>'],
                        datasets: [
                            {  
                            data: [open, close],
                            borderWidth: 1
                        }
                        ]
                        },
                        options: {
                        // scales: {
                        //     y: {
                        //     beginAtZero: true
                        //     }
                        // }
                        }
                    });
                    </script>
                    
                    
                    

             <?php }
             ?>
            
           
               
                            
    </body>
</html>