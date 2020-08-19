<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Customer Search</title>
	<script src="http://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="style.css">
<?php
include 'cons_db.php';
session_start();
?>
<script>
		$(document).ready(function () {
			var minDate = new Date();
			$("#from").datepicker({
				showAnim: 'drop',
				numberOfMonth : 1,
				minDate: minDate,
				dateFormat: 'MM dd',
				onClose: function(selectedDate){
					$('#to').datepicker("option","minDate",selectedDate);
				}
			});

			$("#to").datepicker({
				showAnim: 'drop',
				numberOfMonth : 1,
				minDate: minDate,
				dateFormat: 'MM dd'				
			});
		});
	</script>
</head>
<body>

	<?php
	if(isset($_POST["Submit"]))
	{
		$_SESSION['customer_check_in']=mysqli_real_escape_string($hub_connection, $_POST['customer_check_in']);
  		$_SESSION['customer_check_out']=mysqli_real_escape_string($hub_connection,$_POST['customer_check_out']);
  		$_SESSION['session_live']=true;
		$_SESSION['passes']="3";
		header("location:customer_result.php");
	}
	?>
	<div class="header">
		<form action="" method="POST">
			<h1>Find your service</h1>
			<div class="form-box">
				<input type="text" id="from" class="search-field fromdate" name="customer_check_in" placeholder="Check in">
				<input type="text" id="to" class="search-field todate" name="customer_check_out" placeholder="Check out">
				<input class="search-btn" type="Submit" name="Submit" value="Search">

			</div>
		</form>
	</div>
</body>
</html>
