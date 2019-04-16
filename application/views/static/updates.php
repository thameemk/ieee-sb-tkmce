
<section class="features_area ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="main_title" style="margin-top:100px;margin-bottom:50px;">
          <h2 style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;">Upcoming Events</h2>
          <h4 style="color:red;"> </h4>
        </div>
      </div>
    </div>
    <div class="row feature_inner">
      <?php
      foreach($updates as $row){
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
  </div>
</section>
