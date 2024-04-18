<?php
$mysqli = new mysqli("127.0.0.1:3309","root","123aa","shop_quanao");
$mysqli->set_charset("utf8");
// Check connection
if ($mysqli -> connect_errno) {
  echo "Không kết nối được" . $mysqli -> connect_error;
  exit();
}
?>