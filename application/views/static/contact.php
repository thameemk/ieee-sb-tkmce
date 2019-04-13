
<section class="pt-5">
<div class="comment-form">
                       <h3 style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;">Contact Us</h3>
                       <h4 style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal; color:#ff2d00;"><?= $this->session->flashdata('success') ?></h4>
                                <h4 style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;color:#ff2d00;"><?= $this->session->flashdata('fail') ?></h4>

                       <form method="post" action="<?=base_url()?>Contact/postEmail">
                           <div class="form-group form-inline">
                               <div class="form-group col-lg-6 col-md-6 name">
                               <input type="text" class="form-control" name="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                               </div>
                               <div class="form-group col-lg-6 col-md-6 email">
                               <input type="email" class="form-control" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                               </div>
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" name="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                           </div>
                           <div class="form-group">
                               <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                           </div>
                           <button type="submit"class="primary-btn primary_btn"><span>Send</span></button>
                       </form>
                   </div>
</section>
