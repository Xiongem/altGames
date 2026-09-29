<?php
ob_start();

session_start();
require($_SERVER['DOCUMENT_ROOT'] . '/php-processes/utilities.php');
dbConnect();

$sql = "SELECT created, expiration FROM games";
    $result = $_SESSION["conn"]->query($sql);
        $game = $result->fetch_assoc();

$stmt = $_SESSION["conn"] -> prepare("DELETE FROM users WHERE id=?");
$stmt->bind_param("i",
                        $userID);

//execute statement
if ($stmt -> execute()) {
    exit;
} else {
    die("unexpected error");
}

$stmt -> close();
mysqli_close($conn);
?>