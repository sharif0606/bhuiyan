
   
      <div class="container">
        <!-- breadcrumb -->
        <nav aria-label="breadcrumb pt-5">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="text-dark" href="#">Marine</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-dark" href="#">Navigation</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
          </ol>
        </nav>
      </div>
      <?php foreach($full_news_view as $v_news){ ?>
      <!-- Our Categories  -->
      <div id="product-catagory mt-5 pt-5" class="catagory pt-5">
        <!-- catagory title -->
        <p class="h2 text-center text-dark pt-5 mb-3 catagory-div-title">
        <?= $v_news->news_name;?>
        </p>
        <div class="div-line m-auto mb-5"></div>
        
        <!-- product card -->
        <div class="container card-div my-5 product-img">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="product-main-img border rounded shadow">
                <img
                  class="img-fluid"
                  id="main-img"
                  src="<?= base_url().$v_news->news_image;?>"
                  alt=""
                />
              </div>
              <div class="product-galarry-img my-3 p-3 border rounded shadow">
                <img
                  class="img-fluid mx-2 sm-img"
                  src="<?= base_url().$v_news->news_image;?>"
                  alt=""
                />
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="product-details">
                <p class="product-title">
                  <span>Price:</span><?= $v_news->price;?> <span>/unit</span>
                </p>
                <p class="mt-3">
                <?= $v_news->meta_key;?>
                </p>
                <div class="accordion mt-3" id="accordionExample">
                  <div class="accordion-item shadow">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseOne"
                        aria-expanded="false"
                        aria-controls="collapseOne"
                      >
                        Details
                      </button>
                    </h2>
                    <div
                      id="collapseOne"
                      class="accordion-collapse collapse show"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong>
                        <?= $v_news->news_description;?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-5">
                  <a id="our-prodcut" href="#product-catagory">Submit Your Information for Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <!-- Contact Form  -->
      <div id="product-catagory" class="catagory pt-5 mt-5 product-quary">
        <!--  title -->
        <p class="h2 text-center text-dark pt-5 mb-3 catagory-div-title">
          Submit Your Order Details
        </p>
        <div class="div-line m-auto mb-5"></div>

        <!-- product card -->
        <div class="container card-div my-5">
          <div>
            <div>
              <div
                class="address shadow border-start border-3 border-primary p-3 rounded"
              >
                <div>
                  <p class="fw-bold border-bottom border-3 border-primary pb-2">
                    Submit Your Quaries :
                  </p>
                  <form action="">
                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-xl-6">
                        <div class="mb-3">
                          <label
                            for="exampleFormControlInput1"
                            class="form-label"
                            >Full Name</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="exampleFormControlInput1"
                            placeholder="ex: Mr. John"
                          />
                        </div>
                        <div class="mb-3">
                          <label
                            for="exampleFormControlInput1"
                            class="form-label"
                            >Email</label
                          >
                          <input
                            type="email"
                            class="form-control"
                            id="exampleFormControlInput1"
                            placeholder="name@example.com"
                          />
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-xl-6">
                        <div class="mb-3">
                          <label
                            for="exampleFormControlInput1"
                            class="form-label"
                            >Your Company Name</label
                          >
                          <input
                            type="email"
                            class="form-control"
                            id="exampleFormControlInput1"
                            placeholder="ABC Inc."
                          />
                        </div>
                        <div class="mb-3">
                          <label
                            for="exampleFormControlTextarea1"
                            class="form-label"
                            >Massege</label
                          >
                          <textarea
                            class="form-control"
                            id="exampleFormControlTextarea1"
                            rows="3"
                          ></textarea>
                        </div>
                        <div class="col-auto d-flex justify-content-end">
                          <button type="submit" class="btn btn-primary mb-3">
                            Submit
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      