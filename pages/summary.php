<?php
session_start();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riepilogo Punteggi</title>
</head>
<body>
    <h2>Riepilogo Punteggi</h2>
    <?php
    if (!isset($_SESSION['scores']) || empty($_SESSION['scores'])) {
        echo "<p>Nessun punteggio inserito.</p>";
    } else {
        echo "<ul>";
        $maxScore = -1;
        $topGame = "";

        foreach ($_SESSION['scores'] as $game => $score) {
            echo "<li>$game: $score</li>";

            if ($score > $maxScore) {
                $maxScore = $score;
                $topGame = $game;
            }
        }
        echo "</ul>";

        echo "<h3>Punteggio massimo:</h3>";
        echo "<p>Videogioco con punteggio massimo: <strong>$topGame</strong> con $maxScore punti</p>";
    }
    ?>
    <center>
    <br>
    <a href="../index.php">Torna alla pagina di inserimento</a>
    <br>
    <a href="reset.php">Reset dei punteggi</a>
    </center>
</body>
</html>
