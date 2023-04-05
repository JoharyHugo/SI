CREATE DATABASE SI;
USE SI;
DROP  DATABASE SI;

CREATE TABLE Info(
    id INT  AUTO_INCREMENT PRIMARY KEY ,
    Nom VARCHAR (20) ,
    Objet VARCHAR (20),
    Siege VARCHAR (20),
    Adresse VARCHAR (20),
    Nom_dirigeant VARCHAR (20),
    Logo VARCHAR(100),
    Mdp VARCHAR(50),
    Num_Identification_Fiscal DOUBLE ,
    Num_Statistique DOUBLE ,
    Num_Registre_Commerce DOUBLE ,
    Status VARCHAR (10),
    Date_Debut_exercice DATE ,
    Devise_Compte VARCHAR (10),
    Devise_Equivalence VARCHAR (10)
);

CREATE TABLE Plan_Comptable(
    id INT AUTO_INCREMENT PRIMARY KEY,
    Numero DOUBLE ,
    Nom VARCHAR(20)
);

CREATE TABLE tablecompte(
    id INT AUTO_INCREMENT PRIMARY KEY,
    Compte VARCHAR(20),
    Intitule VARCHAR(20)
);

CREATE TABLE Plan_Tiers(
    id INT AUTO_INCREMENT PRIMARY KEY,
    Type VARCHAR(10),
    Num VARCHAR(20),
    Intitule VARCHAR(20)
);

CREATE TABLE Journeaux(
    id INT AUTO_INCREMENT PRIMARY KEY,
    Code VARCHAR(15),
    Journeaux VARCHAR(30)
);

CREATE TABLE Journal(
    idJournal  INT  AUTO_INCREMENT PRIMARY KEY ,
    idSociete INT,
    Jour INT,
    Piece DOUBLE ,
    Reference VARCHAR(100),
    Compte INT,
    Compte_Tiers INT,
    Typage VARCHAR(20),
    Libelle VARCHAR(80),
    Devise VARCHAR(30),
    MontantDevise DOUBLE,
    Debit DOUBLE,
    Credit DOUBLE,
    FOREIGN KEY(idSociete) REFERENCES Info(id)
);
CREATE TABLE JournalTemp(
    idJournalTemp  INT  AUTO_INCREMENT PRIMARY KEY ,
    idSociete INT,
    Jour INT,
    Piece DOUBLE ,
    Reference VARCHAR(100),
    Compte INT,
    Compte_Tiers INT,
    Typage VARCHAR(20),
    Libelle VARCHAR(80),
    Devise VARCHAR(30),
    MontantDevise DOUBLE,
    Debit DOUBLE,
    Credit DOUBLE,
    FOREIGN KEY(idSociete) REFERENCES Info(id)
);


CREATE TABLE JournalTemporaire(
    idJournal INT AUTO_INCREMENT PRIMARY KEY,
    date INT,
    numeroPiece VARCHAR(20),
    PieceReference VARCHAR(20),
    CompteGenerale VARCHAR(20),
    CompteTiers VARCHAR(20),
    Libelle VARCHAR(35),
    Type VARCHAR(20),
    debit DOUBLE,
    credit DOUBLE,
    devise VARCHAR(20),
    Montant DOUBLE
);

CREATE TABLE AchatJournal(
    idAchat INT AUTO_INCREMENT PRIMARY KEY,
    date INT,
    numeroPiece VARCHAR(20),
    PieceReference VARCHAR(20),
    idCompteGenerale INT,
    FOREIGN KEY(idCompteGenerale) REFERENCES Plan_Comptable(id),
    idCompteTiers INT,
    FOREIGN KEY(idCompteTiers) REFERENCES Plan_Tiers(id),
    Libelle VARCHAR(35),
    debit DOUBLE,
    credit DOUBLE,
    devise DOUBLE
);

CREATE TABLE VenteJournal(
    idVente INT AUTO_INCREMENT PRIMARY KEY,
    date INT,
    numeroPiece VARCHAR(20),
    PieceReference VARCHAR(20),
    idCompteGenerale INT,
    FOREIGN KEY(idCompteGenerale) REFERENCES Plan_Comptable(id),
    idCompteTiers INT,
    FOREIGN KEY(idCompteTiers) REFERENCES Plan_Tiers(id),
    Libelle VARCHAR(35),
    debit DOUBLE,
    credit DOUBLE,
    devise DOUBLE
);

CREATE TABLE BanqueJournal(
    idBanque INT AUTO_INCREMENT PRIMARY KEY,
    date INT,
    numeroPiece VARCHAR(20),
    PieceReference VARCHAR(20),
    idCompteGenerale INT,
    FOREIGN KEY(idCompteGenerale) REFERENCES Plan_Comptable(id),
    idCompteTiers INT,
    FOREIGN KEY(idCompteTiers) REFERENCES Plan_Tiers(id),
    Libelle VARCHAR(35),
    debit DOUBLE,
    credit DOUBLE,
    devise DOUBLE
);
DROP  TABLE Info;
DROP TABLE Plan_Comptable;
 create or replace view total as SELECT SUM(debit) AS totalDebit, SUM(credit) AS totalCredit FROM journalTemporaire;
