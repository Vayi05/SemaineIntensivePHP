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
('Fiat', '500', '', 'FIAT 500.jpg'),
('MGD B', 'Roadster', '', 'MGD B ROADSTER.jpg'),
('Volkswagen', 'Combi', '', 'VOLSKWAGEN COMBI.jpg'),
('Porsche', '911', '', 'PORSCHE 911.jpg'),
('Buik', 'Riviera', '', 'BUIK RIVIERA.jpg'),
('Ferrari', '335 S', '', 'FERRARI 335 S.jpg'),
('Rolls Royce', 'Phantom', '', 'ROLLS ROYCE PHANTOM.jpg');
