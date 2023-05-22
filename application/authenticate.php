<?php
session_start();
require 'code/components/connect.php';


// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['email'], $_POST['pswd']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the email and password fields!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, pswd, fname, mname, lname, pstion, filename FROM accounts WHERE email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the email is a string so we use "s"
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $pswd, $fname, $mname, $lname, $pstion, $filename);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password the OG password (I use the sha1 in the profile info) 
        // in your registration file to the passwords.
        if ($_POST['pswd'] === $pswd) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['email']; 
            $_SESSION['id'] = $id;
            $_SESSION['fname'] = $fname;
            $_SESSION['mname'] = $mname;
            $_SESSION['lname'] = $lname;
            $_SESSION['pstion'] = $pstion;
            $_SESSION['filename'] = $filename;
            header('Location: home.php?link=home');
        } else {
            // Incorrect password
            echo"<center><b><font color = 'red'>Invalid Password</b></center>";
            include('login.php');
            
        }
    } else {
        // Incorrect username
             echo"<center><b><font color = 'red'>Invalid Username</b></center>";
            include('login.php');
            
    }


	$stmt->close();
}
?>