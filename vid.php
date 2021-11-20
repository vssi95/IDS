<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Video Search</title>
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>
</head>
<body>
	<?php  if (isset($_SESSION['username'])) : 
            include 'connection.php'; ?>

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
		<div class="container">
			<div class="form">
				<form>
					<div class="form-group">
						<label>Search for Workout Videos:  </label>
						<input type="text" class="form-control" id="search" name="txt" onmouseout="document.search.txt.value = ''">
					</div>
					<i class="fas fa-search"></i>
				</form>
			</div>
			
			<div class="row">
				<div class="col-md">
					<div id="videos">
						
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript">
	let btn = document.querySelector("#btn");
	let sidebar = document.querySelector(".sidebar");

	btn.onclick = function(){
		sidebar.classList.toggle("active");
	}
</script>

<?php endif ?>
</html>