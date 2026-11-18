<?php
ob_start();
require($_SERVER['DOCUMENT_ROOT'] . '/php/utilities.php');
dbConnect();

$gameID = $_GET["gameID"];

$sql = "SELECT playerNum, guessTime, discussTime FROM games WHERE gameID=$gameID";
    $result = $_SESSION["conn"]->query($sql);
        $players = $result->fetch_assoc();
            $playerNum = $players["playerNum"];
            $guessTime = $players["guessTime"];
            $discussTime = $players["discussTime"];

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

    case '9':
        $sql = "SELECT player1, player2, player3, player4, player5, player6, player7, player8, player9 FROM players WHERE gameID=$gameID";
            $result = $_SESSION["conn"]->query($sql);
                $game = $result->fetch_assoc();
        break;
    
    case '10':
        $sql = "SELECT player1, player2, player3, player4, player5, player6, player7, player8, player9, player10 FROM players WHERE gameID=$gameID";
            $result = $_SESSION["conn"]->query($sql);
                $game = $result->fetch_assoc();
        break;

    case '11':
        $sql = "SELECT player1, player2, player3, player4, player5, player6, player7, player8, player9, player10, player11 FROM players WHERE gameID=$gameID";
            $result = $_SESSION["conn"]->query($sql);
                $game = $result->fetch_assoc();
        break;

    case '12':
        $sql = "SELECT player1, player2, player3, player4, player5, player6, player7, player8, player9, player10, player11, player12 FROM players WHERE gameID=$gameID";
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
    <?= makeNav() ?>
    <div class="popup-wrapper hide" id="settingsPopup">
        <div class="popup-content">
            <div class="close-wrapper">
                <ion-icon size="large" name="close-outline" onclick="closeSettingPopup()"></ion-icon>
            </div>
            <div class="setting-title-wrapper">
                <h1>Settings</h1>
            </div>
            <div class="setting-wrapper">
                <h3>Question Time</h3>
                <div class="options">
                    <div class="option-wrapper">
                        <input type="radio" id="twoMinsG" class="radio" name="guessTime" value="2"
                        <?php if($guessTime==2){?>checked<?php } ?>>
                        <label for="twoMinsG">2 Minutes</label>
                    </div>
                    <div class="option-wrapper">
                        <input type="radio" id="threeMinsG" class="radio" name="guessTime" value="3"
                        <?php if($guessTime==3){?>checked<?php } ?>>
                        <label for="threeMinsG">3 Minutes</label>
                    </div>
                    <div class="option-wrapper">
                        <input type="radio" id="fiveMinsG" class="radio" name="guessTime" value="5"
                        <?php if($guessTime==5){?>checked<?php } ?>>
                        <label for="fiveMinsG">5 Minutes</label>
                    </div>
                </div>
                <h3>Insider Discussion Time</h3>
                <div class="options">
                    <div class="option-wrapper">
                        <input type="radio" id="oneMinsD" class="radio" name="discussTime" value="3"
                        <?php if($discussTime==3){?>checked<?php } ?>>
                        <label for="oneMinsD">3 Minute</label>
                    </div>
                    <div class="option-wrapper">
                        <input type="radio" id="twoMinsD" class="radio" name="discussTime" value="5"
                        <?php if($discussTime==5){?>checked<?php } ?>>
                        <label for="twoMinsD">5 Minutes</label>
                    </div>
                    <div class="option-wrapper">
                        <input type="radio" id="sevenMinsD" class="radio" name="discussTime" value="7"
                        <?php if($discussTime==7){?>checked<?php } ?>>
                        <label for="sevenMinsD">7 Minutes</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <ion-icon class="setting-icon" id="settingIcon" size="large" name="settings" onclick="openSettings()"></ion-icon>
        <form class="wrapper" method="post" action="/insider/php/insiderGM.php">
            <div class="insider-wrapper">
                <img class="image" id="insiderLogo" src="/insider/images/insiderLogo.svg" alt="Insider Game Logo">
                <h1 class="title">Insider</h1>
            </div>
            <div id="gmNameWrapper" class="spacing sections">
                <h2 class="title center">The Game Master is:</h2>
                <h3>
                    <span id="gmName"></span>
                    <ion-icon class="refresh" name="refresh-circle-outline" onclick="pullGM()"></ion-icon>
                </h3>
                
            </div>
            <div id="gmWordWrapper" class="spacing sections">
                <h3 class="instructions">Game Master, please choose a word:</h3>
                <input type="text" id="gmWord" class="playerInput" name="gmWord" placeholder="Ex: Apple">
                <span id="gmWordError" class="error"></span>
                <input type="hidden" name="gameID" value= "<?=$gameID?>">
            </div>
            <button id="submit" type="submit" class="insiderBttn hide">Submit</button>
        </form>
    </div>
    <script type='text/javascript'>
        function openSettings() {
            $("#settingsPopup").css("display", "flex");
        }
        function closeSettingPopup() {
            $("#settingsPopup").hide();
            var gameID = <?=$gameID?>;
            var guessTime = $("[name='guessTime']:checked").val()
            var discussTime = $("[name='discussTime']:checked").val()

            $.ajax ({
                url: "php/updateTime.php",
                method: "post",
                data: {gameID:gameID,
                    guessTime:guessTime,
                    discussTime:discussTime},
                    success:function(result) {
                        console.log(result);
                    }
            })
        }


        //* function to pull a random player name from player array and write it in the gmName span
        function pullGM() {
            let gameplayers = <?= json_encode($game); ?>;
            
            const randomPlayer = gameplayers[Object.keys(gameplayers)[Math.floor(Math.random() * Object.keys(gameplayers).length)]];
            $("#gmName").text(randomPlayer);

            var gameID = <?= $gameID ?>;
            //begin post method
                $.post("/insider/php/updateGM.php", {
                    //DATA
                    gameID: gameID,
                    gmName: randomPlayer
                });
            }
        pullGM();

        //setup before functions
        var typingTimer;                //timer identifier
        var doneTypingInterval = 500;  //time in ms, 5 seconds for example
        var $input = $('#gmWord');

        //on keyup, start the countdown
        $input.on('keyup', function () {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        });

        //on keydown, clear the countdown 
        $input.on('keydown', function () {
            clearTimeout(typingTimer);
            $('#submit').css("display", "none");
                console.log("goodbye");
        });

        //user is "finished typing," do something
        function doneTyping () {
            $('#submit').css("display", "flex");
                console.log("hello");
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
</body>
</html>