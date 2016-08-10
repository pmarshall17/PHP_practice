<?php 
	echo "Welcome to the Prestman Auto Search Form" ;
?>

<hr/>

<?php
	echo "Enter Name, e-mail address, and select file to upload here for inventory information:";
?>

	<!--variables-->

  <form action="/" method="POST" enctype="multipart/form-data">
	 <p>Your name: <input type="text" name="name" placeholder="name here" /></p>
	 <p>e-mail address: <input type="text" name="age" placeholder="e-mail here" /></p>
	 <p>Choose File:</p>
    <input type="file" name="upload" />
    <input type="submit"/>
  </form>
      
   </body>
</html>







<hr/>

<?php 

echo "Data Processed@";

date_default_timezone_set('MST');

echo date( 'H:i:s l F jS Y' );

?>