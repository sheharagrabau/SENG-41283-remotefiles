<?php

/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forminfo";


$conn = new mysqli($servername, $username, $password, $dbname);*/

//checking for connection

$conn=mysqli_init(); 
mysqli_ssl_set($con, NULL, NULL, "abcd.pem", NULL, NULL);
mysqli_real_connect($conn, "nbts-db.mysql.database.azure.com", "shehara@nbts-db", "S626454g*()", "forminfo", 3306);


/*if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}*/

//initializing attributes
$firstname_patient=mysqli_real_escape_string($conn,$_POST['firstname_patient']);
$surname_patient=mysqli_real_escape_string($conn,$_POST['surname_patient']);
$nic_patient=mysqli_real_escape_string($conn,$_POST['nic_patient']);
$sex=mysqli_real_escape_string($conn,$_POST['sex']);
$hospital=mysqli_real_escape_string($conn,$_POST['hospital']);
$dr_name=mysqli_real_escape_string($conn,$_POST['dr_name']);
$blood_type_urgent=mysqli_real_escape_string($conn,$_POST['blood_type_urgent']);
$title=mysqli_real_escape_string($conn,$_POST['title']);
$firstname_req=mysqli_real_escape_string($conn,$_POST['firstname_req']);
$surname_req=mysqli_real_escape_string($conn,$_POST['surname_req']);
$nic_req=mysqli_real_escape_string($conn,$_POST['nic_req']);
$mob_no=mysqli_real_escape_string($conn,$_POST['mob_no']);
$home_req=mysqli_real_escape_string($conn,$_POST['home_req']);
$work_req=mysqli_real_escape_string($conn,$_POST['work_req']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$relationship=mysqli_real_escape_string($conn,$_POST['relationship']);

//sql query for saving data

$sql="INSERT INTO urgent_blood(firstname_patient,surname_patient, nic_patient, sex, hospital,dr_name, blood_type_urgent,title, firstname_req, surname_req, nic_req, mob_no, home_req, work_req, email,relationship) values('$firstname_patient' , '$surname_patient', '$nic_patient', '$sex', '$hospital','$dr_name', '$blood_type_urgent','$title', '$firstname_req', '$surname_req', '$nic_req', '$mob_no', '$home_req', '$work_req', '$email','$relationship')";

//executing sql query

if($conn->query($sql)=== TRUE){
    echo "<script>alert('Request for blood successful'); window.location.href='emergency.php';</script>";
}

else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);


?>