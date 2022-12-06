<?php require('yonetim/inc/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="tr">
    <head>
    <?php require('inc/lib.php'); ?>
    </head>
    <body>
        <!-- Navigation-->
        <?php 
         require('inc/nav.php'); 
         $id = $_GET['id'];
         $arr = array();
         $posts = mysqli_query($conn, "SELECT * FROM post WHERE id='$id' ORDER BY id DESC");
             
         while ($postlar = mysqli_fetch_array($posts)) { //my friend have posts
             array_push($arr, $postlar); //friend post push to array
         }
         ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                        <?php 
                    foreach ($arr as $post_satir) {
                        $baslik = $post_satir['header'];
                        $date = $post_satir['date'];
                        echo "<h1>$baslik</h1>";
                        echo "<span class='meta'>
                        Paylaşma Tarihi: <b>$date</b>
                        </span>";}
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                    <?php 
                    foreach ($arr as $post_satir) {
                        $content = $post_satir['content'];
                        echo $content;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </article>
        <!-- Footer-->
        <?php require('inc/footer.php'); ?>
    </body>
</html>
