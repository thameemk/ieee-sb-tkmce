<section>
  <img src="<?=base_url();?>/assets/front/img/1.jpg"  style="width:100%;height:450px;" class="img-fluid myslides" >
  <img src="<?=base_url();?>/assets/front/img/2.jpg"  style="width:100%;height:450px;" class="img-fluid myslides" >
  <img src="<?=base_url();?>/assets/front/img/3.jpg"  style="width:100%;height:450px;" class="img-fluid myslides" >
  <img src="<?=base_url();?>/assets/front/img/4.jpg"  style="width:100%;height:450px;" class="img-fluid myslides" >
</section>
<section class="brand_area section_gap_bottom mt-5 ">
  <div class="container">
    <div class="main_title">
      <h2>SOCIETIES</h2>
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
