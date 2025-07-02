<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="<?= base_url('assets/favicon.png') ?>" type="image/x-icon">
        <title>Product</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href ="<?= base_url('css/product.css') ?>">
        <link rel="stylesheet" type="text/css" href ="<?= base_url('css/footer.css') ?>">
        <link rel="stylesheet" type="text/css" href ="<?= base_url('css/navbar.css') ?>">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        
        <!-- Isotope.js -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
        
        <!-- Lightbox (opsional, jika mau efek zoom gambar) -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
        <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
        
        <!-- FontAwesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        
        <!-- Javascript -->
        <script src="<?= base_url('js/main.js') ?>" defer></script>
        <script src="<?= base_url('js/product.js') ?>" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    </head>
    <body>
        <?= view('layout/navbar') ?>
        <div class="header" data-aos="fade-up" data-aos-delay="100">
            <h3>Product & Brands</h3>
        </div>

        <section class="brand" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper brandSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="img-slide" src="assets/img/brand/11.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-slide" src="assets/img/brand/12.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-slide" src="assets/img/brand/13.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-slide" src="assets/img/brand/14.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-slide" src="assets/img/brand/15.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-slide" src="assets/img/brand/16.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-slide" src="assets/img/brand/17.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-slide" src="assets/img/brand/18.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-slide" src="assets/img/brand/19.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-slide" src="assets/img/brand/20.png">
                    </div>
                </div>
            </div>
        </section>

        <div class="container my-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img src="assets/img/product/1.png">
                        <div class="card-body">
                            <h5>PLC (Programable Logic Controller)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <img src="assets/img/product/2.png">
                        <div class="card-body">
                            <h5>MCB (Miniature Circuit Breaker)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <img src="assets/img/product/3.png">
                        <div class="card-body">
                            <h5>Inverter</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img src="assets/img/product/4.png">
                        <div class="card-body">
                            <h5>Motorize</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <img src="assets/img/product/5.png">
                        <div class="card-body">
                            <h5>MCCB (Molded Case Circuit Breaker)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <img src="assets/img/product/6.png">
                        <div class="card-body">
                            <h5>HMI (Human Machine Interface)</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <?= view('layout/footer') ?>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script>
        AOS.init({
            once: true, // supaya animasi hanya muncul 1x
            duration: 800, // durasi animasi dalam ms
        });
        </script>
    </body>
</html>