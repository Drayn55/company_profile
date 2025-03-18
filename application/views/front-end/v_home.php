<style>
  .clients .clients-slider .swiper-pagination .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background-color: #fff;
    opacity: 1;
    border: 1px solid rgb(241, 174, 65);
  }

  .clients .clients-slider .swiper-pagination .swiper-pagination-bullet-active {
    background-color: rgb(241, 179, 65);
  }

  .services .service-box.blue:hover {
    background: rgb(250, 216, 148);
  }

  .recent-blog-posts .post-box:hover .post-title {
    color: var(--base-black);
  }

  .features .feature-box:hover i {
    background: #faebcd;
    color: #000;
  }

  .testimonials .swiper-pagination .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background-color: #fff;
    opacity: 1;
    border: 1px solid rgb(241, 174, 65);
  }

  .testimonials .swiper-pagination .swiper-pagination-bullet-active {
    background-color: rgb(241, 179, 65);
  }
  
</style>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center"
  style="background-color: #F7C873 !important; padding: 50px; border-radius: 10px; position: relative;">



  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up" style="color: #000;">Busur Trisula & Partners</h1>
        <h2 data-aos="fade-up" data-aos-delay="400" style="color: #000;">Creative Solution For Your Legal Problems</h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center" style=" background: rgb(250, 216, 148);
  box-shadow: 0px 5px 30px rgb(170, 139, 74); color: #fff; color: #000">
              <span>Get Started</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img text-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?= base_url('assets/img/photo/dua.jpg'); ?>" class="img-fluid" alt="Dua Image">

      </div>
    </div>
  </div>


</section><!-- End Hero -->

<!-- <br>
<br>
<br>
<br> -->

