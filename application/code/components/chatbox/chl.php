<?php 
session_start();
$con = mysqli_connect('localhost','root','', 'ramit','3308');
$id = $_GET['id'];  

                                        $qry=mysqli_query($con,"SELECT * from chat where tid = $id");
                                        while($rw = mysqli_fetch_array($qry)){
                                           


                                            if ($_SESSION['id'] == $rw['id']){
                                        ?>
                                        <!--Sender-->
<div class="d-flex align-items-baseline text-end justify-content-end mb-4">
                            <!--Message-->
                            <div class="pe-2">
                            <div>
                                <div class="small"><?=$rw['name']?></div>
                            </div>
                                <div>
                                    <div class="card card-text d-inline-block p-2 px-3 m-1"><?=$rw['msg']?></div>
                                </div>
                                <div>
                                    <div class="small"><?php $input = $rw["dtm"]; $date = strtotime($input); echo date('M d Y h:i A', $date);?></div>
                                </div>
                            </div>
                            <!--Avatar-->
                            <div class="position-relative avatar">
                                <img src="res/accountimg/<?=$rw['id']?>.png"
                                    class="img-fluid rounded-circle" alt="">
                                <span
                                    class="position-absolute bottom-0 start-100 translate-middle p-1 ">
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                            </div>
                        </div>

<?php }

else{

?>
                                        <!--receiver-->
                                 <div class="d-flex align-items-baseline mb-4">
                                                <!--Avatar-->
                                                
                                                <div class="position-relative avatar">
                                                    <img src="res/accountimg/<?=$rw['id']?>.png"
                                                        class="img-fluid rounded-circle" alt="">
                                                    <span
                                                        class="position-absolute bottom-0 start-100 translate-middle p-1 ">
                                                        <span class="visually-hidden">New alerts</span>
                                                    </span>
                                                </div>
                                                
                                                <!--Message-->
                                                <div class="pe-2">
                                                <div>
                                                    <div class="small"><?=$rw['name']?></div>
                                                </div>
                                                    <div>
                                                        <div class="card card-text d-inline-block p-2 px-3 m-1"><?=$rw['msg']?></div>
                                                    </div>
                                                    <div>
                                                        <div class="small"><?php $input = $rw["dtm"]; $date = strtotime($input); echo date('M d Y h:i A', $date);?></div>
                                                    </div>
                                                </div>
                                               </div>

                                               

                                      <?php } }?>