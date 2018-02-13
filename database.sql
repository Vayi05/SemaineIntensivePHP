USE `ok`;
CREATE TABLE `voitures` (
  `id` INT AUTO_INCREMENT NOT NULL,
  `marque` VARCHAR (50) NOT NULL,
  `modele` VARCHAR(50) NOT NULL,
  `couleur` VARCHAR(50) NOT NULL,
  `annee` VARCHAR(10) NOT NULL,
  `gamme` VARCHAR(50) NOT NULL,
  `paysDorigine` VARCHAR(50) NOT NULL,
  `immatriculation` CHAR(9) NOT NULL,
  `kilometrage` VARCHAR(10) NOT NULL,
  `nbrPocesseur` VARCHAR(5) NOT NULL,
  `vendeur` VARCHAR(50) NOT NULL,
  `etat` VARCHAR(50) NOT NULL,
  `quantite` VARCHAR(2) NOT NULL,
  `img` VARCHAR(50) NOT NULL,
  PRIMARY KEY(`id`)
);

INSERT INTO `voitures`
(`marque`, `modele`, `couleur`, `annee`, `gamme`, `paysDorigine`, `immatriculation`, `kilometrage`, `nbrPocesseur`, `vendeur`, `etat`, `quantite`, `img`)
VALUES
('Fiat', '500', 'Rouge', '', '',  'FIAT 500.jpg'),
('MGD B', 'Roadster', '', 'MGD B ROADSTER.jpg'),
('Volkswagen', 'Combi', '', 'VOLSKWAGEN COMBI.jpg'),
('Porsche', '911', '', 'PORSCHE 911.jpg'),
('Buik', 'Riviera', '', 'BUIK RIVIERA.jpg'),
('Ferrari', '335 S', '', 'FERRARI 335 S.jpg'),
('Rolls Royce', 'Phantom', '', 'ROLLS ROYCE PHANTOM.jpg');
