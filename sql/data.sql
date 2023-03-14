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
    Num_Identification_Fiscal DOUBLE ,
    Num_Statistique DOUBLE ,
    Num_Registre_Commerce DOUBLE ,
    Status VARCHAR (10),
    Date_Debut_exercice DATE ,
    Devise_Compte VARCHAR (10),
    Devise_Equivalence VARCHAR (10)
);
DROP  TABLE Info;