<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="portfoliostyle.css" rel="stylesheet">
    <script src="portfolioscript.js"></script>
    <title>Portfoolio</title>
</head>
<body>
  <div class="buttons p-0">
    <div class="logo">
      <img src="../pictures/office.png" alt="pilt" width="150px" height="150px">
    </div>
    <div class="task-bar">
    <button class="task-button" id="landing-page" onclick="window.location.href='../front/home.php'">Avaleht</button>
        <button class="task-button" id="rental" onclick="window.location.href='../rent/rent.php'">Rent</button>
        <button class="task-button" id="contact" onclick="window.location.href='../contact/contact.php'">Kontakt</button>
        <button class="task-button" id="log-in" onclick="window.location.href='../front/login.php'">Logi sisse</button>
      </div>
    </div>
    <br>
    <h1 id="heading">Meie portfoolio</h1>
    <br>
</body>
<?php
    //require
    require("../../../../config_vp19.php");

    //muutujad
    $dirname = "../pictures/";
    $picIDcount = 0;


    //PILTIDE VÄLJATOOMINE

    //Ühenduse loomine
    $conn = new mysqli($GLOBALS["serverhost"], $GLOBALS["serverusername"], $GLOBALS["serverpassword"], $GLOBALS["database"]);
    //Ühenduse kontrollimine
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT pictureURL FROM Portfoolio";
    $result = $conn->query($sql);
    echo '<div class="allPictures">';
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $pictureURL = $row["pictureURL"];
        $images = glob($dirname. $pictureURL);
          foreach($images as $image) {
            $picIDcount = $picIDcount + 1;
            echo '<div class activeScreen>';
              echo '<img class="pic" id="' .$picIDcount .'" src="' .$image .'">';
            echo '</div>';
        }
      }
    } else {
      echo "0 results";
    }
      
    echo '</div>';
    $conn->close();
?>

