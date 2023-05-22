<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}

require 'code/components/connect.php';
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}
    $sql = "SELECT * from cbr";

$page = $_GET['link'];

$result = mysqli_query($con, $sql);
$i = 0;

?>
<!DOCTYPE html>
        <html>
            <head>
            
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <title>Home</title>

                <!--Outsource Bootstrap (Nav & Layout)-->
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
                <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

                <!--Table-->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

                <!--Outsource Fontawsome-->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

                <!--Oursource Bootsrap (Buttons)-->
                <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                                
                <!-- Local CSS-->
                <link href="res/res-tickets/tickets.css" rel="stylesheet" type="text/css">
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
                               <span class="theme-text">Chatbot</span></h1>
                       </div>
                   </div>
                   </section>
               </div>

               <br>

                <!--Add Ticket-->
                <a href="tcbadd.php?link=tcbadd"><button type="button" class="btn btn-primary btn-rounded waves-effect waves-light m-b-5">Add Entry</button></a>

                <br>
                <br>

                <!--Table-->
                <div>
                    <table id="example" class="table table-striped" style="width:100%; ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Query</th>
                                <th>Reply</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($row = mysqli_fetch_array($result)){ 
                            ?>
                            <tr>
                                
                               <td><?=$row['id']; ?></td>
                               <td><div class="tbl-of" style="height: 80px; width: 320px;"><?=$row['queries']; ?></div></td>
                               <td><div class="tbl-of" style="height: 80px; width: 500px;"><?=$row['replies']?></div></td>
                               <td>
                                   <a  class = "links" href="tcbedit.php? id=<?=$row['id']; ?>"><button type="button" class="btn btn-inverse btn-roundedOT waves-effect waves-light m-b-5">Edit</button></a>
                                   <!-- <a  class = "links" href="code/components/delete.php? id=$row['tid'];"><button type="button" class="btn btn-inverse btn-roundedOT waves-effect waves-light m-b-5">Delete</button></a> -->
                               </td>
                           </tr>

                            <?php
                       }
                   ?>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Query</th>
                                <th>Reply</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <!--Space Division-->
                <div style="height:5%;"></div>
                <br>
                <br>
                <br>
                <br>
                <br>
             <!--Chatbot -->
             <?php require 'code/components/chatbot/cb.php';?>
             

            <!--Table Scripts-->
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
            <script src="res/res-tickets/table.js"></script>

                            
    </body>
</html>