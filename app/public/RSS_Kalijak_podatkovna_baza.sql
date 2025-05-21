CREATE DATABASE IF NOT EXISTS RSS_Kalijak;
USE RSS_Kalijak;

DROP USER IF EXISTS 'liza'@'127.0.0.1';
CREATE USER 'liza'@'127.0.0.1' IDENTIFIED BY 'geslo1';
GRANT ALL PRIVILEGES ON RSS_Kalijak.* TO 'liza'@'127.0.0.1';

DROP USER IF EXISTS 'readonly'@'127.0.0.1'; 
CREATE USER 'readonly'@'127.0.0.1' IDENTIFIED BY 'geslo2';
GRANT SELECT ON *.* TO 'readonly'@'127.0.0.1';

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS posta;
CREATE TABLE posta(
	ID_posta INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    kraj VARCHAR(45) NOT NULL,
    postna_st INT(4) NOT NULL
);

DROP TABLE IF EXISTS naslov;
CREATE TABLE naslov(
	ID_naslov INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    ulica VARCHAR(145) NOT NULL,
    hisna_st VARCHAR(45) NOT NULL,	
	TK_posta INT NOT NULL
);

DROP TABLE IF EXISTS kupec;
CREATE TABLE kupec(
	ID_kupec INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    ime VARCHAR(145) NOT NULL,
    priimek VARCHAR(145) NOT NULL,
    email VARCHAR(300) NOT NULL,
    telefonska_st VARCHAR(145) NOT NULL,
    TK_naslov INT NOT NULL
);

DROP TABLE IF EXISTS nacin_placila;
CREATE TABLE nacin_placila(
	ID_nacin_placila INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    ime_na_kartici VARCHAR(300) NOT NULL,
    st_kartice INT NOT NULL,
    datum_poteka VARCHAR(5) NOT NULL,
    CVV INT(3) NOT NULL
);

DROP TABLE IF EXISTS narocilo;
CREATE TABLE narocilo(
	ID_narocilo INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    st_narocila INT NOT NULL,
    datum_oddaje_narocila DATETIME NOT NULL,
    TK_kupec INT NOT NULL,
    TK_nacin_placila INT NOT NULL
);


SET FOREIGN_KEY_CHECKS=1;
ALTER TABLE naslov ADD CONSTRAINT naslov_posta FOREIGN KEY(TK_posta) REFERENCES posta(ID_posta);
ALTER TABLE kupec ADD CONSTRAINT kupec_naslov FOREIGN KEY(TK_naslov) REFERENCES naslov(ID_naslov);
ALTER TABLE narocilo ADD CONSTRAINT narocilo_kupec FOREIGN KEY(TK_kupec) REFERENCES kupec(ID_kupec);
ALTER TABLE narocilo ADD CONSTRAINT narocilo_nacin_placila FOREIGN KEY(TK_nacin_placila) REFERENCES nacin_placila(ID_nacin_placila);