<?php
$usn = "root";
$geslo = "";
$baza = "RSS_Kalijak";


try {
    $conn = new PDO("mysql:host=mysql; dbname=$baza", $usn, $geslo);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Povezava neuspešna: " . $e->getMessage();
 }
?>