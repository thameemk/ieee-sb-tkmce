<!--================ Start Features Area =================-->
<section class="features_area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="main_title">
          <h2>Latest Stories</h2>

        </div>
      </div>
    </div>
    <div class="row feature_inner">
      <?php
      foreach($stories as $row){
      ?>
      <div class="col-lg-4 col-md-6">
        <div class="feature_item">
          <p class="font-weight-bold"><?=$row['story_date']?></p>
          <h4 class="mt-3 "><?=$row['story_title'] ?></h4>
          <p style="text-align:justify;"><?=$row['story_content'] ?></p>
          <br>
          <button type="submit"  class="btn btn-primary">Readmore</botton>
        </div>
      </div>
<?php } ?>

    </div>
  </div>
</section>
<!--================ End Features Area =================-->
