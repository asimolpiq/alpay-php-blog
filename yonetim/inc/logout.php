<?php
session_start();
ob_start();
if(!isset($_SESSION['alpay_blog'])){
    header("Location: ../index.php");
}
else{
    session_destroy();
    header("Refresh: 0; url=index.php");
    ob_end_flush();
}
?>