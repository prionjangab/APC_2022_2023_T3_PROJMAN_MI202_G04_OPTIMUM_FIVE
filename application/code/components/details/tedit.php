<!--General Container-->
<?php 
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../../../login.php');
    exit;
}
require '../connect.php';
$id=$_GET['id'];
$aquery=mysqli_query($con,"SELECT * FROM accounts where pstion = 'it'");
$query=mysqli_query($con,"SELECT * FROM ticket where tid = '$id'");
$row=mysqli_fetch_array($query);
$input = $row['dt'];
$date = strtotime($input);
$input1 = $row['dta'];
$date1 = strtotime($input1);
$input2 = $row['dtc'];
$date2 = strtotime($input2);
?>

 <!--Outsource Bootstrap (NAV and PAGE)-->
 <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
                <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

                <!--Outsource Bootstrap (PROFILE)-->
                <script src="https://kit.fontawesome.com/828216c770.js" crossorigin="anonymous"></script>   
                   
                
                <!-- Local CSS-->
                <link href="res/res-tdetails/tdetails.css" rel="stylesheet" type="text/css">

                <style>
                    .help-tip{
                    position:absolute;
                    text-align: center;
                    background-color: #BCDBEA;
                    border-radius: 50%;
                    width: 24px;
                    height: 24px;
                    font-size: 14px;
                    line-height: 26px;
                    cursor: default;
                    }

                    .help-tip:before{
                    content:'?';
                    font-weight: bold;
                    color:#fff;
                    }

                    .help-tip:hover p{
                    display:block;
                    transform-origin: 100% 0%;

                    -webkit-animation: fadeIn 0.3s ease-in-out;
                    animation: fadeIn 0.3s ease-in-out;

                    }

                    .help-tip p{    /* The tooltip */
                    display: none;
                    text-align: left;
                    background-color: #1E2021;
                    padding: 20px;
                    width: 300px;
                    position: absolute;
                    border-radius: 3px;
                    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
                    right: -4px;
                    color: #FFF;
                    font-size: 13px;
                    line-height: 1.4;
                    z-index: 1;
                    }

                    .help-tip p:before{ /* The pointer of the tooltip */
                    position: absolute;
                    content: '';
                    width:0;
                    height: 0;
                    border:6px solid transparent;
                    border-bottom-color:#1E2021;
                    right:10px;
                    top:-12px;
                    }

                    .help-tip p:after{ /* Prevents the tooltip from being hidden */
                    width:100%;
                    height:40px;
                    content:'';
                    position: absolute;
                    top:-40px;
                    left:0;
                    }
                </style>

