create database groupe_2_db;

use groupe_2_db;

create table etudiant (
    codeEtudiant int (50) primary key auto_increment,
    Nom varchar (60) not null,
    prenom varchar (50) default null,
    Adresse varchar (50) not null,
    Classe varchar (20) not null
);

create table Livre(
    codeLivre int (50) primary key auto_increment,
    Titre varchar (60) not null,
    Auteur varchar (60) not null,
    DateEdition date default null
);

create table Emprunter(
    codeEtudiant int (50),
    codeLivre int (50),
    DateEmprunt datetime,
    foreign key (codeEtudiant) references Etudiant (codeEtudiant),
    foreign key (codeLivre) references Livre (codeLivre)
) engine = InnoDB default charset = utf8;

(

)