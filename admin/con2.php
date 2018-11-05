<?php
     session_start();
     require('Connect.php');
	 $username=mysql_real_escape_string($_POST['txtadmin']);
	 $password=mysql_real_escape_string($_POST['txtpassword']);
	 $fetch=mysql_query("select admin from login where admin='$username' and pass='$password'");
	 $count=mysql_num_rows($fetch);
	 if($count!="")
	 {
	     $_SESSION['p2']=$username;
		 header("location:Dashboard.php");
	 }
	 ?> 
		<script>
			alert('username or password mismatch');
			</script>
		 <script>window.location="index.php";</script>;