<?php
$path = $_POST['id'];
//$newDate = date("d-m-Y", strtotime($orgDate));  
session_start(); 
include "db_conn.php";

if (isset($_POST['gfn']) && isset($_POST['bfn'])
    && isset($_POST['edate'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

$gfn = ucfirst($_POST['gfn']);
$gln = ucfirst($_POST['gln']);
$bfn = ucfirst($_POST['bfn']);
$bln = ucfirst($_POST['bln']);
$edate = validate($_POST['edate']);
$etime = validate($_POST['etime']);
$eloc = ucfirst($_POST['eloc']);
$gdesc = ucfirst($_POST['gdesc']);
$bdesc = ucfirst($_POST['bdesc']); 
$photographer = ucfirst($_POST['photographer']); 
$carRental = ucfirst($_POST['carRental']); 
$decor = ucfirst($_POST['decor']); 
$suitDresser = ucfirst($_POST['suitDresser']); 
$dressDresser = ucfirst($_POST['dressDresser']); 
$venue = ucfirst($_POST['venue']); 
$ceremony = ucfirst($_POST['ceremony']); 
$catere = ucfirst($_POST['caterer']); 





$userid=$_SESSION['userid'];

    $user_data = 'name ='. $gfn. '& name='. $gfn;

    if (empty($gfn)) {//echo "jaza fomu ";
        header("Location: ../eform.php?error=Complite Form");
        exit();
    }
    else{ 
        
        $sql = "SELECT * FROM event WHERE gfname='$gfn' OR glname='gln' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) { //echo "yupo ipo";
            header("Location: ../eform.php?error= Groom Details Exist");
            exit();
        }else {
      $sql2 = "INSERT INTO event (gfname,glname,bfname,blname,edate,gdescription,bdescription,etime,eloc,userid,file_location,photographer,carRental,decor,suitDresser,dressDresser,venue,ceremony,caterer ) 
      						VALUES('$gfn','$gln','$bfn','$bln','$edate','$gdesc','$bdesc','$etime','$eloc','$userid','$path','$photographer','$carRental','$decor','$suitDresser','$dressDresser','$venue','$ceremony','$caterer')";
                              
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) { //echo "done";
             header("Location: ../event.php?success=Your Event has been created successfully");
             exit();
           }else {//echo "bado";
                header("Location: ../eform.php?error=unknown error occurred&$user_data");
                exit();
           }
        }
        }}
   else{ //echo "mzigo umegoma";
    header("Location: eform.php");
    exit();
}       
?>