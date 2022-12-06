<?php require('yonetim/inc/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require('inc/lib.php'); ?>
    </head>
    <body>
        <!-- Navigation-->
       <?php require('inc/nav.php'); ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Hakkımda</h1>
                            <span class="subheading">Merakınız İçin Teşekkür Ederim :)</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <?php
                        try {
                            $sorgu = mysqli_query($conn,"SELECT * FROM about");
                            while($agacım = mysqli_fetch_array($sorgu)){
                                echo $agacım['content'];
                            }
                        } catch (\Throwable $th) {
                            echo $th;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
       
         <?php require('inc/footer.php'); ?>
    </body>
</html>
