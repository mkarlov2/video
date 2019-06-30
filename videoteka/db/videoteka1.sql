/*ZA IZRADU BAZE 1 bod*/

CREATE DATABASE IF NOT EXISTS videoteka1 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
DROP DATABASE IF EXISTS videoteka1;

USE videoteka1;

SHOW TABLES;

/* ZA IZRADU TABLICE FILMOVI */

CREATE TABLE IF NOT EXISTS filmovi 
(id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
naziv VARCHAR(50) NOT NULL) ENGINE =InnoDB;

DESCRIBE filmovi;

/* ZA IZRADU TABLICE ČLANOVI */

CREATE TABLE IF NOT EXISTS clanovi
(id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
ime VARCHAR(50) NOT NULL,
prezime VARCHAR(50) NOT NULL) ENGINE =InnoDB;

DESCRIBE clanovi;

/* ZA IZRADU TABLICE POSUDBE */

CREATE TABLE IF NOT EXISTS posudbe
(clanovi_id INT UNSIGNED NOT NULL,
filmovi_id INT UNSIGNED NOT NULL,
datum_posudbe DATETIME,
datum_povratka DATETIME) ENGINE =InnoDB;

role_id INT UNSIGNED NOT NULL

ALTER TABLE posudbe
    DROP FOREIGN KEY clanovi_id,
    DROP FOREIGN KEY filmovi_id;

ALTER TABLE users ADD 
FOREIGN KEY(clanovi_id) 
REFERENCES clanovi(id)
ON DELETE CASCADE;

ALTER TABLE users ADD 
FOREIGN KEY(filmovi_id) 
REFERENCES filmovi(id)
ON DELETE CASCADE;

DESCRIBE posudbe;

/* ZA ISPUNITI TABLICU FILMOVI */

INSERT INTO filmovi (naziv) VALUE ('Gospodar prstenova'),('Hobit'),('Harry Potter');

SELECT * FROM filmovi;

/* ZA ISPUNITI TABLICU ČLANOVI */

INSERT INTO clanovi (ime, prezime) VALUE ('Ana', 'Anić'),('Pero', 'Perić'),('Ivo', 'Ivić');

SELECT * FROM clanovi;

/* ZA ISPUNITI TABLICU POSUDBE */

INSERT INTO posudbe (clanovi_id, filmovi_id, datum_posudbe, datum_povratka) VALUE (3,3,'2019-5-5 15:22:36',NULL), (1,1,'2019-5-9 18:33:25','2019-5-20 11:43:32'), (2,2,'2019-5-17 17:27:13','2019-5-23 16:37:29');

SELECT * FROM posudbe;

/*UPIT kada nije vraćen film ime i prezime*/

SELECT c.ime, c.prezime, p.datum_povratka
FROM clanovi c, posudbe p
WHERE p.clanovi_id = c.id AND p.datum_povratka IS NULL;


/*UPIT kada nije vraćen film i ime i prezime i koji film*/

SELECT c.ime, c.prezime, p.datum_povratka, f.naziv
FROM posudbe p
JOIN clanovi c ON p.clanovi_id = c.id
JOIN filmovi f ON p.filmovi_id = f.id
WHERE p.datum_povratka IS NULL;


