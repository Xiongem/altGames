<?php
ob_start();
require($_SERVER['DOCUMENT_ROOT'] . '/php/utilities.php');
dbConnect();

$gameID = $_POST["gameID"];

$stmt = $_SESSION["conn"] -> prepare("UPDATE games SET insider=? WHERE gameID=?");
    $stmt->bind_param("si",
                            $_POST["insider"], $gameID);

if ($stmt -> execute()) {
    exit;
} else {
    die("an unexpected error occured");
}