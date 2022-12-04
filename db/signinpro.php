<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['email']);
	$pass = validate($_POST['pass']);

	if (empty($uname)) { //echo "no mail";
		header("Location: ../signin.php?error=Email is required");
	    exit();
	}else if(empty($pass)){ //echo "no pass";
        header("Location: ../signin.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);
        
		$sql = "SELECT * FROM user WHERE email='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uname && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['userid'] = $row['userid'];
            	$_SESSION['createat'] = $row['createat'];
            	//echo "ndani hio";
            	header("Location: ../dashbord.php");
		        exit();
            }else{ //echo "mail sio";
				header("Location: ../signin.php?error=Incorect Email or password");
		        exit();
			}
		}else{ //echo "sio";
			header("Location: ../signin.php?error=Incorect Email or password");
	        exit();
		}
	}
	
}else{ //echo "mwelekeo sio";
	header("Location: ../signin.php");
	exit();
}