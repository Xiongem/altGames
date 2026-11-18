<?php
ob_start();
require($_SERVER['DOCUMENT_ROOT'] . '/php/utilities.php');
dbConnect();

$gameID = $_POST["gameID"];
$guessTime = $_POST["guessTime"];
$discussTime = $_POST["discussTime"];

$stmt = $_SESSION["conn"] -> prepare("UPDATE games SET guessTime = ?, discussTime = ? WHERE gameID = ?");
    $stmt->bind_param("iii",
                            $guessTime,
                            $discussTime,
                            $gameID);

if ($stmt -> execute() && $stmt -> affected_rows > 0) {
    echo "Updated Time";
} else {
    echo "Time not updated";
}