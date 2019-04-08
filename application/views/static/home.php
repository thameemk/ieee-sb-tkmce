<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content text-center">
        <h2>Home</h2>
        <div class="page_link">
          <a href="<?=base_url()?>home">Home</a>

        </div>
      </div>
    </div>
  </div>
</section>

<!--================ Start Home Banner Area =================-->
<!-- <section class="home_banner_area " style="margin-bottom:100px;">
  <div class="banner_inner">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="banner_content">

            <h1 class="text-uppercase">IEEE SB TKMCE</h1>
            <h5 align="justify">Bringing the benefits of the great organization to the society and to contribute to the technical centric approach</h5>
            <div class="d-flex align-items-center">
              <a class="primary_btn" href="<?=base_url()?>join-ieee"><span>Join IEEE</span></a>

            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="home_right_img">
            <img class="" src="<?=base_url();?>/assets/front/img/tkm_home.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!--================ End Home Banner Area =================-->
<!--================ Srart Brand Area =================-->
<section class="brand_area section_gap_bottom mt-5 ">
  <div class="container">
    <div class="main_title">
      <h2>SOCIETIES</h2>
    </div>
    <div class="row justify-content-center">

      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="single-brand-item d-table">
              <div class="d-table-cell text-center">
                <img src="<?=base_url();?>/assets/front/img/societies/ias-logo.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="single-brand-item d-table">
              <div class="d-table-cell text-center">
                <img src="<?=base_url();?>/assets/front/img/societies/cs-logo.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="single-brand-item d-table">
              <div class="d-table-cell text-center">
                <img src="<?=base_url();?>/assets/front/img/societies/pes-logo.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="single-brand-item d-table">
              <div class="d-table-cell text-center">
                <img src="<?=base_url();?>/assets/front/img/societies/ras-logo.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="single-brand-item d-table">
              <div class="d-table-cell text-center">
                <img src="<?=base_url();?>/assets/front/img/societies/sight-logo.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="single-brand-item d-table">
              <div class="d-table-cell text-center">
                <img src="<?=base_url();?>/assets/front/img/societies/wie-logo.png" alt="">
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
<!--================ End Brand Area =================-->




<!--================ Start Features Area =================-->
<section class="features_area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="main_title">
          <h2>Upcoming Events</h2>

        </div>
      </div>
    </div>

    <div class="row feature_inner">
      <?php
      foreach($events as $row){
      ?>
      <div class="col-lg-4 col-md-6">
        <div class="feature_item">
          <p class="font-weight-bold"><?=$row['event_date']?></p>

          <h4><?=$row['event_title'] ?></h4>
          <p align="justify"><?=$row['short_content'] ?></p>
          <a><button type="submit"  class="btn btn-primary" onclick="window.location='<?php echo base_url("home/".$row['link'])?>'">Readmore</botton></a>

        </div>
      </div>
    <?php } ?>

    </div>
  </div>
</section>
<!--================ End Features Area =================-->
