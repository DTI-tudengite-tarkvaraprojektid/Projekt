<?php
  
  function saveContactInfo($email, $firstName, $lastName, $subject, $message){
	  $conn = new mysqli($GLOBALS["serverhost"],$GLOBALS["serverusername"], $GLOBALS["serverpassword"], $GLOBALS["database"]);
	  $stmt = $conn->prepare("INSERT INTO Kontakt (Email, Eesnimi, Perekonnanimi, Teema, Sonum) VALUES(?,?,?,?,?)");
	  echo $conn->error;
	  //s - string, i - integer, d - decimal
	  $stmt->bind_param("sssss", $email, $firstName, $lastName, $subject, $message);
	  $stmt->execute();
	  
	  $stmt->close();
	  $conn->close();
  }
?>