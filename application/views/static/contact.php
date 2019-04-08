
<!--================ Start Newsletter Area =================-->
<section class="newsletter_area">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-12">
        <div class="subscription_box text-center">
          <h2 class="text-uppercase text-white">CONTACT US</h2>

          <div class="subcribe-form" id="">
             <?php
                     echo $this->session->flashdata('email_sent');
                     echo form_open('/Email_controller/send_mail');
            ?>
            <div class="subscription relative">
              <input name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email"><br><br>
              <input name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required="" type="text"><br><br>
              <input name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required="" type="text"><br><br>

              <button class="primary-btn hover d-inline">SUBMIT</button>
              <div class="info"></div>
            </div>
            <?php
            echo form_close();
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End Newsletter Area =================-->
