 <?php
    function multiplizieren($eingabeZahl1, $eingabeZahl2) {
        $ergebnis = $eingabeZahl1 * $eingabeZahl2;
        // Berechnung der Summe durch wiederholtes Addieren
        $summe = 0;
        for ($i = 1; $i <= $eingabeZahl2; $i++) {
            $summe += $eingabeZahl1;
        }
        return array('produkt' => $ergebnis, 'summe' => $summe);
    }

    function dezimalZuBinaer($zahl) {
        return decbin($zahl);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $zahl1 = $_POST['zahl1'];
        $zahl2 = $_POST['zahl2'];

        if (is_numeric($zahl1) && is_numeric($zahl2)) {
            $resultate = multiplizieren($zahl1, $zahl2);
            echo "<h2>Ergebnis: {$resultate['produkt']}</h2>";
            echo "<h2>Summe durch wiederholtes Addieren: {$resultate['summe']}</h2>";
            echo "<h2>Summe als Binärzahl: " . dezimalZuBinaer($resultate['summe']) . "</h2>";
        } else {
            echo "<h2>Bitte geben Sie gültige Zahlen ein.</h2>";
        }
    }
?>