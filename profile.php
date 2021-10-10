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

	<title>Parent Profile - Student Information System</title>

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
.dashboard {
    padding-left: 155px;
    padding-right: 25px;
    padding-bottom: 25px;
    width: 1360px;
}

strong.title1 {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
    margin: 0 6px;
    padding: 15px 40px;
    border-radius: 10px;
}

.options {
    margin: 40px 0;
    text-align: left;
    margin-left: 135px;
}

.box-left {
    background: #f8f8f8;
    border: 1px solid #e7e7e7;
    border-left: none;
    font-size: 14px;
    padding: 20px;
    width: 75%;
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
	text-decoration: none;
}
</style>
<body>

  <?php include 'header.php'; ?>

  <section>

    <div class="container">
      <strong class="title">My Profile</strong>
    </div>
    
    
    <div class="profile-box box-left">

      <?php

        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }


        $query = "SELECT * FROM parent WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";

        ;

        if($result = mysqli_query($con, $query)) {

          $row = mysqli_fetch_assoc($result);
		  
		  echo "<div class='info'><strong>Parent Name:</strong> <span>".$row['lastname'].", ".$row['firstname']."</span></div>";
		  echo "<br/>";
		  echo "<div class='info'><strong>Student Information</strong></div>";
          echo "<div class='info'><strong>Student No:</strong> <span>".$row['studentno']."</span></div>";
          echo "<div class='info'><strong>Course:</strong> <span>".$row['course']."</span></div>";
 
          $row = mysqli_fetch_row($result);

        } else {

          die("Error with the query in the database");

        }

      ?>
      
      <div class="options">
        <a class="btn btn-primary" href="editprofile.php">Edit Profile</a>
        <a class="btn btn-success" href="changepassword.php">Change Password</a>
      </div>

      
    </div>
	
	<div class="dashboard">
      <strong class="title">DASHBOARD</strong>
	  
	  <div class="dashboard_list">			
			<div class="option_btns">
				<a class="btn2 btn-primary" href="student_list.php">STUDENT LIST</a>
				<a class="btn2 btn-primary" href="curricular-activities.php">CO-CURRICULAR ACTIVITIES</a>
			</div>
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