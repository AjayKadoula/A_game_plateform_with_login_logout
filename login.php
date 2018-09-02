<?php
session_start();
  if(isset($_POST["submit"])){
                     $email=$_POST["email"];
                     $password=$_POST["password"];
  if($email !="" AND $password !=""){

				              include"db.php";
	                    $connectionStatu = connect_db();
	                    $status = find_user($connectionStatu,$email,$password);
                      $statu = Status($connectionStatu,$email);
	if(is_array($status)){
                        $_SESSION["user_id"] = $status["id"];//set session id
                        $_SESSION["user_name"] = $status["username"];
                        $_SESSION["user_email"]= $status["email"];

								        header("Location:index.php?success");
}else  {  header("Location:index.php?id=error&v=Error: incorrect username/password");
       }
}else  {  header("Location:index.php?id=error&v=Error: All field are mandatory");
       }
}else  {   header("Location:index.php?id=error & v=Error: please login to your account");
       }
?>
