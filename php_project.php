<?php 
	$image_url='http://www.prestmanservice.com/wp-content/uploads/2012/02/prestman-main-logo2.png';
?>
<br><br>
<img src="<?php echo $image_url;?>">

<hr/>

<?php
	echo "Welcome to the Prestman Auto Search Form" ;
?>
<br>
<?php	
	echo "<br>Enter Name, e-mail address, and select file to upload here for inventory information:";
?>

	<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheets.css">
</head>
<body>  

<?php
$file = file('Nextgear.csv');
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" placeholder="Name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" placeholder="E-mail" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Select file: 
  <select>
  	<option>Choose Here</option>
  	<option value="csv_records">
  		Prestman Auto CSV File
  	</option>	
  </select>
  <input type="submit" name="submit" value="Submit">  
</form>

<hr>

</body>
</html>

<?php
	if (isset($_POST['submit'])){
		echo $name . ", your requested information was last generated at: " . date('h:i:s A' . 'm/d/Y') . '<br>';
		echo "<br>Your listed e-mail: " . $email . "<br>" ;
		foreach ($file as $line) {
			echo "<table>";
				echo "<th>";
					echo "<td>";
					list($Floor_Date, $Days_on_floor, $Last_Paid, $Floorplan, $vehicle_status, $vehicle_desc, $odometer, $Vin, $Stock_number, $Title_status, $Due_date, $Source, $Principal_balance, $fee, $interest, $cltrl_prt, $other, $total ) = explode(",", $line);
					echo("</td>");
				echo "</th>";		
				echo "<h2> $Stock_number, $vehicle_desc, $Days_on_floor, $Source </h2>";
			echo "</table>";
		}
	};
?>
