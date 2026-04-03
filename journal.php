<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>journal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grand+Hotel&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!--Prüfen ob in der URL '?success=..' steht (nach dem speichern) und entsprechend alert anzeigen-->
    <?php if (isset($_GET['success'])): ?>
    <script>alert('Eintrag gespeichert!');</script>
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
        journal
    </h1>

    <!--Formular sendet Daten per POST method an die Verarbeitungsdatei process-form-->
    <form action="process-form-journal.php" method="post">
        <div class="card-input-main">
            <div class="card-input-entries">
                <div class="head-input-entries">Erzähl mir etwas über deinen Tag..</div>

                <!--Texteingabefeld für Journal-Eintrag-->
                <div class="textinput-area">
                  <textarea name="journal-input" id="journal-input" rows="10" cols="80"></textarea>
                </div>

                <!--Durch submit wird das Formular abgeschickt-->
                <button type="submit" class="button-journal">
                  speichern
                </button>
            </div>
        </div>
    </form>


</body>
</html>