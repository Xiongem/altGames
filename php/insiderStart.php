<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 'On');
ini_set('error_log', '/path/to/php_errors.log');

ob_start();
require($_SERVER['DOCUMENT_ROOT'] . '/php/utilities.php');
dbConnect();

$gameID = rand(1000,9999);
$created = date("Y-m-d H:i:s",time());
$expire = date("Y-m-d H:i:s",time() + 60 * 30); //expires after 30 minutes
$players = $_POST["playerNum"];

$stmt = $_SESSION["conn"] -> begin_transaction();

$stmt = $_SESSION["conn"] -> prepare("INSERT INTO games (gameID, created, expiration, gmWord, guessTime, discussTime) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssii",
                        $gameID,
                        $created,
                        $expire,
                        $_POST["gmWord"],
                        $_POST["guessTime"],
                        $_POST["discussTime"]);
$stmt -> execute();


switch ($players) {
    case '4':
        $stmt = $_SESSION["conn"] -> prepare("INSERT INTO players (gameID, player1, player2, player3, player4) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("issss",
                                $gameID,
                                $_POST["gameplayer1"],
                                $_POST["gameplayer2"],
                                $_POST["gameplayer3"],
                                $_POST["gameplayer4"]);
        break;

    case '5':
        $stmt = $_SESSION["conn"] -> prepare("INSERT INTO players (gameID, player1, player2, player3, player4, player5) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("isssss",
                                $gameID,
                                $_POST["gameplayer1"],
                                $_POST["gameplayer2"],
                                $_POST["gameplayer3"],
                                $_POST["gameplayer4"],
                                $_POST["gameplayer5"]);
        break;

    case '6':
        $stmt = $_SESSION["conn"] -> prepare("INSERT INTO players (gameID, player1, player2, player3, player4, player5, player6) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("issssss",
                                $gameID,
                                $_POST["gameplayer1"],
                                $_POST["gameplayer2"],
                                $_POST["gameplayer3"],
                                $_POST["gameplayer4"],
                                $_POST["gameplayer5"],
                                $_POST["gameplayer6"]);
        break;

    case '7':
        $stmt = $_SESSION["conn"] -> prepare("INSERT INTO players (gameID, player1, player2, player3, player4, player5, player6, player7) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("isssssss",
                                $gameID,
                                $_POST["gameplayer1"],
                                $_POST["gameplayer2"],
                                $_POST["gameplayer3"],
                                $_POST["gameplayer4"],
                                $_POST["gameplayer5"],
                                $_POST["gameplayer6"],
                                $_POST["gameplayer7"]);
        break;

    case '8':
        $stmt = $_SESSION["conn"] -> prepare("INSERT INTO players (gameID, player1, player2, player3, player4, player5, player6, player7, player8) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("issssssss",
                                $gameID,
                                $_POST["gameplayer1"],
                                $_POST["gameplayer2"],
                                $_POST["gameplayer3"],
                                $_POST["gameplayer4"],
                                $_POST["gameplayer5"],
                                $_POST["gameplayer6"],
                                $_POST["gameplayer7"],
                                $_POST["gameplayer8"]);
        break;

    default:
        # code...
        break;
}

if ($stmt -> execute()) {
    $_SESSION["conn"] -> commit();
    header("Location: /gm.php?gameID=$gameID");
    exit;
} else {
    die("an unexpected error occured");
}


$stmt -> close();
mysqli_close($conn);
?>