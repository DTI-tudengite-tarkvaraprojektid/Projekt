<?php 
    require("../config_vp19.php");
    require("php/user_functions.php");
    require("php/main_functions.php");

    if(isset($_SESSION["userID"])){
        header("Location: home.php");
        exit();
    }

    $notice = "";

    $fname = "";
    $lname = "";
    $email = "";

    $fnameerr = "";
    $lnameerr = "";
    $emailerr = "";
    $pwrderr = "";
    $pwrdconferr = "";

    if (isset($_POST["register"])) {

	    if(isset($_POST["fName"]) and !empty($_POST["fName"])){
		    $fname = input_test($_POST["fName"]);
	    } else {
		    $fnameerr = "Palun sisestage eesnimi!";
	    } //eesnime kontrolli lõpp

	    if (isset($_POST["lName"]) and !empty($_POST["lName"])){
		    $lname = input_test($_POST["lName"]);
	    } else {
		    $lnameerr = "Palun sisesta perekonnanimi!";
	    }//perekonnanime kontrolli lõpp

	    if (isset($_POST["email"]) and !empty($_POST["email"])){
		    $email = input_test($_POST["email"]);
	    } else {
		    $emailerr = "Palun sisesta e-postiaadress!";
	    }//emaili kontrolli lõpp
	  
	    //parool
	    if (!isset($_POST["password"]) or empty($_POST["password"])){
		    $pwrderr = "Palun sisesta salasõna!";
	    } else {
		    if(strlen($_POST["password"]) < 8){
			  $pwrderr = "Sisestatud salasõna on liiga lühike!";
		    }
	    }
	  
	    if (!isset($_POST["confpassword"]) or empty($_POST["confpassword"])){
		    $pwrdconferr = "Palun sisestage salasõna kaks korda!";  
	    } else {
		    if($_POST["confpassword"] != $_POST["password"]){
			  $pwrdconferr = "Salasõnad ei ühti!";
		    }
	    }
	
		//Kui kõik on korras, salvestame
	    if(empty($fnameerr) and empty($lnameerr) and empty($emailerr) and empty($pwrderr) and empty($pwrdconferr)){
		    $notice = signUp($fname, $lname, $email, $_POST["password"]);
	    }//kui kõik korras
	
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
    <link rel="stylesheet" href="styles/registerstyle.css">
    <title>EKSAM</title>
</head>
<body>
    <div class="logo">
        <img src="../pictures/office.png" alt="pilt" width="150px" height="150px">
    </div>
    <div class="task-bar">
    <button class="task-button" id="landing-page" onclick="window.location.href='home.php'">Avaleht</button>
        <button class="task-button" id="portfolio" onclick="window.location.href='../portfolio/portfolio.php'">Portfoolio</button>
        <button class="task-button" id="rental" onclick="window.location.href='../rent/rent.php'">Rent</button>
        <button class="task-button" id="contact" onclick="window.location.href='../contact/contact.php'">Kontakt</button>
        <button class="task-button" id="log-in" onclick="window.location.href='login.php'">Logi sisse</button>
    </div>
    
    <div class="register-form">
        <div class="register">
            <p id="1">Registreeri!</p>
        </div>    

        <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div>
                <p>Eesnimi:</p><br>
                <input class="text-input" type="text" name="fName" value="<?php echo $fname;?>">&nbsp;<span><?php echo $fnameerr; ?></span><br>
            </div>    
        
            <div>
                <p>Perkonnanimi:</p><br>
	            <input class="text-input" type="text" name="lName" value="<?php echo $lname;?>">&nbsp;<span><?php echo $lnameerr; ?></span><br>
            </div>
        
            <div>
                <p>E-mail:</p><br>
                <input class="text-input" type="email" name="email" value="<?php echo $email;?>">&nbsp;<span><?php echo $emailerr; ?></span><br>
            </div>

            <div>
                <p class="date-label">Sünnikuupäev:</p><br>
	            <input class="date-input" type="date" name="bday" value=""><br>
            </div>

            <div>
                <p>Salasõna:</p><br>
                <input class="text-input" type="password" name="password" value="">&nbsp;<span><?php echo $pwrderr; ?></span><br>
            </div>

            <div>
                <p>Kinnita salasõna:</p><br>
                <input class="text-input" type="password" name="confpassword" value="">&nbsp;<span><?php echo $pwrdconferr; ?></span><br>
            </div>

	        <input class="register-btn" name="register" type="submit" value="Registreeri">&nbsp;<span><?php echo $notice; ?>
        </form>

    </div>
</body>
</html>