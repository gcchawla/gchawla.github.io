<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Agent Availability Form</title>
<script src="http://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="style.css">
<?php
include 'cons_db.php';
?>
<script>
		$(document).ready(function () {
			var minDate = new Date();
			$("#from").datepicker({
				showAnim: 'drop',
				numberOfMonth : 1,
				minDate: minDate,
				dateFormat: 'M dd',
				onClose: function(selectedDate){
					$('#to').datepicker("option","minDate",selectedDate);
				}
			});

			$("#to").datepicker({
				showAnim: 'drop',
				numberOfMonth : 1,
				minDate: minDate,
				dateFormat: 'M dd'				
			});
		});
	</script>
</head>
<body>
	<?php
if(isset($_POST["Submit"]))
{
$agent_name=mysqli_real_escape_string($hub_connection, $_POST['agent_name']);
$agent_availablefromtxt=mysqli_real_escape_string($hub_connection, $_POST['agent_availablefrom']);
$availablefrom_datetime = strtotime($agent_availablefromtxt);
$agent_availablefrom = date("Y-m-d H:i:s", $availablefrom_datetime);
$agent_availabletotxt=mysqli_real_escape_string($hub_connection, $_POST['agent_availableto']);
$availableto_datetime = strtotime($agent_availabletotxt);
$agent_availableto = date("Y-m-d H:i:s", $availableto_datetime);

$form_insert = "INSERT INTO agent_availability (agent_name,agent_availablefrom,agent_availableto,agent_created) VALUES ('$agent_name','$agent_availablefrom','$agent_availableto',NOW())";
$queryrun = mysqli_query($hub_connection,$form_insert);

 header("location:agent_availability.php");
 }
 ?>
 <div class="header">
	<form method="POST" enctype="multipart/form-data" action="#">
	<div class="agent-availability-box">
		<h1>Agent Availability</h1>
		<!-- <div class="form-box"> -->
		<div class="textbox">
			<i class="fa fa-user" aria-hidden="true"></i>
			<input type="textbox" placeholder="Agent Name" value="" name="agent_name">
		</div>
		<div class="textbox">
			<i class="fa fa-calendar" aria-hidden="true"></i>
			<input type="textbox" id="from" placeholder="Available From" value="" name="agent_availablefrom">
		</div>
		<div class="textbox">
			<i class="fa fa-calendar" aria-hidden="true"></i>
			<input type="textbox" id="to" placeholder="Available To" value="" name="agent_availableto">
		</div>

		<input class="btn" type="Submit" name="Submit" value="Submit">
	<!-- </div> -->

	</div>
</form>
</div>
</body>
</html>