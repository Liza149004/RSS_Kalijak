        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<p><span class='fw-bold'>Ime:</span> " . htmlspecialchars($_POST['ime']) . "</p>";
            echo "<p><span class='fw-bold'>Priimek:</span> " . htmlspecialchars($_POST['priimek']) . "</p>";
            echo "<p><span class='fw-bold'>Naslov:</span> " . htmlspecialchars($_POST['naslov']) . "</p>";
            echo "<p><span class='fw-bold'>Poštna številka:</span> " . htmlspecialchars($_POST['postna_stevilka']) . "</p>";
            echo "<p><span class='fw-bold'>Kraj:</span> " . htmlspecialchars($_POST['kraj']) . "</p>";
            echo "<p><span class='fw-bold'>Email:</span> " . htmlspecialchars($_POST['email']) . "</p>";
            echo "<p><span class='fw-bold'>Telefonska številka:</span> " . htmlspecialchars($_POST['telefonska_stevilka']) . "</p>";
            echo "<hr>";
            echo "<p><span class='fw-bold'>Ime na kartici:</span> " . htmlspecialchars($_POST['ime_na_kartici']) . "</p>";
            echo "<p><span class='fw-bold'>Številka kartice:</span> " . htmlspecialchars($_POST['stevilka_kartice']) . "</p>";
            echo "<p><span class='fw-bold'>Datum poteka:</span> " . htmlspecialchars($_POST['datum_poteka']) . "</p>";
            echo "<p><span class='fw-bold'>CVV:</span> " . htmlspecialchars($_POST['cvv']) . "</p>";
        } else {
            echo "<p>Ni podatkov za izpis.</p>";
        }
        ?>