<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';
  
  if(isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Co-Curricular Activities - Student Information System</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<style>
td, th {
    padding-left: 60px;
}
</style>
<body>

  <?php include 'header.php'; ?>

  <section>

    <div class="container">
      <strong class="title">School Co-Curricular Activities</strong>
    </div>
    
    
    <div class="profile-box box-left">
	
		<?php
			$result = mysqli_query($con,"SELECT * FROM co_curricular_activities");
			if (mysqli_num_rows($result) > 0) {
		?>
			<table>
				<tr>
					<td><b>No.</b></td>
					<td><b>Activity Name</b></td>
					<td><b>Activity Date</b></td>
				</tr>
		<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
		?>
				<tr>
					<td><?php echo $row["ccactivities_id"]; ?></td>
					<td><?php echo $row["activity_name"]; ?></td>
					<td><?php echo $row["activity_date"]; ?></td>
				</tr>
		<?php
			$i++;
		}
		?>
			</table>
		<?php
		}
		else{
			echo "No result found";
		}
		?>
       <div class="options">
        <a class="btn btn-primary" href="profile.php">Back to Dashboard</a>
      </div>

      
    </div>

  </section>


	<script src="assets/js/jquery-3.1.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php


  } else {
    header("location:index.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>