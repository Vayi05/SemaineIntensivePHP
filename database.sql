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
  `nbrPossesseur` VARCHAR(5) NOT NULL,
  `vendeur` VARCHAR(50) NOT NULL,
  `etat` VARCHAR(50) NOT NULL,
  `quantite` VARCHAR(2) NOT NULL,
  `img` VARCHAR(50) NOT NULL,
  PRIMARY KEY(`id`)
);

INSERT INTO `voitures`
(`marque`, `modele`, `couleur`, `annee`, `gamme`, `paysDorigine`, `immatriculation`, `kilometrage`, `nbrPossesseur`, `vendeur`, `etat`, `quantite`, `img`)
VALUES
('Fiat', '500', 'Rouge', '', '', '1968', '500-500C-595', 'france', 'AB-344-CA', '27133', '4', 'Dupont', 'occasion', '2', 'FIAT 500.jpg'),
('MGD B', 'Roadster', '', 'bleu marine', '1990', 'classe C cabriolet-classe S cabriolet-SLC', 'allemagne', 'AA-725-AD', '31229', '2', 'Dunkerque', 'occasion', '1', 'MGD B ROADSTER.jpg'),
('Volkswagen', 'Combi', '', 'jaune', '1947', 'polo-golf-up', 'allemagne', 'AA-123-AA', '12340', '3', 'Chapon', 'occasion', '3', 'VOLSKWAGEN COMBI.jpg'),
('Porsche', '911', '', 'blanche', '1974', 'boxster-cayman-carreira', 'france', 'DE-307-SU', '21220', '3', 'Texeira', 'occasion', '1', 'PORSCHE 911.jpg'),
('Buik', 'Riviera', '', 'taupe', '1977', 'century-regal-cascada', 'americain', 'AB-405-HG', '11243', '2', 'blok', 'occasion', '1', 'BUIK RIVIERA.jpg'),
('Ferrari', '335 S', '', 'rouge', '1957', 'gtb-spider-lusso', 'italie', 'BL-654-LG', '7560', '1', 'Rossi', 'occasion', '2', 'FERRARI 335 S.jpg'),
('Rolls Royce', 'Phantom', '', 'noir', '1975', 'camargue-corniche-shadow', 'anglais', 'AA-555-AA', '10144', '1', 'Blandford', 'occasion', '2', 'ROLLS ROYCE PHANTOM.jpg');
