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
$firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
$surname=mysqli_real_escape_string($conn,$_POST['surname']);
$nic=mysqli_real_escape_string($conn,$_POST['nic']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$sex=mysqli_real_escape_string($conn,$_POST['sex']);
$mob_no=mysqli_real_escape_string($conn,$_POST['mob_no']);
$home_no=mysqli_real_escape_string($conn,$_POST['home_no']);
$work_no=mysqli_real_escape_string($conn,$_POST['work_no']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$blood_type_appointment=mysqli_real_escape_string($conn,$_POST['blood_type_appointment']);
$date1=mysqli_real_escape_string($conn,$_POST['date1']);
$date2=mysqli_real_escape_string($conn,$_POST['date2']);
$date3=mysqli_real_escape_string($conn,$_POST['date3']);
$emer_person=mysqli_real_escape_string($conn,$_POST['emer_person']);
$emer_no=mysqli_real_escape_string($conn,$_POST['emer_no']);


//sql query for saving data

$sql="INSERT INTO appointments (firstname, surname, nic, dob, sex, mob_no, home_no, work_no, address, email, blood_type, date1, date2, date3, emergency_person, emergency_no) values('$firstname','$surname', '$nic', '$dob', '$sex', '$mob_no' , '$home_no', '$work_no', '$address', '$email' , '$blood_type_appointment' , '$date1' , '$date2' , '$date3' , '$emer_person' , '$emer_no')";

//executing sql query

if($conn->query($sql) === TRUE){
    echo "<script>alert('Appointment request successful'); window.location.href='appointment.php';</script>";
    
}

else{
    
    echo "Error: " . $sql . "<br>" . $conn->error;
}



mysqli_close($conn);




?>