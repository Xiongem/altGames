<?php
ob_start();
require($_SERVER['DOCUMENT_ROOT'] . '/php/utilities.php');
dbConnect();

$gameID = $_POST["gameID"];
$insider = $_POST["insider"];

$sql = "SELECT `insider` FROM `games` WHERE `gameID` = $gameID";
     $result = $_SESSION["conn"]->query($sql);
     $vote = $result->fetch_assoc();
        $gameInsider = $vote["insider"];

if ($gameInsider == $insider) {
    return 1;
} else {
    return 0;
}