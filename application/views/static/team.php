

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Meet The Team</h2>
                    <div class="page_link">
                        <a href="<?=base_url()?>">Home</a>
                        <a href="<?=base_url()?>team">Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->


    <section class="blog_area single-post-area section_gap">
        <div class="container">
          <?php
                foreach (array_reverse($execomYear) as $row) {
          ?>
          <h1 align="center" class="mb-3" >OFFICE BEARERS <?=$row['execomYear']?></h1>
            <div class="row">
              <?php
		           foreach ($execom as $col) {
		              ?>
            <?php if($row['execomYear']==$col['year']){ ?>
                <div class="col-lg-3 mb-1">
                    <div class="blog_right_sidebar">
                        <div class="single_sidebar_widget author_widget ">
                              <?php if($col['image']){?>
                            <img height="120px" width="120px" class="author_img rounded-circle" src="<?=base_url()?>assets/upload/team/<?=$col['year']?>/<?=$col['image']?>" alt="<?=$col['image']?>">
                          <?php }else{?>
                            <img class="author_img rounded-circle" src="<?=base_url()?>assets/front/dummy.jpg" alt="Dummy">
                          <?php } ?>
                            <h4><?=$col['name']?></h4>
                            <p><?=$col['position']?></p>
                            <div class="social_icon">
                              <?php if($col['website']){?>
                                <a href="<?=$col['website']?>" target="_blank"><i class="fa fa-globe"></i></a>
                              <?php }?>
                              <?php if($col['linkedin']){?>
                                <a href="<?=$col['linkedin']?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                              <?php }?>
                              <?php if($col['email']){?>
                                <a href="mailto:<?=$col['email']?>"><i class="fa fa-envelope"></i></a>
                              <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
              <?php } ?>
          <?php } ?>
            </div>
          <?php } ?>
        </div>
    </section>
