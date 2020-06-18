<?php
    require("../config_vp19.php");
    require("./php/user_functions.php");
    require("./php/main_functions.php");

    if(isset($_GET["logout"])){
        session_destroy();
        header("Location: home.php");
        
        exit();
    }

    if (!empty($_SESSION["userFName"])) {
        $userInfo = "Tere tulemast, " .$_SESSION["userFName"] ." " .$_SESSION["userLName"] ."!";
        $userID = 1;
    } else {
        $userInfo = null;
        $userID = null;
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <script type="text/javascript">
        window.onload = function() {
            $("#profile-menu").toggle("fast")
            const profile = document.querySelector('#profile-pic')
            profile.addEventListener('click', ()=> {
                $("#profile-menu").toggle("fast")
            })
        }
    </script>
    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
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
        <div class="profile" id="profile-pic"></div>
    </div>
    
    <div class="profile-menu" id="profile-menu">
        <p><?php echo $userInfo;?></p> 
        <hr>
        <br>

        <p><?php if (!$userID == null) {echo '<a class="drop-button" href="?logout=1">Logi välja!</a>';} else {echo 'Kasutaja pole sisse logitud!';}?></p>
        <br>
        <p><?php if ($userID == null) {echo '<a class="drop-button" href="login.php">Logi sisse</a>';}?></p>
    </div>

    <h1>See on avaleht</h1>
</body>
</html>