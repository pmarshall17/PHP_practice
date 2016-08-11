<?php 
	echo "Welcome to the Prestman Auto Search Form" ;
?>

<hr/>

<?php
	echo "Enter Name, e-mail address, and select file to upload here for inventory information:";
?>

	<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>  

<?php
$file = file('Nextgear.csv');
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
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

<?php
echo $name . 
		", your requested information was last processed at: " . 
		date_default_timezone_set('America/Denver') .
		date('H:i:s a l F jS Y');
?>

</body>
</html>

<hr/>

<?php


foreach ($file as $line) {
	// $csv[]=explode(',',$k);
	// echo "$line<br>";
	// 	list($Floor_Date, $sales, $sales1) = explode(",", $line);
	// 	echo "<h1>$Floor_Date, $sales, $sales1</h1>";
	$fileHandle = fopen("Nextgear.csv", "r");
		while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
			var_dump($row);
			echo $row[1];
		}
	}
?>