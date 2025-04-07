<style>
  .navbar .getstarted:hover {
    color: #fff;
    background: #faebcd;
  }

  .navbar .dropdown ul a:hover,
  .navbar .dropdown ul .active:hover,
  .navbar .dropdown ul li:hover>a {
    color: #684c0f;
    background: #faebcd;
  }
</style>
<nav id="navbar" class="navbar">
  <ul>
    <li><a style="color:rgb(137, 76, 1);" class="nav-link scrollto active" href="<?= base_url('home/#hero'); ?>">Home</a></li>



    <li class="nav-item dropdown">
      <a style="color:rgb(137, 76, 1);" class="nav-link dropdown-toggle scrollto" href="<?= base_url('home/#about'); ?>" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        About
      </a>
      <ul class="dropdown-menu" aria-labelledby="aboutDropdown" style="border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); min-width: 200px; background-color: rgb(238, 219, 177);">
        <li><a style="color:rgb(137, 76, 1);" class="dropdown-item" href="<?= base_url('home/#our-firm'); ?>">Our Firm</a></li>
        <li><a style="color:rgb(137, 76, 1);" class="dropdown-item" href="<?= base_url('home/#visi-misi'); ?>">Visi Misi</a></li>
        <li><a style="color:rgb(137, 76, 1);" class="dropdown-item" href="<?= base_url('home/#client-representative'); ?>">Client Representative</a></li>
      </ul>
    </li>

    <li class="nav-item dropdown">
      <a style="color:rgb(137, 76, 1);" class="nav-link dropdown-toggle scrollto" href="<?= base_url('home/#services'); ?>" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Service
      </a>
      <ul class="dropdown-menu" aria-labelledby="servicesDropdown" style="border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); min-width: 200px; background-color: rgb(238, 219, 177);">
        <li><a style="color:rgb(137, 76, 1);" class="dropdown-item" href="<?= base_url('home/#busur-specialist'); ?>">Busur Trisula & Partners Specialist</a></li>
        <li><a style="color:rgb(137, 76, 1);" class="dropdown-item" href="<?= base_url('home/#our-client'); ?>">Our Client & Success Stories</a></li>
        <li><a style="color:rgb(137, 76, 1);" class="dropdown-item" href="<?= base_url('home/#retainer-legal'); ?>">Retainer Legal</a></li>

      </ul>
    </li>


    <li><a style="color:rgb(137, 76, 1);" class="nav-link scrollto" href="<?= base_url('home/#team'); ?>">Team</a></li>
    <li><a style="color:rgb(137, 76, 1);" href="<?= base_url('home/blog'); ?>">News</a></li>
    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li><a href="#">Drop Down 1</a></li>
        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
          <ul>
            <li><a href="#">Deep Drop Down 1</a></li>
            <li><a href="#">Deep Drop Down 2</a></li>
            <li><a href="#">Deep Drop Down 3</a></li>
            <li><a href="#">Deep Drop Down 4</a></li>
            <li><a href="#">Deep Drop Down 5</a></li>
          </ul>
        </li>
        <li><a href="#">Drop Down 2</a></li>
        <li><a href="#">Drop Down 3</a></li>
        <li><a href="#">Drop Down 4</a></li>
      </ul>
    </li> -->
    <li><a style="color:rgb(137, 76, 1);" class="nav-link scrollto" href="<?= base_url('home/#contact'); ?>">Contact</a></li>
    <?php if (false) : ?>
      <li><a style="color:rgb(137, 76, 1);" class="getstarted scrollto hidde" href="<?= base_url('login'); ?>">Login</a></li>
    <?php endif; ?>
  </ul>
  <i class="bi bi-list mobile-nav-toggle" style="color:  #684c0f;"></i>
</nav>
<!-- .navbar -->

</div>
</header><!-- End Header -->