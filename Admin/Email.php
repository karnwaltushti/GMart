<!DOCTYPE html>
<html>
<head>
	<!-- Browser Window Icon -->
	<link rel="icon" type="images/x-ico" href="../FaFa/fa-user-3.png" />
	<title>Show Orders</title>
	<style type="text/css">
		@import url('../../DemoPhp/Style/font-awesome-4.6.3/css/font-awesome.min.css');
		body {
			overflow-x: hidden;
		}
	</style>
</head>
<body>
	<?php
		session_start();
		//echo $_SESSION['login_admin'];
		if($_SESSION['login_admin'] != '')
		{
	?>
	<?php include_once "header.php" ?>
    <?php include_once "navigation.php" ?>
    <form method="post" style="padding-top: 20px;" action="mail1.php">
		<div class="text-center col-md-10">
			<h3>E-Mail
			  <small class="text-muted"></small>
			</h3>
			<hr/>
		</div>
		<div class="row main">
			<div style="margin-top: 6%;"></div>
			<div class="col-md-2"></div>
			<div class="col-md-9">
				<?php
					include_once('../Includes/Connection.php');
					$sql = "SELECT Email,name,User_Id,Address FROM users";
					$result = mysqli_query($con, $sql);
					$count = mysqli_num_rows($result);
					if(!$result)
					{
					  die('Could not get data: ' . mysqli_error());
					}
					if($count == 0)
						echo "<h4 class='text-warning'>No Order Placed yet.!</h4>";
					else {					
						echo "<table class='table table-striped table-bordered table-hover'><tr><th>Email<th>Name<th>User ID <th> Address<th>Select Customer</tr>";					
						while($row = mysqli_fetch_array($result)){
									$a="<a href='mailto:".$row[0]."'?subject=Thanks &amp;body=Thanks for using our website/>".$row[0]."</a>";
														echo "<tr><td>".$row[0]."<td>".$row[1]."<td>".$row[2]."<td>".$row[3]."<td>".$a."</td>";
						}
					}
				?>
			</div>
		</div>
	<?php } else { ?>
	<p style="text-align: center; margin-top: 100px;">
		<i style="font-size: 2em;" class="fa fa-exclamation-triangle"><font>Something Went Wrong.! Try Again.</font></i>
	</p>
    <?php header('Refresh:1, url=Index.php'); } ?>
    
    
    </form>
</body>
</html>



