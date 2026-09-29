<?php
ob_start();
require($_SERVER['DOCUMENT_ROOT'] . '/php/utilities.php');
dbConnect();

$gameID = $_POST["gameID"];

// $stmt = $_SESSION["conn"] -> prepare("UPDATE games SET `insider`=? WHERE gameID=$gameID");
//     $stmt->bind_param("s",
//                             $_POST["insider"]);

// if ($stmt -> execute()) {
//     exit;
// } else {
//     die("an unexpected error occured");
// }


$stmt = $_SESSION["conn"] -> prepare("UPDATE games SET insider`=? WHERE gameID=$gameID");
        $stmt->bind_param("s",
                                $_POST["insider"]);
        if ($stmt -> execute()) {
            exit;
        } else {
            die("an unexpected error occured");
        }