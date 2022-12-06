<?php require('yonetim/inc/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="tr">
    <head>
        <?php require('inc/lib.php'); ?>
    </head>
    <body>
        <!-- Navigation-->
        <?php require('inc/nav.php');
        $arr = array();
        $posts = mysqli_query($conn, "SELECT * FROM post ORDER BY id DESC");
            
        while ($postlar = mysqli_fetch_array($posts)) { //my friend have posts
            array_push($arr, $postlar); //friend post push to array
        }
        ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Blog Sayfama Hoş Geldiniz</h1>
                            <span class="subheading">Sizlere Yazılım Hakkında Kendi Bilgilerimi Bu Sitede Paylaşıyorum</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Postların Görüntülenmesi-->
                    <?php 
                    foreach ($arr as $post_satir) {
                        $id = $post_satir['id'];
                        $baslik = $post_satir['header'];
                        $tarih = $post_satir['date'];

                        echo "<div class='post-preview'>
                        <a href='post.php?id=$id'>
                            <h2 class='post-title'>$baslik</h2>
                            <h3 class='post-subtitle'>okumak için tıklayınız.</h3>
                        </a>
                        <p class='post-meta'>
                            Paylaşım tarihi : $tarih
                        </p>
                    </div>";
                    }
                    ?>
                    
                    <!-- Divider-->
                    <hr class="my-4" />
                   
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Tümüne Göz At →</a></div>
                </div>
            </div>
        </div>
    <?php require('inc/footer.php'); ?>
    </body>
</html>
