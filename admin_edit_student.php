<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"university-website");
	$query = "update students set name='$_POST[name]',department_name='$_POST[department_name]',semester=$_POST[semester],mobile='$_POST[mobile]',email='$_POST[email]',password='$_POST[password]',remark='$_POST[remark]' where id_no = $_POST[id_no]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "teacher_dashboard.php";
</script>
