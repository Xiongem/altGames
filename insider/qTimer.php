<?php
require($_SERVER['DOCUMENT_ROOT'] . '/php/utilities.php');
dbConnect();

$gameID = $_GET["gameID"];

$sql = "SELECT guessTime FROM games WHERE gameID=$gameID";
    $result = $_SESSION["conn"]->query($sql);
        $Timing = $result->fetch_assoc();
        $guessTime = $Timing["guessTime"];
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
    <title>Question Time</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/timer.css">
    <link rel="website icon" type="webp" href="../images/favicon.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <?= makeNav() ?>
    <div class="wrapper">
        <div class="insider-wrapper">
            <img class="image" id="insiderLogo" src="/insider/images/insiderLogo.svg" alt="Insider Game Logo">
            <h1 class="title">Insider</h1>
        </div>
        <div class="timer-wrapper">
            <h1 class="title">Question Time</h1>
            <h2 id="timer" class="timer"></h2>
            <div class="buttonWrapper">
                <button id="nextButton" class="insiderBttn" onclick="nextPage()">Discussion Time</button>
            </div>
        </div>
    </div>
    <script type='text/javascript'>
        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    display.textContent = "Time is up!";
                    var nextButton = document.getElementById("nextButton");
                    nextButton.style.display = "block";
                }
            }, 1000);
        }

        window.onload = function () {
            var guessTime = 60 * <?= $guessTime ?>,
                display = document.querySelector('#timer');
            startTimer(guessTime, display);
        };

        function nextPage() {
            window.location.href = "dTimer.php?gameID=<?= $gameID ?>";
        }
    </script>
</body>
</html>