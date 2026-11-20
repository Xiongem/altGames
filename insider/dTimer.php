<?php
require($_SERVER['DOCUMENT_ROOT'] . '/php/utilities.php');
dbConnect();

$gameID = $_GET["gameID"];

$sql = "SELECT * FROM games WHERE gameID=$gameID";
    $result = $_SESSION["conn"]->query($sql);
        $Timing = $result->fetch_assoc();
        $discussTime = $Timing["discussTime"];
        $gmName = $Timing["gmName"];
        $playerNum = $Timing["playerNum"];

switch ($playerNum) {
    case '4':
        $sql = "SELECT player1, player2, player3, player4 FROM players WHERE gameID=$gameID";
            $result = $_SESSION["conn"]->query($sql);
                $game = $result->fetch_assoc();
                    $p1 = $game["player1"];
                    $p2 = $game["player2"];
                    $p3 = $game["player3"];
                    $p4 = $game["player4"];
                $players = [$p1, $p2, $p3, $p4];
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
                $players = [$p1, $p2, $p3, $p4, $p5];
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
                $players = [$p1, $p2, $p3, $p4, $p5, $p6];
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
                $players = [$p1, $p2, $p3, $p4, $p5, $p6, $p7];
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
                $players = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8];
        break;

    case '9':
        $sql = "SELECT player1, player2, player3, player4, player5, player6, player7, player8, player9 FROM players WHERE gameID=$gameID";
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
                    $p9 = $game["player9"];
                $players = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9];
        break;

    case '10':
        $sql = "SELECT player1, player2, player3, player4, player5, player6, player7, player8, player9, player10 FROM players WHERE gameID=$gameID";
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
                    $p9 = $game["player9"];
                    $p10 = $game["player10"];
                $players = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10];
        break;

    case '11':
        $sql = "SELECT player1, player2, player3, player4, player5, player6, player7, player8, player9, player10, player11 FROM players WHERE gameID=$gameID";
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
                    $p9 = $game["player9"];
                    $p10 = $game["player10"];
                    $p11 = $game["player11"];
                $players = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11];
        break;

    case '12':
        $sql = "SELECT player1, player2, player3, player4, player5, player6, player7, player8, player9, player10, player11, player12 FROM players WHERE gameID=$gameID";
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
                    $p9 = $game["player9"];
                    $p10 = $game["player10"];
                    $p11 = $game["player11"];
                    $p12 = $game["player12"];
                $players = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12];
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
    <title>Discussion Time</title>
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
        <div class="content-wrapper">
            <h1 class="title">Who is the Insider?</h1>
            <p class="center">Discuss and vote for who you think the insider is before time runs out.</p>
            <div class="timer-wrapper">
                <h2 id="timer" class="timer">
                    <div class="loader" id="loader"></div>
                </h2>
            </div>
            <div class="vote-wrapper">
                <h3>Choose the Insider before time runs out</h3>
                <select id="insiderSelect" class="insiderSelect">
                    <option class="player">Who is the Insider?</option>
                    <?php $players = array_diff($players, [$gmName]);
                        foreach ($players as $playerName) {?>
                    <option class="player" id="<?=$playerName?>"><?=$playerName?></option>
                    <?php } ?>
                </select>
                <div class="insiderBttn" id="insiderButton" onclick="chooseInsider()">Vote</div>
            </div>
            <!-- <div class="skip-wrapper">
                <button id="skipButton" class="insiderBttn skipButton" onclick="nextPage()">Skip</button>

            </div> -->
            <!-- <div class="buttonWrapper">
                <button id="nextButton" class="insiderBttn" onclick="nextPage()">Reveal answers</button>
            </div> -->
        </div>
    </div>
    <script type='text/javascript'>
        function chooseInsider() {
            var insider = $("#insiderSelect").val();
            var gameID = <?= $gameID ?>;

            $.ajax ({
                url: "php/chooseInsider.php",
                method: "post",
                data: {insider:insider,
                    gameID:gameID},
                success:function(result) {
                    if (result == 1) {
                        window.location.href = "end.php?gameID=<?=$gameID?>&result=1";
                    } else {
                        window.location.href = "end.php?gameID=<?=$gameID?>&result=0";
                    }
                }
            })
        }
        
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
                    // var nextButton = document.getElementById("nextButton");
                    // var skipButton = document.getElementById("skipButton");
                    // nextButton.style.display = "block";
                    // skipButton.style.display = "none";
                    setTimeout(nextPage, 1000);
                }
            }, 1000);
        }

        window.onload = function () {
            $("loader").hide();
            $("#skipButton").css("display", "flex");
            var discussTime = 60 * <?= $discussTime ?>,
                display = document.querySelector('#timer');
            startTimer(discussTime, display);
        };

        function nextPage() {
            window.location.href = "end.php?gameID=<?=$gameID?>&result=0";
        }
    </script>
</body>
</html>