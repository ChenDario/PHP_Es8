<?php
session_start();

// Controllo se i dati sono stati inviati correttamente
if (isset($_POST['game']) && isset($_POST['score'])) {
    $game = trim($_POST['game']);
    $score = (int) $_POST['score'];

    if (!isset($_SESSION['scores'])) {
        $_SESSION['scores'] = [];
    }

    // Se il gioco esiste già, aggiorniamo solo se il nuovo punteggio è maggiore
    if (!isset($_SESSION['scores'][$game]) || $_SESSION['scores'][$game] < $score) {
        $_SESSION['scores'][$game] = $score;
    }
}

header("Location: ../index.php");
exit();
?>