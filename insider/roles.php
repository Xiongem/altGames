<?php
ob_start();
require($_SERVER['DOCUMENT_ROOT'] . '/php/utilities.php');
dbConnect();

$gameID = $_GET["gameID"];

$sql = "SELECT gmWord, playerNum FROM games WHERE gameID=$gameID";
    $result = $_SESSION["conn"]->query($sql);
        $game = $result->fetch_assoc();
            $gmWord = $game["gmWord"];
            $playerNum = $game["playerNum"];

switch ($playerNum) {
    case '4':
        $sql = "SELECT player1, player2, player3, player4 FROM players WHERE gameID=$gameID";
            $result = $_SESSION["conn"]->query($sql);
                $game = $result->fetch_assoc();
        break;
    
    case '5':
        $sql = "SELECT player1, player2, player3, player4, player5 FROM players WHERE gameID=$gameID";
            $result = $_SESSION["conn"]->query($sql);
                $game = $result->fetch_assoc();
        break;
    
    case '6':
        $sql = "SELECT player1, player2, player3, player4, player5, player6 FROM players WHERE gameID=$gameID";
            $result = $_SESSION["conn"]->query($sql);
                $game = $result->fetch_assoc();
        break;

    case '7':
        $sql = "SELECT player1, player2, player3, player4, player5, player6, player7 FROM players WHERE gameID=$gameID";
            $result = $_SESSION["conn"]->query($sql);
                $game = $result->fetch_assoc();
        break;

    case '8':
        $sql = "SELECT player1, player2, player3, player4, player5, player6, player7, player8 FROM players WHERE gameID=$gameID";
            $result = $_SESSION["conn"]->query($sql);
                $game = $result->fetch_assoc();
        break;
}
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
    <title>Insider Roles</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/roles.css">
    <link rel="website icon" type="webp" href="../images/favicon.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body onload="displayPlayer()">
    <div class="wrapper">
        <h1 class="title">Insider</h1>
        <div id="playerWrapper">
            <h2  class="spacing"><span id="player"></span></h2>
            <h3 class="spacing"><span id="confirm"></span></h3>
        </div>
        <button id="nextPlayer" onclick="displayPlayer();">Next Player</button>
        <button>Start!</button>
    </div>
    <script type='text/javascript'>
        //* PHP Session variables to js variables here
        var gmWord = <?php $gmWord ?>;
        var gameplayers = <?= json_encode($game); ?>;

        // var r = Math.floor(Math.random() * gameplayers.length);
        // var insider = gameplayers[r];

        const insider = gameplayers[Object.keys(gameplayers)[Math.floor(Math.random() * Object.keys(gameplayers).length)]];
        
        var i = 0;
        function displayPlayer() {
            if (gameplayers[i] == insider) {
                $("#player").text(gameplayers[i] + ", you are the Insider.");
                $("#confirm").text("The secret word is " + gmWord);
            } else {
                $("#player").text(gameplayers[i]);
                $("#confirm").text("You are NOT the Insider.");
            }

            gameplayers[i++];

            if (i === gameplayers.length) {
                i = 0;
                console.log("the end");
                var playerButton = getElem
            }
        }
    </script>
</body>
</html>