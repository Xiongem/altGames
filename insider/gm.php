<?php
    $players = $_GET["players"];
    echo json_encode($players);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="ALT JET Games"> 
    <meta property="og:description" content="In class games and activities for ALTs."> 
    <meta property="og:image" content=""> 
    <meta property="og:url" content="">
    <title>Insider Game Master</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gm.css">
    <link rel="website icon" type="webp" href="../images/favicon.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <h1 class="title">Insider</h1>
        <div id="gmNameWrapper" class="spacing sections">
            <h2 class="title">The Game Master is:</h2>
            <h3><span id="gmName"></span></h3>
        </div>
        <div id="gmWordWrapper" class="spacing sections">
            <h3>Game Master, please choose a word:</h3>
            <input type="text" id="gmWord" name="gmWord" placeholder="Ex: Apple">
        </div>
        <button class="startBttn" onclick="sendWord()">Submit</button>
    </div>
    <script type='text/javascript'>
        //* function to pull a random player name from player array and write it in the gmName span
        // var json_str = document.cookie('players');
        // var playerArray = JSON.parse(json_str);
        // console.log(playerArray);
        
        function pullGM() {
            //* Add Session variable with array and put back into js
            // let gameplayers = Cookies.get('players');
            // let i = Math.floor(Math.random() * gameplayers.length);
            // let r = gameplayers[i];
            // $("#gmName").text(r);
        }
        pullGM();
        function sendWord() {
            let gmWord = document.getElementById("gmWord").value;
            //* add PHP to turn word into session variable
            document.cookie = "gmWord" + gmWord;
            window.location.href = "roles.php";
        }
    </script>
</body>
</html>