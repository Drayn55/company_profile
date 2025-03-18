<style>
  /* .footer .footer-top {
    background: white url(./footer-bg.png) no-repeat right top;
    background-size: contain;
    border-top: 1px solid rgb(238, 219, 177);
    border-bottom: 1px solid rgb(238, 219, 177);
    padding: 60px 0 30px 0;
  } */
</style>
<!-- ======= Footer ======= -->
<footer id="footer" class="footer" style="background: rgb(238, 219, 177);">

  <div class="footer-newsletter" style="background: rgb(238, 219, 177);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <h4 style="color: #684c0f;">Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        </div>
        <div class="col-lg-6">
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe" style="background: #faebcd; color: #684c0f;">
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-top"  style="background: rgb(238, 219, 177);">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info card shadow-none flex-column gap-3"  style="background: rgb(238, 219, 177); ">
          <a href="<?= base_url('home'); ?>" class="logo d-flex align-items-center">
            <img src="<?= base_url('assets/img/company/') . $image; ?>" alt="">
            <span class="text-dark"><?= $setting->nama_perusahaan; ?></span>
          </a>
          <p><?= $setting->profile; ?></p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <?php foreach ($layanan as $key => $value) : ?>
              <li><i class="bi bi-chevron-right"></i> <a href="#"><?= $value->judul_layanan; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            <?= $setting->alamat; ?> <br>
            <strong>Phone:</strong> <?= $setting->no_telepon; ?><br>
            <strong>Email:</strong> <?= $setting->email; ?><br>
          </p>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright text-dark">
      &copy; Copyright <strong><span><?= date('Y'); ?></span></strong>. All Rights Reserved
    </div>
  </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background:rgb(214, 193, 152);   border-top: 1px solid rgb(238, 219, 177);
  border-bottom: 1px solid rgb(238, 219, 177);"><i class="bi bi-arrow-up-short " style="color: #000"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url(); ?>vendor/front-end/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="<?= base_url(); ?>vendor/front-end/assets/vendor/aos/aos.js"></script>
<script src="<?= base_url(); ?>vendor/front-end/assets/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url(); ?>vendor/front-end/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url(); ?>vendor/front-end/assets/vendor/purecounter/purecounter.js"></script>
<script src="<?= base_url(); ?>vendor/front-end/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url(); ?>vendor/front-end/assets/vendor/glightbox/js/glightbox.min.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url(); ?>vendor/front-end/assets/js/main.js"></script>

</body>

</html>