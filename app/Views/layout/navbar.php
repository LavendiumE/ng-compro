<header>
  <?php $uri = service('uri')->getSegment(1); ?>

  <nav class="navbar">
    <a href="<?= base_url('/') ?>" class="logo">
      <img class="logo" src="<?= base_url('assets/Logo.png') ?>" alt="logo">
    </a>

    <div class="nav-links" id="navLinks">
      <ul class="navmenu">
        <li><a href="<?= base_url('/') ?>" class="<?= ($uri == '' ? 'active' : '') ?>">Home</a></li>
        <li><a href="#about-section">About</a></li>
        <li><a href="#service-section">Service</a></li>
        <li><a href="<?= base_url('product') ?>" class="<?= ($uri == 'product' ? 'active' : '') ?>">Product</a></li>
        <li><a href="<?= base_url('portofolio') ?>" class="<?= ($uri == 'portofolio' ? 'active' : '') ?>">Portofolio</a></li>
        <li><a href="<?= base_url('contact') ?>" class="cta <?= ($uri == 'contact' ? 'active' : '') ?>">Contact</a></li>
      </ul>
    </div>

    <button class="menu-toggle" onclick="toggleMenu()">
      <i class="fa fa-bars"></i>
    </button>
  </nav>
</header>