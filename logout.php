<?php
session_start();
if(!empty($_SESSION['username']))
{
$_SESSION['username']='';
session_destroy();
}
header("Location:http://localhost/websites/slate/login.php");
?>