<br><br><br>
<section class="mt-5 mb-5">
    <div class="container">
         <?php if($this->session->flashdata('msg')): ?>
        <div class="alert alert-success" role="alert">
            <center><?php echo $this->session->flashdata('msg'); ?></center>
        </div>
        <?php endif; ?>
        <div class="table-responsive">
        <table class="table table-hover table-striped ">
            <thead>
                <tr>
                    <th>SL NO</th>
                    <th>NAME</th>
                    <th>BATCH</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($candid as $row) { ?>
                <tr>
                    <td>
                        <?=$row['id']?>
                    </td>
                    <td>
                        <?=$row['name']?>
                    </td>
                    <td>
                        <?=$row['batch']?>
                    </td>
                    <td><a href="mailto:<?=$row['email']?>">
                            <?=$row['email']?></a></td>
                    <td><a href="tel:<?=$row['phone']?>">
                            <?=$row['phone']?></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
</section>