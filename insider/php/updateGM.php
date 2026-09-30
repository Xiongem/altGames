<?php
ob_start();
require($_SERVER['DOCUMENT_ROOT'] . '/php/utilities.php');
dbConnect();

$gameID = $_POST["gameID"];

$stmt = $_SESSION["conn"] -> prepare("UPDATE games SET gmName=? WHERE gameID=$gameID");
    $stmt->bind_param("s",
                            $_POST["gmName"]);

$stmt -> execute();
exit;
?>