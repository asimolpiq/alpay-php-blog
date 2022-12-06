<?php require('inc/db_connect.php'); 
ob_start();
session_start();
if(isset($_SESSION["alpay_blog"])){
  header("Location:yazilar.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
</script>
<?php require('inc/header.php'); ?>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Hoş Geldin!</h1>
                                    </div>
                                    <?php
                                    if (isset($_POST['login']))
                                    {
                                    $username = trim($_POST['username']);
                                    $username = strip_tags($_POST['username']);
                                    $username = htmlspecialchars($_POST['username']);

                                    $password = trim($_POST['password']);
                                    $password = strip_tags($_POST['password']);
                                    $password = htmlspecialchars($_POST['password']);
                            
                                    
                                    $sonuc=mysqli_query($conn,"select * from yonetim WHERE username ='$username' and password='$password'");
                                        if($sonuc ->num_rows>0){
                                        while($satir = $sonuc -> fetch_assoc()){
                                            if($username==$satir['username'] && $password==$satir['password']){
                                                $_SESSION["alpay_blog"] = $satir;
                                            echo "<div class='alert alert-success' role='alert'> Giriş Başarılı. Yönlendiriliyorsunuz... </div>";
                                            header("Refresh: 2; url=yazilar.php");
                                            }
                                        }
                                        }
                                        else{ echo "<div class='alert alert-danger' role='alert'> Kullanıcı bulunamadı </div>";} 
                                    }
                                    ob_end_flush();
                                    ?>
                                    <form class="user" action="" method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data" >
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Kullanıcı Adı">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Şifre">
                                        </div>
                                       
                                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                                            Giriş Yap
                                </button>

                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>