<?php
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$Cpassword = $_POST["Cpassword"];
$remember = $_POST["remember"];


//var_dump($username,$email,$password,$Cpassword,$remember);//prints the data entered


//print_r($_POST)
$host = "localhost";
$dbname = "damwins";
$username = "root";
$password = "";

//to connect to the database we call the folowing variables

$conn = mysqli_connect(hostname:$host, 
username:$username,  
password:$password, 
database:$dbname);


if (mysqli_connect_errno()){
    die("Connection error: " . mysqli_connect_error());
}

//echo "Connection was Successful......";
$sql = "INSERT INTO registration (username,email,password,Cpassword) VALUES(?,?,?,?)";

$stmt = mysqli_stmt_init($conn);
if (mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssss",$username,$password,$email,$Cpassword);


//lets call the sql execute function

mysqli_stmt_execute($stmt);

echo "Record successfully Saved";





















?>