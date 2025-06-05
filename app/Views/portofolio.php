<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portofolio</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href ="http://localhost:8080/css/portofolio.css">
        <link rel="stylesheet" type="text/css" href ="http://localhost:8080/css/footer.css">
        <link rel="stylesheet" type="text/css" href ="http://localhost:8080/css/navbar.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        
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
        <script src="http://localhost:8080/js/portofolio.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <body>
        <?= view('layout/navbar') ?>
        <div class="header">
            <h3>Portofolio</h3>
        </div>

        <div class="category-tabs">
            <button class="tab-btn active filter-button" data-filter="*">All</button>
            <button class="tab-btn filter-button" data-filter=".electric">Electric</button>
            <button class="tab-btn filter-button" data-filter=".mechanic">Mechanic</button>
            <button class="tab-btn filter-button" data-filter=".marine">Marine</button>
        </div>

        <div class="container my-5">
            <div class="row portofolio-container grid">
                <div class="grid-sizer col-lg-4 col-md-6 col-12 mb-4 portofolio-item electric">
                    <div class="card">
                        <img src="assets/img/pam jaya/pamjaya1.jpg" class="card-img-top img-fluid" alt="electric">
                        <div class="card-body">
                            <h5 class="card-title">PAM Jaya Cilincing & Gandaria Utara</h5>
                            <p class="card-text">Pengadaan dan pemasangan panel reservoir</p>
                            <button 
                            class="btn btn-primary view-more-btn"
                            data-title="PAM Jaya Cilincing & Gandaria Utara"
                            data-description="Pengadaan dan pemasangan panel reservoir"
                            data-images="assets/img/pam jaya/pamjaya1.jpg,assets/img/pam jaya/pamjaya2.jpg,assets/img/pam jaya/pamjaya3.jpg,assets/img/pam jaya/pamjaya4.jpg,assets/img/pam jaya/pamjaya5.jpg"
                            data-bs-toggle="modal"
                            data-bs-target="#projectModal">View more</button>
                        </div>
                    </div>
                </div>

                <div class="grid-sizer col-lg-4 col-md-6 col-12 mb-4 portofolio-item electric">
                    <div class="card">
                        <img src="assets/img/amb/amb1.jpg" class="card-img-top img-fluid" alt="electric">
                        <div class="card-body">
                            <h5 class="card-title">PT Artha Mulia Beton</h5>
                            <p class="card-text">Automation Batching Plant</p>
                            <button 
                            class="btn btn-primary view-more-btn"
                            data-title="PT Artha Mulia Beton"
                            data-description="Automation Batching Plant"
                            data-images="assets/img/amb/amb1.jpg,assets/img/amb/amb2.jpg,assets/img/amb/amb3.jpg"
                            data-bs-toggle="modal"
                            data-bs-target="#projectModal">View more</button>
                        </div>
                    </div>
                </div>

                <div class="grid-sizer col-lg-4 col-md-6 col-12 mb-4 portofolio-item electric">
                    <div class="card">
                        <img src="assets/img/eravariasi/eravariasi1.jpg" class="card-img-top img-fluid" alt="electric">
                        <div class="card-body">
                            <h5 class="card-title">PT Eravariasi</h5>
                            <p class="card-text">Modifikasi mesin stamping</p>
                            <button
                            class="btn btn-primary view-more-btn"
                            data-title="PT Eravariasi"
                            data-description="Modifikasi mesin stamping"
                            data-images="assets/img/eravariasi/eravariasi1.jpg,assets/img/eravariasi/eravariasi2.jpg,assets/img/eravariasi/eravariasi3.jpg"
                            data-bs-toggle="modal"
                            data-bs-target="#projectModal">View more</button>
                        </div>
                    </div>
                </div>

                <div class="grid-sizer col-lg-4 col-md-6 col-12 mb-4 portofolio-item electric">
                    <div class="card">
                        <img src="assets/img/sumu rubber/sumi1.jpg" class="card-img-top img-fluid" alt="electric">
                        <div class="card-body">
                            <h5 class="card-title">PT Sumi Rubber Indonesia</h5>
                            <p class="card-text">Panel Temperature</p>
                            <button 
                            class="btn btn-primary view-more-btn"
                            data-title="PT Sumi Rubber Indonesia"
                            data-description="Panel Temperature"
                            data-images="assets/img/sumu rubber/sumi1.jpg,assets/img/sumu rubber/sumi2.jpg,assets/img/sumu rubber/sumi3.jpg"
                            data-bs-toggle="modal"
                            data-bs-target="#projectModal">View more</button>
                        </div>
                    </div>
                </div>

                <div class="grid-sizer col-lg-4 col-md-6 col-12 mb-4 portofolio-item electric">
                    <div class="card">
                        <img src="assets/img/plts nule/nule1.jpg" class="card-img-top img-fluid" alt="electric">
                        <div class="card-body">
                            <h5 class="card-title">PLTS Nule</h5>
                            <p class="card-text">Program PLC</p>
                            <button 
                            class="btn btn-primary view-more-btn"
                            data-title="PLTS Nule"
                            data-description="Program PLC"
                            data-images="assets/img/plts nule/nule1.jpg,assets/img/plts nule/nule2.jpg,assets/img/plts nule/nule3.jpg,assets/img/plts nule/nule4.jpg"
                            data-bs-toggle="modal"
                            data-bs-target="#projectModal">View more</button>
                        </div>
                    </div>
                </div>

                <div class="grid-sizer col-lg-4 col-md-6 col-12 mb-4 portofolio-item electric">
                    <div class="card">
                        <img src="assets/img/world music industry/music1.jpg" class="card-img-top img-fluid" alt="electric">
                        <div class="card-body">
                            <h5 class="card-title">PT World Music Industry</h5>
                            <p class="card-text">Modifikasi Program PLC LS Machine Scale Cutting</p>
                            <button
                            class="btn btn-primary view-more-btn"
                            data-title="PT World Music industry"
                            data-description="Modifikasi program PLC LS Machine Scale Cutting"
                            data-images="assets/img/world music industry/music1.jpg,assets/img/world music industry/music2.jpg"
                            data-bs-toggle="modal"
                            data-bs-target="#projectModal">View more</button>
                        </div>
                    </div>
                </div>

                <div class="grid-sizer col-lg-4 col-md-6 col-12 mb-4 portofolio-item electric">
                    <div class="card">
                        <img src="assets/img/indopoly/indopoly1.jpg" class="card-img-top img-fluid" alt="electric">
                        <div class="card-body">
                            <h5 class="card-title">PT Indopoly Swakarsa Industry TBK</h5>
                            <p class="card-text">Project VSD Saving Energi</p>
                            <button
                            class="btn btn-primary view-more-btn"
                            data-title="PT Indopoly Swakarsa Industry TBK"
                            data-description="Project VSD Saving Energi"
                            data-images="assets/img/indopoly/indopoly1.jpg,assets/img/indopoly/indopoly2.jpg,assets/img/indopoly/indopoly3.jpg"
                            data-bs-toggle="modal"
                            data-bs-target="#projectModal">View more</button>
                        </div>
                    </div>
                </div>

                <div class="grid-sizer col-lg-4 col-md-6 col-12 mb-4 portofolio-item electric">
                    <div class="card">
                        <img src="assets/img/patal senayan/senayan1.jpg" class="card-img-top img-fluid" alt="electric">
                        <div class="card-body">
                            <h5 class="card-title">Patal Senayan Jakarta</h5>
                            <p class="card-text">Pengadaan dan Pemasangan Panel Office </p>
                            <button
                            class="btn btn-primary view-more-btn"
                            data-title="Patal Senayan Jakarta"
                            data-description="Pengadaan dan Pemasangan Panel Office "
                            data-images="assets/img/patal senayan/senayan1.jpg,assets/img/patal senayan/senayan2.jpg,assets/img/patal senayan/senayan3.jpg,assets/img/patal senayan/senayan4.jp"
                            data-bs-toggle="modal"
                            data-bs-target="#projectModal">View more</button>
                        </div>
                    </div>
                </div>

                <div class="grid-sizer col-lg-4 col-md-6 col-12 mb-4 portofolio-item electric">
                    <div class="card">
                        <img src="assets/img/pltu soma/soma1.jpg" class="card-img-top img-fluid" alt="electric">
                        <div class="card-body">
                            <h5 class="card-title">PLTU Soma Tanjung Balai Karimun</h5>
                            <p class="card-text">Upload, download & monitoring program PLC</p>
                            <button
                            class="btn btn-primary view-more-btn"
                            data-title="PLTU Soma Tanjung Balai Karimun"
                            data-description="Upload, download & monitoring program PLC"
                            data-images="assets/img/pltu soma/soma1.jpg,assets/img/pltu soma/soma2.jpg"
                            data-bs-toggle="modal"
                            data-bs-target="#projectModal">View more</button>
                        </div>
                    </div>
                </div>

                <div class="grid-sizer col-lg-4 col-md-6 col-12 mb-4 portofolio-item electric">
                    <div class="card">
                        <img src="assets/img/pwkwi plc/pwkwi1.jpg" class="card-img-top img-fluid" alt="electric">
                        <div class="card-body">
                            <h5 class="card-title">PT PWKWI</h5>
                            <p class="card-text">Pengadaan dan Pemasanan Panel Hotpress 1 Serta Modifikasi Program PLC</p>
                            <button 
                            class="btn btn-primary view-more-btn"
                            data-title="PT PWKWI"
                            data-description="Pengadaan dan Pemasanan Panel Hotpress 1 Serta Modifikasi Program PLC"
                            data-images="assets/img/pwkwi plc/pwkwi1.jpg,assets/img/pwkwi plc/pwkwi2.jpg,assets/img/pwkwi plc/pwkwi3.jpg,assets/img/pwkwi plc/pwkwi4.jpg"
                            data-bs-toggle="modal"
                            data-bs-target="#projectModal">View more</button>
                        </div>
                    </div>
                </div>

                <div class="grid-sizer col-lg-4 col-md-6 col-12 mb-4 portofolio-item mechanic">
                    <div class="card">
                        <img src="assets/img/pwkwi joint machine/joint1.jpg" class="card-img-top img-fluid" alt="Mechanic">
                        <div class="card-body">
                            <h5 class="card-title">PT PWKWI</h5>
                            <p class="card-text">Pengadaan Mesin Joint</p>
                            <button
                            class="btn btn-primary view-more-btn"
                            data-title="PT PWKWI"
                            data-description="Pengadaan Mesin Joint"
                            data-images="assets/img/pwkwi joint machine/joint1.jpg,assets/img/pwkwi joint machine/joint2.jpg,assets/img/pwkwi joint machine/joint3.jpg"
                            data-bs-toggle="modal"
                            data-bs-target="#projectModal">View more</button>
                        </div>
                    </div>
                </div>

                <div class="grid-sizer col-lg-4 col-md-6 col-12 mb-4 portofolio-item mechanic">
                    <div class="card">
                        <img src="assets/img/mechanic/mechanic1.jpeg" class="card-img-top img-fluid" alt="Mechanic">
                        <div class="card-body">
                            <h5 class="card-title">Mechanic</h5>
                            <p class="card-text"></p>
                            <button
                            class="btn btn-primary view-more-btn"
                            data-title="Mechanic"
                            data-description=""
                            data-images="assets/img/mechanic/mechanic1.jpeg,assets/img/mechanic/mechanic2.jpeg,assets/img/mechanic/mechanic3.jpeg,assets/img/mechanic/mechanic4.jpeg"
                            data-bs-toggle="modal"
                            data-bs-target="#projectModal">View more</button>
                        </div>
                    </div>
                </div>

                <div class="grid-sizer col-lg-4 col-md-6 col-12 mb-4 portofolio-item marine">
                    <div class="card">
                        <img src="assets/img/natuna/natuna1.jpeg" class="card-img-top img-fluid" alt="marine">
                        <div class="card-body">
                            <h5 class="card-title">Natuna</h5>
                            <p class="card-text">Installation Fire Detector</p>
                            <button
                            class="btn btn-primary view-more-btn"
                            data-title="Natuna"
                            data-description="Installation Fire Detector"
                            data-images="assets/img/natuna/natuna1.jpeg,assets/img/natuna/natuna2.jpeg,assets/img/natuna/natuna3.jpeg,assets/img/natuna/natuna4.jpeg"
                            data-bs-toggle="modal"
                            data-bs-target="#projectModal">View more</button>
                        </div>
                    </div>
                </div>

                <div class="grid-sizer col-lg-4 col-md-6 col-12 mb-4 portofolio-item mechanic">
                    <div class="card">
                        <img src="assets/img/lineboring/lineboring1.jpeg" class="card-img-top img-fluid" alt="Mechanic">
                        <div class="card-body">
                            <h5 class="card-title">PT Sany Perkasa</h5>
                            <p class="card-text">Pengadaan line booring machine</p>
                            <button
                            class="btn btn-primary view-more-btn"
                            data-title="PT Sany Perkasa"
                            data-description="Pengadaan line booring machine"
                            data-images="assets/img/lineboring/lineboring1.jpeg,assets/img/lineboring/lineboring2.jpeg,assets/img/lineboring/lineboring3.jpeg,assets/img/lineboring/lineboring4.jpeg"
                            data-bs-toggle="modal"
                            data-bs-target="#projectModal">View more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="projectModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <!-- Carousel -->
                        <div id="projectCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
                        <div class="carousel-inner" id="modalCarouselInner">
                            <!-- Slides akan di-inject lewat JS -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                        </div>

                        <p id="modalDescription"></p>
                    </div>
                </div>
            </div>
        </div>

        
        <?= view('layout/footer') ?>
    </body>
</html>