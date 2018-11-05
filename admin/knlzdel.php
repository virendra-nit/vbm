<?php 
 require('Connect.php');
 $gid=$_GET['id'];
 $qry1="delete from knlz where id=$gid";
 $result=mysql_query($qry1);
 if($result>0)
 echo "<script>
        alert ('Your Record is deleted');
		window.location.href='knlz.php';
		</script>
		";
 ?> 