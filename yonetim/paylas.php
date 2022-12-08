<?php 
require('inc/db_connect.php');
ob_start();
session_start();
if(!isset($_SESSION["alpay_blog"])){
  header("Location:index.php");
}
else{
  $user = $_SESSION["alpay_blog"];
  $username = $user['username'];
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>

   <?php require('inc/header.php'); ?>
   <script src="ckeditor/ckeditor.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

     
              <?php require('inc/navbar.php'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-light">
              <h5 class="text-black m-b-0">Yeni Yazı Ekle</h5>
            </div>
            <div class="card-body">

            <?php
              if (isset($_POST['feels_save']))
              {
                $content = $_POST['post'];
                $header = $_POST['header'];
                $date = date('l jS \of F Y h:i:s A');
                if($content==""){
                  echo "<div class='alert alert-danger' role='alert'> Lütfen alanı doldurduğunuzdan emin olun! </div>";
                }
                else{
                  $feels_query = "INSERT INTO post (header,content,date) VALUES ('$header','$content','$date')";
                  try{
                    mysqli_query($conn,$feels_query);
                    echo "<div class='alert alert-success' role='alert'> Başırıyla Paylaşıldı! </div>";
                    header("Refresh:2; url=yazilar.php");
                  }
                  catch(Exception $e){
                    echo "<div class='alert alert-danger' role='alert'> Yazınızı gözden geçirin!</div>";  
                  }
                  
                }
                
              
            }
              ?>

            <form class="uk-form-stacked uk-margin-medium-top" method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data">
            <div class="form-group">
            <input type="text" name="header" class="form-control form-control-user"
            id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Başlık">
            </div>
            <br>
            <textarea class="ckeditor"  name="post" required></textarea>
              <br>
                
              <button type="submit" name="feels_save" class="pull-right btn btn-success"><i class="fas fa-check"></i> Paylaş</button>
            </form>
            </div>
          </div>
        </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           <?php require('inc/footer.php'); ?>
</body>

</html>