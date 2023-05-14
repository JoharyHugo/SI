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


CREATE TABLE JournalTemporaireEcriture(
    idJournal INT AUTO_INCREMENT PRIMARY KEY,
    date VARCHAR(20),
    ref_piece VARCHAR(20),
    compte INT,
    tiers VARCHAR(20),
    Intitule VARCHAR(50),
    Libelle VARCHAR(50),
    debit DOUBLE,
    credit DOUBLE
);

CREATE TABLE AchatJournal(
    idAchat INT AUTO_INCREMENT PRIMARY KEY,
    date VARCHAR(20),
    ref_piece VARCHAR(20),
    compte INT,
    tiers VARCHAR(20),
    Intitule VARCHAR(50),
    Libelle VARCHAR(50),
    prixUnitaire VARCHAR(50),
    quantite DOUBLE,
    debit DOUBLE,
    credit DOUBLE
    idCompteGenerale INT,
    FOREIGN KEY(idCompteGenerale) REFERENCES Plan_Comptable(id),
    idCompteTiers INT,
    FOREIGN KEY(idCompteTiers) REFERENCES Plan_Tiers(id),
);


CREATE TABLE AchatTable(
    idAchat INT AUTO_INCREMENT PRIMARY KEY,
    date VARCHAR(20),
    numeroPiece VARCHAR(20),
    ref_piece VARCHAR(20),
    compte INT,
    tiers VARCHAR(20),
    Libelle VARCHAR(50),
    prixUnitaire VARCHAR(50),
    quantite DOUBLE,
    credit INT
);

create view journalAchatTable as select date,numeroPiece,ref_piece,compte,tiers,Libelle,prixUnitaire,quantite,(quantite*prixUnitaire) as debit,credit from AchatTable;
select prixUnitaire*quantite from AchatTable;
create view debitAchat as
select prixUnitaire*quantite from AchatTable WHERE compte LIKE '411%';
create view creditAchat as
select prixUnitaire*quantite from AchatTable WHERE compte LIKE '401%';
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

