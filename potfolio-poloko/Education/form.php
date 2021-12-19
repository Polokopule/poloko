
	<?php
	// define variables and set to empty values
	$username =  "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $username = test_input($_POST["Username"]);
	  

	 

	}
	
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>
	
	