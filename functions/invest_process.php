<?php
  if(isset($_POST["plan"]) && isset($_POST['amount'])){
   $plan = $_POST["plan"];
   $amount = $_POST["amount"];
   $email = $_POST["email"];
   if($plan == "Choose your plan" || $amount == "" || $email == ""){
       echo "wrong";
	   exit();
   }else{
      $cons = mysqli_connect("localhost", "root", "", "slatemining");
	  $sql= "UPDATE `user_details` SET `plan`= '$plan' ,`total_amount`= '$amount' WHERE email = '$email' ";
     $query = mysqli_query($cons, $sql);
echo "success";
exit();
   }
 }
 ?>