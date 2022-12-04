<?php
session_start(); 
include "db_conn.php";
if (isset($_POST['user']) && isset($_POST['password'])
    && isset($_POST['email'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname = validate($_POST['user']);
    $pass = validate($_POST['password']);
    $name = validate($_POST['email']);

    $user_data = 'username='. $uname. '& name='. $name;

    if (empty($uname)) {echo "no username";
        header("Location: ../signup.php?error=User Name is required&$user_data");
        exit();}
        else if(empty($name)){
        header("Location: ../signup.php?error=Email is required&$user_data");
        exit();}
        else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
        exit();
    }
    else{ 
        // hashing the password
        $pass = md5($pass);
        $sql = "SELECT * FROM user WHERE username='$uname' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) { //echo "change name";
            header("Location: ../signup.php?error=The username is taken try another&$user_data");
            exit();
        }else {
           $sql2 = "INSERT INTO user(username, email, password) VALUES('$uname', '$name','$pass')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) { //echo "done";
             header("Location: ../signin.php?success=Your account has been created successfully");
             exit();
           }else {//echo "bado";
                header("Location: ../signup.php?error=unknown error occurred&$user_data");
                exit();
           }
        }
        }}
   else{ //echo "mzigo umegoma";
    header("Location: ../signup.php");
    exit();
}          
?>