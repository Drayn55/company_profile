<style>
  .blog .sidebar .tags {
    margin-bottom: -10px;
  }

  .blog .sidebar .tags ul {
    list-style: none;
    padding: 0;
  }

  .blog .sidebar .tags ul li {
    display: inline-block;
  }

  .blog .sidebar .tags ul a {
    color: #684c0f;
    font-size: 14px;
    padding: 6px 14px;
    margin: 0 6px 8px 0;
    border: 1px solid rgb(236, 208, 132);
    display: inline-block;
    transition: 0.3s;
    background: #faebcd;
  }

  .blog .sidebar .tags ul a:hover {
    color: #000;
    border: 1px solid rgb(232, 207, 155);
    background: rgb(232, 207, 155);
  }

  .blog .sidebar .tags ul a span {
    padding-left: 5px;
    color: #a5c5fe;
    font-size: 14px;
  }

  .blog .blog-pagination li.active,
  .blog .blog-pagination li:hover {
    background: rgb(216, 190, 132);
  }

  .blog .blog-pagination li.active a,
  .blog .blog-pagination li:hover a {
    color: #fff;
  }
</style>
<main id="main" style="background: #faebcd;">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs" style="background: rgb(238, 219, 177); color: #000">
    <div class="container">

      <ol>
        <li><a href="<?= base_url('home/#hero'); ?>" style="color:rgb(141, 104, 31);">Home</a></li>
        <li>Blog</li>
      </ol>
      <h2>Blog</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      <div class="row">

        <div class="col-lg-8 entries">
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
              <div class="card mb-4 entry" style="background: rgb(238, 219, 177);">
                <div class="entry-img">
                  <img src="<?= base_url('assets/img/berita/') . $value->gambar_berita; ?>" alt="" class="img-responsive center-block d-block mx-auto">
                </div>

                <h2 class="entry-title">
                  <a class="text-dark" href="<?= base_url('home/detail/' . $value->slug_berita); ?>"><?= $value->judul_berita; ?></a>
                </h2>
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center" style="color: rgb(155, 114, 32);"><i class="bi bi-person"></i> <a><?= $value->nama; ?></a></li>
                    <li class="d-flex align-items-center" style="color: rgb(155, 114, 32);"><i class="bi bi-clock"></i> <a><?= date('d-M-Y H:i', strtotime($value->date_cretated)); ?></a></li>
                    <li class="d-flex align-items-center" style="color: rgb(155, 114, 32);"><i class="bi bi-chat-dots"></i> <a>12 Comments</a></li>
                  </ul>
                </div>
                <div class="entry-content">
                  <p>
                    <?= $isi; ?>
                  </p>
                  <div class="read-more">
                    <a style="background:#faebcd; color:#000" href="<?= base_url('home/detail/' . $value->slug_berita); ?>">Read More</a>
                  </div>
                </div>
              </div>

            <?php endif; ?>
          <?php endforeach; ?>

          <div class="blog-pagination">
            <ul class="justify-content-center">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </div>

        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar" style="background: rgb(238, 219, 177);">

            <h3 class="sidebar-title text-dark">Search</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit" style="background: #faebcd;"><i class="bi bi-search text-dark"></i></button>
              </form>
            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title text-dark">Kategori</h3>
            <div class="sidebar-item categories">
              <ul>
                <?php foreach ($kategori as $key => $values) : ?>
                  <li><a class="text-dark" href="#"><?= $values->nama_kategori; ?> <span>(25)</span></a></li>
                <?php endforeach; ?>
              </ul>
            </div><!-- End sidebar categories-->
            <!-- PRINT DATA BERITA -->
            <h3 class="sidebar-title text-dark">Recent Posts</h3>
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
            <h3 class="sidebar-title">Tags</h3>
            <div class="sidebar-item tags">
              <ul>
                <li><a href="#">App</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Mac</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Office</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Studio</a></li>
                <li><a href="#">Smart</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
              </ul>
            </div><!-- End sidebar tags-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->