<main id="main">
  <!-- ======= About Section ======= -->
  <section style="background: #faebcd;" id="our-firm" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content card" style="background-color: rgb(238, 219, 177);">
            <h3 style="color: black; font-size: 20px;">Our Firm</h3>
            <p>
              <?= $setting->profile; ?>
            </p>
            <div class="text-center text-lg-start">
              <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center" style="background: #faebcd; box-shadow: 0px 5px 25px #faebcd; color: #000;">
                <span>Read More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>


        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>vendor/front-end/assets/img/about.jpg" class="img-fluid" alt="">
        </div>

      </div>
    </div>

  </section>
  <!-- End About Section -->

  <!-- VISI MISI -->
  <!-- <hr> -->
  <section style="background: #faebcd;" id="visi-misi" class="values">
    <div class="container" data-aos="fade-up">
      <a href="#visi-misi" style="text-decoration: none; color: inherit;">
        <header class="section-header text-center pb-5">
          <p style="color: #000;">Visi Misi</p>
        </header>
      </a>
    </div>
    <div class="container d-flex justify-content-center">
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="box text-center" data-aos="fade-up" data-aos-delay="200" style="background: rgb(238, 219, 177);">
            <h3 style="color: #000;">VISION</h3>
            <p>To practice law with professionalism, resilience, and integrity, upholding the code of ethics and maintaining client confidentiality, except as required by law.</p>
            <br>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box text-center" data-aos="fade-up" data-aos-delay="200" style="background: rgb(238, 219, 177);">
            <br>
            <h3 style="color: #000;">MISSION</h3>
            <p>Our primary mission is to provide the best legal services to help clients achieve justice and peace of mind.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- END VISI MISI -->

  <!-- CLIENT RESEPRENTATIVE -->
  <a href="#client-representative" id="client-representative" style="text-decoration: none; color: inherit;">
    <section style="background: #faebcd;" id="clients" class="clients">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2 style="color: #000;">A highly professional representative for clients.</h2>
          <p class="mb-5 pb-2" style="color: #000;">Client Representative</p>
        </header>

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <?php foreach ($client as $key => $value) :
              if ($value->publish == "Publish") : ?>
                <div class="swiper-slide">
                  <img src="<?= base_url('assets/img/client/') . $value->gambar_client; ?>" class="img-fluid" alt="">
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
  </a>
  <!-- END CLIENT -->

  <!-- ======= Services Section ======= -->
  <section style="background: #faebcd;" id="busur-specialist" class="services">

    <div class="container" data-aos="fade-up" id="service-fees" onclick="window.location.href='#service-fees'" style="cursor: pointer;">

      <header class="section-header mb-5">
        <p style="color: #000;">Busur Trisula & Partners Specialist</p>
      </header>

      <div class="row gy-4">
        <?php foreach ($layanan as $key => $value) :
          if ($value->status_layanan == "Publish") : ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-box" style="background: rgb(238, 219, 177);">
                <div class="post-img">
                  <img src="<?= base_url('assets/img/layanan/') . $value->gambar_layanan; ?>" alt="" class="img-fluid rounded " style="height: 100px; width:100px;">
                </div>
                <h3 class="pt-5"><?= $value->judul_layanan; ?></h3>
                <a href="<?= base_url('home/detaillayanan/' . $value->slug_layanan); ?>" class="read-more text-dark"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

    </div>

  </section>
  <!-- End Services Section -->
  <!-- ======= Counts Section ======= -->
  <section style="background: #faebcd;" id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="count-box" style="background: rgb(238, 219, 177);">
            <i class="bi bi-emoji-smile"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="<?= $this->M_dashboard->client()->total; ?>" data-purecounter-duration="1" class="purecounter text-dark"></span>
              <p> Clients</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box" style="background: rgb(238, 219, 177);">
            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter text-dark"></span>
              <p>Projects</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box" style="background: rgb(238, 219, 177);">
            <i class="bi bi-headset" style="color: #15be56;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter text-dark"></span>
              <p>Hours Of Support</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box" style="background: rgb(238, 219, 177);">
            <i class="bi bi-people" style="color: #bb0852;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="<?= $this->M_dashboard->staff()->total; ?>" data-purecounter-duration="1" class="purecounter text-dark"></span>
              <p>Hard Workers</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <section style="background: #faebcd;" id="our-client" class="features">
    <div class="container" data-aos="fade-up">
      <header class="section-header text-center">
        <p class="pb-3 text-dark">OUR CLIENT & SUCCESS STORIES</p>
        <br>
        <h3 class="pb-5 text-dark">We have successfully handled various high-profile cases across Indonesia, including:</h3>
      </header>

      <div class="row justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0 d-flex">
          <div class="row align-self-center gy-4">
            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
              <div class="feature-box d-flex align-items-center" style="background: rgb(238, 219, 177);">
                <i class="bi bi-check"></i>
                <h3 class="text-dark">Winning pretrial motions to annul wrongful suspect designations</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
              <div class="feature-box d-flex align-items-center" style="background: rgb(238, 219, 177);">
                <i class="bi bi-check"></i>
                <h3 class="text-dark">Securing favorable court verdicts in corporate disputes</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
              <div class="feature-box d-flex align-items-center" style="background: rgb(238, 219, 177);">
                <i class="bi bi-check"></i>
                <h3 class="text-dark">Representing businesses in environmental law, tax, and customs cases</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center" style="background: rgb(238, 219, 177);">
                <i class="bi bi-check"></i>
                <h3 class="text-dark">From individuals to large corporations, we are trusted by a diverse range of clients for our strategic legal approach and commitment to justice.</h3>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- / row -->
    </div>
  </section>



  <!-- ======= Testimonials Section ======= -->
  <section style="background: #faebcd;" id="retainer-legal" class="testimonials">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <p style="text-transform: none;" class="mb-4 text-dark">Retainer Legal</p>
        <br>
        <p class="text-dark" style="text-transform: none; font-size: 25px; font-weight: 400;">Many businesses choose our retainer services, which provide ongoing legal assistance and consultation throughout the year. Our clients benefit from consistent, dedicated legal support without the hassle of case-by-case agreements.</p>
        <br>
        <h3 class="pb-5"><b>Our Retainer Client</b></h3>
      </header>

      <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper">
          <?php foreach ($portfolio as $key => $value) :
            if ($value->status_portfolio == "Publish") : ?>
              <div class="swiper-slide">
                <div class="card testimonial-item" style="display: flex; flex-direction: column; align-items: center; background: rgb(238, 219, 177);">
                  <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="testimonial-img" alt=""
                    style="width: 150px; height: 150px; border-radius: 15px; border: 5px solid white; background: white; margin-bottom: 20px;">
                  <br>
                  <h3><?= $value->judul_portfolio; ?></h3>
                  <h4 style="color: gray;"><?= $value->nama_layanan; ?></h4>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>


  <!-- ======= Team Section ======= -->
  <section style="background: #faebcd;" id="team" class="team">

    <div class="container" data-aos="fade-up">

      <header class="section-header mb-3">
        <h2 class="text-dark">Team</h2>
        <p class="text-dark">Our hard working team</p>
      </header>
      <div class="row gy-4 d-flex justify-content-center">
        <?php foreach ($staff as $key => $value) :
          if ($value->publish == "Publish") : ?>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member" style="text-align: center; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.3s ease; background: rgb(238, 219, 177);">

                <div class="member-img" style="width: 100%; height: 250px; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                  <img src="<?= base_url('assets/img/staff/') . $value->gambar_staff; ?>" class="img-fluid" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                </div>

                <div class="member-info" style="padding: 15px;">
                  <h4 style="font-size: 18px; font-weight: bold; margin-bottom: 5px;" class="text-dark"><?= $value->nama_staff; ?></h4>
                  <span style="font-size: 14px; color: gray;"><?= $value->nama_kategori; ?></span>
                  <p style="font-size: 14px; color: #555;"><?= $value->no_telepon; ?></p>
                </div>

              </div>
            </div>

          <?php endif; ?>
        <?php endforeach; ?>
      </div>


    </div>

  </section><!-- End Team Section -->




  <!-- ======= Recent Blog Posts Section ======= -->
  <section style="background: #faebcd;" id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header mb-5">
        <h2 class="text-dark">Blog</h2>
        <p class="text-dark">Recent posts form our Blog</p>
      </header>

      <div class="row">
        <?php foreach ($berita as $key => $value) :
          // strip tags to avoid breaking any html
          $isi = strip_tags($value->isi_berita);
          if (strlen($isi) > 200) {

            // truncate isi
            $isiCut = substr($isi, 0, 200);
            $endPoint = strrpos($isiCut, ' ');

            //if the isi doesn't contain any space then it will cut without word basis.
            $isi = $endPoint ? substr($isiCut, 0, $endPoint) : substr($isiCut, 0);
          }
          if ($value->status_berita == "Publish") : ?>
            <div class="col-lg-4 mb-2">
              <div class="post-box" style="background: rgb(238, 219, 177);">
                <div class="post-img"><img src="<?= base_url('assets/img/berita/') . $value->gambar_berita; ?>" class="img-fluid" alt=""></div>
                <span class="post-date"><?= date('d-M-Y', strtotime($value->date_cretated)); ?></span>
                <h3 class="post-title" style="color: #000;"><?= $value->judul_berita; ?></h3>
                <a href="<?= base_url('home/detail/' . $value->slug_berita); ?>" class="readmore stretched-link mt-auto text-dark"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

      </div>

    </div>

  </section><!-- End Recent Blog Posts Section -->

  <!-- ======= Contact Section ======= -->
  <section style="background: #faebcd;" id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <header class="section-header mb-4">
        <h2 class="text-dark">Contact</h2>
        <p class="text-dark">Contact Us</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-box" style="color: #444444; background: rgb(238, 219, 177);">
                <i class="bi bi-geo-alt" style="color: #684c0f;"></i>
                <h3 style="color:rgb(112, 86, 1);">Address</h3>
                <p><?= $setting->alamat; ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box" style="color: #444444; background: rgb(238, 219, 177);">
                <i class="bi bi-telephone" style="color: #684c0f;"></i>
                <h3 style="color: rgb(112, 86, 1);">Call Us</h3>
                <p><?= $setting->no_telepon; ?><br><?= $setting->no_telepon; ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box" style="color: #444444; background: rgb(238, 219, 177);">
                <i class="bi bi-envelope" style="color: #684c0f;"></i>
                <h3 style="color: rgb(112, 86, 1);">Email Us</h3>
                <p><?= $setting->email; ?><br><?= $setting->email; ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box" style="color: #444444; background: rgb(238, 219, 177);">
                <i class="bi bi-clock" style="color: #684c0f;"></i>
                <h3 style="color: rgb(112, 86, 1);">Open Hours</h3>
                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form id="whatsapp-form" class="php-email-form" style="background: rgb(238, 219, 177); padding: 30px; height: 100%;">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" id="name" class="form-control" placeholder="Your Name" required style="background: #faebcd;">
              </div>

              <div class="col-md-6">
                <input type="email" id="email" class="form-control" placeholder="Your Email" required style="background: #faebcd;">
              </div>

              <div class="col-md-12">
                <input type="text" id="subject" class="form-control" placeholder="Subject" required style="background: #faebcd;">
              </div>

              <div class="col-md-12">
                <textarea id="message" class="form-control" rows="6" placeholder="Message" required style="background: #faebcd;"></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message" style="color: #000;"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="button" class="btn-form-contact" style="background: #faebcd;
                  border: 0;
                  padding: 10px 30px;
                  color: var(--base-black);
                  transition: 0.4s;
                  border-radius: 4px;" onclick="sendToWhatsApp()">Send Message</button>
              </div>

            </div>
          </form>
        </div>

        <script>
          function sendToWhatsApp() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var subject = document.getElementById("subject").value;
            var message = document.getElementById("message").value;
            var phoneNumber = "6288279761821"; // Ubah 0 menjadi 62 untuk nomor Indonesia

            if (name === "" || email === "" || subject === "" || message === "") {
              alert("Please fill in all fields.");
              return;
            }

            var whatsappURL = "https://wa.me/" + phoneNumber + "?text=" +
              "Name: " + encodeURIComponent(name) + "%0A" +
              "Email: " + encodeURIComponent(email) + "%0A" +
              "Subject: " + encodeURIComponent(subject) + "%0A" +
              "Message: " + encodeURIComponent(message);

            window.open(whatsappURL, "_blank");
          }
        </script>


      </div>

    </div>

  </section><!-- End Contact Section -->

</main><!-- End #main -->