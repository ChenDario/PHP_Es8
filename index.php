<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS Link -->
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP ES8 </title>
</head>
<body>
    <h2>Inserisci Punteggio Videogioco</h2>

    <form action="pages/save_score.php" method="post">
        <label for="game">Nome Videogioco:</label>
        <input type="text" id="game" name="game" required>
        <br>
        <label for="score">Punteggio:</label>
        <input type="number" id="score" name="score" required>
        <br>
        <button type="submit">Salva Punteggio</button>
    </form>

    <br>
    <a href="pages/summary.php">Visualizza Riepilogo</a>

</body>
</html>