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
?>