<?php 
    require("../config_vp19.php");
    require("php/user_functions.php");
    require("php/main_functions.php");

    $notice = "";
    $email = "";

    $emailerr = "";
    $pwrderr = "";

    if(isset($_SESSION["userID"])){
        header("Location: home.php");
        exit();
    }

    if (isset($_POST["login"])) {
        if (isset($_POST["email"]) and !empty($_POST["email"])) {
            $email = input_test($_POST["email"]);
        } else {
            $emailerr = "Sisestage emaili aadress!";
        }

        if (!isset($_POST["password"]) or strlen($_POST["password"]) < 8) {
            $pwrderr = "Miskit on parooliga valesti...";
        }

        if (empty($emailerr) and empty($pwrderr)) {
            $notice = signIn($email, $_POST["password"]);
        } else {
            $notice = "Ei saanud sisse logida";
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
    <link rel="stylesheet" href="styles/loginstyle.css">
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
    </div>
    
    <div class="log-in-form">
        <div class="log-in">
            <p id="1">Logi sisse!</p>
        </div>
        <div class="log-in-details">

            <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div>
                    <p>E-mail (kasutajatunnus):</p>
                    <input class="text-input" type="email" name="email" value="<?php echo $email;?>">&nbsp;<span><?php echo $emailerr; ?></span><br>
                </div>

                <div>
                    <p>Salasõna:</p>
                    <input class="text-input" type="password" name="password" value="">&nbsp;<span><?php echo $pwrderr; ?></span><br>
                </div>

                <input class="log-in-btn" name="login" type="submit" value="Logi sisse">&nbsp;<span><?php echo $notice; ?>
            </form>
        </div>

        <div class="register">
            <p>Pole kasutaja?</p>
            <input class="register-btn" type="button" value="Registreeri" onclick="window.location.href='register.php'">
        </div>
    </div>
    
</body>
</html>