<!-- main -->
<main>
  <div class="container">
    <!-- breadcrumb -->
    <nav aria-label="breadcrumb pt-5">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a class="text-dark" href="<?= base_url() ?>">Marine</a>
        </li>
        <li class="breadcrumb-item">
          <a class="text-dark" href="#">Navigation</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
      </ol>
    </nav>
  </div>

  <!-- our Popular Product  -->
  <div>
    <p class="h4 text-center text-dark mb-3 catagory-div-title">
      Our Marine Product List
    </p>
    <div class="div-line m-auto mb-5"></div>

    <!-- main contain -->
    <div class="container text-dark py-5 pb-5">
      <div class="row">
        <?php foreach ($all_blog_data as $abd) { ?>
          <div class="col-sm-4 col-md-3 mb-3">
            <a class="text-decoration-none" href="<?= base_url() . "product-view/" . $abd->category_name . "/" . $abd->news_name . "/" . $abd->news_id . "/" . $abd->fk_news_id; ?>">
              <div class="card shadow">
                <img src="<?= base_url() . $abd->news_image; ?>" class="card-img-top" alt="..." width="100%" style="height:203px !important" />
                <div class="card-body text-center">
                  <h5 class="h6"><?= $abd->news_name; ?></h5>
                </div>
              </div>
            </a>
          </div>
        <?php } ?>
        <hr>
        <div class="row">
          <div class="col-sm-6"><?php if (isset($links)) { ?><?= $result_count ?><?php } ?></div>
          <div class="col-sm-6 text-right">
            <?php if (isset($links)) { ?>
              <?php echo $links ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>