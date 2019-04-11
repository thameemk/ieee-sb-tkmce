<!--================ Start Features Area =================-->
<section class="features_area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="main_title">
          <h2 style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;">Latest Stories</h2>

        </div>
      </div>
    </div>
    <div class="row feature_inner">
      <?php
      foreach($stories as $row){
      ?>
      <div class="col-lg-4 col-md-6">
        <div class="feature_item"style="box-shadow: 0px 15px 30px rgba(77, 87, 222, 0.3);
        background: #fff;">
          <p class="font-weight-bold"><?=$row['story_date']?></p>
          <h4 class="mt-3 " style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;"><?=$row['story_title'] ?></h4>
          <p style="text-align:justify;"><?=$row['story_content'] ?></p>
          <br>
          <!-- <a href="<?php echo base_url("stories/".$row['link'])?>"> -->
          <button type="submit"  class="btn btn-primary" onclick="window.location='<?php echo base_url("stories/".$row['link'])?>'">Readmore</botton></a>
        </div>
      </div>
<?php } ?>

    </div>
  </div>
</section>
<!--================ End Features Area =================-->
