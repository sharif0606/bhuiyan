<?php if(count($slide_news_1st) > 0){ ?>
        <!-- slider fix img -->
        <div class="slider-img" style="background-image: url('<?php echo base_url() . $slide_news_1st->news_image; ?>')">
            <div class="bg-overlay">
                <div class="container">
                    <p class="h1 text-white fw-bold slider-header">
                        <?= $slide_news_1st->news_name;?>
                        
                        <!-- Welcome <br />
                        Bhuiyan Trading <br />
                        Corporation -->
                    </p>
                    <p class="text-white"><?= $slide_news_1st->news_description;?></p>
                    <a id="our-prodcut" href="<?= base_url('products') ?>">Our Product</a>
                </div>
            </div>
        </div>
<?php } ?>        
        <!-- Our Categories  -->
        <div id="product-catagory" class="catagory pt-5">
            <!-- catagory title -->
            <p class="h2 text-center text-dark pt-5 mb-3 catagory-div-title">
                Our Categories
            </p>
            <div class="div-line m-auto mb-5"></div>
            <!-- product card -->
            <div class="container card-div my-5">
                <div class="row mt-4">
                    <?php 
                    $cats = $this->db->query("select * from tbl_category where category_type=3 and show_front =1")->result();
                    $pages_print = array();
                        foreach($cats as $v_cat){
                        $page = $v_cat->category_name;
                        $cid = $v_cat->category_id;
                        if (!isset($pages_print[$page])) {
                        $pages_print[$page] = true;
                        ?>
                        <div class="col-sm-6 col-md-4 pb-3">
                            <a href="<?php echo base_url();?>all-products/<?= $page;?>/<?= $cid;?>">
                                <div class="d-flex card-sm-responsib">
                                    <img class="img-fluid" src="<?= base_url().$v_cat->category_image;?>" alt="" />
                                    <p class="h6 catagory-title"><?= $v_cat->category_name; ?></p>
                                </div>
                            </a>
                        </div>
                    <?php  } } ?>
                </div>
            </div>
        </div>
        <!-- Who we are -->
        <div class="about-bg">
            <p class="h2 text-center text-white pt-5 mb-3 catagory-div-title">
                Who we are
            </p>
            <div class="div-line m-auto mb-5"></div>

            <!-- main contain -->
            <div class="container text-white py-5">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <p class="h2 mt-3">Who we are?</p>
                        <p> <?= $all_meta_data->why_choose;?> </p>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <img class="img-fluid rounded" src="<?php echo base_url();?>assets/resource/img/about-img.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Future Focused  -->
        <div class="bg-light">
            <p class="h2 text-center text-dark pt-5 mb-3 catagory-div-title">
                Future Focused
            </p>
            <div class="div-line m-auto mb-5"></div>

            <!-- main contain -->
            <div class="container text-dark py-5">
                <div class="row">
                    <div class="col-sm-6">
                        <img class="img-fluid rounded" src="<?php echo base_url();?>assets/resource/img/future-img.png" alt="" />
                    </div>
                    <div class="col-sm-6">
                        <p> <?= $all_meta_data->com_value ?> </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Something About Us  -->
        <div>
            <p class="h2 text-center text-dark pt-5 mb-3 catagory-div-title">
                Something About Us
            </p>
            <div class="div-line m-auto mb-5"></div>

            <!-- main contain -->
            <div class="container text-dark py-5">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <img class="img-fluid rounded" src="<?php echo base_url();?>assets/resource/img/mission-img.jpg" alt="" />
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <p class="h2 mt-3">Our Research</p>
                        <p> <?= $all_meta_data->home_description;?> </p>
                    </div>
                </div>
            </div>
        </div>

    