<?php
	$servername = 'localhost';
    $username = 'root';
    $password = '';
    $db='tour';
    $conn = mysqli_connect($servername,$username,$password,$db);
    
    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['register']))
    {
    	$fname=$_POST['userFirstName'];
    	$lname=$_POST['userLastName'];
    	$email=$_POST['userEmail'];
    	$mob=$_POST['userContact'];
    	$p1=$_POST['userPasswd'];
    	$p2=$_POST['userPasswdConf'];
    	if($p1===$p2)
    	{
    		$check = "SELECT Email FROM user where Email='$email'";
        	$result = mysqli_query($conn, $check);
			if (mysqli_num_rows($result) > 0) 
        	{

    			// echo "<script type='text/javascript'>alert('User already exists! Please login to continue.'); window.location='userlogin.html'</script>";

				// echo "<script type='text/javascript'>$.toast({ heading: 'Top Right', text: 'User already exists! Please login to continue.', position: 'top-right', loaderBg:'#fff', bgColor :'#bd2130', hideAfter: 3500 });window.location='userlogin.html'</script>";

				echo "<script type='text/javascript'>alertMsg('User already exists! Please login to continue.', '#bd2130');window.location='register.html'</script>";

        	}
        	else
        	{
    	 		$sql = "INSERT INTO user (FirstName,LastName, Email, Password, Mobile) VALUES ('".$fname."','".$lname."','".$email."','".$p1."',".$mob.")";
    	 		if ($conn->query($sql) === TRUE) 
				{
                    // echo "<script type='text/javascript'>alert('Registration Successful!'); window.location='home.php'</script>";

					// echo "<script type='text/javascript'>$.toast({ heading: 'Top Right', text: 'Registration Successful!', position: 'top-right', loaderBg:'#fff', bgColor :'#28a745', hideAfter: 3500 });</script>";

					echo "<script type='text/javascript'>alertMsg('Registration Successful!.', '#28a745');window.location='home.php'</script>";

					$sql = "SELECT * FROM user WHERE Email='" . $email . "' AND Password='" . $p1 . "'";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) == 1) {
						session_start();
						$_SESSION['user_email'] = $_POST['userEmail'];
						$_SESSION['user_password'] = $_POST['userPassword'];
						$_SESSION['status'] = "loggedin";
						header("location:home.php?status=loggedin");
					}

				} 
				else 
				{

    				// echo "Error: " . $sql . "<br>" . $conn->error;

					echo "<script type='text/javascript'>alertMsg('Error: ' . $sql . '<br>' . $conn->error, '#bd2130');window.location='register.html'</script>";

				}
    	 	}
    	}
    	else
    	{
            // echo "<script type='text/javascript'>alert('Passwords do not match.'); window.location='register.html'</script>";

			// echo "<script type='text/javascript'>$.toast({ heading: 'Top Right', text: 'Passwords do not match.', position: 'top-right', loaderBg:'#fff', bgColor :'#bd2130', hideAfter: 3500 });window.location='register.html'</script>";

			echo "<script type='text/javascript'>alertMsg('Passwords do not match.', '#bd2130');window.location='register.html'</script>";

    	}
    }

	$conn->close();
?>
