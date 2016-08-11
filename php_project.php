<?php 
	echo "Welcome to the Prestman Auto Search Form" ;
?>

<hr/>

<?php
	echo "Enter Name, e-mail address, and select file to upload here for inventory information:";
?>

	<!--variables-->

  <form action="" method="POST" enctype="multipart/form-data">
	 <p>Your name: <input type="text" name="name" placeholder="name here" /></p>
	 <p>e-mail address: <input type="text" name="age" placeholder="e-mail here" /></p>
	 <p>Choose File:</p>
    <input type="file" name="upload" />
    <input type="submit"/>
  </form>

<hr/>

<?php 

echo "Data Processed@";

date_default_timezone_set('MST');

echo date( 'H:i:s l F jS Y' );
?>

<hr/>

<?php

$file = file('Nextgear.csv');

foreach ($file as $line) {
	// $csv[]=explode(',',$k);
	echo "$line<br>";
		list($stock, $description, $Floor_Date, $source) = explode(",", $line);
		echo "<h1>$stock, $description, $Floor_Date, $source </h1>";
	}

print_r($file);

?>