<?php
require($_SERVER['DOCUMENT_ROOT'] . '/php/utilities.php');
dbConnect();

$gameID = $_GET["gameID"];

$sql = "SELECT playerNum FROM games WHERE gameID=$gameID";
    $result = $_SESSION["conn"]->query($sql);
        $Timing = $result->fetch_assoc();
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
    <title>Timer</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/timer.css">
    <link rel="website icon" type="webp" href="../images/favicon.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="timer-wrapper">
            <h1 class="title">Timer</h1>
            <p id="timer" class="timer"></p>
        </div>
        <script>
            // Set the date we're counting down to
            var countdownDuration = 300 * 1000; // 5 minutes in milliseconds

            // Update the count down every 1 second
            var x = setInterval(function() {

            // Get today's date and time
            var elapsedTime = Date.now();

            // Find the distance between now and the count down date
            var remainingTime = countdownDuration - elapsedTime;

            // Time calculations for days, hours, minutes and seconds
            var minutes = Math.floor(remainingTime / 1000 / 60);
            var seconds = Math.floor((remainingTime / 1000) % 60);

            // Display the result in the element with id="demo"
            document.getElementById("timer").innerHTML = minutes + " : " + seconds;

            // If the count down is finished, write some text
            if (remainingTime < 0) {
                clearInterval(x);
                document.getElementById("timer").innerHTML = "EXPIRED";
            }
            }, 1000);
        </script>
    </div>
</body>
</html>