

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
          <h2 class="text-center mb-5 head-font"><?=$story['story_title']?></h2>

            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="<?php echo base_url();?>assets/upload/<?=$story['story_image_link']?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                  <!-- <?=$story['tags']?> -->
                                  <a href="<?=base_url()?>home">IEEE SB TKMCE</a>


                                </div>
                                <ul class="blog_meta list">

                                    <li><b><?=$story['story_date']?></b><i class="lnr lnr-calendar-full"></i></li>
                                </ul>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details quotes">

                            <p class="excert text-justify ">
                              <?=$story['full_content']?>
                            </p>

                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-6">
                                    <img class="img-fluid" src="<?php echo base_url();?>assets/upload/<?=$story['story_image_link_2']?>" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="<?php echo base_url();?>assets/upload/<?=$story['story_image_link_3']?>" alt="">
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                              <?php
                              foreach($tags as $row){
                              ?>
                                <li><a href="#"><?=$row['tag'] ?></a></li>
                              <?php } ?>

                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                            <div class="media post_item">
                                <img src="<?=base_url();?>/Front/img/blog/popular-post/post1.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h3>Space The Final Frontier</h3></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="<?=base_url();?>/Front/img/blog/popular-post/post2.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h3>The Amazing Hubble</h3></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="<?=base_url();?>/Front/img/blog/popular-post/post3.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h3>Astronomy Or Astrology</h3></a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="<?=base_url();?>/Front/img/blog/popular-post/post4.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h3>Asteroids telescope</h3></a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>


                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <p>
                            Here, I focus on a range of items and features that we use in life without
                            giving them a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p class="text-bottom">You can unsubscribe at any time</p>
                            <div class="br"></div>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
