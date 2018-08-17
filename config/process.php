<?php
  if(isset($_POST ["user_username"])){
	        $cons = mysqli_connect("localhost", "root", "", "user");
            $username  = $_POST["user_username"];
	        $fullname = preg_replace('#[^a-z0-9 ]#i', '', $_POST["user_fullname"]);
            $email     = mysqli_real_escape_string($cons, $_POST["user_email"]);
		    $password = $_POST["user_pass"];
			$password_confirm = $_POST["confirm_pass"];
		    $options = ['cost' => 12,];
            $password_secure  = password_hash($password, PASSWORD_BCRYPT, $options);
            $activation_code = md5($_POST['email'] + microtime());
			$e_check = mysqli_num_rows(mysqli_query($cons, "SELECT * FROM `details` WHERE email = '$email' LIMIT 1"));
			$u_check = mysqli_num_rows(mysqli_query($cons, "SELECT * FROM `details` WHERE username = '$username' LIMIT 1"));
   if ($fullname == "" || $username == "" || $email == "" || $password == ""){
     echo "details_required";
	 exit();
  }else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
          echo "bad_email";
		  exit();
  }else if ($e_check > 0){ 
          echo 'taken';
          exit();
  }else if($password != $password_confirm){
            echo "password_wrong";
  }else if (is_numeric($username[0])) {
        echo 'wrong_username';
        exit();
     }else if (strlen($username) < 4 || strlen($username) > 16) {
        echo '4 to 16 characters please';
        exit();
     }else if ($u_check > 0){
        echo 'unametaken';
       exit();
    }else{
          $cons = mysqli_connect("localhost", "root", "", "user");
          $sql= "INSERT INTO `details` (`fullname`, `username` , `email`, `password`, `activation_code`)       
        VALUES('$fullname' , '$username', '$email', '$password', '$activation_code' )";
     $query = mysqli_query($cons, $sql);
echo "success";
exit();
   }
 }
?>