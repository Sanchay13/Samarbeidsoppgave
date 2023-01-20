<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Bilder/IM (1).svg">
    <title>Game</title>
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
    <br><br><br><br><br><br><br>


    <div id="board">
    </div>
    
    <br><br>
    
    <button class="refreshbtn" onclick="Reload()">Restart</button>
    

</body>
<script src="script.js"></script>
</html>