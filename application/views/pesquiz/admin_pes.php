<br><br><br>
<section class="mt-5 mb-5">
    <div class="container">

        <input type="text" class="form-control" id="plc" onkeyup="filterBybatch()" placeholder="Filter By Batch.." title="Type the batch">

         <?php if($this->session->flashdata('msg')): ?>
        <div class="alert alert-success" role="alert">
            <center><?php echo $this->session->flashdata('msg'); ?></center>
        </div>
        <?php endif; ?>
        <div class="table-responsive">
        <table class="table table-hover table-striped " id="registerId">
            <thead>
                <tr>
                    <th>SL NO</th>
                    <th>NAME</th>
                    <th>BATCH</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>Payment Status</th>
                    <th>Verify</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pesUser as $row) { ?>
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
                    <td><?php
                    if($row['payment_status']=='0'){
                      echo "Not Paid";
                    }
                    else if($row['payment_status']=='1'){
                      echo "Paid";
                    }
                    else {
                      echo "Error";
                    }
                      ?>
                    </td>
                    <td>
                      <form action="<?=base_url("Admin/verify")?>" method="post">
                        <input type="hidden" name="email" value="<?=$row['email']?>">
                        <button type="submit">Verify</button>
                      </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
</section>
<script>

function filterBybatch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("plc");
  filter = input.value.toUpperCase();
  table = document.getElementById("registerId");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
