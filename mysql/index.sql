drop DATABASE if exists formationsql;

CREATE DATABASE formationsql;

USE formationsql; 

CREATE TABLE station(
    sta_num_station int NOT NULL,
    sta_nom_station Varchar (255) NOT NULL
    ,CONSTRAINT station_PK PRIMARY KEY (sta_num_station)
);

CREATE TABLE hotel(
    hot_capacite SMALLINT NOT NULL,
    hot_categorie varchar (255) NOT NULL,
    hot_nom varchar (255) NOT NULL,
    hot_adresse varchar (255) NOT NULL,
    hot_num TINYINT NOT NULL ,
    hot_num_station TINYINT NOT NULL,
    PRIMARY KEY (hot_num),
    FOREIGN KEY (hot_num_station) REFERENCES station(sta_num_station)
);

CREATE TABLE chambre(
    cha_capacite TINYINT NOT NULL,
    cha_degre SMALLINT NOT NULL,
    cha_exposition varchar (255) NOT NULL,
    cha_type varchar(255) NOT NULL,
    cha_num TINYINT NOT NULL,
    cha_num_hotel TINYINT NOT NULL,
    PRIMARY KEY (cha_num),
    FOREIGN KEY (cha_num_hotel) REFERENCES hotel(hot_num)
);

CREATE TABLE client(
    cli_adresse varchar (255) NOT NULL,
    cli_nom varchar (255) NOT NULL,
    cli_prenom varchar (255) NOT NULL,
    cli_num TINYINT NOT NULL,
    PRIMARY KEY (cli_num)
);

CREATE TABLE reservation(
    res_num TINYINT NOT NULL,
    res_num_client TINYINT NOT NULL,
    res_date_debut DATE NOT NULL,
    res_date_fin DATE NOT NULL,
    res_date DATE NOT NULL,
    res_montant SMALLINT NOT NULL,
    res_prix SMALLINT NOT NULL,
    FOREIGN KEY (res_num) REFERENCES chambre(hot_num),
    FOREIGN KEY (res_num_client) REFERENCES client(cli_num)
);
