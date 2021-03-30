-- evaluation exercice 1
drop DATABASE if exists bddexo1;

CREATE DATABASE bddexo1;

USE bddexo1; 

CREATE TABLE produit(
    pro_num int NOT NULL,
    pro_libelle varchar(255) NOT NULL,
    pro_description varchar(255) NOT NULL,
    PRIMARY KEY (pro_num)
) MOTEUR = INNODB;

CREATE TABLE est_compose(
    com_num int NOT NULL,
    pro_num int NOT NULL,
    est_qte int NOT NULL,
     FOREIGN KEY (com_num) REFERENCES Commande(com_num),
    FOREIGN KEY (pro_num) REFERENCES produit(pro_num)
) MOTEUR = INNODB;

CREATE TABLE Commande(
    com_num int NOT NULL,
    cli_num int NOT NULL,
    com_date DATETIME NOT NULL,
    com_obs varchar(255) NOT NULL,
    PRIMARY KEY (com_num),
    FOREIGN KEY (cli_num) REFERENCES client (cli_num)
) MOTEUR = INNODB;

CREATE TABLE client(
    cli_num int NOT NULL,
    cli_nom varchar(255) NOT NULL,
    cli_adresse varchar(255) NOT NULL,
    cli_tel varchar(255) NOT NULL,
    PRIMARY KEY (cli_num)
) MOTEUR = INNODB;

CREATE INDEX bddexo1 ON client (cli_nom);
SHOW INDEX from client

