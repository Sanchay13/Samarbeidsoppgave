<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Bilder/IM (1).svg">
    <title>Bilder og videoer</title>
</head>
<body>
    <nav>
        <div class="container">
            <div class="topimg">
                <img src="Bilder/Logo.png" alt="logo" id="Logo">
            </div>

        <div class="menu">
            <a href="index.php">Hjem</a>
            <a href="spill.php">Mini Game</a>
            <a href="BilderOgVideo.php">Bilder og video av IM</a>
            <a href="UtviklingogDrift.php">Fagområdene</a>
            <a href="Elevarbeid.php">Tidligere Elevarbeid</a>
        </div>
    </nav>
    <br><br><br><br><br><br>

        <div class="overskriftGalleri">
            <h1>Bildegalleri av IM-kuben</h1>

        <br><br>

    <div class="slider">
        <div class="img-box">
            <img src="Bildegalleri/IM.JPG" class="slider-img">
        </div>

        <button class="btn" onclick="previous()"><</button>
        <button class="btn" onclick="next()">></button>
    </div>


    <div class="tekst">
        <h1>Videointroduksjon om oss:</h1>
        <br><br>
            <video controls>
                <source src="Elevarbeid/Stopmotion.mp4" type="video/mp4">
            </video>
</body>
<script src="script.js"></script>
</html>