<section>
  <img src="<?=base_url();?>/assets/front/img/1.jpg"  style="width:100%;height:450px;" class="img-fluid myslides" >
  <img src="<?=base_url();?>/assets/front/img/2.jpg"  style="width:100%;height:450px;" class="img-fluid myslides" >
  <img src="<?=base_url();?>/assets/front/img/3.jpg"  style="width:100%;height:450px;" class="img-fluid myslides" >
  <img src="<?=base_url();?>/assets/front/img/4.jpg"  style="width:100%;height:450px;" class="img-fluid myslides" >
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
