<?php
    session_start();

    function signIn($username, $pword){
        $notice = "";
        $conn = new mysqli($GLOBALS["serverhost"], $GLOBALS["serverusername"], $GLOBALS["serverpassword"], $GLOBALS["database"]);
        $stmt = $conn->prepare("SELECT parool FROM Kasutaja WHERE email=?");

        echo $conn->error;

        $stmt->bind_param("s", $username);
        $stmt->bind_result($pwordFromDB);

        if ($stmt->execute()) {
            if($stmt->fetch()){
                if(password_verify($pword, $pwordFromDB)){

                    $stmt->close();
                    $stmt = $conn->prepare("SELECT id, roll, eesnimi, perekonnanimi FROM Kasutaja WHERE email=?");
                    echo $conn->error;
                    $stmt->bind_param("s", $username);
                    $stmt->bind_result($userIDFromDb, $roleFromDb, $firstnameFromDb, $lastnameFromDb);
                    $stmt->execute();
                    $stmt->fetch();
                    $notice = "Sisse logis " .$firstnameFromDb ." " .$lastnameFromDb ."!";
                    $_SESSION["userID"] = $userIDFromDb;
                    $_SESSION["userRole"] = $roleFromDb;
                    $_SESSION["userFName"] = $firstnameFromDb;
                    $_SESSION["userLName"] = $lastnameFromDb;
                    $stmt->close();
                    $conn->close();
                    header("Location: home.php");
                    exit();
                } else {
                    $notice = "Vale salasõna!";
                }
            } else {
                $notice = "Sellist kasutajat (" .$username .") ei leitud!";  
            }
        } else {
            $notice = "Sisselogimisel tekkis tehniline viga!" .$stmt->error;
        }
    }

    function signUp($fname, $lname, $email, $pword){
        $notice = null;
        $conn = new mysqli($GLOBALS["serverhost"], $GLOBALS["serverusername"], $GLOBALS["serverpassword"], $GLOBALS["database"]);
        $stmt = $conn->prepare("INSERT INTO Kasutaja (eesnimi, perekonnanimi, email, parool) VALUES (?,?,?,?)");

        echo $conn->error;

        $options = ["cost" => 12, "salt" => substr(sha1(rand()), 0, 22)];
        $pwdhash = password_hash($pword, PASSWORD_BCRYPT, $options );

        $stmt->bind_param("ssss", $fname, $lname, $email, $pwdhash);

        if($stmt->execute()){
            //$notice = "Uue kasutaja salvestamine õnnestus! ID: " .$conn->insert_id;
            $notice = "Uue kasutaja salvestamine õnnestus!";
        } else {
            $notice = "Kasutaja salvestamisel tekkis tehniline viga: " .$stmt->error;
        }
        
        $stmt->close();
        $conn->close();
        return $notice;
    }
?>