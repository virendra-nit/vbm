<?php 
require('Connect.php');

move_uploaded_file($_FILES["pdf1"]["tmp_name"],"images/knlz/" .$_FILES["pdf1"]["name"]);
$pdf1nm = $_FILES["pdf1"]["name"];

$qry1="insert into knlz(location, caption) values('".$pdf1nm."','".$_POST['caption']."')";
 $result=mysql_query($qry1);
 if($result>0)
echo "<script>
        alert ('Your Record is Success');
		window.location.href='knlz.php';
		</script>
		";
 else
 echo "<script>
        alert ('Your Record is not Success');
		window.location.href='knlz.php';
		</script>";
?> 