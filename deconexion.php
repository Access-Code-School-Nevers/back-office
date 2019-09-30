<?php
session_start();
if(isset($_SESSION['login_in'])){
  session_destroy();
header('location: index.php');
} else {
  header('location: index.php');
}
exit;
?>
