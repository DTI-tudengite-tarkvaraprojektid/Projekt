<?php
  require("../config_vp19.php");
  require("functions_contact.php");
  require("../front/php/main_functions.php");
  $userName = "Raimond Laatspera";
  $database = "if19_raimond_la_1";
  
  $notice = "";
  $email = "";
  $firstName = "";
  $lastName = "";
  $subject = "";
  $message = "";

  $emailError = "";
  $firstNameError = "";
  $lastNameError = "";
  $subjectError = "";
  $messageError = "";

  //var_dump($_POST);
  //kui on nuppu vajutatud
  if(isset($_POST["submitContact"])){
   
      if (isset($_POST["email"]) and !empty($_POST["email"])){
		    $email = input_test($_POST["email"]);
	    } else {
		    $emailError = " Väli on tühi!";
	    }//emaili kontrolli lõpp

      //kui on sisestatud nimi
      if(isset($_POST["firstName"]) and !empty($_POST["firstName"])){
        $firstName = input_test($_POST["firstName"]);
      } else {
        $firstNameError = " Väli on tühi!";
      }//eesnime kontrolli lõpp

      if(isset($_POST["lastName"]) and !empty($_POST["lastName"])){
        $lastName = input_test($_POST["lastName"]);
      } else {
        $lastNameError = " Väli on tühi!";
      }//perekonna kontrolli lõpp

      if(isset($_POST["subject"]) and !empty($_POST["subject"])){
        $subject = input_test($_POST["subject"]);
      } else {
        $subjectError = " Väli on tühi!";
      }//Teema kontrolli lõpp

      if(isset($_POST["message"]) and !empty($_POST["message"])){
        $message = input_test($_POST["message"]);
      } else {
        $messageError = " Väli on tühi!";
      }//Teema kontrolli lõpp
      
      	  //kui kõik on korras, salvestame
	  if(empty($emailError) and empty($firstNameError) and empty($lastNameError) and empty($birthMonthError) 
    and empty ($subjectError) and empty ($messageError)){
  $notice = saveContactInfo( $email, $firstName, $lastName, $subject, $message);

  header("Location: contactEnd.html");
    exit();
  }
}

  
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="contactStyle.css">
    <title>EKSAM</title>
</head>
<body>
<div class="logo">
        <img src="../pictures/office.png" alt="pilt" width="150px" height="150px">
    </div>

    <div class="task-bar">
        <button class="task-button" id="landing-page" onclick="window.location.href='../front/home.php'">Avaleht</button>
        <button class="task-button" id="portfolio" onclick="window.location.href='../portfolio/portfolio.php'">Portfoolio</button>
        <button class="task-button" id="rental" onclick="window.location.href='../rent/rent.php'">Rent</button>
        <button class="task-button" id="log-in" onclick="window.location.href='../front/login.php'">Logi sisse</button>
    </div>
    <div class="wrapper">
    <h1>Võta meiega ühendust</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  	<label>Sisesta Email </label><input type ="email" name="email" class="email" maxlength="35" value="<?php echo $email; ?>"><span><?php echo $emailError; ?></span><br>
	<br>
	<label>Sisesta Eesnimi </label><input type="text"  name="firstName" class="firstname" maxlength="35"  value="<?php echo $firstName; ?>"><span><?php echo $firstNameError; ?></span><br>
	<br>
	<label>Sisesta perekonnanimi </label><input type="text"  name="lastName" class="lastname" maxlength="35" value="<?php echo $lastName; ?>"><span><?php echo $lastNameError; ?></span><br>
	<br>
  <label>Sisesta teema </label> <input type ="text" name="subject" maxlength="35" class="subject" value="<?php echo $subject; ?>"><span><?php echo $subjectError; ?></span><br>
	<br>
  <label>Lisa sõnum</label> 
  <textarea  type ="text" name="message" maxlength="200"  class="message" value="<?php echo $message; ?>"></textarea><span><?php echo $messageError; ?></span><br>
	<br>
  <input type="submit"  name="submitContact" class="submit" value="Saada"><span><?php echo $notice; ?></span>

    </form>
</div>

    
</body>
</html>