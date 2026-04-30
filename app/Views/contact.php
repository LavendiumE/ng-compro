<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Nita Gemilang Solusindo</title>
    <link rel="icon" href="<?= base_url('assets/favicon.png') ?>" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('css/contact.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/footer.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/navbar.css') ?>">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>

    <?= view('layout/navbar') ?>

    <section class="contact-section">

        <div class="contact-header" data-aos="fade-up">
            <span class="contact-label">CONTACT US</span>
            <h1>Let's Discuss Your Industrial Needs</h1>
            <p>
                We are ready to support your automation, electrical control,
                and industrial project requirements professionally.
            </p>
        </div>

        <div class="contact-wrapper">

            <div class="contact-card" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Visit Our Office</h3>
                <p>
                    Jl. Mr. Dr. Kusumahatmaja No. 2,<br>
                    Nagri Tengah, Purwakarta,<br>
                    Jawa Barat 41114 - Indonesia
                </p>
            </div>

            <div class="contact-card" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Message Us</h3>
                <p>nitagemilangsolusindo@gmail.com</p>
                <p>Phone: (0264) 8301480</p>
                <a href="mailto:nitagemilangsolusindo@gmail.com" class="contact-btn">Send Email</a>
            </div>

        </div>

    </section>

    <?= view('layout/footer') ?>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            once: true,
            duration: 800
        });
    </script>

</body>
</html>