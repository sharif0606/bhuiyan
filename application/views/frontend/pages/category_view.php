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
            
            foreach($categories as $hppr){
                $sub=$this->db->query("select * from tbl_sub_category where category_id=$hppr->category_id")->result();
                if($sub){ 
            ?>
            <div class="col-sm-6 col-md-4 pb-3">
              <a href="<?= base_url();?>all-products-sub/<?= $sub_c->category_name ?>/<?= $sub_c->sub_category_id ?>" title="<?= $sub_c->category_name;?>">
                <div class="d-flex card-sm-responsib">
                  <img
                    class="img-fluid"
                    src="./resource/img/pro-img.jpg"
                    alt=""
                  />
                  <p class="h6 catagory-title"><?= $sub_c->category_name;?></p>
                </div>
              </a>
            </div>
            <?php } } ?>

          </div>
        </div>
      </div>
