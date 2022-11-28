<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v8">
	<?php
		$connect = mysqli_connect('3.128.54.48','batpromax_db','batpromax_user','web_deploypro');
		if ($connect) 
		{
			echo " "; 
		}
		else
		{
			echo "kết nối thất bại";
		}
	?>
		<div class="page-content">
			<div class="form-v8-content">
				<div class="form-left">
					<img src="images/hinh-nen-canh-dong-co-va-nui-may-troi.jpg" alt="form">
				</div>
				<div class="form-right">
					<div class="tab">
						<div class="tab-inner">
							<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Sign Up</button>
						</div>
						<div class="tab-inner">
							<button class="tablinks" onclick="openCity(event, 'sign-in')">Sign In</button>
						</div>
					</div>
					<form class="form-detail" action="#" method="post">
						<div class="tabcontent" id="sign-up">
							<div class="form-row">
								<label class="form-row-inner">
									<input type="text" name="userid" id="full_name" class="input-text" required>
									<span class="label">Your ID</span>
			  						<span class="border"></span>
								</label>
							</div>
							<div class="form-row">
								<label class="form-row-inner">
									<input type="text" name="username" id="full_name" class="input-text" required>
									<span class="label">User name</span>
			  						<span class="border"></span>
								</label>
							</div>
							<div class="form-row">
								<label class="form-row-inner">
									<input type="password" name="password" id="password" class="input-text" required>
									<span class="label">Password</span>
									<span class="border"></span>
								</label>
							</div>
							<div class="form-row-last">
								<input type="submit" name="register" class="register" value="Register">	
							</div>
						</div>
						<?php 
							if(isset($_POST['register']))
							{
								$userid = $_POST['userid'];
								$username = $_POST['username'];
								$password = $_POST['password'];
								$sql = "INSERT INTO user VALUES('$userid','$username','$password')";
								$result = mysqli_query($connect,$sql);
								if($result)
								{
									?>
										<script>
											alert("Add success");
											window.location.href = "";
										</script>
									<?php
								}
					            else
					            {
									
								}
							}
						?>
					</form>
					<form class="form-detail" action="#" method="post">
						<div class="tabcontent" id="sign-in">
							<div class="form-row">
								<label class="form-row-inner">
									<input type="text" name="username" id="full_name_1" class="input-text" required>
									<span class="label">Username</span>
			  						<span class="border"></span>
								</label>
							</div>
							<div class="form-row">
								<label class="form-row-inner">
									<input type="password" name="password" id="password_1" class="input-text" required>
									<span class="label">Password</span>
									<span class="border"></span>
								</label>
							</div>
							<div class="form-row-last">
								<input type="submit" name="login" class="register" value="Sign In">
							</div>
						</div>
						<?php 
							if(isset($_POST['login']))
							{
								echo"o";
								$username = $_POST['username'];
								$password =$_POST['password'];
								//Lựa từ bảng user cột username = username nhập từ form và cột password = giá trị password nhập từ form

								$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

								// Thực thi truy vấn từ csdl dùng hàm mysqli_query

								$result = mysqli_query($connect,$sql);
								$num_rows = mysqli_num_rows($result);
								if($num_rows==0)
								{
									echo "Username or password is incorrect";
								}
								else
								{
									?>
										<script>
											alert("Login success");
											window.location.href = "../../index.php";
										</script>
									<?php

								}
							}
						?>
					</form>
				</div>
			</div>
		</div>
	<script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>