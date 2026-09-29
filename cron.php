<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 'On');
ini_set('error_log', '/path/to/php_errors.log');

ob_start();

session_start();
require($_SERVER['DOCUMENT_ROOT'] . '/php-processes/utilities.php');
dbConnect();

$sql = "SELECT created, expiration FROM games";
    $result = $_SESSION["conn"]->query($sql);
        $game = $result->fetch_assoc();
        $created = $game["created"];
        $expiration = $game["expiration"];

    $math = strtotime($expiration) - strtotime($created);


$stmt = $_SESSION["conn"] -> prepare("DELETE FROM users WHERE expiration < NOW() && $math > 30");

// //execute statement
// if ($stmt -> execute()) {
//     exit;
// } else {
//     die("unexpected error");
// }

// $stmt -> close();
// mysqli_close($conn);
?>