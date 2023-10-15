<?php
// $path = $_POST['id'];
// //$newDate = date("d-m-Y", strtotime($orgDate));  
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
$photographer = ucfirst($_POST['photographer']); 
$car = ucfirst($_POST['car']); 
$decor = ucfirst($_POST['decor']); 
$suitDresser = ucfirst($_POST['suitDresser']); 
$dressDresser = ucfirst($_POST['dressDresser']); 
$venue = ucfirst($_POST['venue']); 
$ceremony = ucfirst($_POST['ceremony']); 
$catere = ucfirst($_POST['caterer']);
$msg = ucfirst($_POST['message']);

$userid=$_SESSION['userid'];

    $user_data = 'name ='. $gfn. '& name='. $gfn;

    if (empty($gfn)) {//echo "jaza fomu ";
        header("Location: ../eform.php?error=Empty Field");
        exit();
    }
    else{ 
        
        $sql = "SELECT * FROM event_basic WHERE gfname='$gfn' OR glname='gln' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) { //echo "yupo ipo";
            header("Location: ../eform.php?error= Groom Details Exist");
            exit();
        }else {
    if(isset($_POST['submit']) && !empty($_FILES['image1']['name'])){

        $filename2  = $_FILES['image1']['name'];

        $img_exts2 = pathinfo($filename2,PATHINFO_EXTENSION);
    
            if($img_exts2  == "jpg" || $img_exts2  == "png" || $img_exts2  == "jpeg"  ){        
            
                $name2  = "pic2.$img_exts2";
                $img_upload_paths = '../uploads/'.$name2;
                $img_upload_paths1 = '../uploads/pic2.png';
                $img_upload_paths2 = '../uploads/pic2.jpg';
                $img_upload_paths3 = '../uploads/pic2.jpeg';
                if (file_exists($img_upload_paths1)) {
                    unlink($img_upload_paths1);
               }
               
                if (file_exists($img_upload_paths2)) {
                unlink($img_upload_paths2);
                }
            
               if (file_exists($img_upload_paths3)) {
                unlink($img_upload_paths3);
               }   
            $tmp_names2 = $_FILES['image1']['tmp_name'];
            move_uploaded_file($tmp_names2, $img_upload_paths);
            }
       
        else{
        echo "file ".$filename2  = $_FILES['image1']['name']." does not contain allowed extension upload again";
        }
        }

      $sql2 = "INSERT INTO event_basic (gfname,glname,bfname,blname,edate,etime,eloc,userid,photographer,car,decor,suitDresser,message,dressDresser,venue,ceremony,caterer,cover_img) 						
                VALUES('$gfn','$gln','$bfn','$bln','$edate','$etime','$eloc','$userid','$photographer','$car','$decor','$suitDresser','$msg','$dressDresser','$venue','$ceremony','$catere','$name2')";
                              
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) { //echo "done";
             header("Location: ../event.php?success=Your Event has been created successfully");
             exit();
           }else {//echo "bado";
                header("Location: ../eform.php?error=Failed&$user_data");
                exit();
           }
        }
        }}
    exit();  

?>