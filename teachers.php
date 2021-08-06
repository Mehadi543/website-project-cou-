<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
	<div style="background-image: url(./image/action1.jpg); background-repeat: none; background-size: cover; height: 100vh;">
    <div class="container-fluid"> 
    <?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"university-website");		
	?>
					
			
				<center>
					<h5>Teacher's Details</h5>
					<table class="table table-dark">
						<tr>
							<td id="td"><b>ID</b></td>
							<td id="td"><b>Name</b></td>
							<td id="td"><b>Mobile</b></td>
							<td id="td"><b>Courses</b></td>
							<td id="td"><b>View Detail</b></td>
						</tr>
					</table>
				</center>
				<?php
				$query = "select * from teachers";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<center>
					<table class="table table-dark">
						<tr>
							<td id="td"><?php echo $row['t_id']?></td>
							<td id="td"><?php echo $row['name']?></td>
							<td id="td"><?php echo $row['mobile']?></td>
							<td id="td"><?php echo $row['courses']?></td>
							<td id="td"><a href="#">View</a></td>
						</tr>
					</table>
					</center>
					<?php
				}
			?>	
    </div>
	</div>
</body>
</html>