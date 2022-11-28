<?php
class Panier
{
    public $nbProduits; // Attribut ou propriété

    public function afficherProduits()
    {
        return "Voici les produits du panier :";
    }

    protected function retirerArticle()
    {

    }

    private function ajouteArticle()
    {

    }
}

class PanierDeFruits extends Panier
{
    
}

$panier1 = new Panier();
$panierDeFruits = new PanierDeFruits();

//var_dump($panier1);

$panier1->nbProduits = 5;

echo $panier1->afficherProduits() . "$panier1->nbProduits";
// var_dump($panier1);

// Niveau de visibilité
?>