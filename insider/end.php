<?php
require($_SERVER['DOCUMENT_ROOT'] . '/php/utilities.php');
dbConnect();

$gameID = $_GET["gameID"];

$sql = "SELECT * FROM games WHERE gameID=$gameID";
    $result = $_SESSION["conn"]->query($sql);
        $game = $result->fetch_assoc();
        $insider = $game["insider"];
        $gmWord = $game["gmWord"];
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
    <title>Answers</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/end.css">
    <link rel="website icon" type="webp" href="../images/favicon.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <?= makeNav() ?>
    <div class = "wrapper">
        <div class="end-wrapper">
            <h1 class="title center">The Secret Word was:</h1>
            <h2 class="insider" id="gmword"><?= $gmWord ?></h2>
                <div class="buttonWrapper">
                    <button class="insiderBttn" onclick="revealGmWord()" >Reveal answer</button>
                </div>
        </div>
        <div class="end-wrapper">
            <h1 class="title center">The Insider was:</h1>
            <h2 class="insider" id="insider"><?= $insider ?></h2>
                <div class="buttonWrapper">
                    <button class="insiderBttn" onclick="revealInsider()">Reveal answer</button>
                </div>
        </div>
        <div class="end-wrapper">
            <h1 class="title center">Play again?</h1>
                <div class="buttonWrapper">
                    <button class="insiderBttn" id="playAgain" onclick="window.location.href='/insider/start.php'">RESTART</button>
                </div>
        </div>
    </div>
    <script type='text/javascript'>
        function revealGmWord() {
            var gmWord = document.getElementById("gmword");
            gmWord.style.display = "block";
        }

        function revealInsider() {
            var insider = document.getElementById("insider");
            insider.style.display = "block";
        }
    </script>
</body>
</html>