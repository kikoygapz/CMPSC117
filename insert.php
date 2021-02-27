<?php

$servername='localhost';
$username='root';
$password='yhYXPV9y';
$dbname = "test";
$conn=mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }

    $title = $_POST['title'];
    $content = $_POST['content'];


    $sql = "INSERT INTO blogs_db (blogID,blogTitle,blogContent) VALUES (NULL,'$title','$content')";
    $result = $conn->query($sql);

?>