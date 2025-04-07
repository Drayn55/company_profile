v_blog-detail
<style>
  .blog .sidebar .tags ul a {
    color: #684c0f;
    border: 1px solid rgb(236, 208, 132);
    background: #faebcd;
  }

  .blog .sidebar .tags ul a:hover {
    color: #000;
    border: 1px solid rgb(232, 207, 155);
    background: rgb(232, 207, 155);
  }

  .blog .sidebar .tags ul a span {
    color: rgb(254, 223, 165);
  }

  .blog .blog-comments .comment h5 a {
    color: rgb(111, 98, 66);
  }

  .blog .blog-comments .comment time {
    color: rgb(163, 122, 1);
  }

  .blog .blog-comments .reply-form {
    background: rgb(238, 219, 177);
  }

  .blog .blog-comments .reply-form input {
    background: #faebcd;
  }

  .blog .blog-comments .reply-form input:focus {
    border-color: rgb(248, 220, 160);
  }

  .blog .blog-comments .reply-form textarea {
    background: #faebcd;
  }

  .blog .blog-comments .reply-form textarea:focus {
    border-color: rgb(248, 220, 160);
  }

  .blog .blog-comments .reply-form .btn-primary {
    background-color: rgb(112, 90, 1);
  }

  .blog .blog-comments .reply-form .btn-primary:hover {
    background-color: rgb(137, 96, 1);
  }

  .blog .blog-pagination li.active,
  .blog .blog-pagination li:hover {
    background: rgb(216, 190, 132);
  }

  .responsive-img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
    object-fit: cover;
  }
</style>
<main id="main" style="background-color: #faebcd;">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs mt-5" style="background: rgb(238, 219, 177); color: #000">
    <div class="container pt-3">

      <ol>
        <li><a href="<?= base_url('home/#hero'); ?>" style="color:rgb(141, 104, 31);">Home</a></li>
        <li><a href="<?= base_url('home/blog'); ?>" style="color:rgb(141, 104, 31);">Blog</a></li>
        <li><?= $berita->judul_berita; ?></li>
      </ol>
      <h2><?= $berita->judul_berita; ?></h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Single Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">

          <div class="card entry entry-single" style="background-color: rgb(238, 219, 177);">

            <div class="entry-img">
              <img src="<?= base_url('assets/img/berita/') . $berita->gambar_berita; ?>" alt="" class="img-responsive center-block d-block mx-auto">
            </div>

            <h2 class="entry-title">
              <a href="" class="text-dark"><?= $berita->judul_berita; ?></a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i style="color: rgb(155, 114, 32);" class="bi bi-person"></i> <a><?= $berita->nama; ?></a></li>
                <li class="d-flex align-items-center"><i style="color: rgb(155, 114, 32);" class="bi bi-clock"></i> <a><?= date('d-M-Y H:i', strtotime($berita->date_cretated)); ?></a></li>
                <li class="d-flex align-items-center"><i style="color: rgb(155, 114, 32);" class="bi bi-chat-dots"></i> <a>12 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p><?= $berita->isi_berita; ?></p>
            </div>

            <div class="entry-footer">
              <i class="bi bi-folder"  style="color: #684c0f;"></i>
              <ul class="cats">
                <li><a href="#">Business</a></li>
              </ul>

              <i class="bi bi-tags"  style="color: #684c0f;"></i>
              <ul class="tags">
                <?= $berita->keywords; ?>
              </ul>
            </div>

          </div>
          <!-- End blog entry -->

          <!-- <div class="blog-author d-flex align-items-center">
            <img src="<?= base_url('assets/img/profile/' . $berita->image); ?>" class="rounded-circle float-left" alt="">
            <div>
              <h4><?= $berita->nama; ?></h4>
              <div class="social-links">
                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
              </div>
              <p>
                Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
              </p>
            </div>
          </div> -->
          <!-- End blog author bio -->



        </div>
        <!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar" style="background-color: rgb(238, 219, 177);">

            <h3 class="sidebar-title  text-dark">Search</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit" style="background: #faebcd;"><i class="bi bi-search text-dark"></i></button>
              </form>
            </div>
            <!-- End sidebar search formn-->

            <h3 class="sidebar-title  text-dark">Categories</h3>
            <div class="sidebar-item categories">
              <ul>
                <?php foreach ($kategori as $key => $values) : ?>
                  <li><a class="text-dark" href="#"><?= $values->nama_kategori; ?> <span>(25)</span></a></li>
                <?php endforeach; ?>
              </ul>
            </div><!-- End sidebar categories-->

            <h3 class="sidebar-title  text-dark">Recent Posts</h3>
            <?php foreach ($lastst_berita as $key => $value) :
              // CEK KONDISI BERITA
              if ($value->status_berita == "Publish") : ?>
                <div class="sidebar-item recent-posts">
                  <div class="post-item clearfix">
                    <img src="<?= base_url('assets/img/berita/') . $value->gambar_berita; ?>" alt="">
                    <h4><a class="text-dark" href="<?= base_url('home/detail/' . $value->slug_berita); ?>"><?= $value->judul_berita; ?></a></h4>
                    <time datetime="01-01-2020"><?= date('d-m-Y H:i', strtotime($value->date_cretated)); ?></time>
                  </div>
                </div><!-- End sidebar recent posts-->
              <?php endif; ?>
            <?php endforeach; ?>
            <!-- End sidebar recent posts-->

            <!-- End sidebar tags-->

          </div>

          <!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Single Section -->

</main><!-- End #main -->