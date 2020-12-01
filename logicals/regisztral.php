<?php

//Úrlapon ezek a kitöltendő mezők vannak
if(isset($_POST['felhasznalo']) && isset($_POST['jelszo']) && isset($_POST['vezeteknev']) && isset($_POST['utonev'])) {
    try {

//Adatb. kapcsolat létrehozása
        $dbh = new PDO('mysql:host=localhost;dbname=labor7', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));


//adatb. nyelvi beállítása
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        


// Létezik már a felhasználói név?
        $sqlSelect = "select id from felhasznalok where bejelentkezes = :bejelentkezes";
            $sth = $dbh->prepare($sqlSelect);
            $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo']));
        
// Foglalt név esetén mit írjon ki       
            if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $uzenet = "A felhasználói név már foglalt!";
            $ujra = "true";
        }
        else {          

// Ha nem létezik, akkor regisztráljuk
            $sqlInsert = "insert into felhasznalok(id, csaladi_nev, uto_nev, bejelentkezes, jelszo)
                          values(0, :csaladinev, :utonev, :bejelentkezes, :jelszo)";


//Adatok importálása az adatbázisba
            $stmt = $dbh->prepare($sqlInsert); 
            $stmt->execute(array(':csaladinev' => $_POST['vezeteknev'], ':utonev' => $_POST['utonev'],
                                 ':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => sha1($_POST['jelszo']))); 
            
            

// Sikeres regisztrációs uzi
            if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = "A regisztrációja sikeres.<br>Azonosítója: {$newid}";                     
                $ujra = false;
            }

//Sikertelen reg. uzi
            else {
                $uzenet = "A regisztráció nem sikerült.";
                $ujra = true;
            }
        }
    }


//Hibaüzenet:

    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
        $ujra = true;
    }      
}
else {
    header("Location: .");
}
?>