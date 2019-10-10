<script type="text/javascript">

function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';

}
</script>
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
                        <h3 class="mb-30 title_color"
                            style="font-family: 'Montserrat';font-weight: normal;font-style: normal;">Register For
                            PLC & SCADA Workshop</h3>
                        <form action="<?=base_url()?>Pages/regPlcScadaWorkshop" method="post">
                            <div class="mt-10">
                                <input type="text" name="name" placeholder="Name" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Name'" required class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Email'" required class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="phone" placeholder="Phone" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Phone'" required class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="college" placeholder="College" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'College'" required class="single-input">
                            </div>
                            <div class="input-group-icon mt-10">
                                <div class="form-select" id="default-select2">
                                    <select name="batch">
                                        <option>Batch</option>
                                        <option value="ece">ECE</option>
                                        <option value="eee">EEE</option>
                                        <option value="cse">CSE</option>
                                        <option value="mech">Mech</option>
                                        <option value="mech-pro">Mech Pro</option>
                                        <option value="chemical">Chemical</option>
                                        <option value="civil">Civil</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group-icon mt-10 mb-2">
                                <div class="form-select" id="default-select2">
                                    <select name="year">
                                        <option>Year</option>
                                        <option value="fourth">Fourth Year</option>
                                        <option value="third">Third Year</option>
                                        <option value="fourth">Second Year</option>
                                        <option value="fourth">First Year</option>
                                    </select>
                                </div>
                            </div>
                            <b style="color:black">Are you a IEEE member?</b>
                                    <div class="mt-10 mb-3">
                                        <span style="color:black"> Yes</span>
                                        <input type="radio" onclick="javascript:yesnoCheck();" id="yesCheck" name="ieee-member" value="yes">
                                        <span class="ml-3" style="color:black">No</span>
                                        <input type="radio" onclick="javascript:yesnoCheck();" id="noCheck" name="ieee-member" value="no">
                                    </div>
                                    <div id="ifYes" style="display:none">
                                    <b style="color:black">Are you a IEEE IAS member?</b>
                                            <div class="mt-10 mb-3">
                                                <span style="color:black"> Yes</span>
                                                <input type="radio" name="ias-member" value="yes">
                                                <span class="ml-3" style="color:black">No</span>
                                                <input type="radio" name="ias-member" value="no">

                                            </div>
                                    </div>
                                    <b style="color:black">Can you bring your own Laptop?</b>
                                            <div class="mt-10">
                                                <span style="color:black"> Yes</span>
                                                <input type="radio" name="laptop" value="yes">
                                                <span class="ml-3" style="color:black">No</span>
                                                <input type="radio" name="laptop" value="no">
                                            </div>
                                            <div class="mt-10">
                                                <button class="genric-btn success circle"
                                                    style="background:#0659fb;color:#fff;border:#fff;">Submit</button>
                                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <h4 class="mt-3 mb-3 text-center">For any web related queries contact <a
            href="mailto:webadmin@ieeesbtkmce.in">webadmin@ieeesbtkmce.in</a></h4>
</section>
