<?php
//achaque manipulation
//1 importer la classe
require_once('./../models/IModel.php');
require_once('./../models/Classe.php');
require_once('./../models/User.php');
require_once('./../models/Etudiant.php');
//2creer des objets=instanciation
$cl1=new Classe();
$cl2=new Classe();
//3 donner un etat cad donner les valeurs aux attributs
$cl1->setNiveau="L1";
$cl1->setFiliere="Glrs";
$cl2->setNiveau="L2";
$cl2->setFiliere="Mosief";



echo "Niveau : ".$cl1->getNiveau()."<br>";
echo "Filiere : ".$cl1->getFiliere()."<br>";
echo "Libelle : ".$cl1->getLibelle()."<br>";
echo "Niveau : ".$cl2->getNiveau()."<br>";
echo "Filiere : ".$cl2->getFiliere()."<br>";
echo "Libelle : ".$cl2->getLibelle()."<br>";


//creation d'utilisateur
$user1=new User();
$user2=new User();

//les setters

$user1->setLogin=('RP');
$user1->setPassword=('pwd');
$user1->setRole=('Role');

$user2->setLogin=('AC');
$user2->setPassword=('Inconnu');
$user2->setRole=('Role');

//les getters

echo "user1 :".$user1->getLogin()."<br>";
echo "user1 :".$user1->getPassword()."<br>";
echo "user1 :".$user1->getRole()."<br>";

echo "user2 :".$user2->getLogin()."<br>";
echo "user2 :".$user2->getPassword()."<br>";
echo "user2 :".$user2->getRole()."<br>";

//2creer des objets=instanciation
$etudiant1=new Etudiant();
$etudiant2=new Etudiant();
//3 donner un etat cad donner les valeurs aux attributs
$etudiant1->setNomComplet="Lo";
$etudiant1->setMatricule="Go";
$etudiant2->setNomComplet="Li";
$etudiant2->setMatricule="Mkf";



echo "NomComplet : ".$etudiant1->getNomComplet()."<br>";
echo "Matricule : ".$etudiant1->getMatricule()."<br>";

echo "NomComplet : ".$etudiant2->getNomComplet()."<br>";
echo "Matricule : ".$etudiant2->getMatricule()."<br>";

$classe1->insert();
Classe::selectAll();

User::selectAll();
User::selectById(1);






