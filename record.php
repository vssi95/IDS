<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	 <?php  if (isset($_SESSION['username'])) : 
            include 'connection.php';
            $con = mysqli_connect('localhost', 'root', '', 'ids');
						if (!$con) {
						    error_log("Failed to connect to MySQL: " . mysqli_error($con));
						}
            $username=$_SESSION['username'];
            $query=mysqli_query($db,"SELECT * FROM users where username='$username'")or die(mysqli_error());
            $row=mysqli_fetch_array($query);
            $result=mysqli_query($db, "SELECT * from tablets where username='$username'");
            ?>


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
		<div class="text">Tablet Records</div>

		<div class="btn">
			<a href="desc.php" class="add-btn">Add Record</a>
		</div>
		

		<div class="table-wrapper">
            
		    <table class="data-table">
					<thead>
	        	<tr>
	        		<th>Tablet Name</th>
		            <th>Dosage</th>
		            <th>Description</th>
		            <th>Taken at</th>
		            <th>Operations</th>
						</tr>
					</thead>

					<tbody>
			     	 	<?php
			             	while($row= $result -> fetch_assoc())
			             {
			                 ?> 
	          <tr>
	              <td><?php echo $row['tablet_name']; ?></td>
	              <td><?php echo $row['dosage']; ?></td>
	              <td><?php echo $row['description']; ?></td>
	              <td><?php echo $row['date_time']; ?></td>
	              <td>
	              	<div class="btn">
	              		<a href="delete.php?delete=<?php echo $row['rollno'];?>" class="delete-btn">Delete</a>
	              	</div>
	              	
		            </td>
	          </tr>
			        	<?php
			             	}
			            ?>
	        </tbody>
        </table>
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

