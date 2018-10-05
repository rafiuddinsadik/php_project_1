<?php
include 'db_handler.php';
$name=""; $email=""; $password="";
if(isset($_POST['name'])) {
    $name = $_POST['name'];
}
if(isset($_POST['email'])) {
    $email = $_POST['email'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}
$sql_insert = "INSERT INTO users (name1, email, password) VALUES ('$name', '$email', '$password')";
$result = $connect->query($sql_insert);
header("location: test.php");
?>