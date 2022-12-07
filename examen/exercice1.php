<?php 
function detecteur($tab, $eltArret) : bool
{
    foreach($tab as $indice=>$elt)
    {
        // Le premier élément doit être start
        if (($indice == 0) && ($elt != "start")) return false;
        
        // Aucun élément booléen;
        if (is_bool($elt)) return false;
        
        // Dernier élément doit être égal à $eltArret
        if (($indice == count($tab)-1) && ($elt != $eltArret)) return false;
    }
    return true;
}

// 1. detecteur(["hello", "world", "fin"], "fin") renvoie FALSE : le premier élément doit être "start"
$tab = array("hello", "world", "fin");
echo "Cas 1 :";
var_dump(detecteur($tab,"fin"));
echo "<hr>";

// 2. detecteur(["start", "hello", "world"], "fin") renvoie FALSE : le dernier élément doit être égal au deuxième paramètre de la fonction detecteur
$tab = array("start", "hello", "world");
echo "Cas 2 :";
var_dump(detecteur($tab,"fin"));
echo "<hr>";

// 3. detecteur(["start", TRUE, "hello"], "hello") renvoie FALSE : le tableau ne doit pas comporter de boolean
$tab = array("start", TRUE, "hello", "hello");
echo "Cas 3 :";
var_dump(detecteur($tab,"fin"));
echo "<hr>";

// 4. detecteur(["start", "hello", "world", "fin"], "fin") renvoie TRUE : il n'y a pas d'erreur
$tab = array("start", "hello", "world", "fin");
echo "Cas 4 :";
var_dump(detecteur($tab,"fin"));
echo "<hr>";
?>