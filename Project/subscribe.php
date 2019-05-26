<?php

$Name = isset($_POST['Name']) ? $_POST['Name'] : '';
$Email = isset($_POST['Email']) ? $_POST['Email'] : '';

$error = array("Name" => "", "Email" => "","database" => "");

$saved = $conn->query("INSERT INTO travel_subscribe (Name, Email) VALUES ('$Name', '$Email')");
}

 if($_POST) {
     strlen($Name) == 0 || strlen($Name) > 255 || strlen($Email) == 0 || strlen($Email) > 255 || strlen($Email) > 255 || !strpos($Email, '@') {
			 $conn=new mysqli('localhost', 'root', 'root', 'travel_form');

		 if ($conn->connect_error) {
		 	  die("connection failed: " . $conn->connect_error);
		 	}

 		if(strlen($Name) == 0) {
 			$error['Name'] = 'Error: invalid data in Name';
 		}

 		if(strlen($Name) > 255) {
 			$error['Name'] = 'Error: data is too long in Name';
 		}

 		if(strlen($Email) == 0) {
 			$error['Email'] = 'Error: invalid data in Email';
 		}

 		if(strlen($Email) > 0 || !strpos($Email,'@')) {
 			$error['Email'] = 'Error: no @ in Email';
 		}

 		if(strlen($Email) > 255) {
 			$error['Email'] = 'Error: data us too long in Email';
 		}
         }

	$Name = $conn->real_escape_string($Name);
	$Email = $conn->real_escape_string($Email);
else {
	print 'Sorry, something went wrong. Please try again.';
}

?>
