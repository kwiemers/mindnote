<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mindnote</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grand+Hotel&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>


<body>

    <?php
    require_once 'db.php';

    $stmt = $pdo->query("SELECT text, date FROM mindnote_journal_db ORDER BY date DESC LIMIT 1");
    $letzterEintrag = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt = $pdo->query("
        SELECT
            ROUND(AVG(f1), 1) AS avg_f1,
            ROUND(AVG(f2), 1) AS avg_f2,
            ROUND(AVG(f3), 1) AS avg_f3,
            ROUND(AVG(f4), 1) AS avg_f4
        FROM mindnote_tracking_db
    ");
    $durchschnitt = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>


    <header>
        <!-- Navigatiosbar global-->
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
        home
    </h1>

    <div class="card-main-div">   
        <!--Karte mit letztem Journal-Eintrag anzeigen--> 
        <div class="card-latest-entries">
          <div class="head-latest-entries">latest entries</div>
          <div class="content-latest-entries">
            <?php if ($letzterEintrag): ?>
                <p class="entry-date"><?= date('d.m.Y', strtotime($letzterEintrag['date'])) ?></p>
                <p class="entry-text"><?= htmlspecialchars($letzterEintrag['text']) ?></p>
            <?php else: ?>
                <p>Noch keine Einträge vorhanden.</p>
            <?php endif; ?>
          </div>
        </div>

        <!--Karte mit einem Durchschnittswert der hinterlegten Tracking-Daten anzeigen-->
        <div class="card-average-mind">
          <div class="head-average-mind">average mind</div>
          <div class="content-average-mind">
            <?php if ($durchschnitt['avg_f1'] !== null): ?>
                <p>Stimmung: <?= $durchschnitt['avg_f1'] ?? '-' ?> / 5</p>
                <p>Schlaf: <?= $durchschnitt['avg_f2'] ?? '-' ?> / 5</p>
                <p>emotional: <?= $durchschnitt['avg_f3'] ?? '-' ?> / 5</p>
                <p>körperlich: <?= $durchschnitt['avg_f4'] ?? '-' ?> / 5</p>
            <?php else: ?>
                <p>Noch keine Tracking-Daten vorhanden.</p>
            <?php endif; ?>
          </div>
        </div>
    </div>
</body>
</html>