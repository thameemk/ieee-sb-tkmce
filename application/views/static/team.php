<br><br><br><br>
 <div class="comments-area">
   <div class="comment-list left-padding">
     <h3 class="text-center head-font"> IEEE SB TKMCE - STB 28391 </h3><h4 class="head-font">Executive Committee 2019-2020</h4>
     <?php foreach($team as $row){  ?>
     <?php if(($row['status'])==""){?>
       <div class=" ml-5 mr-5 row single-comment justify-content-between d-flex">
           <div class="user justify-content-between d-flex">
               <div class="desc">
                   <h5><span><?=$row['name'] ?></span></h5>
                   <p class="comment">
                       <?=$row['position'] ?>
                   </p>
                   <p class="comment">
                       <span style="font-size:1em;color:black;">Dept:&nbsp;</span><?=$row['branch'] ?>
                   </p>
               </div>
           </div>
           <div class="reply-btn">
                   <a href="mailto:<?=$row['email'] ?>" class="btn-reply text-uppercase">Connect</a>
           </div>
       </div><br><br>
      <?php }?>
      <?php }?>
      <h4 class="head-font">Link Representative</h4>
      <?php foreach($team as $row){  ?>
      <?php if(($row['status'])=='link'){?>
        <div class=" ml-5 mr-5 row single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="desc">
                    <h5><span><?=$row['name'] ?></span></h5>
                    <p class="comment">
                        <?=$row['position'] ?>
                    </p>
                    <p class="comment">
                        <span style="font-size:1em;color:black;">Dept:&nbsp;</span><?=$row['branch'] ?>
                    </p>
                </div>
            </div>
            <div class="reply-btn">
                    <a href="mailto:<?=$row['email'] ?>" class="btn-reply text-uppercase">Connect</a>
            </div>
        </div><br><br>
      <?php }?>
      <?php }?>
      <h4 class="head-font">Batch Representative</h4>
      <?php foreach($team as $row){  ?>
      <?php if(($row['status'])=='brep'){?>
        <div class=" ml-5 mr-5 row single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="desc">
                    <h5><span><?=$row['name'] ?></span></h5>
                    <p class="comment">
                        <?=$row['position'] ?>
                    </p>
                    <p class="comment">
                        <span style="font-size:1em;color:black;">Dept:&nbsp;</span><?=$row['branch'] ?>
                    </p>
                </div>
            </div>
            <div class="reply-btn">
                    <a href="mailto:<?=$row['email'] ?>" class="btn-reply text-uppercase">Connect</a>
            </div>
        </div><br><br>
      <?php }?>
      <?php }?>
      <h3 class="text-center head-font">Society Heads</h3>
      <?php foreach($team as $row){  ?>
      <?php if(($row['status'])=='soc'){?>
        <div class=" ml-5 mr-5 row single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="desc">
                    <h5><span><?=$row['name'] ?></span></h5>
                    <p class="comment">
                        <?=$row['position'] ?>
                    </p>
                    <p class="comment">
                        <span style="font-size:1em;color:black;">Dept:&nbsp;</span><?=$row['branch'] ?>
                    </p>
                </div>
            </div>
            <div class="reply-btn">
                    <a href="mailto:<?=$row['email'] ?>" class="btn-reply text-uppercase">Connect</a>
            </div>
        </div><br><br>
      <?php }?>
      <?php }?>
     </div>
  </div>