<div class="height-100 bg-light">
                
                <!--Header-->
                <div class="welhead">
                    <div class="mainhead">
                    <h1 style = "margin-left: 20px;">Edit Ticket Details</h1>
                    </div>
                </div>
    
                <form method="POST" action="teditp.php?id=<?=$id?>" enctype="multipart/form-data">
                <!--Profile-->
                <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="../../../res/accountimg/<?=$row['iid']?>.png" alt="" class="rounded-circle" width="150">
                                            <div class="mt-3">
                                            <h4><?=$row['iname'];?></h4>
                                                <hr>
                                                <span class="text-secondary" style="text-transform: uppercase;"> <?=$row['iid']?></span>
                                                <br>
                                                <span class="text-secondary"> <?=$row['email']?></span>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h5 class="mb-0"><i class="fa-solid fa-ticket"></i> Ticket</h5>
                                    

                                <ul>

                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap"  style="width: 285px;">
                                    <h6 class="mb-0"><i class="fa-solid fa-hashtag"></i> Number</h6>
                                    <span class="text-secondary"><?=$row['tid'];?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><i class="fa-solid fa-signal" style="font-size: 12px;"></i> Status</h6>
                                    <span class="text-secondary" style="text-transform: uppercase;"><?=$row['stat'];?></span>
                                </li>
                                
                                <?php if ($_SESSION['pstion'] == "supervisor"){?>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">  <i class="fa-sharp fa-solid fa-exclamation"></i> Priority</h6>
                                    <!--Priority ht-->
                                 <div class="help-tip" style="margin-left: 70px; width: 25px; height: 25px; ">
                                <p>
                                
                                Priority Level: On-Premise<br>
                                -------------------
                                <br>5 - Within an hour
                                <br>4 - 2 - 6 hours
                                <br>3 - 7 - 12 hours
                                <br>2 - 13 - 24 hours
                                <br>1 - More than 24 hours <Br> <Br>
                            
                                Priority Level: Outside<br>
                                -------------------
                                <br>5 - Within 12 hours
                                <br>4 - 12 - 24 hours
                                <br>3 - 36 hours
                                <br>2 - 36 - 48 hours
                                <br>1 - More than 48 hours

                                </p>
                               </div>
                                <div class="row">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <div class="custom_select">
                                <select name="priority" value="" id="priority" required>
                                <option value="<?=$row['priority'];?>"><?=$row['priority'];?></option>
                                <option value="">/////</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select>
                                </div>
                                </div>
                                </div>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><i class="fa-sharp fa-solid fa-exclamation"></i> Severity</h6>
                                    <!--Priority ht-->
                                 <div class="help-tip" style="margin-left: 70px; width: 25px; height: 25px; ">
                                <p>Severity: <br>
                                -------------------
                                <br>- 5: An ongoing class is affected / Whole school is affected / An ongoing event is affected / A school is affected
                                <br> 4: A scheduled class is affected / A scheduled event is affected / An office is affected
                                <br> 3: An organization is affected
                                <br> 2: A small group is affected
                                <br> 1: An individual is affected
                                </p>
                               </div>
                                <div class="row">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <div class="custom_select">
                                <select name="severity" value="" id="severity" required>
                                <option value="<?=$row['severity'];?>"><?=$row['severity'];?></option>
                                <option value="">/////</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select>
                                </div>
                                </div>
                                </div>
                                </li>
                                </li>
                                <?php } else {?>

                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">  <i class="fa-sharp fa-solid fa-exclamation"></i> Priority</h6>
                                    <span class="text-secondary" style="text-transform: uppercase;"><?=$row['priority'];?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><i class="fa-sharp fa-solid fa-exclamation"></i> Severity</h6>
                                    <span class="text-secondary" style="text-transform: uppercase;"><?=$row['severity'];?></span>
                                </li>

                                <?php }?>
                                    </ul>
                                </li>
                                

                               
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h5 class="mb-0"><i class="fa-solid fa-calendar"></i> Date</h5>
                                    <ul>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap"  style="width: 286px;">
                                    <h6 class="m-1"> Created:</h6>
                                    <span class="text-secondary" style="text-transform: uppercase;"> <?=date('M d Y h:i A', $date);?></span>
                                </li>

                                <?php if ($row['dta'] != '0000-00-00 00:00:00'){?>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="m-1"> Assigned:</h6>
                                    <span class="text-secondary" style="text-transform: uppercase;"> <?=date('M d Y h:i A', $date1);?></span>
                                </li> <?php } ?>

                                <?php if ($row['stat'] == 'closed'){?>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="m-1"> Closed:</h6>
                                    <span class="text-secondary" style="text-transform: uppercase;"> <?=date('M d Y h:i A', $date2);?></span>
                                </li> <?php } ?>
                                    </ul>
                                </li>

                                    <br>
                                    <!-- edit ticket -->
                                <div class="inputfield">
                                <button type="submit" class="btn" value="Post" style="background-color:cyan;">Edit Ticket</button>
                                </div>
                                <br>
                                </li>

                            </ul>
                        </div>
                        </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Type:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <div class="custom_select">
                                <select type="select" name="itype" placeholder="" id="itype" required>
                                <option value="<?=$row['itype'];?>"><?=$row['itype'];?></option>
                                <option value="">////////</option>
                                <option value="Hardware">Hardware</option>
                                <option value="Software">Software</option> 
                                <option value="Account">Account</option>  
                                <option value="Hyflex Equipment">Hyflex Equipment</option>  
                                <option value="Borrowed Equipment">Borrowed Equipment</option>
                                <option value="Others">Others</option>   
                                </select>
                                </div>
                                </div>
                                </div>

                            <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Inquiry:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary" id = "form-element-container">
                                <?=$row['inqry'];?>
                                </div>
                                </div>
                            
                            <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Full Description:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?=$row['fdes'];?>
                                </div>
                                </div>
                            <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Location:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?=$row['place'];?>
                                </div>
                                </div>

                            <?php if ($row["place"] == "On-Premise") {?>
                            <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Room:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?=$row['room'];?>
                                </div>
                                </div>
                                <?php }?>

                            <?php if ($row["filename"] != ""){?>
                            <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">File:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <img src="./../../../res/img/<?=$row['filename']?>" style = "width: 350px;">
                                </div>
                                </div>
                                <?php } else {}?>
                            <hr>
   

                <!--ITRO Details-->
                <div class="itwelhead">
                    <div class="itmainhead">
                        <h2>Assigned IT Staff Information:</h2>
                    </div>
                </div>
                
                <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Name:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['aname'];?>
                    </div>
                    </div>
                <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">ID:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['assignid'];?>
                    </div>
                    </div>
                <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Email:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['aemail'];?>
                    </div>
                    </div>

                    <?php if ($_SESSION['pstion'] == "supervisor"){?>
                    <hr>
                    <h4 class="mb-0">Change the person that is assigned to this ticket</h4>
                    <br>
                    <select name="users" onchange="showUser(this.value)">
                    <option value="">Select a person:</option>
                    <?php while($arow = mysqli_fetch_array($aquery)){?>
                    <option value="<?=$arow['id']?>"><?=$arow['fname']. " " .$arow['mname']. " " .$arow['lname']?></option>
                    <?php } ?>
                    </select>
                    <div id="txtHint"></div>
                    <?php }?>

                    </div>
                </div>

                  
                </form>
            <!--Space Division-->
            <div style="height:5%;"></div>
            
            <?php require "js.php";?>