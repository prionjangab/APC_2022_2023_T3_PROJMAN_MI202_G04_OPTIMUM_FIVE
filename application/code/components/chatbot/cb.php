<?php
date_default_timezone_set('Asia/Singapore');
$mysqltime = date ('h:i a', time());
?>
  <!--Chat Bot-->
   <div class="container">
                    <div class="row">
                        <div class="wrapper">
                            <div class="contact-form-page">
                                <div class="header-btn">
                                    <a class="top-btn" href="#"></a>
                                </div>

                                <!--Space Division-->
                                <div style="height:10%;"></div>

                                
                                <div class="container-chat mt-4">
                                    <div class="card mx-auto" style="max-width:100%">
                                        <div class="card-header" style="background-color: white;">
                                            <div class="navbar navbar-expand p-0">
                                                <ul class="navbar-nav me-auto align-items-center">
                                                    <li class="nav-item">
                                                        <a href="#!" class="nav-link">
                                                            <div class="position-relative"
                                                                style="width:50px; height: 50px; border-radius: 50%; border: 2px solid #071acc; padding: 2px">
                                                                <img src="res/accountimg/bot.png"
                                                                    class="img-fluid rounded-circle" alt="">
                                                                <span
                                                                    class="position-absolute bottom-0 start-100 translate-middle p-1 ">
                                                                    <span class="visually-hidden">New alerts</span>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <h1 class="chatbot-name" >RAM-IT</h1>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div id="chatbody" class="card-body p-4" style="height: 500px; overflow: auto; background-color: white;">
                                        
                                        <?php 
                                    
                                        $query=mysqli_query($con,"SELECT * FROM cbr where id = 0");
                                        $row=mysqli_fetch_array($query);
                                        ?>
                                            <!-- CB -->
                                            <div class="d-flex align-items-baseline mb-4">
                                                <!--Avatar-->
                                                 <div class="position-relative avatar">
                                                    <img src="res/accountimg/bot.png"
                                                        class="img-fluid rounded-circle" alt="">
                                                    <span
                                                        class="position-absolute bottom-0 start-100 translate-middle p-1 ">
                                                        <span class="visually-hidden">New alerts</span>
                                                    </span>
                                                </div>
                                                 <!-- Message -->
                                                <div class="pe-2">
                                                    <div>
                                                        <div class="card card-text d-inline-block p-2 px-3 m-1"><?=$row['replies']?></div>
                                                    </div>
                                                    <div>
                                                        <div class="small"><?php echo $mysqltime ?></div>
                                                    </div>
                                                </div>
                                            </div> 
                            

                                            <!-- (Code Lines)
                                            Sender = Avatar then Message
                                            Reciever = Message then Avatar
                                            -->
                        
                                            <!--Space Division-->
                                            <div style="height:5%;"></div>
                    
                                        </div>
                                        <div class="card-footer bg-white position-absolute w-100 bottom-0 m-0 p-1">
                                            <div class="input-group">
                                                <input id="data" type="text" class="form-control border-0" placeholder="Please write a message..." required>
                                                <div class="input-group-text bg-transparent border-0">
                                                    <button id="send-btn" class="btn btn-light text-secondary"> Send
                                                        <i id="button" class="fas fa-paper-plane"></i>
                                                    </button>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                            <!--Space Division-->
                            <div style="height:7%;"></div>
        
                            </div>
                                <a class="buttom-btn" href="#"></a>
                        </div>
                    </div>
                </div>
        
                <!--Space Division-->
                <div style="height:5%;"></div>

            </div>

            <?php require 'cbm.php';?>
    <!--Container Main end-->
            <!--Local Chatbot Script-->
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src='res/res-chatbot/chatbot.js'></script>
        