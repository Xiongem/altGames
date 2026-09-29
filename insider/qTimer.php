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
            // var countDownDate = new Date("Jan 5, 2030 15:37:25").getTime();

            // // Update the count down every 1 second
            // var x = setInterval(function() {

            // // Get today's date and time
            // var now = new Date().getTime();

            // // Find the distance between now and the count down date
            // var distance = countDownDate - now;

            // // Time calculations for days, hours, minutes and seconds
            // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            // var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            // var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            // var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // // Display the result in the element with id="demo"
            // document.getElementById("timer").innerHTML = days + "d " + hours + "h "
            // + minutes + "m " + seconds + "s ";

            // // If the count down is finished, write some text
            // if (distance < 0) {
            //     clearInterval(x);
            //     document.getElementById("timer").innerHTML = "EXPIRED";
            // }
            // }, 1000);
            function startCountdown() {
                var countdownDuration = 300;
                var elapsedTime = Date.now();
                var remainingTime = countdownDuration - elapsedTime;

                var minutes = Math.floor(remainingTime / 1000 / 60);
                var seconds = Math.floor((remainingTime / 1000) % 60);

                var countdownElement = document.getElementById('timer');
                countdownElement.textContent = minutes + ":" + seconds;
            }
            window.addEventListener('load', function() {
                startCountdown();
            });
            function updateCountdown() {
                // Calculate remaining time
                const now = new Date().getTime();
                const distance = countdownEndTime - now;

                // Calculate minutes and seconds
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Update countdown display
                countdownElement.innerHTML = `${minutes}m ${seconds}s`;

                // Handle end of countdown
                if (distance < 0) {
                    clearInterval(countdownInterval);
                    countdownElement.innerHTML = 'Countdown ended!';
                }
            }
            const countdownInterval = setInterval(updateCountdown, 1000);
        </script>
    </div>
</body>
</html>