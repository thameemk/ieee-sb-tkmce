<section class="blog_area single-post-area section_gap">
    <div class="container">
      <h2 class="pb-5 text-center"><?=$event['event_title']?></h2>
            <div class="row">
              <div class="feature-img">
              <img class="img-fluid " style=" height: 300px;" src="<?php echo base_url();?>assets/upload/<?=$event['img_lnk']?>" alt="">
            </div>
          </div>
                <div class="posts-list">
                  <div class="row">
                    <div class=" blog_details">
                        <p class="excert ml-3 mr-3 text-justify">
                          <?=$event['full_content']?>
                        </p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
</section>
