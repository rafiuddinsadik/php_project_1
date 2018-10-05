<?php
//starting session
session_start();
//including database handler
include 'db_handler.php';

//initiating variables and checking if the superGlobals are assigned with values or not
$email=""; $password="";
if(isset($_POST['email'])) {
    $email = $_POST['email'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}

//SELECT query from the table and fetching result by connecting to the database
$sql_select = "SELECT * FROM users WHERE email='$email' AND password = '$password'";
$result = $connect->query($sql_select);

if(!$row = $result->fetch_assoc()){
    echo "<h1 align='center'>Username or Password Incorrect!</h1>";
}else{
    $_SESSION['id']= $row['id'];
}
header("location: test.php");
?>