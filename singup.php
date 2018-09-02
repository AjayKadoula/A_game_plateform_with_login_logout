<?php
session_start();
if(isset($_POST["signup"]))
{

$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];







  if( $email !=""  AND  $username !="" AND $password !=""){
	              
				        include"db.php";
	              $connectionStatu = connect_db();
			        	$member=is_member($connectionStatu,$email);
  if($member == false){
	              $status = signup_user($connectionStatu,$username,$email, $password);


	if($status==true){
	              $status1 = find_user($connectionStatu,$email,$password);

	if(is_array($status1)){
               $_SESSION["user_id"] = $status1["user_id"];
						   $_SESSION["user_name"] = $status1["username"];
						   $_SESSION["user_email"] = $status1["email"];
               $user_id = $_SESSION["id"];
               
								   header("Location:index.php?class=sucessfully");
}
}else  {  header("Location:index.php?class=error&e=Please Try again Later");
				}
}
else  {  header("Location:index.php?class=error&e=Email:$email already exist");

				}
}
else  {  header("Location:index.php?class=error&e=Error: All field are mandatory");
        }
}
else {   header("Location:index.php?class=error & e=Error: please Retry to signup");
}
?>
