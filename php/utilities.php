<?php
session_start();

// database connection
function dbConnect() {
    $servername = "localhost";
    $database = "u792691800_altgames";
    $username = "u792691800_jamie";
    $password = "Hi5gem601*";
    $_SESSION["conn"] = mysqli_connect($servername, $username, $password, $database);
    if (!$_SESSION["conn"]) {die("Connection failed: " . mysqli_connect_error()); }
}

function makeNav() {
    $htmlContent = <<<HTML
        <div class="title-wrapper">
            <a href="../index.html">
                <img id="logo" src="../images/favicon.webp" alt="purple, smiling gaming controller">
            </a>
        <h1 class="nav-title">ALT Games</h1>
        </div>
    HTML;
        echo $htmlContent;
}
?>