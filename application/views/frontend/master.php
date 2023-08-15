<!DOCTYPE html>
<html lang="en">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="Muktodhara Tech. Ltd.">

    <?php
    if (isset($title)) {
        if ($title == "Details") {
            foreach ($full_news_view as $v_news) {
    ?>
                <meta name="description" content="<?= $v_news->meta_des; ?>">
                <meta name="keywords" content="<?= $v_news->meta_key; ?>">
                <meta property="og:url" content="<?php echo base_url() . 'news/' . $v_news->news_id . '/' . $v_news->fk_news_id; ?>">
                <meta property="og:description" content="<?php echo $v_news->news_description; ?>">
                <meta property="og:title" content="<?php echo $v_news->news_name; ?>">
                <meta property="og:site_name" content="<?= $all_meta_data->site_title; ?>">
                <meta property="fb:app_id" content="1405933432817561" />
                <meta property="og:type" content="website" />
                <meta property="og:image" content="<?php echo base_url() . $v_news->news_image; ?>">
                <meta property="og:image:type" content="image/jpeg" />
                <meta property="og:image:width" content="400" />
                <meta property="og:image:height" content="300" />
                <meta property="og:image:alt" content="<?php echo $v_news->news_name; ?>" />
        <?php }
        }
    } else { ?>
        <meta name="description" content="<?= $all_meta_data->meta_des; ?>">
        <meta name="keywords" content="<?= $all_meta_data->meta_key; ?>">
    <?php } ?>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N6MXCF0LVX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-N6MXCF0LVX');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NK36TCH');
    </script>
    <!-- End Google Tag Manager -->


    <link rel="icon" href="<?php echo base_url(); ?>assets/frontend/images/4.jpg">
    <title><?= $all_meta_data->site_title; ?></title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <!-- main.css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/resource/css/main.css" />
    <!-- product.css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/resource/css/product-page.css" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <!-- carisol -->
    <!-- Google Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>    
</head>

<body>
    <!-- header -->
    <header class="header-bg">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col logo mt-2">
                    <a href="<?= base_url() ?>">
                        <img src="<?php echo base_url() . $all_meta_data->site_logo; ?>" alt="" />
                    </a>
                </div>
                <?php
                $about_pages = $this->master_model->about_pages();
                $services_pages = $this->master_model->services_pages();
                ?>
                <!-- nav -->
                <div class="col d-flex justify-content-end">
                    <nav class="navbar navbar-expand-lg mt-1">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>about-us/6">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-button" href="<?php echo base_url('contact-us'); ?>">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- main -->
    <main>
        <?php echo $main_content; ?>
        <!-- our Brand Logo  -->
        <div class="bg-body-secondary">
            <p class="h2 text-center text-dark pt-5 mb-3 catagory-div-title">
                Our Brand logo
            </p>
            <div class="div-line m-auto mb-5"></div>

            <div class="container text-dark py-5">
                <div class="row brnad d-flex justify-content-center">
                    <?php foreach ($all_brand as $data) { ?>
                        <div class="col-4 col-md-3 col-xl-2 mb-3">
                            <img class="img-fluid" src="<?= base_url() . $data->news_image; ?>" alt="" />
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- our Popular Product  -->
        <div>
            <p class="h2 text-center text-dark pt-5 mb-3 catagory-div-title">
                Our Popular Product
            </p>
            <div class="div-line m-auto mb-5"></div>

            <!-- main contain -->
            <div class="container text-dark py-5 pb-5">
                <div class="row">
                    <?php foreach ($home_page_product_popular as $hppr) { ?>
                        <div class="col-sm-4 col-md-3 mb-3">
                            <a class="text-decoration-none" href="<?php echo base_url(); ?>product-view/<?= $hppr->category_name ?>/<?= $hppr->news_name ?>/<?= $hppr->news_id ?>/<?= $hppr->fk_news_id ?>">
                                <div class="card shadow">
                                    <img src="<?php echo base_url() . $hppr->news_image; ?>" class="card-img-top" alt="..." height="250px" />
                                    <div class="card-body text-center">
                                        <h5 class="h6"><?= $hppr->news_name ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <footer class="py-3 mt-4 bg-body-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xl-3">
                    <img class="img-fluid mb-3" src="<?php echo base_url() . $all_meta_data->site_logo; ?>" alt="" />
                    <p class="mb-3"> <?= $all_meta_data->site_address; ?> </p>
                    <p class="mb-3">
                        <span>Phone: </span><?= $all_meta_data->site_number; ?>
                    </p>
                    <p class="mb-3">
                        <span>Email: </span><?= $all_meta_data->site_email; ?>
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3">
                    <p class="text-primary mt-3 ms-4"><strong>Useful Link</strong></p>
                    <nav class="nav footer-nav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>"><i class="bi bi-arrow-right-short"></i>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>about-us/6">
                                    <i class="bi bi-arrow-right-short"></i>About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('contact-us'); ?>"><i class="bi bi-arrow-right-short"></i>Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3">
                    <p class="text-primary mt-3 ms-4">
                        <strong>Product Catagory</strong>
                    </p>
                    <nav class="nav footer-nav">
                        <ul class="navbar-nav">
                            <?php
                            $cats = $this->db->query("select * from tbl_category where category_type=3")->result();
                            $pages_print = array();
                            foreach ($cats as $v_cat) {
                                $page = $v_cat->category_name;
                                $cid = $v_cat->category_id;
                                if (!isset($pages_print[$page])) {
                                    $pages_print[$page] = true;
                            ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url(); ?>all-products/<?= $page; ?>/<?= $cid; ?>"><i class="bi bi-arrow-right-short"></i><?= $page; ?></a>
                                    </li>
                            <?php  }
                            } ?>
                        </ul>
                    </nav>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3">
                    <p class="text-primary mt-3">
                        <strong>Our Social Networks</strong>
                    </p>
                    <div class="social-icon">
                        <a href="<?= $all_meta_data->fb_url; ?>"><i class="bi bi-facebook"></i></a>
                        <a href="<?= $all_meta_data->youtube_url; ?>"><i class="bi bi-youtube"></i></a>
                        <a href="<?= $all_meta_data->linkedin_url; ?>"><i class="bi bi-linkedin"></i></a>
                        <a href="<?= $all_meta_data->twitter_url;?>"><i class="bi bi-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright -->
    <div class="copyright">
        <p class="py-2">© Copyright BhuiyanTrad. <?= $all_meta_data->site_title; ?> All Rights Reserved</p>
    </div>
    <!-- js  -->
    <script src="<?php echo base_url(); ?>assets/resource/js/app.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>