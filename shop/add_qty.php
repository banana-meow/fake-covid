<?php
  include "connect.php";

  $id = $_GET['add_id'];
  $user_id = $_SESSION['sess_id'];

  $sql = "SELECT * FROM tbl_cart WHERE cart_id='$id' AND user_id='$user_id'";
  $result = $con->query($sql);
  $row = $result->fetch_assoc();

  $newqty = $row['quantity']+1;

  $sql = "UPDATE `tbl_cart` SET `quantity`='$newqty' WHERE cart_id='$id' AND user_id='$user_id'";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    location='order.php';
  </script>
  ";
?>
