<?php 
require('inc/db_connect.php');
ob_start();
session_start();
if(!isset($_SESSION["salih_blog"])){
  header("Location:index.php");
}
else{
  $user = $_SESSION["salih_blog"];
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
              <h5 class="text-black m-b-0">Hakkımda Düzenle</h5>
            </div>
            <div class="card-body">
            <?php 
              if (isset($_POST['hakkimda']))
              {
                   $content = $_POST['post'];
                  $pp_save_query = "UPDATE about SET content= '$content' WHERE id='1'";
                  if ($conn->query($pp_save_query)) {
                    echo "<div class='alert alert-success' role='alert'> Düzenleme Başarılı!</div>";
                    header("Location: yazilar.php");
                  } else {
                    echo "<div class='alert alert-danger' role='alert'>Güncelleme Başarısız</div>";
                  }
                }
              ?>
            <form class="uk-form-stacked uk-margin-medium-top" method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data">

            <textarea class="ckeditor"  name="post" required></textarea>
              <br>
                
              <button type="submit" name="hakkimda" class="pull-right btn btn-success"><i class="fas fa-check"></i> Kaydet</button>
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