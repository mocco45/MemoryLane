<?php
$path = $_POST['id'];
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
$gdesc = ucfirst($_POST['gdesc']);
$bdesc = ucfirst($_POST['bdesc']); 
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
        header("Location: ../eform-premium.php?error=Complite Form");
        exit();
    }
    else{ 
        
        $sql = "SELECT * FROM event WHERE gfname='$gfn' OR glname='gln' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) { //echo "yupo ipo";
            header("Location: ../eform-premium.php?error= Groom Details Exist");
            exit();
        }else {
    if(isset($_POST['submit']) && !empty($_FILES['images']['name']) && !empty($_FILES['image']['name']) && !empty($_FILES['image1']['name'])){

    
     

        $filename  = $_FILES['image']['name'];
        $filename2  = $_FILES['image1']['name'];
        $filename3  = $_FILES['images']['name'];
    
        $img_exts = pathinfo($filename,PATHINFO_EXTENSION);
        $img_exts2 = pathinfo($filename2,PATHINFO_EXTENSION);
        $img_exts3 = pathinfo($filename3,PATHINFO_EXTENSION);
    
    
        if($img_exts  == "jpg" || $img_exts  == "png" || $img_exts  == "jpeg"  ){ 
        if($img_exts2  == "jpg" || $img_exts2  == "png" || $img_exts2  == "jpeg"  ){    
        if($img_exts3  == "jpg" || $img_exts3  == "png" || $img_exts3  == "jpeg"  ){ 
    
    
    
            $name1  = "pic1.$img_exts";
            $img_upload_paths = '../uploads-premium/'.$name1;
            $img_upload_paths1 = '../uploads-premium/pic1.png';
            $img_upload_paths2 = '../uploads-premium/pic1.jpg';
            $img_upload_paths3 = '../uploads-premium/pic1.jpeg';
    
            if (file_exists($img_upload_paths1)) {
                unlink($img_upload_paths1);
            }
                
            if (file_exists($img_upload_paths2)) {
                unlink($img_upload_paths2);
            }
                
            if (file_exists($img_upload_paths3)) {
                unlink($img_upload_paths3);
    
             }
    
            $tmp_names1 = $_FILES['images']['tmp_name'];
            move_uploaded_file($tmp_names1, $img_upload_paths); 
        
    
            
                $name2  = "pic2.$img_exts2";
                $img_upload_paths = '../uploads-premium/'.$name2;
                $img_upload_paths1 = '../uploads-premium/pic2.png';
                $img_upload_paths2 = '../uploads-premium/pic2.jpg';
                $img_upload_paths3 = '../uploads-premium/pic2.jpeg';
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
                $name3  = "pic3.$img_exts3";
                $img_upload_paths = '../uploads-premium/'.$name3;
                $img_upload_paths1 = '../uploads-premium/pic3.png';
                $img_upload_paths2 = '../uploads-premium/pic3.jpg';
                $img_upload_paths3 = '../uploads-premium/pic3.jpeg';
                if (file_exists($img_upload_paths1)) {
                     unlink($img_upload_paths1);
                }
                if (file_exists($img_upload_paths2)) {
                    unlink($img_upload_paths2);
               }
               if (file_exists($img_upload_paths3)) {
                unlink($img_upload_paths3);
           }
        $tmp_names3 = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_names3, $img_upload_paths);
        }
        else{
        echo "file ".$filename3  = $_FILES['images']['name']."  does not contain allowed extension Upload again";
        }
        }
        else{
        echo "file ".$filename2  = $_FILES['image1']['name']." does not contain allowed extension upload again";
        }
        }
        else{
        echo "file ".$filename1  = $_FILES['image']['name']." does not contain allowed extension upload again";
        } 
      $sql2 = "INSERT INTO event (gfname,glname,bfname,blname,edate,gdescription,bdescription,etime,eloc,userid,photographer,car,decor,suitDresser,dressDresser,venue,ceremony,message,caterer,bride_img,groom_img,cover_img) 						
                VALUES('$gfn','$gln','$bfn','$bln','$edate','$gdesc','$bdesc','$etime','$eloc','$userid','$photographer','$car','$decor','$suitDresser','$dressDresser','$venue','$ceremony','$msg','$catere','$name1','$name2','$name3')";
                              
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) { //echo "done";
             header("Location: ../event-premium.php?success=Your Event has been created successfully");
             exit();
           }else {//echo "bado";
                header("Location: ../eform-premium.php?error=unknown error occurred&$user_data");
                exit();
           }
        }
        else {
        echo $error = "Failed!!";
        }
        }}
    exit();

}   
// if(isset($_POST['submit']) && !empty($_FILES['images']['name']) && !empty($_FILES['image']['name']) && !empty($_FILES['image1']['name'])){

//     $_FILES['images']['name'];
//     $_FILES['image1']['name'];
//     $_FILES['image']['name'];
//     $img_upload_paths = '../uploads-premium/'.$new_names;
//     $tmp_names = $_FILES['images']['tmp_name'];
//     $tmp_names = $_FILES['image1']['tmp_name'];
//     $tmp_names = $_FILES['image']['tmp_name'];

//     move_uploaded_file($tmp_names, $img_upload_paths);
//     move_uploaded_file($tmp_names, $img_upload_paths);
//     move_uploaded_file($tmp_names, $img_upload_paths);








//     $sql = "INSERT INTO event(bride_img,groom_img,cover_img) VALUES('$img[0]','$img[1]','$img[0]')";
//     mysqli_query($conn, $sql);
//     }
// else{
//     echo 'failure';
// } 
 
?>