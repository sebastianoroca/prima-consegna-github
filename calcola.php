<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Risultato Calcolo Rettangolo</title>
</head>
<body>

    <h2>Risultato del Calcolo</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Acquisizione dei valori dal form
        $base = floatval($_POST['base']);
        $altezza = floatval($_POST['altezza']);

        // Controllo che i valori inseriti siano positivi
        if ($base > 0 && $altezza > 0) {
            // Calcolo di area e perimetro
            $area = $base * $altezza;
            $perimetro = 2 * ($base + $altezza);

            // Stampa dei risultati
            echo "<p><strong>Base inserita:</strong> $base</p>";
            echo "<p><strong>Altezza inserita:</strong> $altezza</p>";
            echo "<p><strong>Area del rettangolo:</strong> $area</p>";
            echo "<p><strong>Perimetro del rettangolo:</strong> $perimetro</p>";
        } else {
            echo "<p style='color:red;'>Per favore inserisci valori maggiori di zero.</p>";
        }
    } else {
        echo "<p>Nessun dato inviato. Compila prima il modulo in <a href='index.html'>index.html</a>.</p>";
    }
    ?>

    <br>
    <a href="index.html">Torna indietro</a>

</body>
</html>