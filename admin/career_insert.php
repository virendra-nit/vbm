<?php 
require('Connect.php');



$qry1="insert into career(Post, Line1, Line2, Line3) values('".$_POST['post']."','".$_POST['line1']."','".$_POST['line2']."','".$_POST['line3']."')";
 $result=mysql_query($qry1);
 if($result>0)
echo "<script>
        alert ('Your Record is Success');
		window.location.href='career.php';
		</script>
		";
 else
 echo "<script>
        alert ('Your Record is not Success');
		window.location.href='career.php';
		</script>";
?> 