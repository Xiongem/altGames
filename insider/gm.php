<?php
ob_start();
require($_SERVER['DOCUMENT_ROOT'] . '/php/utilities.php');
dbConnect();

$gameID = $_GET["gameID"];

$sql = "SELECT playerNum FROM games WHERE gameID=$gameID";
    $result = $_SESSION["conn"]->query($sql);
        $players = $result->fetch_assoc();
            $playerNum = $players["playerNum"];

switch ($playerNum) {
    case '4':
        $sql = "SELECT player1, player2, player3, player4 FROM players WHERE gameID=$gameID";
            $result = $_SESSION["conn"]->query($sql);
                $game = $result->fetch_assoc();
                    $p1 = $game["player1"];
                    $p2 = $game["player2"];
                    $p3 = $game["player3"];
                    $p4 = $game["player4"];
        break;
    
    case '5':
        $sql = "SELECT player1, player2, player3, player4, player5 FROM players WHERE gameID=$gameID";
            $result = $_SESSION["conn"]->query($sql);
                $game = $result->fetch_assoc();
                    $p1 = $game["player1"];
                    $p2 = $game["player2"];
                    $p3 = $game["player3"];
                    $p4 = $game["player4"];
                    $p5 = $game["player5"];
        break;
    
    case '6':
        $sql = "SELECT player1, player2, player3, player4, player5, player6 FROM players WHERE gameID=$gameID";
            $result = $_SESSION["conn"]->query($sql);
                $game = $result->fetch_assoc();
                    $p1 = $game["player1"];
                    $p2 = $game["player2"];
                    $p3 = $game["player3"];
                    $p4 = $game["player4"];
                    $p5 = $game["player5"];
                    $p6 = $game["player6"];
        break;

    case '7':
        $sql = "SELECT player1, player2, player3, player4, player5, player6, player7 FROM players WHERE gameID=$gameID";
            $result = $_SESSION["conn"]->query($sql);
                $game = $result->fetch_assoc();
                    $p1 = $game["player1"];
                    $p2 = $game["player2"];
                    $p3 = $game["player3"];
                    $p4 = $game["player4"];
                    $p5 = $game["player5"];
                    $p6 = $game["player6"];
                    $p7 = $game["player7"];
        break;

    case '8':
        $sql = "SELECT player1, player2, player3, player4, player5, player6, player7, player8 FROM players WHERE gameID=$gameID";
            $result = $_SESSION["conn"]->query($sql);
                $game = $result->fetch_assoc();
                    $p1 = $game["player1"];
                    $p2 = $game["player2"];
                    $p3 = $game["player3"];
                    $p4 = $game["player4"];
                    $p5 = $game["player5"];
                    $p6 = $game["player6"];
                    $p7 = $game["player7"];
                    $p8 = $game["player8"];
        break;
}
print_r($game);
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
        <form method="post" action="../php/insiderGM.php">
            <h1 class="title">Insider</h1>
            <div id="gmNameWrapper" class="spacing sections">
                <h2 class="title">The Game Master is:</h2>
                <h3><span id="gmName"></span></h3>
            </div>
            <div id="gmWordWrapper" class="spacing sections">
                <h3>Game Master, please choose a word:</h3>
                <input type="text" id="gmWord" name="gmWord" placeholder="Ex: Apple">
                <input type="hidden" name="gameID" value= "<?= $gameID ?>">
            </div>
            <button class="startBttn" type="submit">Submit</button>
        </form>
    </div>
    <script type='text/javascript'>
        //* function to pull a random player name from player array and write it in the gmName span
        function pullGM() {
            let gameplayers = <?= $game ?>;
            console.log(gameplayers);
            
            let i = Math.floor(Math.random() * gameplayers.length);
            let r = gameplayers[i];
            $("#gmName").text(r);
            console.log(r);
            

            var gameID = <?= $gameID ?>;
            //begin post method
            $.post("../php/updateGM.php", {
                //DATA
                gameID: gameID,
                gmName: r
            });
        }
        pullGM();
    </script>
</body>
</html>