<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BMI Calculator</title>
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
				<div class="logo_name">health</div>
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
					<span class="link-name">Dosage Tracker</span>
				</a>
				<span class="tooltip">Dosage Tracker</span>
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
		<div class="bmi-container">
			<div class="bmi-row">
				<input type="range" min="20" max="200" value="20" id="weight" name="" oninput="calculate()">
				<span id="weight-val">20 kg</span>
			</div>
			<div class="bmi-row">
				<input type="range" min="100" max="250" value="100" id="height" name="" oninput="calculate()">
				<span id="height-val">100 cm</span>
			</div>

			<p id="result">20.0</p>

			<p id="category">Normal Weight</p>
			
		</div>
	</div>

	<script type="text/javascript" src="bmi.js"></script>
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