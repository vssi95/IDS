<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<?php  if (isset($_SESSION['username'])) : 
            include 'connection.php';
            $username=$_SESSION['username'];
            ?>

	<form class="wrapper" method="post">
		<div class="title">
			New Dosage Record
		</div>
		<div class="dosage-form">
			<div class="input-field">
				<label>Tablet Name</label>
				<input type="text" class="input" name="tab-name">
			</div>
			<div class="input-field">
				<label>Dosage</label>
				<input type="text" class="input" name="dosage">
			</div>
			<div class="input-field">
				<label>Description</label>
				<textarea class="textarea" name="desc"></textarea>
			</div>
			<div class="input-field">
				<label>Taken at</label>
                <input class="input" name="date" type="datetime-local">
            </div>

			<div class="input-field">
                <input class="common-btn" name="add" type="submit" value="Add">
            </div>
		</div>
	</form>

</body>
</html>

<?php
      if(isset($_POST['add'])){
      		$username=$_SESSION['username'];
            $tab_name = $_POST["tab-name"];
            $dosage = $_POST["dosage"];
            $desc = $_POST["desc"];
            $date = $_POST["date"];

      $add = "INSERT INTO tablets (username, tablet_name, dosage, description, date_time) VALUES ('$username','$tab_name','$dosage','$desc','$date')";
      
      if (mysqli_query($db, $add)){
                    ?>
        <script type="text/javascript">
            alert("Successfully Added!");
            window.location = "record.php";
        </script>
    <?php
        } else{
        	echo "Error: Unable to add";
        }
    }    
?>
<?php endif ?>
