<section style="padding-top:100px;">
<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                      <?php if($this->session->flashdata('msg')): ?>
        <div class="alert alert-success" role="alert">
            <center><?php echo $this->session->flashdata('msg'); ?></center>
        </div>
        <?php endif; ?>
        <?php if($this->session->flashdata('fail')): ?>
        <div class="alert alert-danger" role="alert">
            <center><?php echo $this->session->flashdata('fail'); ?></center>
        </div>
        <?php endif; ?>
                    <h3 class="mb-30 title_color">Register For OnCore</h3>
                    <form action="<?=base_url()?>Pages/regOncoreForm" method="post">
                        <div class="mt-10">
                            <input type="text" name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                            <div class="form-select" id="default-select2">
                                <select name="batch">
                                    <option >Batch</option>
                                    <option value="t3a">T3A</option>
                                    <option value="t3b">T3B</option>
                                    <option value="m3a">M3A</option>
                                    <option value="m3b">M3B</option>
                                    <option value="c3a">C3A</option>
                                    <option value="c3b">C3B</option>
                                    <option value="e3a">E3A</option>
                                    <option value="e3b">E3B</option>
                                    <option value="r3">R3</option>
                                    <option value="p3">P3</option>
                                    <option value="h3">H3</option>                                    
                                </select>
                            </div>
                        </div>
                        <div class="mt-10">
                            <button class="genric-btn success circle">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>