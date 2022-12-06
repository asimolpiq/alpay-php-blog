<?php 
require('db_connect.php');
ob_start();
session_start();
if(!isset($_SESSION["alpay_blog"])){
  header("Location:index.php");
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM post WHERE id=$id";
    if ($conn->query($sql,) === TRUE) {
      header("Location: ../yazilar.php");
    } else {
      echo "Silinemedi: " . $conn->error;
    }
  }
?>