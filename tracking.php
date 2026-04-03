<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tracking</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grand+Hotel&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!--Wenn in URL '?success=..' steht, dann erfolgreich und alert; Fehler bei fehlenden checked radio buttons-->

    <?php if (isset($_GET['success'])): ?>
    <script>alert('Eintrag gespeichert!');</script>
    <?php endif; ?>

    <?php if (isset($_GET['error'])): ?>
        <script>alert('Bitte alle Fragen beantworten!');</script>
    <?php endif; ?>

    <header>
        <nav class="navbar">
            <div class="logo">mindnote</div>
            <ul class="nav-links">
                <li><a href="index.php">home</a></li>
                <li><a href="journal.php">journal</a></li>
                <li><a href="tracking.php">tracking</a></li>
            </ul>
        </nav>
    </header> 

    <h1 class="headline1">
        tracking
    </h1>

    <!--Formular wird an Verarbeitungsdatei process-form gesendet-->
    <form action="process-form-tracking.php" method="post">

        <!--Fragen-Div-->
        <div class="div-form">

            <!--Frage 1: Wie fühlst du dich heute?-->
            <div class="div-frage">
                <div>
                    <p>1: Wie fühlst du dich heute?</p>
                </div>
                <div class="div-antwort">
                    <div class="radio-option">
                        <input type="radio" name="f1" id="f1_1" value="1">
                        <label for="f1_1">sehr schlecht</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f1" id="f1_2" value="2">
                        <label for="f1_2">schlecht</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f1" id="f1_3" value="3">
                        <label for="f1_3">neutral</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f1" id="f1_4" value="4">
                        <label for="f1_4">gut</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f1" id="f1_5" value="5">
                        <label for="f1_5">sehr gut</label>
                    </div>
                </div>
            </div>

            <!--Frage 2: Wie war dein Schlaf heute Nacht?-->
            <div class="div-frage">
                <div>
                    <p>2: Wie war dein Schlaf heute Nacht?</p>
                </div>
                <div class="div-antwort">
                    <div class="radio-option">
                        <input type="radio" name="f2" id="f2_1" value="1">
                        <label for="f2_1">sehr schlecht</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f2" id="f2_2" value="2">
                        <label for="f2_2">schlecht</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f2" id="f2_3" value="3">
                        <label for="f2_3">neutral</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f2" id="f2_4" value="4">
                        <label for="f2_4">gut</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f2" id="f2_5" value="5">
                        <label for="f2_5">sehr gut</label>
                    </div>
                </div>
            </div>

            <!--Frage 3: Wie geht es dir emotional?-->
            <div class="div-frage">
                <div>
                    <p>3: Wie geht es dir emotional?</p>
                </div>
                <div class="div-antwort">
                    <div class="radio-option">
                        <input type="radio" name="f3" id="f3_1" value="1">
                        <label for="f3_1">sehr schlecht</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f3" id="f3_2" value="2">
                        <label for="f3_2">schlecht</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f3" id="f3_3" value="3">
                        <label for="f3_3">neutral</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f3" id="f3_4" value="4">
                        <label for="f3_4">gut</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f3" id="f3_5" value="5">
                        <label for="f3_5">sehr gut</label>
                    </div>
                </div>
            </div>

            <!--Frage 4: Wie geht es dir körperliich?-->
            <div class="div-frage">
                <div>
                    <p>4: Wie geht es dir körperlich?</p>
                </div>
                <div class="div-antwort">
                    <div class="radio-option">
                        <input type="radio" name="f4" id="f4_1" value="1">
                        <label for="f4_1">sehr schlecht</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f4" id="f4_2" value="2">
                        <label for="f4_2">schlecht</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f4" id="f4_3" value="3">
                        <label for="f4_3">neutral</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f4" id="f4_4" value="4">
                        <label for="f4_4">gut</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f4" id="f4_5" value="5">
                        <label for="f4_5">sehr gut</label>
                    </div>
                </div>
            </div>

            <!--Frage 5: Hast du grad deine Periode?-->
            <div class="div-frage">
                <div>
                    <p>5: Hast du grad deine Periode?</p>
                </div>
                <div class="div-antwort">
                    <div class="radio-option">
                        <input type="radio" name="f5" id="f5_1" value="1">
                        <label for="f5_1">ja</label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" name="f5" id="f5_2" value="2">
                        <label for="f5_2">nein</label>
                    </div>
                </div>
            </div>

            <!--Button Div-->
            <div class="div-button-tracking">

                <!--Lösch-Button im type="button" damit Formular nicht abgeschickt wird-->
                <button type="button" id="button-loeschen" class="button-tracking">
                    löschen
                </button>

                <!--Speicher-Button im type="submit" zum absenden des Formulars-->
                <button type="submit" class="button-tracking">
                    speichern
                </button>
            </div>

        </div>
    </form>

    <script>
        <!--holt alle radio inputs und setzt sie auf nicht checked wenn löschen button geklickt wird-->
        document.getElementById('button-loeschen').addEventListener('click', function() {
            const radios = document.querySelectorAll('input[type="radio"]');
            radios.forEach(function(radio) {
                radio.checked = false;
            });
        });
    </script>
</body>
</html>