<?php
require_once 'config.php';

//Liest jeden radio button aus POST aus 
//isset prüft ob Wert gesendet wurde (ob radio checked ist)
//int castet Wert zu einem Integer - stellt sicher dass keine Strings reinkommen -> Stichwort: defensive Programmierung
// Falls nicht gesetzt = null 
$f1 = isset($_POST['f1']) ? (int)$_POST['f1'] : null;
$f2 = isset($_POST['f2']) ? (int)$_POST['f2'] : null;
$f3 = isset($_POST['f3']) ? (int)$_POST['f3'] : null;
$f4 = isset($_POST['f4']) ? (int)$_POST['f4'] : null;
$f5 = isset($_POST['f5']) ? (int)$_POST['f5'] : null;

//Wenn Wert null ist: Fehler zurück ans Formular
if ($f1 === null || $f2 === null || $f3 === null || $f4 === null || $f5 === null) {
    header("Location: tracking.php?error=leer");
    exit;
}

//Prepares Statement mit allen 5 Werten + Zeitstempel  
$stmt = $pdo->prepare("
    INSERT INTO mindnote_tracking_db (date, f1, f2, f3, f4, f5)
    VALUES (NOW(), :f1, :f2, :f3, :f4, :f5)
");

$stmt->execute([
    ':f1' => $f1,
    ':f2' => $f2,
    ':f3' => $f3,
    ':f4' => $f4,
    ':f5' => $f5,
]);

header("Location: tracking.php?success=1");
exit;
?>