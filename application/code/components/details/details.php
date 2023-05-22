<?php
$id = $_GET['id'];
$input = $row['dt'];
$date = strtotime($input);
$input1 = $row['dta'];
$date1 = strtotime($input1);
$input2 = $row['dtc'];
$date2 = strtotime($input2);
require "code/components/connect.php";
$aquery=mysqli_query($con,"SELECT * FROM accounts where pstion='it'");
date_default_timezone_set('Asia/Singapore');
$mysqltime = date ('Y-m-d H:i:s', time());

// student
if ($_SESSION['pstion'] == $row['ipstion'] && $_SESSION['id'] == $row['iid']){
    mysqli_query($con,"update `ticket` set notifstus='1',  notifdts='". $mysqltime. "' where tid=". $id);

// itro
}elseif (($_SESSION['pstion'] == $row['apstion'] && $_SESSION['id'] == $row['assignid'])) {
    mysqli_query($con,"update `ticket` set notifits='1',  notifdti='". $mysqltime. "' where tid=". $id);

} else{

}
?>             
                <!--Ticket details top left-->
                <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="res/accountimg/<?=$row['iid']?>.png" alt="" class="rounded-circle" width="150">
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
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">  <i class="fa-sharp fa-solid fa-exclamation"></i> Priority</h6>
                                    <span class="text-secondary" style="text-transform: uppercase;"><?=$row['priority'];?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><i class="fa-sharp fa-solid fa-exclamation"></i> Severity</h6>
                                    <span class="text-secondary" style="text-transform: uppercase;"><?=$row['severity'];?></span>
                                </li>

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

                                
                                <?php if ($_SESSION['id'] == $row['iid']){?>
                                
                                <?php if ($row['stat'] != 'closed'){?>

                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <div class="inputfield">
                                <a href='code/components/details/tclosep.php?id=<?=$row['tid'];?>'>
                                <button type="submit" class="btn" value="Post" style="background-color:red;">Close Ticket</button>
                                </a>
                                </div>
                                </li>
                                <?php }?>
                                <?php if ($_SESSION['pstion'] == 'supervisor') {?>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <div class="inputfield">
                                <a href='code/components/details/tedit.php?id=<?=$row['tid']; ?>'>
                                <button type="submit" class="btn" value="Post" style="background-color:cyan;">Edit Ticket</button>
                                </a>
                                </div>
                                </li>
                                <?php } ?>

                                <?php } elseif ($_SESSION['pstion'] == 'supervisor') {?>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a href='code/components/details/tedit.php?id=<?=$row['tid']; ?>'>
                                <div class="inputfield">
                                <button type="submit" class="btn" value="Post" style="background-color:cyan;">Edit Ticket</button>
                                </div>
                                </a>
                                </li>
                                <?php } elseif ($_SESSION['id'] == $row['assignid']){?>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a href='code/components/details/tedit.php?id=<?=$row['tid']; ?>'>
                                <div class="inputfield">
                                <button type="submit" class="btn" value="Post" style="background-color:cyan;">Edit Ticket</button>
                                </div>
                                </a>
                                </li>
                                <?php }?>  

                            </ul>
                        </div>
                        </div>
                        
                        <!-- ticket info/details top right -->
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                               
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Type:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary" style="text-transform: capitalize;">
                                <?=$row['itype'];?>
                                </div>
                                </div>
                            
                            <hr>

                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Inquiry:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
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
                                <?php if ($row['filename'] != ""){?>
                            <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">File:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <img src="./res/img/<?=$row['filename']?>" style = "width: 350px;">
                                </div>
                                </div>
                            <?php }?>
                            <hr>
    
                  <!--ITRO Details-->
                <div class="itwelhead">
                    <div class="itmainhead">
                        <h2>Assigned IT Staff Information:</h2>
                    </div>
                </div>
                <?php 
                if ($_SESSION['pstion'] == "supervisor"){
                    if ($row['stat'] == 'pending' ){
                    ?>
                <hr>
                <h4 class="mb-0">No one is assigned to this ticket</h4>
                <select name="users" onchange="showUser(this.value)">
                <option value="">Select a person:</option>
                <?php while($arow = mysqli_fetch_array($aquery)){?>
                <option value="<?=$arow['id']?>"><?=$arow['fname']. " " .$arow['mname']. " " .$arow['lname']?></option>
                <?php } ?>
                </select>
                <form method="POST" action="code/components/details/tassignp.php?id=<?=$id?>">
                <div id="txtHint"></div>
                </form>
                <script>
                            function showUser(str) {
                            if (str=="") {
                                document.getElementById("txtHint").innerHTML="";
                                return;
                            }
                            var xmlhttp=new XMLHttpRequest();
                            xmlhttp.onreadystatechange=function() {
                                if (this.readyState==4 && this.status==200) {
                                document.getElementById("txtHint").innerHTML=this.responseText;
                                }
                            }
                            xmlhttp.open("GET","code/components/details/aselect.php?q="+str,true);
                            
                            xmlhttp.send();
                            }
                            
                    </script>
                
                              
                <?php  } else{ ?>

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
                <?php } } else{ 
                    if ($row['stat'] == "pending"){
                        ?>

                <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0"></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <h4>The ticket status of the ticket is currently "pending."
                    <br>
                    Please wait for the ticket to be "open."</h4>
                    </div>
                    </div>
                <?php }
                
                else { ?>
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
                <?php } }
                
                ?>
                           
                            </div>
                        </div>
                    </div>
                </div>
    
            <!--Space Division-->
            <div style="height:5%;"></div>
    
            


                                 