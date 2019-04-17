
<section>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" style="background-image: url('<?=base_url();?>/assets/front/img/banner/1.png')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4 head-font text-white">Annual General Body Meeting 2019</h2>
          <p class="lead"><a href="<?php echo base_url();?>stories/annual-general-body-meeting">Readmore</a></p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('<?=base_url();?>/assets/front/img/banner/2.png')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4 head-font ">Evoke'19</h2>
          <p class="lead"><a href="<?php echo base_url();?>stories/evoke19-the-green-summit">Readmore</a></p>
          
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('<?=base_url();?>/assets/front/img/banner/4.png')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4 head-font">Distinguished Lecture Program Series</h2>
          <p class="lead"><a href="<?php echo base_url();?>stories/distinguished-lecture-program-series">Readmore</a></p>
         
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</section>


<section class="features_area pt-2 ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="main_title" style="margin-top:50px;margin-bottom:25px;">
          <h2 style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;">Updates</h2>
          <h4 style="color:red;"> </h4>
        </div>
      </div>
    </div>
    <div class="row feature_inner">
      <?php
      $i=0;
      foreach($events as $row){
        if($i==3) break;
        $i++;
      ?>
      <div class="col-lg-4 col-md-6">
        <div class="feature_item"style="box-shadow: 0px 15px 30px rgba(77, 87, 222, 0.3);
        background: #fff;">
          <p class="font-weight-bold"><?=$row['event_date']?></p>
          <h4 class="mt-3 " style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;"><?=$row['event_title'] ?></h4>
          <p style="text-align:justify;"><?=$row['short_content'] ?></p>
          <br>

          <button type="submit"  class="btn btn-primary" onclick="window.location='<?php echo base_url("updates/".$row['link'])?>'">Readmore</botton></a>
        </div>
      </div>
<?php } ?>

    </div>
    <a href="<?=base_url()?>events" class="genric-btn primary circle arrow">Keep Reading<span class="lnr lnr-arrow-right"></span></a>

  </div>
</section>
<section>
  <div class="testimonial_area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div >
                        <h2 class="head-font">AWARDS AND ACHIEVEMENTS</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testi_slider owl-carousel">
                  <?php foreach($awards as $row){ ?>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img height="130px" width="130px" src="<?php echo base_url();?>assets/upload/awards/<?=$row['images']?>">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4 class="head-font"><?=$row['award_title']?> </h4>
                                    <p class="text-justify"><?=$row['award_details']?> </p>

                                </div>
                            </div>
                        </div>
                    </div>
                  <?php }?>
            </div>
        </div>
    </div>
</section>

<section class="features_area ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="main_title" style="margin-top:100px;margin-bottom:50px;">
          <h2 style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;"> Stories</h2>
          <h4 style="color:red;"> </h4>
        </div>
      </div>
    </div>
    <div class="row feature_inner">
      <?php
      $i=0;
      foreach($stories as $row){
        if($i==3) break;
        $i++;
      ?>
      <div class="col-lg-4 col-md-6">
        <div class="feature_item"style="box-shadow: 0px 15px 30px rgba(77, 87, 222, 0.3);
        background: #fff;">
          <p class="font-weight-bold"><?=$row['story_date']?></p>
          <h4 class="mt-3 " style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;"><?=$row['story_title'] ?></h4>
          <p style="text-align:justify;"><?=$row['story_content'] ?></p>
          <br>

          <button type="submit"  class="btn btn-primary" onclick="window.location='<?php echo base_url("stories/".$row['link'])?>'">Readmore</botton></a>
        </div>
      </div>
<?php } ?>

    </div>
    <a href="<?=base_url()?>stories" class="genric-btn primary circle arrow">Keep Reading<span class="lnr lnr-arrow-right"></span></a>
  </div>
</section>

<section class="mb-5 pt-2">
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

<section class="sample-text-area pt-2">
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
