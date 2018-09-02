<?php
session_start();
$email = $_SESSION["user_email"];
include"db.php";
$connectionStatu= connect_db();
$Status = StatusInactive($connectionStatu,$email);
if(isset($_SESSION["user_email"])){
   unset($_SESSION["user_email"]);
   header("Location:index.php?success");
}else { header("Location:index.php?tryagain");
}
?>
