<?php

use Membre as GlobalMembre;

class Membre
{
    public $id = 15;
    public $pseudo;
    public $mdp;

    public function __construct()
    {
        echo "Internaute !<hr>";
    }

    public function inscription()
    {
        return "Je m'inscris<hr>";
    }

    public function connexion()
    {
        return "Je me connecte<hr>";
    }

    protected function deconnexion()
    {
        return "Je me déconnecte<br>";
    }
}

class Admin extends Membre
{   
    public function connexion()
    {
        return "Je me connecte en tant qu'administrateur<hr>";
    } 
    
    public function accesBackOffice()
    {
        echo $this->deconnexion();
        return "Accès BackOffice ok <hr>";
    }
}

class Animal
{
    public function quiSuisJe()
    {
        return "Je suis un Animal !";
    }
}

class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un Elephant !";    
    }
}

class Chat extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un Chat !";    
    }
}

// $user = new Membre;
// $admin = new Admin;

// echo "connexion :" . $user->connexion() . "<br>";

// $user = $admin;

// echo "connexion :" . $user->connexion() . "<br>";

$animal = new Animal();
echo $animal->quiSuisJe() . "<br>";




?>