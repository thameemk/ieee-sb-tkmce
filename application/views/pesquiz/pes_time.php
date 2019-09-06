
<a href="<?=base_url("Quiz_admin/logout")?>">logout</a>
<br>
<?php foreach ($user as $row ) { ?>
  <br>
  Your Registred Email : <?=$row['email']?>
  <br><br>
  Your Registred phone : <?=$row['phone']?>
  <br><br>
  <?php
  if($row['payment_status']=='0'){
    $paymentStatus = 'Not Paid';
  }
  else {
    $paymentStatus = 'Paid';
  }
  ?>
  Payment Status : <?=$paymentStatus?>
  <br><br>
<?php } ?>
Current Time :  <?=$time?>
<br><br>
Start Time :  <?=$startTime?>
