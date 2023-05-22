<style>
::-webkit-scrollbar {
	width: 8px;
  }
  /* Track */
  ::-webkit-scrollbar-track {
	background: #f1f1f1;  
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
	background: #888; ; 
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
	background: #555; ; 
  } @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
	:root{--header-height: 3rem;
	--nav-width: 68px;
	--first-color: #ffa600;
	--first-color-light: #000000;
	--white-color: #F8F9FA;
	--body-font: 'Nunito', sans-serif;
	--normal-font-size: 1rem;
	--z-fixed: 100}
	
	
	*,::before,::after{box-sizing: border-box}
	body{position: relative;
	  margin: var(--header-height) 0 0 0;
	  padding: 0 1rem;
	  font-family: var(--body-font);
	  font-size: var(--normal-font-size);
	  transition: .5s}
	  
	  a{text-decoration: none}
	  
	  .header{width: 100%;
	  height: var(--header-height);
	  position: fixed;
	  top: 0;
	  left: 0;
	  display: flex;
	  align-items: center;
	  justify-content: space-between;
	  padding: 0 1rem;
	  background-color: var(--white-color);
	  z-index: var(--z-fixed);
	  transition: .5s}
	  
	  .header_toggle{color: var(--first-color);
	  font-size: 1.5rem;
	  cursor: pointer}
		
	  .l-navbar{position: fixed;
		top: 0;
		left: -30%;
		width: var(--nav-width);
		height: 100vh;
		background-color: var(--first-color);
		padding: .5rem 1rem 0 0;
		transition: .5s;
		z-index: var(--z-fixed)}
		
		.nav{height: 100%;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		overflow: hidden}
		
		.nav_logo, .nav_link{display: grid;
		grid-template-columns: max-content max-content;
		align-items: center;
		column-gap: 1rem;
		padding: .5rem 0 .5rem 1.5rem}
		
		.nav_logo{margin-bottom: 2rem}
		
		.nav_logo-icon{font-size: 1.25rem;
		color: black}
		
		.nav_logo-name{color: black;
		font-weight: 700}
		  
		.nav_link{position: relative;
		color: var(--first-color-light);
		margin-bottom: 1.5rem;
		transition: .3s}
		  
		.nav_link:hover{color: var(--white-color)}
		
		.nav_icon{font-size: 1.25rem}.show{left: 0}
		
		.body-pd{padding-left: calc(var(--nav-width) + 1rem)}
		
		.active{color: var(--white-color)}
		
		.active::before{content: '';
		position: absolute;
		left: 0;
		width: 2px;
		height: 32px;
		background-color: var(--white-color)}
		
		/*vh to 100% so can reach that max of the divisions will be added*/
		.height-100{height:100%}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}
		
		.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}
		
		.header_img{width: 210px; display:flex;}
		
		.header_img img{width: 50px; height: 50px; border-radius:50%; }

		.l-navbar{left: 0;padding: 1rem 1rem 0 0}
		
		.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}

		.nav_link .badge { position: absolute; top: 5px; left: 2px; padding: 5px 10px; border-radius: 50%; background-color: red; color: white; z-index: 4;}
</style>



<?php
require 'code/components/connect.php';
if ($_SESSION['pstion'] == "student"){
    $nsql = "SELECT * from ticket where stat = 'open' AND notifstus = 0 AND iid = " .$_SESSION['id']. " ORDER BY notifdti desc";
    } 
    elseif ($_SESSION['pstion'] == "it")
    {
    $nsql = "SELECT * from ticket where  stat = 'open' AND notifits = 0 AND assignid = " .$_SESSION['id']. " ORDER BY notifdts desc";
    }
    else{
	$nsql = "SELECT * from ticket where stat='pending' OR stat = 'open' AND iid = " .$_SESSION['id']. " AND notifstus = 0  ORDER BY notifdti desc";
    }
                            $nresult = mysqli_query($con, $nsql);
                            $i = 0;
?>

<!-- header -->
<body id="body-pd">
<header class="header" id="header">
            <!--Toogle Sidebar Navigation-->
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <div style=""> <div style="height:25%;"></div> 
			<?=$_SESSION['fname']. ' ' . $_SESSION['mname']. ' ' . $_SESSION['lname']?></div>
			<div style="width:5%;"></div>
			<img src="res/accountimg/<?=$_SESSION['filename']?>" alt=""></div>
        </header>

              
<!-- navigation bar -->
<div class="l-navbar" id="nav-bar">
                <nav class="nav">
                    <div> <a href="home.php?link=home" class="nav_logo"> <img src="res/imgweb/logo.png" alt="" style="width: 28px; border-radius: 50px"> <span class="nav_logo-name">RAM-IT</span> </a>
                        <div class="nav_list">
                            <a href="home.php?link=home" class="nav_link <?php if ($page == 'home') {echo 'active';} else {echo '';}?>"> <i class="fa-solid fa-house"></i> <span class="nav_name">Home</span> </a>
							<a href="notification.php?link=notif" class="nav_link <?php if ($page == 'notif') {echo 'active';} else {echo '';}?>" > <span class="badge"><?php while($nrow = mysqli_fetch_array($nresult)){ $i++; } if( $i == 0) { } else{echo $i;} ?></span><i class='fas fa-bell nav_icon'></i> <span class="nav_name">Notification</span> </a>
                            <a href="ticket.php?link=ticket" class="nav_link <?php if ($page == 'ticket') {echo 'active';} else {echo '';}?>"> <i class="fa-solid fa-envelope"></i> <span class="nav_name">All Tickets</span> </a>
                            <a href="ticketo.php?link=ticketo" class="nav_link <?php if ($page == 'ticketo') {echo 'active';} else {echo '';}?>"> <i class="fa-solid fa-lock-open 2px"></i> <span class="nav_name"><?php if ($_SESSION['pstion'] == 'it' ){?>Assigned Tickets<?php } else {echo "Open Tickets";}?></span> </a> 
                            <a href="ticketc.php?link=ticketc" class="nav_link <?php if ($page == 'ticketc') {echo 'active';} else {echo '';}?>"> <i class="fa-solid fa-lock"></i> <span class="nav_name">Closed Tickets</span> </a> 
                            <?php if ($_SESSION['pstion'] == 'student'){}else{?>
							<a href="tcb.php?link=tcb" class="nav_link <?php if ($page == 'tcb') {echo 'active';} else {echo '';}?>"> <i class="fa-solid fa-plus"></i> <span class="nav_name">Chatbot database</span></a>	
							<?php } ?>
							<?php if ($page == 'tadd') {echo '';} else {echo '';}?>
                        </div>
                    </div> <a href="code/components/logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign Out</span> </a>
                </nav>
            </div>

            
             <!--Container Main end (Nav and Page)-->
			 <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
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
