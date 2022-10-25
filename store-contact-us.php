<?php
if(count($_POST)>0)
{    
     include 'mydbCon.php';
     $name = $_POST['name'];
     $message = $_POST['message'];
     $email = $_POST['email'];
 
     $query = "INSERT INTO contact_us (emri, email, mesazhi)
     VALUES ('$name','$email','$message')";
     mysqli_query($dbCon, $query);
     $lastId = mysqli_insert_id($dbCon);
 
     if (!empty($lastId)) {
        $message = "Të dhënat janë dërguar me sukses";
     }
}
  header ("Location: thank-you.php");
?>