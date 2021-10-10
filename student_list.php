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

.btn2 {
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

.box-left {
    background: #f8f8f8;
    border: 1px solid #e7e7e7;
    border-left: none;
    font-size: 14px;
    padding: 45px;
    width: 100%;
}

a.btn1.btn-primary {
    padding: 8px;
    border-radius: 5px;
    text-decoration: none;
}
</style>
<body>

  <?php include 'header.php'; ?>

  <section>

    <div class="container">
      <strong class="title">Student List</strong>
    </div>
    
    
    <div class="profile-box box-left">
	
		<?php
			$result = mysqli_query($con,"SELECT * FROM student_list");
			if (mysqli_num_rows($result) > 0) {
		?>
			<table>
				<tr>
					<td><b>Student No.</b></td>
					<td><b>Student Name</b></td>
					<td><b>Attendance Date</b></td>
					<td><b>Status</b></td>
				</tr>
		<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
		?>
				<tr>
					<td><?php echo $row["stundent_id"]; ?></td>
					<td><?php echo $row["stud_name"]; ?></td>
					<td><?php echo $row["stud_year"]; ?></td>
					<td><?php echo $row["stud_course"]; ?></td>
					<td><?php echo $row["sy"]; ?></td>
					<td> 
						<a class="btn1 btn-primary" href="academic-performance.php">View Academic Performance</a>
						<a class="btn1 btn-primary" href="attendance_report.php">View Attendance Report</a>
					</td>

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
		<a class="btn2 btn-primary" href="profile.php">Back to Dashboard</a>
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