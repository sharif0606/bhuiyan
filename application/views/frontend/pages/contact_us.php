<div class="container">
  <!-- breadcrumb -->
  <nav aria-label="breadcrumb pt-5">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a class="text-dark" href="#">Marine</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        Contact Us
      </li>
    </ol>
  </nav>
</div>
<!-- G Map -->
<div class="container">
  <div class="rounded ratio ratio-16x9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10139.496222278825!2d91.77743987089374!3d22.35749450426731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd941646d0c33%3A0x13aaa9f5ce48e7c5!2sC.D.A%20Market!5e0!3m2!1sen!2sbd!4v1689747687608!5m2!1sen!2sbd" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
<!-- Contact Form  -->
<div id="product-catagory mt-5 pt-5" class="catagory pt-5">
  <!--  title -->
  <p class="h2 text-center text-dark pt-5 mb-3 catagory-div-title">
    Contact Us.
  </p>
  <div class="div-line m-auto mb-5"></div>

  <!-- product card -->
  <div class="container card-div my-5">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-xl-6 mb-3">
        <div class="address shadow border-start border-3 border-primary p-3 rounded">
          <div class="bg-info-subtle p-2 mb-3 rounded">
            <p class="fw-bold border-bottom border-3 border-primary pb-2">
              Address :
            </p>
            <p> <?= $all_meta_data->site_address; ?> </p>
          </div>
          <div class="bg-info-subtle p-2 mb-3 rounded">
            <p class="fw-bold border-bottom border-3 border-primary pb-2">
              Email :
            </p>
            <p><?= $all_meta_data->site_number; ?></p>
          </div>
          <div class="bg-info-subtle p-2 mb-3 rounded">
            <p class="fw-bold border-bottom border-3 border-primary pb-2">
              Mobile :
            </p>
            <p><?= $all_meta_data->site_email; ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-xl-6 mb-3">
        <?php
        $message = $this->session->userdata('message');
        if ($message) {
          echo "<h5 class='no_padding'>" . $message . "</h5><br>";
          $this->session->unset_userdata('message');
        }
        ?>
        <div class="address shadow border-start border-3 border-primary p-3 rounded">
          <div>
            <p class="fw-bold border-bottom border-3 border-primary pb-2">
              Submit Your Quaries :
            </p>
            <form action="<?php echo base_url(); ?>contact-send">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="contact_name" placeholder="ex: Mr. John" />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" name="contact_subject" id="exampleFormControlInput1" placeholder="name@example.com" />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Your Company Name</label>
                <input type="email" class="form-control" name="company_name"id="exampleFormControlInput1" placeholder="ABC Inc." />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Massege</label>
                <textarea class="form-control" name="contact_message" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
