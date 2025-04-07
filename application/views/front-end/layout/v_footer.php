<style>
  /* .footer .footer-top {
    background: white url(./footer-bg.png) no-repeat right top;
    background-size: contain;
    border-top: 1px solid rgb(238, 219, 177);
    border-bottom: 1px solid rgb(238, 219, 177);
    padding: 60px 0 30px 0;
  } */
  .footer .footer-top .custom-footer-info {
    margin-bottom: 30px;
  }

  .footer .footer-top .custom-footer-info .logo {
    line-height: 0;
    margin-bottom: 15px;
  }

  .footer .footer-top .custom-footer-info .logo img {
    max-height: 40px;
    margin-right: 6px;
  }

  .footer .footer-top .custom-footer-info .logo span {
    font-weight: 700;
    letter-spacing: 1px;
    color: rgb(112, 75, 1);
    font-family: "Nunito", sans-serif;
    margin-top: 3px;
  }

  /* screen untuk lebar layar medium dan large */
  /* @media (min-width: 768px) {
    .footer .footer-top .custom-footer-info .logo span {
      font-size: 20px;

    }
  } */

  .footer .footer-top .custom-footer-info p {
    font-size: 14px;
    line-height: 24px;
    margin-bottom: 0;
    font-family: "Nunito", sans-serif;
  }
</style>
<!-- ======= Footer ======= -->
<footer id="footer" class="footer" style="background: rgb(238, 219, 177);">

  <!-- <div class="footer-newsletter" style="background: rgb(238, 219, 177);">
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
  </div> -->

  <div class="footer-top" style="background: rgb(238, 219, 177);">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 custom-footer-info card shadow-none flex-column gap-3" style="background: rgb(238, 219, 177); ">
          <a href="<?= base_url('home'); ?>" class="logo d-flex align-items-center justify-content-center">
            <img src="<?= base_url('assets/img/company/') . $image; ?>" alt="">
            <span class="text-dark custom-span-footer"><?= $setting->nama_perusahaan; ?></span>
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
          <h4 class="text-dark">Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right text-dark"></i> <a href="#" class="text-dark">Home</a></li>
            <li><i class="bi bi-chevron-right text-dark"></i> <a href="#" class="text-dark">About us</a></li>
            <li><i class="bi bi-chevron-right text-dark"></i> <a href="#" class="text-dark">Services</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4 class="text-dark">Our Services</h4>
          <ul class="text-dark">
            <?php foreach ($layanan as $key => $value) : ?>
              <li><i class="bi bi-chevron-right"></i> <a href="#" class="text-dark"><?= $value->judul_layanan; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4 class="text-dark">Contact Us</h4>
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


<div class="fixed-bottom flex-column gap-3 d-flex justify-content-end align-items-end">
  <div onclick="toWa()" class="" style="scale: 0.6; position: fixed; right: -15px; bottom: 50px; cursor: pointer;">

    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
      <path fill="#fff" d="M4.9,43.3l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5c5.1,0,9.8,2,13.4,5.6	C41,14.2,43,18.9,43,24c0,10.5-8.5,19-19,19c0,0,0,0,0,0h0c-3.2,0-6.3-0.8-9.1-2.3L4.9,43.3z"></path>
      <path fill="#fff" d="M4.9,43.8c-0.1,0-0.3-0.1-0.4-0.1c-0.1-0.1-0.2-0.3-0.1-0.5L7,33.5c-1.6-2.9-2.5-6.2-2.5-9.6	C4.5,13.2,13.3,4.5,24,4.5c5.2,0,10.1,2,13.8,5.7c3.7,3.7,5.7,8.6,5.7,13.8c0,10.7-8.7,19.5-19.5,19.5c-3.2,0-6.3-0.8-9.1-2.3	L5,43.8C5,43.8,4.9,43.8,4.9,43.8z"></path>
      <path fill="#cfd8dc" d="M24,5c5.1,0,9.8,2,13.4,5.6C41,14.2,43,18.9,43,24c0,10.5-8.5,19-19,19h0c-3.2,0-6.3-0.8-9.1-2.3	L4.9,43.3l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5 M24,43L24,43L24,43 M24,43L24,43L24,43 M24,4L24,4C13,4,4,13,4,24	c0,3.4,0.8,6.7,2.5,9.6L3.9,43c-0.1,0.3,0,0.7,0.3,1c0.2,0.2,0.4,0.3,0.7,0.3c0.1,0,0.2,0,0.3,0l9.7-2.5c2.8,1.5,6,2.2,9.2,2.2	c11,0,20-9,20-20c0-5.3-2.1-10.4-5.8-14.1C34.4,6.1,29.4,4,24,4L24,4z"></path>
      <path fill="#40c351" d="M35.2,12.8c-3-3-6.9-4.6-11.2-4.6C15.3,8.2,8.2,15.3,8.2,24c0,3,0.8,5.9,2.4,8.4L11,33l-1.6,5.8	l6-1.6l0.6,0.3c2.4,1.4,5.2,2.2,8,2.2h0c8.7,0,15.8-7.1,15.8-15.8C39.8,19.8,38.2,15.8,35.2,12.8z"></path>
      <path fill="#fff" fill-rule="evenodd" d="M19.3,16c-0.4-0.8-0.7-0.8-1.1-0.8c-0.3,0-0.6,0-0.9,0	s-0.8,0.1-1.3,0.6c-0.4,0.5-1.7,1.6-1.7,4s1.7,4.6,1.9,4.9s3.3,5.3,8.1,7.2c4,1.6,4.8,1.3,5.7,1.2c0.9-0.1,2.8-1.1,3.2-2.3	c0.4-1.1,0.4-2.1,0.3-2.3c-0.1-0.2-0.4-0.3-0.9-0.6s-2.8-1.4-3.2-1.5c-0.4-0.2-0.8-0.2-1.1,0.2c-0.3,0.5-1.2,1.5-1.5,1.9	c-0.3,0.3-0.6,0.4-1,0.1c-0.5-0.2-2-0.7-3.8-2.4c-1.4-1.3-2.4-2.8-2.6-3.3c-0.3-0.5,0-0.7,0.2-1c0.2-0.2,0.5-0.6,0.7-0.8	c0.2-0.3,0.3-0.5,0.5-0.8c0.2-0.3,0.1-0.6,0-0.8C20.6,19.3,19.7,17,19.3,16z" clip-rule="evenodd"></path>
    </svg>
  </div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background:rgb(214, 193, 152);   border-top: 1px solid rgb(238, 219, 177);
  border-bottom: 1px solid rgb(238, 219, 177);"><i class="bi bi-arrow-up-short " style="color: #000"></i></a>
</div>

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

<script>
  function toWa() {
    var phoneNumber = "6288279761821";

    var whatsappURL = "https://wa.me/" + phoneNumber;

    // Buka URL WhatsApp di tab baru
    window.open(whatsappURL, "_blank").focus();
  }
</script>
</body>

</html>