<?php

$q = intval($_GET['q']);

require '../connect.php';
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}


$sql="SELECT * FROM accounts WHERE  id = '".$q."'";
$result = mysqli_query($con,$sql);

while($asrow = mysqli_fetch_array($result)) {
  ?>
<hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Name:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$asrow['fname']. " " . $asrow['mname'] . " " . $asrow['lname']?>
                    </div>
                    </div>
                <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">ID:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$asrow['id']?>
                    </div>
                    </div>
                <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Email:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$asrow['email']?>
                    </div>
                    </div>

                <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Position:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$asrow['pstion']?>
                    </div>
                    </div>
                    

<input type="hidden" id="aname" name="aname" value="<?=$asrow['fname']. " " . $asrow['mname'] . " " . $asrow['lname']?>">
<input type="hidden" id="assignid" name="assignid" value="<?=$asrow['id']?>">
<input type="hidden" id="aemail" name="aemail" value="<?=$asrow['email']?>">
<input type="hidden" id="apstion" name="apstion" value="<?=$asrow['pstion']?>">

<div class="inputfield">
<button type="submit" class="btn" value="Post" style="background-color:cyan;">Assign</button>
</div>



<?php }
mysqli_close($con);
?>
