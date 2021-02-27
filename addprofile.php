<?php

$servername='localhost';
$username='root';
$password='yhYXPV9y';
$dbname = "test";
$conn=mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }

    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $birtdate = $_POST['birthday'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $sql = "INSERT INTO blogs_db (blogID,blogTitle,blogContent) VALUES (NULL,'$title','$content')";
    $result = $conn->query($sql);

?>