create table Ecriture(
    date VARCHAR(20),
    ref_piece VARCHAR(20),
    compte INT,
    tiers VARCHAR(20),
    Intitule VARCHAR(50),
    Libelle VARCHAR(50),
    debit DOUBLE,
    credit DOUBLE
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
CREATE TABLE TypeCharge (
    idtypeCharge INT AUTO_INCREMENT PRIMARY KEY,
    Charge VARCHAR(20)
);
CREATE TABLE Centre(
    idCentre INT AUTO_INCREMENT PRIMARY KEY,
    NomCentre VARCHAR(20)
);
CREATE TABLE NatureCharge(
    idNatureCharge INT AUTO_INCREMENT PRIMARY KEY,
    NatureCharge VARCHAR(20)
);
CREATE TABLE detailCharge(
    idAchat INT,
    idNatureCharge INT,
    idtypeCharge INT,
    FOREIGN KEY (idAchat) REFERENCES AchatTable(idAchat),
    FOREIGN KEY (idNatureCharge) REFERENCES NatureCharge(idNatureCharge),
    FOREIGN KEY (idtypeCharge) REFERENCES TypeCharge(idtypeCharge)
);
CREATE TABLE ChargeCentre(
    idAchat INT,
    idCentre INT,
    pourcentage DOUBLE,
    prix DOUBLE,
    FOREIGN KEY (idAchat) REFERENCES AchatTable(idAchat),
    FOREIGN KEY (idCentre) REFERENCES Centre (idCentre)
);
insert into NatureCharge values (null,'Variable');
insert into NatureCharge values (null,'Fixe');
insert into TypeCharge values (null,'Corporable');
insert into TypeCharge values (null,'Incorporable');
insert into TypeCharge values (null,'Suppletive');
insert into AchatTable (Libelle,prixUnitaire,quantite) values('essence',5000,5);
values (values)
values (values)
DROP TABLE ChargeCentre;
DROP TABLE Charge;
DROP  TABLE Info;
DROP TABLE Plan_Comptable;
 create or replace view total as SELECT SUM(debit) AS totalDebit, SUM(credit) AS totalCredit FROM journalTemporaire;
 SELECT sum(debit) as valeurBrut FROM journalTemporaireEcriture WHERE compte LIKE '20%';
 SELECT sum(credit) as valeurBrut FROM journalTemporaireEcriture WHERE compte LIKE '280%';
 SELECT sum(credit) as amortissement,sum(debit) as brut,(amortissement-brut) as net FROM journalTemporaireEcriture WHERE compte LIKE '280%' or compte LIKE '20%';
CREATE  OR REPLACE V_AchatNature as SELECT (Libelle.Achat) as Rubrique ,(prixUnitaire*quantite.Achat) as Total,(Unite.Achat) as Unite, (NatureCharge.Nature )as Nature  FROM AchatTable as Achat 
JOIN detailCharge on idAchat.Achat=idAchat.detailCharge
JOIN NatureCharge as Nature on idNatureCharge.Nature=idNatureCharge.detailCharge;



--compte20
create or replace view compte20Actif AS
SELECT sum(credit) as amortissement,sum(debit) as brut,(sum(debit)-sum(credit)) as net FROM journalTemporaireEcriture WHERE compte LIKE '280%' or compte LIKE '20%';

--compte21
create or replace view compte21Actif AS
SELECT sum(credit) as amortissement,sum(debit) as brut,(sum(debit)-sum(credit)) as net FROM journalTemporaireEcriture WHERE compte LIKE '281%' or compte LIKE '21%';

--compte23
create or replace view compte23Actif AS
SELECT sum(credit) as amortissement,sum(debit) as brut,(sum(debit)-sum(credit)) as net FROM journalTemporaireEcriture WHERE compte LIKE '283%' or compte LIKE '23%';


create or replace view compte3Actif AS
SELECT sum(credit) as amortissement,sum(debit) as brut,(sum(debit)-sum(credit)) as net FROM journalTemporaireEcriture WHERE compte LIKE '3%';

create or replace view compte40Actif AS
SELECT sum(credit) as amortissement,sum(debit) as brut,(sum(debit)-sum(credit)) as net FROM journalTemporaireEcriture WHERE compte LIKE '40%';

create or replace view compte41Actif AS
SELECT sum(credit) as amortissement,sum(debit) as brut,(sum(debit)-sum(credit)) as net FROM journalTemporaireEcriture WHERE compte LIKE '41%';


create or replace view compte5Actif AS
SELECT sum(credit) as amortissement,sum(debit) as brut,(sum(debit)-sum(credit)) as net FROM journalTemporaireEcriture WHERE compte LIKE '5%';


SELECT sum(debit), sum(credit) FROM journalTemporaireEcriture WHERE compte LIKE '42%' AND compte LIKE '%49';

SELECT debit, credit 
FROM journalTemporaireEcriture 
WHERE compte BETWEEN '42' AND '490';

--compte10
create or replace view compte10Passif AS
SELECT sum(credit) as brut FROM journalTemporaireEcriture WHERE compte LIKE '10%';

--compte11
create or replace view compte11Passif AS
SELECT sum(credit) as brut FROM journalTemporaireEcriture WHERE compte LIKE '11%';

--compte12
create or replace view compte12Passif AS
SELECT sum(credit) as brut FROM journalTemporaireEcriture WHERE compte LIKE '12%';

--compte161
create or replace view compte161Passif AS
SELECT sum(credit) as brut FROM journalTemporaireEcriture WHERE compte LIKE '161%';


--compte165
create or replace view compte165Passif AS
SELECT sum(credit) as brut FROM journalTemporaireEcriture WHERE compte LIKE '165%';

--compte401
create or replace view compte401Passif AS
SELECT sum(credit) as brut FROM journalTemporaireEcriture WHERE compte LIKE '401%';


--compte408
create or replace view compte408Passif AS
SELECT sum(credit) as brut FROM journalTemporaireEcriture WHERE compte LIKE '408%';


--compte49
create or replace view compte49Passif AS
SELECT sum(credit) as brut FROM journalTemporaireEcriture WHERE compte LIKE '49%';


--compte51
create or replace view compte51Passif AS
SELECT sum(credit) as brut FROM journalTemporaireEcriture WHERE compte LIKE '51%';
