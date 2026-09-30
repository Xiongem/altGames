<?php
ob_start();
require($_SERVER['DOCUMENT_ROOT'] . '/php/utilities.php');
dbConnect();

$gameID = $_POST["gameID"];

$stmt = $_SESSION["conn"] -> prepare("UPDATE games SET gmWord=? WHERE gameID=$gameID");
    $stmt->bind_param("s",
                            $_POST["gmWord"]);

if ($stmt -> execute()) {
    header("Location: /insider/roles.php?gameID=$gameID");
    exit;
} else {
    die("an unexpected error occured");
}