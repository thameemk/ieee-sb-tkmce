<section class="h-75" style="min-height: 100vh;">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="min-height: 100vh;" src="<?=base_url();?>/assets/front/img/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="min-height: 100vh;" src="<?=base_url();?>/assets/front/img/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="min-height: 100vh;" src="<?=base_url();?>/assets/front/img/3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="min-height: 100vh;" src="<?=base_url();?>/assets/front/img/4.jpg" alt="Fourth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" style="min-height: 100vh;" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" style="min-height: 100vh;" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<section class="mb-5 mt-5 ">
  <div class="container">
    <div class="main_title">
      <h2 style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;">SOCIETIES</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="row">
          <?php
          foreach($chapters as $row){
          ?>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="single-brand-item d-table">
              <div class="d-table-cell text-center">
                <img src="<?php echo base_url();?>assets/front/img/societies/<?=$row['clink']?>" >
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="features_area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="main_title">
          <h2 style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;">Upcoming Events</h2>
        </div>
      </div>
    </div>
    <div class="row feature_inner">
      <?php
      foreach($events as $row){
      ?>
      <div class="col-lg-4 col-md-6">
        <div class="feature_item" style="box-shadow: 0px 15px 30px rgba(77, 87, 222, 0.3);
        background: #fff;">
          <p class="font-weight-bold"><?=$row['event_date']?></p>
          <h4 style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;"><?=$row['event_title'] ?></h4>
          <p align="justify"><?=$row['short_content'] ?></p>
          <a><button type="submit"  class="btn btn-primary" onclick="window.location='<?php echo base_url("home/".$row['link'])?>'">Readmore</botton></a>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
</section>
<!-- Start Sample Area -->
<section class="sample-text-area">
  <div class="container">
    <div class="main_title">
      <h2 style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;">Join ieee</h2>
    </div>
    <div>
      <h3 class="text-heading title_color" style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;">How to join?</h3>
      <p class="sample-text text-justify">
        For IEEE international, the membership fee is 27$ (USD). Each IEEE member is a part of the Student Branch.
        Membership is valid for a Calendar Year (not academic year) We start taking applications for memberships from September
        (posters will be put up and will be announced on website and ...<a href="<?=base_url()?>join-ieee">Readmore</a>
        </a>
      </p>
    </div>
  </div>
</section>
