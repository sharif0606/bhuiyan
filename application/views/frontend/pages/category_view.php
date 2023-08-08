<div class="container">
  <!-- breadcrumb -->
  <nav aria-label="breadcrumb pt-5">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a class="text-dark" href="<?= base_url() ?>">Marine</a>
      </li>

      <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
  </nav>
</div>
<!-- Our Categories  -->
<div id="product-catagory mt-5 pt-5" class="catagory pt-5">
  <!-- catagory title -->
  <p class="h2 text-center text-dark pt-5 mb-3 catagory-div-title">
    Our Products Sub Categories
  </p>
  <div class="div-line m-auto mb-5"></div>
  <!-- product card -->
  <div class="container card-div my-5">
    <div class="row mt-4">
      <?php
      //foreach ($categories as $hppr) {
        $sub = $this->db->query("select * from tbl_sub_category where category_id=$c_id")->result();
        //echo $this->db->last_query();die;
        if ($sub) {
          foreach ($sub as $sub_c) {
      ?>
            <div class="col-sm-6 col-md-4 pb-3">
              <a href="<?= base_url(); ?>all-products-sub/<?= $sub_c->category_name ?>/<?= $sub_c->sub_category_id ?>" title="<?= $sub_c->category_name; ?>">
                <div class="d-flex card-sm-responsib">
                  <img class="img-fluid" src="<?= base_url() . $sub_c->category_image; ?>" alt="" />
                  <p class="h6 catagory-title"><?= $sub_c->category_name; ?></p>
                </div>
              </a>
            </div>
      <?php }
        }
      //} ?>
<?php // Get the current URL
        $currentUrl = base_url(uri_string()); 
        // Split the path into segments
$segments = explode('/', trim($currentUrl, '/'));
$data = array_values($segments);
print_r($data);

if (in_array("all-products-sub",  explode('/', trim($currentUrl, '/')))) {
        ?>
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
      <?php } } ?>
    </div>
  </div>
</div>