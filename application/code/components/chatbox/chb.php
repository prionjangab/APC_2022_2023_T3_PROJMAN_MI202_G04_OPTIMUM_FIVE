<html>
<head>
	<title>
	</title>
	<!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="res/res-chatitro/chatitro.css" >

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

 <!--Chat Bot-->

 <div class="container mt-4">
                <div class="card mx-auto" style="max-width:100%">
                    <div class="card-header">
                        <div class="navbar navbar-expand p-0">
                            <ul class="navbar-nav me-auto align-items-center">
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">
                                    </a>
                                </li>
                                <li class="nav-item"> <b> Ticket# 
                                <?=$row['tid'];?> Chat </b>
                                </li>
                            </ul>
                        </div>
                    </div>
                                        
                                        <div id="chatbody" class="card-body p-4" style="height: 600px; overflow: auto; margin-bottom: 3%;">
                                        
                                        
                                        <?php 
                                        require "code/components/chatbox/chl.php";
                                        
                                        ?>
                                        
                                       
										<!--Space Division-->
						<div style="height:50%;"></div>
                    
					</div>
					<div class="card-footer bg-white position-absolute w-100 bottom-0 m-0 p-1">
						<div class="input-group">
                        <input type="hidden" name="tid" id="tid" value="<?=$_GET["id"]; ?>" required>
                        <input type="hidden" name="id" id="id" value="<?=$_SESSION['id'];?>" required>
                        <input type="hidden" name="name" id="name" value="<?=$_SESSION['fname']. " " . $_SESSION['lname']; ?>" required>
                        <input type="hidden" name="position" id="position" value="<?=$_SESSION['pstion']; ?>" required>
                        <?php if ($row['iid'] == $_SESSION['id'] || $row['assignid'] == $_SESSION['id'] || $_SESSION['pstion'] == 'supervisor') { ?>
                        <?php if ($row['stat'] == "open") { ?>
							<input type="text" name="msg" id="msg" class="form-control border-0" placeholder="Please write a message..." required>
							<div class="input-group-text bg-transparent border-0">
								<button id="send-btn" class="btn btn-light text-secondary"> Send
									<i id="button" class="fas fa-paper-plane"></i>
								</button>
							</div>
						<?php } } ?>   
						</div>
					</div>
				</div>
			</div>

<!-- reload chat whenever theres an update -->
<script>    
function loadXMLDoc() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("chatbody").innerHTML =
this.responseText;}
                                                        
};
xhttp.open("GET", "code/components/chatbox/chl.php?id=<?=$row['tid']; ?>", true);
xhttp.send();
}
setInterval(function(){
loadXMLDoc();
// 1sec
},1000);
window.onload = loadXMLDoc;
$("#chatbody").scrollTop($("#chatbody")[0].scrollHeight);
</script>


<!-- sending of msg-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
 $(document).ready(function() {
 
    //enter button
 $("#msg").keypress(function(event) {
        if (event.keyCode === 13) {
            $("#send-btn").click();
        }
    });

 $("#send-btn").click(function() {
    
     var tid = $("#tid").val();
     var id = $("#id").val();
     var name = $("#name").val();
     var position = $("#position").val();
     var msg = $("#msg").val();
     var dtm = $("#dtm").val();

     if(tid=='' || id==''||name==''||position==''||msg=='' ||dtm=='') {
         alert("Please fill all fields.");
         return false;
     }

     $.ajax({
         type: "POST",
         url: "code/components/chatbox/chbmp.php",
         data: {
            tid: tid,
            id: id,
            name: name,
            position: position,
            msg: msg,
            dtm: dtm

            
         },
         cache: false,
         success: function(data) {
            $("#msg").val("");
            $("#chatbody").scrollTop($("#chatbody")[0].scrollHeight);
         },
         error: function(xhr, status, error) {
             console.error(xhr);
         }
     });

   
      
 });

});
</script>

            
        </div> <!--End Div Main Content Template-->

            <!--Container Main end (Nav and Page)-->
            <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
            <script type='text/javascript' src='#'></script>
            <script type='text/javascript' src='#'></script>
            <script type='text/javascript' src='#'></script>
            <script type='text/javascript'>document.addEventListener("DOMContentLoaded", function(event) {
   
                const showNavbar = (toggleId, navId, bodyId, headerId) =>{
                const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if(toggle && nav && bodypd && headerpd){
                toggle.addEventListener('click', ()=>{
                // show navbar
                nav.classList.toggle('show')
                // change icon
                toggle.classList.toggle('bx-x')
                // add padding to body
                bodypd.classList.toggle('body-pd')
                // add padding to header
                headerpd.classList.toggle('body-pd')
                })
                }
                }

                showNavbar('header-toggle','nav-bar','body-pd','header')

                /*===== LINK ACTIVE =====*/
                const linkColor = document.querySelectorAll('.nav_link')

                function colorLink(){
                if(linkColor){
                linkColor.forEach(l=> l.classList.remove('active'))
                this.classList.add('active')
                }
                }
                linkColor.forEach(l=> l.addEventListener('click', colorLink))

                // Your code to run since DOM is loaded and ready
                });</script>

                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                myLink.addEventListener('click', function(e) {e.preventDefault();});</script>
                            
    </body>
</html>