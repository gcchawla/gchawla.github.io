<!DOCTYPE html>
<html>
<?php
include 'cons_db.php';
error_reporting(E_ALL & ~E_NOTICE);
 session_start();
 if (!($_SESSION['session_live']==true)) {
header("location:customer_search.php");
}
$availablefrom_datetime = strtotime($_SESSION['customer_check_in']);
$customer_check_in = date("Y-m-d", $availablefrom_datetime);
$availableto_datetime = strtotime($_SESSION['customer_check_out']);
$customer_check_out = date("Y-m-d", $availableto_datetime);
if(isset($_POST["Submit"]))
{
		header("location:customer_search.php");
}
?>
<head>
	<meta charset="UTF-8">
	<title>Customer Search Result</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
		<div class="header">
			<div class="container">

		<form action="" method="POST">
			<h1>Available Agents (<?php echo $_SESSION['customer_check_in']?> to <?php echo $_SESSION['customer_check_out'] ?>) </h1>	

					 <?php
   					$query= "SELECT * FROM agent_availability WHERE agent_availablefrom <='$customer_check_in' AND agent_availableto >='$customer_check_out'";
					$results_cad = mysqli_query($hub_connection,$query);
					$rowcount = mysqli_num_rows($results_cad);
					if($rowcount <= 0)
                	echo "<h1>No Agents Found</h1>";
                	else
                	{
                    while($results_cad_view = mysqli_fetch_array($results_cad)) {
                    echo "<div class='box'>";
					echo "<div class='icon'><i class='fa fa-home' aria-hidden='true'>";
					echo "</i></div>";
                    echo "<div class='content'>";
                    echo "<h3>".$results_cad_view['agent_name']."</h3><p>Check in - ".$results_cad_view['agent_availablefrom']."<br/>Check out - ".$results_cad_view['agent_availableto']."</p>";
                	echo "</div>";
                	echo "</div>";
                	}
                	}
					echo "<input class='back-btn' type='Submit' name='Submit' value='Back to Search'>";				
					?>
		</form>
	</div>

	</div>

</body>
</html>