<section class="blog_area single-post-area section_gap">
    <div class="container">
      <h2 class="pb-5 text-center"><?=$story['story_title']?></h2>
            <div class="row">
              <div class="feature-img">
              <img class="img-fluid " style=" height: 300px;" src="<?php base_url();?>assets/upload/<?=$story['story_image_link']?>" alt="">
            </div>
          </div>

                <div class="posts-list">
                  <div class="row">
                    <div class=" blog_details">
                        <p class="excert">
                          <?=$story['full_content']?>
                        </p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
</section>
