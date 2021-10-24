<?php
$con='';

include("connection.php");
if (isset($_GET['delete'])) {
	$con = mysqli_connect('localhost', 'root', '', 'ids');
	if (!$con) {
	    error_log("Failed to connect to MySQL: " . mysqli_error($con));
	}
	$rn = $_GET['delete'];

	$query = "DELETE FROM tablets where rollno='$rn'";
	$data = mysqli_query($con,$query);

	if($data){ ?>
		<script type="text/javascript">
	        alert("Record deleted.");
	        window.location = "record.php";
	    </script>
	<?php 
	} else{ ?>
		<script type="text/javascript">
	        alert("Failed to delete record.");
	        window.location = "record.php";
	    </script>

	<?php
	}

}



?>