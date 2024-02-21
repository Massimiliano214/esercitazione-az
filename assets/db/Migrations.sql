CREATE TABLE users (
id int(11) NOT NULL AUTO_INCREMENT,
nome varchar(255) NOT NULL,
cognome varchar(255) NOT NULL,
email varchar(255) NOT NULL,
codice_tessera varchar(255) NOT NULL,
note text DEFAULT NULL,
livello int(11) DEFAULT NULL,
PRIMARY KEY (id)
);
