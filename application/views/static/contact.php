<section class="pt-5">
    <div class="comment-form">
        <h3 class="head-font">Contact Us</h3>
        <h4 class="head-font" style="color:#ff2d00;">
            <?= $this->session->flashdata('success') ?>
        </h4>
        <h4 class="head-font" style="color:#ff2d00;">
            <?= $this->session->flashdata('fail') ?>
        </h4>
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
            <button type="submit" class="primary-btn primary_btn"><span>Send</span></button>
        </form>
    </div>
</section>
<section class="mb-3">
    <h4 class="mt-3 mb-3 text-center">For any web related queries contact <a href="mailto:webadmin@ieeesbtkmce.in">webadmin@ieeesbtkmce.in</a></h4>
</section>
<section>
    <div class="ml-5 mr-5"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.626941914857!2d76.62975804973976!3d8.914230393200489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05fd3036020df5%3A0xc3c1007e5232dc27!2sTKM+College+of+Engineering!5e0!3m2!1sen!2sin!4v1555440606199!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</section>
