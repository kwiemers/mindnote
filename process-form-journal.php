<?php
require_once 'db.php';

//holt Journal-Text aus POST-Request + Fallback auf leeren Strink falls nicht gesetzt
//trim entfernt Leerzeichen/Zeilenumbrüche am Anfang und Ende  
$text = trim($_POST['journal-input'] ?? '');

//Wenn Text leer ist: zurück zur journal.php mit Fehlerparameter in URL 
if ($text === '') {
    header("Location: journal.php?error=leer");
    exit;
}

//Prepares Statement zur Sicherung von SQL-Injektionen 
//NOW = Zeitstempel der aktuellen Serverzeit
$stmt = $pdo->prepare("INSERT INTO mindnote_journal_db (`text`, `date`) VALUES (:text, NOW())");
$stmt->execute([':text' => $text]);


//Nach erfolgreichem speichern: zurück zu journal.php mit Erfolgsparameter
header("Location: journal.php?success=1");
exit;
?>
