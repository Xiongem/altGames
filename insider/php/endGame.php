<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 'On');
ini_set('error_log', '/path/to/php_errors.log');

ob_start();
require($_SERVER['DOCUMENT_ROOT'] . '/php/utilities.php');
dbConnect();

$gameID = $_GET["gameID"];
$gmName = "";
$gmWord = "";
$insider = "";


$stmt = $_SESSION["conn"] -> prepare("UPDATE `games` SET `gmName` = ?, `gmWord` = ?, `insider` = ? WHERE `gameID` = ?");
$stmt->bind_param("sssi", 
                    $gmName,
                    $gmWord,
                    $insider,
                    $gameID);


if ($stmt -> execute()) {
    header("Location: /insider/gm.php?gameID=$gameID");
    exit;
} else {
    die("an unexpected error occured");
}