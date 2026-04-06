<?php
try {
    //Verbindung zur MySQL-DB herstellen
    $pdo = new PDO("mysql:host=beispiel-host;dbname=beispiel-db;charset=utf8", "root", "");

    //Fehler sollen ausgeworfen werden, statt sill zu scheitern 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //bei Fehlschlagen: Fehlermeldung und Script stoppen
} catch (PDOException $e) {
    die("Datenbankverbindung fehlgeschlagen: " . $e->getMessage());
}