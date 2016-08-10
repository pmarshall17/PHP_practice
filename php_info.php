<h5>Misc:</h5>
<?php

echo "Data Processed @";

date_default_timezone_set('MST');

echo date(' H:i:s l F jS Y');

?>

<hr/>

<h5>Operator Functionality:</h5>
<?php
//the "@"" functions as an error control (silence) operator 
//the "." functions as a concatenation operator

$string1 = "Foo";
$string2 = "Bar";
$string = $string1 . $string2;

echo $string;
?>



<hr/>

<h5>Math:</h5>
<?php
echo "</br>5 + 2 = " . (5+2);
echo "<br/> 7 * 3 = " . (7*3);
echo "<br/> 9 / 3 = " . (9 / 3) . " you idiot";
echo "<br/>A real curve ball: " . "4351 / 2.5 = " . (4352 / 2.5);
echo "<br/>or if you want to make it a full integer. It is = " . (integer) (4352 / 2.5)
?>

<hr/>

<h5>If statements:</h5>
<?php
	
	if (5 == 10){
		echo '5 = 10<br/>';
	}
	else {
		echo'5 != 10<br/>';
	}

	//simple if statement
	$numberOfAggies=25;
	$numberOfLonghorns=20;
	$numberOfRaiders=22;

	if (($numberOfLonghorns > $numberOfAggies) && ($numberOfRaiders > $numberOfAggies)) {
		echo "What in the world is going on here";
	} 
	elseif (($numberOfAggies > $numberOfRaiders) || ($numberOfAggies > $numberOfLonghorns)) {
		echo "Gig'Em!<br/>";
	}
	else
		echo "You must have gone to Baylor";

	//turinary operator practice
	$college_football = ($numberOfAggies > $numberOfLonghorns) ? "Yes!":"No!";

	echo $college_football;

	//arrays
	//common array functions:
		//sort($yourArray) : sorts in ascending alphabetical order or
		//if you add, SORT_NUMERIC or SORT_STRING
		//asort($yourArray) : sorts arrays with keys
		//ksort($yourArray) : sorts the arrays by the key
		//put an r in front of the above to sort in reverse order (rsort)(rasort)

	$foo = array('these', 'are', 'words');
	
	echo "<br/>I am picking one of these words from the array and it is " . "'$foo[1]'" ;	
?>