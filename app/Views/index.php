<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href ="<?= base_url('css/main.css') ?>">
    <link rel="stylesheet" type="text/css" href ="<?= base_url('css/footer.css') ?>">
    <link rel="stylesheet" type="text/css" href ="<?= base_url('css/navbar.css') ?>">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Isotope.js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
    <!-- Lightbox (opsional, jika mau efek zoom gambar) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/favicon.png') ?>" type="image/x-icon">
    <title>Industrial Electrical & Automation Services | PT Nita Gemilang Solusindo</title>

    <meta name="description" content="Industrial electrical contractor providing automation systems, control panel fabrication, electrical installation, and industrial maintenance services in Indonesia.">
    <meta name="keywords" content="industrial electrical, automation system, control panel fabrication, electrical contractor, PLC automation, industrial maintenance">
    <meta name="author" content="PT Nita Gemilang Solusindo">
  </head>
  <body>
    <?= view('layout/navbar') ?>
    <!--- Hero Section --->
    <section class="hero">
      <div class="container">
        <div class="row align-items-center hero-wrapper">

          <div class="col-lg-6">
            <div class="hero-word">
              <h1 data-aos="fade-up">
                Reliable Industrial Electrical & Automation Solutions
              </h1>

              <p class="hero-p" data-aos="fade-up" data-aos-delay="150">
                Supporting industrial operations through electrical installation,
                control systems, panel fabrication, and automation services
                for manufacturing, marine, and infrastructure sectors.
              </p>

              <div class="hero-btn" data-aos="fade-up" data-aos-delay="250">
                <a href="#contact-section" class="btn btn-primary me-2">Request Consultation</a>
                <a href="#service-section" class="btn btn-outline-secondary">Explore Services</a>
              </div>

              <div class="hero-stats" data-aos="fade-up" data-aos-delay="350">
                <div>
                  <h4>10+</h4>
                  <small>Years Experience</small>
                </div>
                <div>
                  <h4>50+</h4>
                  <small>Projects Delivered</small>
                </div>
                <div>
                  <h4>20+</h4>
                  <small>Industrial Clients</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-grid">
              <img src="assets/img/carousel/img-card1.jpg" class="hero-img hero-img-1">
              <img src="assets/img/carousel/img-card2.jpg" class="hero-img hero-img-2">
              <img src="assets/img/carousel/img-card3.jpg" class="hero-img hero-img-3">
            </div>
          </div>

        </div>
      </div>
    </section>
    
    <section class="about" id="about-section">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-lg-5">
            <div class="about-left">
              <span class="about-label" data-aos="fade-up">About Us</span>

              <h2 data-aos="fade-up" data-aos-delay="100">
                Empowering Industries with Innovation and Excellence
              </h2>

              <p data-aos="fade-up" data-aos-delay="200">
                With years of expertise in Electric, Mechanic, and Automation, we deliver cutting-edge solutions to optimize industrial performance. Our commitment is to provide high-quality products and services tailored to our clients' needs.
              </p>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="about-cards">

              <div class="about-card" data-aos="fade-up" data-aos-delay="150">
                <i class="bi bi-check2-circle"></i>
                <div>
                  <h5>Quality Service</h5>
                  <p>Providing quality services to complete client needs with competitive prices.</p>
                </div>
              </div>

              <div class="about-card" data-aos="fade-up" data-aos-delay="250">
                <i class="bi bi-check2-circle"></i>
                <div>
                  <h5>Professional Resources</h5>
                  <p>Developing technology through professional and experienced human resources.</p>
                </div>
              </div>

              <div class="about-card" data-aos="fade-up" data-aos-delay="350">
                <i class="bi bi-check2-circle"></i>
                <div>
                  <h5>Integrity Commitment</h5>
                  <p>Providing long-term value to stakeholders with high integrity.</p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

    <!--Service Section-->
    <section class="service" id="service-section">

      <div class="title">
        <h3>SERVICE</h3>
        <h2 class="service-heading">Integrated Industrial Solutions for Your Business</h2>
        <p class="service-subtext">
            We deliver practical electrical, automation, and fabrication services designed to improve efficiency, reliability, and long-term operational performance across industries.
        </p>
    </div>

      <div class="container-service">

        <div class="row">

          <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div data-aos="fade-up" data-aos-delay="100" class="custom-card">
              <div class="text-card">
                <i class="fa-solid fa-bolt"></i>
                <h5>General Supplier Electrical Control</h5>
                <p class="card-text-service">We supply high-quality electrical control components to ensure safe and efficient power management. Our reliable solutions help industries optimize automation and control systems with precision.</p>
              </div>
            </div>  
          </div>

          <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div data-aos="fade-up" data-aos-delay="200" class="custom-card">
              <div class="text-card">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h5>General Service and Maintenance</h5>
                <p class="card-text-service">We provide comprehensive service and maintenance solutions to ensure the longevity and efficiency of your industrial systems. Our expert team is committed to minimizing downtime and optimizing performance.</p>
              </div>
            </div>  
          </div>

          <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div data-aos="fade-up" data-aos-delay="300" class="custom-card">
              <div class="text-card">
                <i class="fa-solid fa-table-columns"></i>
                <h5>Control Panel Fabrication</h5>
                <p class="card-text-service">We specialize in designing and fabricating high-quality control panels tailored to meet industrial automation needs. Our custom-built solutions enhance system reliability and operational efficiency.</p>
              </div>
            </div>  
          </div>

          <div class="col-lg-4 col-md-6 col-6 mb-4">
              <div data-aos="fade-up" data-aos-delay="400" class="custom-card">
                <div class="text-card">
                  <i class="fa-solid fa-pen-ruler"></i>
                  <h5>Calibration Panel Meter</h5>
                  <p class="card-text-service">Accurate measurements are crucial for optimal performance. We offer professional calibration services for panel meters, ensuring precision and compliance with industry standards.</p>
                </div>
              </div>  
          </div>

          <div class="col-lg-4 col-md-6 col-6 mb-4">
              <div data-aos="fade-up" data-aos-delay="500" class="custom-card">
                <div class="text-card">
                  <i class="fa-solid fa-robot"></i>
                  <h5>Automation System</h5>
                  <p class="card-text-service">In the industrial automation system, it is designed to carry out a function with little or no human intervention and can control various electrical, electronic and mechanical systems supported by our team of experienced and professional technicians.</p>
                </div>
              </div>  
          </div>

          <div class="col-lg-4 col-md-6 col-6 mb-4">
              <div data-aos="fade-up" data-aos-delay="600" class="custom-card">
                <div class="text-card">
                  <i class="fa-solid fa-gear"></i>
                  <h5>General Supplier Mechanical</h5>
                  <p class="card-text-service">We provide high-quality mechanical components and equipment to support various industrial needs. As a trusted general supplier, we ensure reliable products and efficient solutions tailored to optimize your operations.</p>
                </div>
              </div>  
          </div>

        </div>

      </div>

    </section>

    <section class="featured-projects">
      <div class="container">
        <div class="title">
          <h3>Featured Projects</h3>
          <p>Selected industrial works delivered for various sectors.</p>
        </div>

        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="custom-card">
              <img src="assets/img/porto/electric-1.jpg" class="img-fluid mb-3">
              <h5>Control Panel Installation</h5>
              <p>Electrical panel integration for manufacturing facility.</p>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="custom-card">
              <img src="assets/img/porto/mechanic-1.jpg" class="img-fluid mb-3">
              <h5>Mechanical Modification</h5>
              <p>Joint machine adjustment for production efficiency.</p>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="custom-card">
              <img src="assets/img/porto/marine-1.jpeg" class="img-fluid mb-3">
              <h5>Marine Detector Installation</h5>
              <p>Safety system support for marine operation.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <h3>Trusted by Industry Leaders</h3>
      <p class="client-subtitle">Companies that have collaborated with us across industrial sectors.</p>

      <div class="container-clients" >
        <div class="row g-0 clients-wrap">
          <div data-aos="fade-up" data-aos-delay="100" class="col-6 col-md-3 client-logo">
            <div class="client-box">
              <img src="assets/img/client1.png" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div data-aos="fade-up" data-aos-delay="150" class="col-6 col-md-3 client-logo">
            <div class="client-box">
              <img src="assets/img/client2.png" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div data-aos="fade-up" data-aos-delay="200" class="col-6 col-md-3 client-logo">
            <div class="client-box">
              <img src="assets/img/client3.png" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div data-aos="fade-up" data-aos-delay="250" class="col-6 col-md-3 client-logo">
            <div class="client-box">
              <img src="assets/img/client4.png" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div data-aos="fade-up" data-aos-delay="300" class="col-6 col-md-3 client-logo">
            <div class="client-box">
              <img src="assets/img/client5.png" class="img-fluid" alt="">
            </div> 
          </div><!-- End Client Item -->

          <div data-aos="fade-up" data-aos-delay="350" class="col-6 col-md-3 client-logo">
            <div class="client-box">
              <img src="assets/img/client6.png" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div data-aos="fade-up" data-aos-delay="400" class="col-6 col-md-3 client-logo">
            <div class="client-box">
              <img src="assets/img/client7.png" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div data-aos="fade-up" data-aos-delay="450" class="col-6 col-md-3 client-logo">
            <div class="client-box">
              <img src="assets/img/client8.png" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div data-aos="fade-up" data-aos-delay="500" class="col-6 col-md-3 client-logo">
            <div class="client-box">
              <img src="assets/img/client9.png" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div data-aos="fade-up" data-aos-delay="550" class="col-6 col-md-3 client-logo">
            <div class="client-box">
              <img src="assets/img/client10.png" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div data-aos="fade-up" data-aos-delay="600" class="col-6 col-md-3 client-logo">
            <div class="client-box">
               <img src="assets/img/client11.png" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

          <div data-aos="fade-up" data-aos-delay="650" class="col-6 col-md-3 client-logo">
            <div class="client-box">
              <img src="assets/img/client12.png" class="img-fluid" alt="">
            </div>
          </div><!-- End Client Item -->

        </div>
      </div>
    </section>

    <section class="cta-section text-center">
      <div class="container">
        <h3>Discuss Your Industrial Requirement with Our Team</h3>
        <p>
          From electrical installation to automation systems,
          we help industries execute projects with reliable technical support.
        </p>
        <a href="#contact-section" class="btn btn-primary">Start Discussion</a>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact-section">

      <div class="container-contact">

        <div class="row">

          <div class="col-md-6 col-12 mb-3" id="col-contact">

            <div data-aos="fade-up" data-aos-delay="100" class="title">
              <h5>Get in touch</h5>
            </div>

            <form data-aos="fade-up" data-aos-delay="200" id="contactForm">
              <div class="mb-3">
                  <label for="fullName" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="fullName" placeholder="Your name" required>
              </div>
              <div class="mb-3">
                  <label for="emailAddress" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="emailAddress" placeholder="name@example.com" required>
              </div>
              <div class="mb-3">
                  <label for="phoneNumber" class="form-label">Phone Number</label>
                  <input type="text" class="form-control" id="phoneNumber" placeholder="08xxxxxxxxx" required>
              </div>
              <div class="mb-3">
                  <label for="message" class="form-label">Message</label>
                  <textarea class="form-control" id="message" rows="3" required></textarea>
              </div>
              <div class="mb-3">
                <label for="serviceType" class="form-label">Service Needed</label>
                <select class="form-control" id="serviceType">
                  <option>Electrical Installation</option>
                  <option>Automation System</option>
                  <option>Panel Fabrication</option>
                  <option>Mechanical Service</option>
                </select>
              </div>
              <button data-aos="fade-up" data-aos-delay="250" class="btn btn-primary" type="submit" id="btn-submit">Send Message</button>
            </form>

            <p id="responseMessage"></p>

          </div>

          <div data-aos="fade-up" data-aos-delay="100" class="col-md-6 col-12 mb-3">
            <div class="map-title">
              <h5>Office Location</h5>
              <p>Purwakarta, West Java</p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.733924293863!2d107.44111637486591!3d-6.555236364081726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690e50a4a63b2f%3A0xc59ac10c48554abc!2sPT.%20Nita%20Gemilang%20Solusindo!5e0!3m2!1sen!2sid!4v1742446308282!5m2!1sen!2sid"   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>

        </div>

      </div>
      
    </section>

    <?= view('layout/footer') ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/main.js') ?>" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true, // supaya animasi hanya muncul 1x
        duration: 800, // durasi animasi dalam ms
      });
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>