<br><br><br><br>
 <div class="comments-area">
   <div class="comment-list left-padding">
     <?php
     foreach($execom as $row){
     ?>
                            <div class=" ml-5 mr-5 row single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="<?=$row['image'] ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><span><?=$row['name'] ?></span></h5>

                                        <p class="comment">
                                            <?=$row['position'] ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                        <a href="mailto:<?=$row['contact'] ?>" class="btn-reply text-uppercase">Connect</a>
                                </div>
                            </div>
                            <br><br>
                          <?php } ?>

                        </div>
                      </div>
