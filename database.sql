USE ok;
CREATE TABLE voitures (
  `id` INT AUTO_INCREMENT NOT NULL,
  `marque` VARCHAR (50) NOT NULL,
  `modele` VARCHAR(50) NOT NULL,
  `annee` VARCHAR(4) NOT NULL,
  `img` VARCHAR(50) NOT NULL,
  PRIMARY KEY(`id`)
);

INSERT INTO voitures
(`marque`, `modele`, `annee`, `img`)
VALUES
('Fiat', '500', '', ''),
('MGB', 'Roadster', '', ''),
('Volkswagen', 'Combi', '', ''),
('Porsche', '911', '', ''),
('', 'Riviera', '', ''),
('', '', '', '');