<?php
$mysqli = new mysqli("127.0.0.1:3309","root","123aa","shop_quanao");
$conn = mysqli_connect("127.0.0.1:3309","root","123aa","shop_quanao");
mysqli_set_charset($conn, 'UTF8');
// Check connection
if ($mysqli -> connect_errno) {
  echo "Không kết nối được MYSQLi" . $mysqli -> connect_error;
  exit();
}

?>
