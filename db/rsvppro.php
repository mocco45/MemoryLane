<?php
include "db_conn.php";

if (isset($_POST['fname']) && isset($_POST['lname'])
    && isset($_POST['email'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
$fn=ucfirst($_POST['fname']);
$ln=ucfirst($_POST['lname']);
$fullname = $fn." ".$ln;
$email = validate($_POST['email']);
$address = validate($_POST['address']);
$phone = validate($_POST['phone']);
$relation = ucfirst($_POST['relation']);
$eid=$_POST['eid'];
$eloc=$_POST['eloc'];
    $user_data = 'email='. $email. '& name='. $email;

    if (empty($email)) {//echo "no username";
        header("Location: ../tmp/$eloc?error=User Name is required & id=$eid");
        exit();
    }
    else{ 
        
        $sql = "SELECT * FROM rsvp WHERE email='$email' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) { //echo "email ipo";
            header("Location: ../tmp/$eloc?error= Alredy Booked & id=$eid");
            exit();
        }else {
      $sql2 = "INSERT INTO rsvp (fullname, email, mobile, address, relation,eid) VALUES('$fullname', '$email','$phone', '$address', '$relation','$eid')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) { //echo "../tmp/$eloc?success?e=$eid";
             header("Location: ../tmp/$eloc?success=Your booking has been created successfully & id=$eid");
             exit();
           }else {echo "bado";
                header("Location: ../tmp/'$eloc'?error=unknown error occurred & id=$eid");
                exit();
           }
        }
        }}
   else{ //echo "mzigo umegoma";
    header("Location: ../tmp/$eloc?error= unknown error occurred & id=$eid");
    exit();
}       
?>