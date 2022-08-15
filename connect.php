<?php
$first_name=$POST['first_name'];
$last_name=$POST['last_name'];
$dateForService=$POST['dateForService'];
$warranty=$POST['warranty'];
$email=$POST['email'];
$phoneNnumber=$POST['phoneNumber'];
$model=$POST['model'];
$typeOfService=$POST['typeOfService'];

$conn = new mysqli('localhost','root','','registrication');

if($conn->connect_error){

        die('connecton Failed :'$conn->connect_error);
    }
    else{
        $stmt-> $conn->prepare("insert into registration(first_name,last_name,dateForService,warranty,email,phoneNumber,model,typeOfService)values(?,?,?,?,?,?,?,?)"));
        $stmt->bind_paras("ssdssiss",$first_name,$last_name,$dateForService,$warranty,$email,$phoneNumber,$model,$typeOfService);
        $stmt->execute();
        echo"registration sucssfully..";
        $stmt ->close();
        $conn ->close();
         }
?>
        
