<?php
require 'db_connection.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['narocilo'])){
        $ime = $_POST['ime'];
        $priimek = $_POST['priimek'];
        $posta = $_POST['postna_stevilka'];
        $kraj = $_POST['kraj'];
        $naslov = $_POST['naslov'];
        $email = $_POST['email'];
        $telefonska_stevilka = $_POST['telefonska_stevilka'];
        $ime_na_kartici = $_POST['ime_na_kartici'];
        $stevilka_kartice = $_POST['stevilka_kartice'];
        $datum_poteka = $_POST['datum_poteka'];
        $cvv = $_POST['cvv'];
        
        $queryPosta = $conn->prepare("SELECT ID_posta FROM posta WHERE postna_st='$posta';");
        $queryPosta->execute();
        $queryPosta = $queryPosta->fetch(PDO::FETCH_ASSOC);
        $queryPosta = $queryPosta['ID_posta'];
       
        $queryNaslov = "INSERT INTO naslov(naslov, TK_posta) VALUES('$naslov',$queryPosta);";
        $conn->exec($queryNaslov);

        $queryNaslovID = $conn->lastInsertId();

        $queryPlacilo = "INSERT INTO nacin_placila(ime_na_kartici, st_kartice, datum_poteka, CVV)
        VALUES('$ime_na_kartici', '$stevilka_kartice', '$datum_poteka', '$cvv');";
        $conn->exec($queryPlacilo);
        $queryPlaciloID = $conn->lastInsertId();

        $queryKupec = "INSERT INTO kupec(ime, priimek, email, telefonska_st, TK_naslov, TK_nacin_placila)
        VALUES('$ime', '$priimek', '$email','$telefonska_stevilka',$queryNaslovID, $queryPlaciloID);";
        $conn->exec($queryKupec);
        $lastIdKupec = $conn->lastInsertId();

        $conn=null;
    }
    

}
?>