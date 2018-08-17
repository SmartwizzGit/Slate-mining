<?php
  session_start();
  $password = "";
  $cons = mysqli_connect("localhost", "root", "", "slatemining");
  if(isset($_POST["email"]) && isset($_POST['password'])){
   $email = mysqli_real_escape_string($cons, $_POST["email"]);
   $password  = $_POST["password"];
   if($email == "" || $password == "" ){
       echo "wrong";
	   exit();
   }else{
      $cons = mysqli_connect("localhost", "root", "", "slatemining");
      $sql = "SELECT `username`, `password`,`fullname` FROM `user_details` WHERE email = '$email' LIMIT 1";
	  $query = mysqli_query($cons , $sql);
	  $row   = mysqli_fetch_row($query);
	  $db_username = $row[0];
      $db_password = $row[1];
		     if ($db_password != $password){
		        echo "bad_login";
		        exit();
}else{
		   $_SESSION["username"] = $db_username; 
		        echo "success";
		   exit();
		}
   }
 }
?>
