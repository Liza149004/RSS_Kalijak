<?php
include 'db_connection.php';

$queryAll = "SELECT ime, priimek, email, kraj, naslov, postna_st, telefonska_st, ime_na_kartici, st_kartice, datum_poteka, CVV
            FROM kupec, naslov, posta, nacin_placila
            WHERE TK_naslov = ID_naslov AND TK_posta = ID_posta AND TK_nacin_placila = ID_nacin_placila;";

$stmt = $conn->prepare($queryAll);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $izpis){
    include 'vsi_podatki_db.php';
}


$conn=null;
?>