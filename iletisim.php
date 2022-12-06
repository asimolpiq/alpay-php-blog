<!DOCTYPE html>
<html lang="en">
    <head>
    <?php require('inc/lib.php'); ?>
    </head>
    <body>
        <!-- Navigation-->
        <?php require('inc/nav.php'); ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Beimle İletişim Kurun</h1>
                            <span class="subheading">Bir sorunuz mu var? Cevabınızın bende olduğuna eminim</span>
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
                        <p>Bana Ulaşın</p>
                        <div class="my-5">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">İsim</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">İsim zorunludur.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Mail</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Mail zorunludur.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Geçersiz Mail.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
                                    <label for="phone">Telefon Numarası</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Telefon Numarası Zorunludur.</div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="message">Mesaj</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Mesaj Zorunludur.</div>
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Başarıyla Gönderildi</div>
                                        
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Mesaj Gönderilemedi!</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase disabled" id="submitButton" type="submit">Gönder</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require('inc/footer.php'); ?>
    </body>
</html>
