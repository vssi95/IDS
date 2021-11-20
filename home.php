<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	 <?php  if (isset($_SESSION['username'])) : 
            include 'connection.php';
            $username=$_SESSION['username'];
            $query=mysqli_query($db,"SELECT * FROM users where username='$username'")or die(mysqli_error());
            $row=mysqli_fetch_array($query);?>

	<div class="sidebar">
		<div class="logo_content">
			<div class="logo">
				<i class='bx bx-pulse'></i>
				<div class="logo_name">re-<span style="color: #ffd52d;">Life</div>
			</div>
			<i class='bx bx-menu' id="btn"></i>
		</div>
		<ul class="nav-list">
			<li>
				<a href="home.php">
					<i class='bx bx-home' ></i>
					<span class="link-name">Home</span>
				</a>
				<span class="tooltip">Home</span>
			</li>
			<li>
				<a href="bmi.php">
					<i class='bx bx-calculator' ></i>
					<span class="link-name">BMI Calculator</span>
				</a>
				<span class="tooltip">BMI Calculator</span>
			</li>
			<li>
				<a href="record.php">
					<i class='bx bx-check-square' ></i>
					<span class="link-name">Supplement</span>
				</a>
				<span class="tooltip">Supplement</span>
			</li>
			<li>
				<a href="vid.php">
					<i class='bx bxl-youtube' ></i>
					<span class="link-name">Workout Videos</span>
				</a>
				<span class="tooltip">Workout Videos</span>
			</li>
		</ul>
		<div class="profile-content">
			<div class="profile">
				<div class="profile-details">
					<div class="profile-name"><?php echo $_SESSION['username']; ?></div>
				</div>

				<a href="home.php?logout='1'" style="color: white;"><i class='bx bx-log-out' id="log-out"></i></a>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="text">Home</div>

		<div class="welcome">
			Welcome <span><?php echo $_SESSION['username']; ?></span>!
			<br><br><hr class="rounded"><br>
			<h3>Welcome to <b>re-<span style="color:#ffd52d">Life</span></b>! We aim to motivate our users to live a healthy life with the following features:</h3>
		</div>

		<div class="contentbox">
			<div class="box">
				<div class="icon"><i class='bx bxs-calculator' ></i></div>
				<div class="content-text">
					<h3>BMI Calculator</h3>
					<p>Calculate your <b>body mass index (BMI)</b>, a measure of body fat based on height and weight.</p>
				</div>
			</div>
			<div class="box">
				<div class="icon"><i class='bx bx-check-square' ></i></div>
				<div class="content-text">
					<h3>Supplement Tracker</h3>
					<p>Record your supplement intakes for future references!</p>
				</div>
			</div>
			<div class="box">
				<div class="icon"><i class='bx bxl-youtube' ></i></div>
				<div class="content-text">
					<h3>Workout Videos</h3>
					<p>Search for a range of workout videos from YouTube. Just enter your keyword!</p>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		let btn = document.querySelector("#btn");
		let sidebar = document.querySelector(".sidebar");

		btn.onclick = function(){
			sidebar.classList.toggle("active");
		}
	</script>

	<?php endif ?>

</body>
</html>