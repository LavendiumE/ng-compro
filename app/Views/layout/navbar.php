<header>
  <?php
  $uri = service('uri')->getSegment(1); // untuk detect segment pertama URL
  ?>

  <nav class="navbar">
    <a>
      <img class="logo" src="<?= base_url('assets/Logo.png') ?>" alt="logo">
    </a>
    <div class="nav-links" id="navLinks">
      <ul class="navmenu">
        <li class="ncta"><a href="<?= base_url('/') ?>" class="<?= ($uri == '' ? 'active' : '') ?>">Home</a></li>
        <li class="ncta"><a href="#about-section">About</a></li>
        <li class="ncta"><a href="#service-section">Service</a></li>
        <li class="ncta"><a href="<?= base_url('product') ?>" class="<?= ($uri == 'product' ? 'active' : '') ?>">Product</a></li>
        <li class="ncta"><a href="<?= base_url('portofolio') ?>" class="<?= ($uri == 'portofolio' ? 'active' : '') ?>">Portofolio</a></li>
        <li><a href="<?= base_url('contact') ?>" class="cta <?= ($uri == 'contact' ? 'active' : '') ?>">Contact</a></li>
      </ul>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </nav>
</header>