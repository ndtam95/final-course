<?php session_start(); ?>
<?php
  define("URL_SITE", "http://localhost:81/php/final-course/app/"); 
?>
<?php
	unset($_SESSION["login"]);
	header("location: ".URL_SITE."index.php");
?>