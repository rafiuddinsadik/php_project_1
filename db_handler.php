<?php
$connect = mysqli_connect('localhost','root', '', 'php_login');
if(!$connect){
  die("Connection Failed".mysqli_connect_error());
}
?>