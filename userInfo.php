<?php
	  $conn = mysqli_connect('localhost', 'root', '');      //connection to datbase

	  $db   = mysqli_select_db($conn,'test');                // mysquli_select_db fuction always needs two parameter to pass
 		                                 
 
		$name = $_POST['name'];
		$age = $_POST['age'];
 
		if(mysqli_query($conn,"INSERT INTO user VALUES('$name', '$age')"))
		  echo "Successfully Inserted";
		else
		  echo "Insertion Failed";
?>


