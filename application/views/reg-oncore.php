<br><br><br>
<section id="JOIN">
    <div class="container">
        <div class="section-top-border">
            <h3 style="font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;" class="mb-30 text-center">Register Here</h3>
            <div class="col-lg-12 no-padding appoinment-right">
                <?php if($this->session->flashdata('msg')): ?>
                <h3 style="color:#00008B; font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;">
                    <?php echo $this->session->flashdata('msg'); ?>
                </h3>
                <?php endif; ?>
                <form class="appoinment-form" name="submit-to-google-sheet" action="process" method="post">
                    <div class="row">
                        <div class="col-lg-6 d-flex flex-column mb-3">
                            <input name="name" placeholder="Full Name" onfocus="this.placeholder = 'Full Name'" onblur="this.placeholder = ' Full Name'" class="form-control mt-20" required="" type="text">
                        </div>
                        <div class="col-lg-6 d-flex flex-column mb-3">                           
                            <input name="class" placeholder=" Batch" onfocus="this.placeholder = 'Batch'" onblur="this.placeholder = ' Batch'" class="form-control mt-20" required="" type="text">
                        </div>                        
                        <div class="col-lg-6 d-flex flex-column mb-3">
                            <input name="phone" placeholder=" Phone" onfocus="this.placeholder = 'Phone'" onblur="this.placeholder = ' Phone'" class="form-control mt-20" type="text">
                        </div>
                        <div class="col-lg-6 d-flex flex-column mb-3">
                            <input name="email" placeholder=" Emai" onfocus="this.placeholder = 'Category'" onblur="this.placeholder = ' Category'" class="form-control mt-20" type="text">
                        </div>
                        <!-- <div class="col-lg-6 d-flex flex-column mb-3">

                                    <input name="attendice" placeholder=" Attendice" onfocus="this.placeholder = 'Attendice'" onblur="this.placeholder = ' Attendice'" class="form-control mt-20"  type="text">
                                </div> -->
                        <!-- <div class="col-lg-6 d-flex flex-column mb-3">
                                                                    <h5>Upload Image:</h5>
                                                                        <input name="image" placeholder=" Upload Image" onfocus="this.placeholder = 'Upload Image'" onblur="this.placeholder = ' Upload Image'" class="mt-20" style="height:40px;" required="" type="file">
                                                                </div> -->
                        <div class="col-lg-12 flex-column mb-3">
                            <textarea rows="2" class="form-control mt-20" name="smessage" placeholder="Short Content" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Short Content'"></textarea>
                        </div>
                        <div class="col-lg-12 flex-column mb-3">
                            <textarea rows="5" class="form-control mt-20" name="lmessage" placeholder="Full Content" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Content'"></textarea>
                        </div>
                        <br>&nbsp;
                        <div class="col-lg-6 d-flex justify-content-end send-btn">
                            <button type="submit" class="ui inverted green button  " id="reg">Submit</button>
                        </div>
                    </div>
                </form>
                <br>
            </div>
        </div>
    </div>
</section>