<style>
  .blog .entry .entry-title {
    font-size: 28px;
    font-weight: bold;
    padding: 0;
    margin: 0 0 20px 0;
  }

  .blog .entry .entry-title a {
    color: #684c0f;
    transition: 0.3s;
  }

  .blog .entry .entry-title a:hover {
    color: rgb(147, 107, 19);
  }
</style>
<main id="main" style="background: #faebcd;">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs" style="background: rgb(238, 219, 177);">
    <div class="container">

      <ol>
        <li><a href="<?= base_url('home/#hero'); ?>" style="color: #000">Home</a></li>
        <li><a href="<?= base_url('home/blog'); ?>" style="color: #000">Blog</a></li>
        <li style="color: #000"><?= $detail->judul_layanan; ?></li>
      </ol>
      <h2 style="color: #000"><?= $detail->judul_layanan; ?></h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Single Section ======= -->
  <section id="blog" class="blog" style="background: #faebcd;">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">

          <div class="card entry entry-single" style="background: rgb(238, 219, 177);">

            <div class="entry-img">
              <img src="<?= base_url('assets/img/layanan/') . $detail->gambar_layanan; ?>" alt="" class="img-responsive center-block d-block mx-auto">
            </div>

            <h2 class="entry-title">
              <a href=""><?= $detail->judul_layanan; ?></a>
            </h2>
            <div class="entry-content">
              <p><?= $detail->isi_layanan; ?></p>
            </div>

          </div><!-- End blog entry -->

        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar" style="background: rgb(238, 219, 177);">

            <h3 class="sidebar-title" style="color: #000;">Search</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit"  style="background: #faebcd;"><i class="bi bi-search text-dark"></i></button>
              </form>
            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title" style="color: #000;">Daftar Layanan</h3>
            <?php foreach ($layanan as $key => $value) :
              // CEK KONDISI BERITA
              if ($value->status_layanan == "Publish") : ?>
                <div class="sidebar-item recent-posts">
                  <div class="post-item clearfix ">
                    <img src="<?= base_url('assets/img/layanan/') . $value->gambar_layanan; ?>" alt="">
                    <h4 class="" >
                      <a href="<?= base_url('home/detaillayanan/' . $value->slug_layanan); ?>" style="color: #000;"><?= $value->judul_layanan; ?></a>
                    </h4>
                  </div>
                </div><!-- End sidebar recent posts-->
              <?php endif; ?>
            <?php endforeach; ?>
            <!-- End sidebar recent posts-->



          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Single Section -->

</main><!-- End #main -->