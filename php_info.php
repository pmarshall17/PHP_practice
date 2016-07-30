<?php

echo "Data Processed @";

date_default_timezone_set('MST');

echo date(' H:i:s l F jS Y');

?>

<hr/>

<?php

//the "@"" functions as an error control (silence) operator 
//the "." functions as a concatenation operator

$string1 = "Foo";
$string2 = "Bar";
$string = $string1 . $string2;

echo $string;
?>

<hr/>

<?php

echo "</br>5 + 2 = " . (5+2);
echo "<br/> 7 * 3 = " . (7*3);
echo "<br/> 9 / 3 = " . (9 / 3) . " you idiot";
echo "<br/>A real curve ball: " . "4351 / 2.5 = " . (4352 / 2.5);
echo "<br/>or if you want to make it a full integer. It is = " . (integer) (4352 / 2.5)

?>