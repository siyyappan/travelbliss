<!-- <link rel="stylesheet" type="text/css" href="js/jquery-toast-plugin/src/jquery.toast.css">
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/jquery-toast-plugin/src/jquery.toast.js"></script>
<script type="text/javascript" src="js/toast-data.js"></script> -->

<?php

include("config.php");

if (isset($_POST['loginbtn'])) {

	$config = new Config();

	$conn = $config->connection;

	$email = $_POST['userEmail'];
	$p1 = $_POST['userPassword'];
	$sql = "SELECT * FROM user WHERE Email='" . $email . "' AND Password='" . $p1 . "'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) == 1) {
		session_start();
		echo "<script type='text/javascript'>alertMsg('Login Successful!', '#28a745');</script>";	
		$_SESSION['user_email'] = $_POST['userEmail'];
		$_SESSION['user_password'] = $_POST['userPassword'];
		$_SESSION['status'] = "loggedin";
		header("location:home.php?status=loggedin");
	} else {

		// echo "<script type='text/javascript'>alert('Invalid Login Credentials'); window.location='userindex.php'</script>";

		// echo "<script type='text/javascript'>alertMsg('Invalid Login Credentials', '#bd2130');window.location='index.php'</script>";
		echo "<script type='text/javascript'>window.location='index.php'</script>";

	}
}
?>