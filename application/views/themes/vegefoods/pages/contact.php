<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo get_theme_uri('images/bg-1.jpg'); ?>');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><?php echo anchor(base_url(), 'Home'); ?></span> <span>Hubungi Kami</span></p>
          <h1 class="mb-0 bread">Hubungi Kami</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
        <div class="w-100"></div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Alamat</span> <?php echo get_settings('store_address'); ?></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>No. HP</span> <?php echo get_settings('store_phone_number'); ?></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Email:</span> <?php echo get_settings('store_email'); ?></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Website</span> www.sehatmedika.com</p>
            </div>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 order-md-last d-flex">
          <form action="<?php echo site_url('pages/send_message'); ?>" class="bg-white p-5 contact-form" method="POST">
          <?php if ($flash) : ?>
          <div class="text-success text-center" style="margin-bottom: 25px;"><?php echo $flash; ?></div>
          <?php endif; ?>

            <div class="form-group">
              <input type="text" name="name" class="form-control" value="<?php echo set_value('name', (is_login() ? get_user_name() : '')); ?>" placeholder="Nama" required>
              <?php echo form_error('name'); ?>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" value="<?php echo set_value('email', (is_login() ? $user->email : '')); ?>" placeholder="Email" required>
              <?php echo form_error('email'); ?>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" value="<?php echo set_value('subject'); ?>" placeholder="Subjek pesan" required>
              <?php echo form_error('subject'); ?>
            </div>
            <div class="form-group">
              <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Pesan" required><?php echo set_value('message'); ?></textarea>
              <?php echo form_error('message'); ?>
            </div>
            <div class="form-group">
              <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>

        <div class="col-md-6 d-flex">
            <div style="width: 100%">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.897181005968!2d113.87607041475533!3d-2.1926216984018065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ade10e94c080902!2zMsKwMTEnMzMuNCJTIDExM8KwNTInNDEuNyJF!5e0!3m2!1sid!2sid!4v1637466539391!5m2!1sid!2sid" width="550px" height="600px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                 <!--  <a href="https://www.maps.ie/coordinates.html">find my coordinates</a> -->
                </iframe>
            </div>
        </div>
      </div>
    </div>
  </section>