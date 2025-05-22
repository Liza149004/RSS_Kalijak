CREATE DATABASE IF NOT EXISTS RSS_Kalijak;
USE RSS_Kalijak;

DROP USER IF EXISTS 'admin'@'127.0.0.1';
CREATE USER 'admin'@'127.0.0.1' IDENTIFIED BY 'geslo1';
GRANT ALL PRIVILEGES ON RSS_Kalijak.* TO 'admin'@'127.0.0.1';

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

INSERT INTO posta (kraj, postna_st) VALUES
('Maribor', 2000),
('Ljubljana', 1000),
('Celje', 3000),
('Koper', 6000),
('Ptuj', 2250);

INSERT INTO naslov (ulica, hisna_stevilka, TK_posta) VALUES
('Trg mladosti', '12', 5),
('Slovenska ulica', '10', 1),
('Obala', '7', 4),
('Glavni trg', '5', 2),
('Cankarjeva cesta', '22', 3);

INSERT INTO kupec (ime, priimek, email, telefonska_st, TK_naslov) VALUES
('Ana', 'Novak', 'ana.novak@gmail.com', '036458995', 1),
('Matej', 'Kovač', 'matej.kovaček@gmail.com', '056335968', 2),
('Miha', 'Horvat', 'horvat.miha@gmail.com', '033489678', 3),
('Luka', 'Zupančič', 'neotonzupancic@gmail.com', '015689447', 4),
('Klavdija', 'Želon', 'klavdek@gmail.com', '078644593',5);

INSERT INTO nacin_placila (ime_na_kartici, st_kartice, datum_poteka, CVV) VALUES 
('Luka Zupančič', '6623889531674529', '11/29', '763' ),
('Ana Novak', '1236786245936723', '09/26', '245' ),
('Matej Kovač', '4693568132976433', '02/28', '196' ),
('Klavdija Želon', '9736157932648637', '10/26', '496' ),
('Miha Horvat', '7913552346679138', '07/27', '862' );

INSERT INTO narocilo (st_narocila, datum_oddaje_narocila, TK_kupec, TK_nacin_placila) VALUES
('000001', '14/08/2024 14:23', 5 , 4),
('000002', '15/10/2024 15:15', 1 , 2),
('000003', '01/01/2025 00:01', 3 , 5),
('000004', '21/03/2025 02:45', 4 , 1),
('000005', '31/05/2025 11:39', 2 , 3);