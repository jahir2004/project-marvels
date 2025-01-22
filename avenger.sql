
CREATE DATABASE avengers_infinity_war;

USE avengers_infinity_war;

-- Tabel voor de film
CREATE TABLE films (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titel VARCHAR(255) NOT NULL,
    release_datum DATE NOT NULL,
    regisseur VARCHAR(255),
    genre VARCHAR(100),
    duur INT, -- duur in minuten
    beschrijving TEXT
);

-- Tabel voor personages
CREATE TABLE personages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(255) NOT NULL,
    rol TEXT,
    film_id INT,
    FOREIGN KEY (film_id) REFERENCES films(id)
);

-- Tabel voor acteurs
CREATE TABLE acteurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(255) NOT NULL,
    geboortedatum DATE,
    nationaliteit VARCHAR(100)
);

-- Tabel voor personage-acteur relatie
CREATE TABLE personage_acteur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    personage_id INT,
    acteur_id INT,
    FOREIGN KEY (personage_id) REFERENCES personages(id),
    FOREIGN KEY (acteur_id) REFERENCES acteurs(id)
);

-- Tabel voor recensies
CREATE TABLE recensies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    film_id INT,
    beoordeling INT CHECK (beoordeling BETWEEN 1 AND 10),
    recensie TEXT,
    auteur VARCHAR(255),
    datum DATE,
    FOREIGN KEY (film_id) REFERENCES films(id)
);

-- Voeg de film toe
INSERT INTO films (titel, release_datum, regisseur, genre, duur, beschrijving)
VALUES ('Avengers: Infinity War', '2018-04-27', 'Anthony en Joe Russo', 'Actie, Avontuur, Sci-Fi', 149, 
'De Avengers en hun bondgenoten moeten alles opofferen om de machtige Thanos te verslaan.');

-- Voeg enkele personages toe
INSERT INTO personages (naam, rol, film_id)
VALUES 
('Iron Man', 'Leider van de Avengers', 1),
('Thanos', 'De belangrijkste antagonist', 1);

-- Voeg enkele acteurs toe
INSERT INTO acteurs (naam, geboortedatum, nationaliteit)
VALUES 
('Robert Downey Jr.', '1965-04-04', 'Amerikaans'),
('Josh Brolin', '1968-02-12', 'Amerikaans');

-- Koppel acteurs aan personages
INSERT INTO personage_acteur (personage_id, acteur_id)
VALUES 
(1, 1), -- Iron Man gespeeld door Robert Downey Jr.
(2, 2); -- Thanos gespeeld door Josh Brolin
