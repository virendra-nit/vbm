<?php
session_start();
$x=$_SESSION['p2'];
if($x=="")
{
    header("location:index");
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

<!--pie-chart--->
<script src="js/pie-chart.js" type="text/javascript"></script>
 
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>
<div id="wrapper">

<!----->
        <?php require('menu.php'); ?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add Gallery</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		
		<!---->
	
  
		
		<!----->
		<div class="grid-form">
			<div class="grid-form1">
 									<form action="gal_insert.php" method="post" enctype="multipart/form-data">
									 <div class="form-group"> 
									 <label for="exampleInputEmail1">Image</label> 
									 <input type="file" class="form-control" name="pdf1" id="exampleInputEmail1"> 
									 </div> 
									 <div class="form-group"> 
									 <label for="exampleInputEmail1">Caption</label> 
									 <input type="text" class="form-control" name="caption" id="exampleInputEmail1"> 
									 </div>
									 <button type="submit" class="btn btn-default">Submit</button> 
									</form> 
			<div class="clearfix"> </div>
		</div>
			<div class="grid-form1 table-responsive">
 		<table class="table table-bordered"  style="border:1px solid;height:auto;">
       
      <tr style="font-family:initial;">
        <th><b>Sr. No.</b></th>
        <th><b>Image</b></th>
		<th><b>Caption</b></th>
        <th><b>Delete</b></th>       
      </tr>
            <?php
      require('Connect.php');
      $x="select * from photos";
	  $result=mysql_query($x);
	  if(mysql_num_rows($result)>0)
	  {  $sr=1;
	      while($row=mysql_fetch_assoc($result))
		               {
					     $a=$row['id'];
					     $d=$row['location'];
						 $e=$row['caption'];
 ?>
<tr>
  <td style="text-align:justify;"><?php	echo $sr; ?></td> 
  <td style="text-align:justify;"><img src="images/ayur/<?php echo $d; ?>" style="height:100px;width:146px;" /></td> 
   <td style="text-align:justify;"><?php	echo $e; ?></td> 
        <td><a href="Gallerydel.php?id=<?php echo $a; ?>" style="color:#fff;"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Delete</a></td>
        
           </tr>
     <?php
	 $sr++;
	 }}
	?>
       
           
  </table>
			<div class="clearfix"> </div>
		</div>
		<!--//content-->


	 
		<!---->
		<!--//content-->


	 
		<!---->
<div class="copy">
            <p> &copy; 2018 IPTFA | Design by <a href="http://www.hypezen.com/" target="_blank">Hypezen Technologies </a> </p>
	    </div>
		</div>
		<div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>