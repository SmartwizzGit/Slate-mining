<?php
  if(isset($_POST ["email"])){
	        $cons = mysqli_connect("localhost", "root", "", "slatemining");
            $username  = $_POST["username"];
	        $fullname = preg_replace('#[^a-z0-9 ]#i', '', $_POST["fullname"]);
            $email     = mysqli_real_escape_string($cons, $_POST["email"]);
		    $password = $_POST["password"];
			$e_check = mysqli_num_rows(mysqli_query($cons, "SELECT * FROM `user_details` WHERE email = '$email' LIMIT 1"));
			$u_check = mysqli_num_rows(mysqli_query($cons, "SELECT * FROM `user_details` WHERE username = '$username' LIMIT 1"));
  if ($e_check > 0){ 
          echo 'taken';
          exit();
  }else if (is_numeric($username[0])) {
        echo 'wrong_username';
        exit();
     }else if (strlen($username) < 4 || strlen($username) > 16) {
        echo 'characters';
        exit();
     }else if ($u_check > 0){
        echo 'unametaken';
       exit();
    }else{
          $cons = mysqli_connect("localhost", "root", "", "slatemining");
          $sql= "INSERT INTO `user_details` (`fullname`, `username` , `email`, `password`, `activation_code`)       
        VALUES('$fullname' , '$username', '$email', '$password', '$activation_code' )";
     $query = mysqli_query($cons, $sql);
echo "success";
exit();
   }
 }
?>