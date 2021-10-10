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

	<title>Attendance and Academic Performance - Student Information System</title>

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

.btn {
    display: inline-block;
    padding: 15px 25px;
    margin-left: 25px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    margin-left: 55px;
    margin-top: 35px;
}
</style>
<body>

  <?php include 'header.php'; ?>

  <section>

    <div class="container">
      <strong class="title">Attendance and Academic Performance</strong>
    </div>
    
    
    <div class="profile-box box-left">
	
		<?php
			$result = mysqli_query($con,"SELECT * FROM academic");
			if (mysqli_num_rows($result) > 0) {
		?>
			<table>
				<tr>
					<td><b>Student No.</b></td>
					<td><b>Student Name</b></td>
					<td><b>IT 101</b></td>
					<td><b>IT 102</b></td>
					<td><b>IT 103</b></td>
					<td><b>IT 104</b></td>
					<td><b>IT 105</b></td>
					<td><b>IT 106</b></td>
					
				</tr>
		<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
		?>
				<tr>
					<td><?php echo $row["studentno"]; ?></td>
					<td><?php echo $row["studentname"]; ?></td>
					<td><?php echo $row["subject1"]; ?></td>
					<td><?php echo $row["subject2"]; ?></td>
					<td><?php echo $row["subject3"]; ?></td>
					<td><?php echo $row["subject4"]; ?></td>
					<td><?php echo $row["subject5"]; ?></td>
					<td><?php echo $row["subject6"]; ?></td>
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
       <div class="options1">
        <a class="btn btn-primary" href="attendance_report.php">View Attendance Report</a>
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