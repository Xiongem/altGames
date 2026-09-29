<?php
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

        echo $math;

// $stmt = $_SESSION["conn"] -> prepare("DELETE FROM users WHERE expiration < NOW() && ");

// //execute statement
// if ($stmt -> execute()) {
//     exit;
// } else {
//     die("unexpected error");
// }

// $stmt -> close();
// mysqli_close($conn);
?>