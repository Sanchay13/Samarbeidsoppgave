<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Bilder/IM (1).svg">
    <title>Fagområdene</title>
</head>
<body>
    <nav>
        <div class="container">
        <div class="topimg">
        <img src="Bilder/Logo.png" alt="logo" id="Logo">
        </div>

        <div class="menu">
            <a href="index.html">Hjem</a>
            <a href="spill.php">Mini Game</a>
            <a href="BilderOgVideo.php">Bilder og video av IM</a>
            <a href="UtviklingogDrift.php">Fagområdene</a>
            <a href="Elevarbeid.php">Tidligere Elevarbeid</a>
        </div>
    </nav>

    <div class="kon">
        <br><br><br><br><br><br><br>

        <div class="h1Valg"> 
            <h1>Valgmuligheter hvis dere velger IM linja:</h1> 
        </div>

        <br>
        <br>

        <div class="containerForFagene">
        <div class="Drift_link">
            <a href="#Drift">
                <img src="bilder/drift.jpg" alt="" width="600vw" height="auto"></a>
        </div>

        <div class="Utvikling_link">
            <a href="#Utvikling">
                <img src="bilder/utvikling.jpg" width="600vw" height="auto">
            </a> 
        </div>
    </div>

<?php
$IP = "localhost";
$username = "root";
$password = "";
$database = "datainnhold";

$conn = mysqli_connect($IP, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tekst";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $driftT = $row['DriftTekst'];
            $utvT = $row['UtviklingTekst'];
        }
        
        ?>
        <div id="Drift">
        <?php
        echo "<h1>Drift</h1>";
        echo "<p>" . $driftT . "</p>";
        ?>
        </div>
        
        <div id="Utvikling">
        <?php
        echo "<h1>Utvikling</h1>";
        echo "<p>" . $utvT . "</p>";
        ?>
        </div>

        <?php

    } else {
        echo "0 results";
    }

    mysqli_close($conn);


?>



    </div>
</body>
</html>