 <?php
    class Voiture{
  private $immatriculation;
  private $couleur;
  private $poids;
  private $puissance;
  private $capacite_du_reservoir;
  private $niveau_dessence;
  private $nombre_de_place;
  private $assure;
  private $message_tableau_bord;

public function __construct($immatriculation,$couleur,$poids,$puissance,$capacite_du_reservoir,$nombre_de_place){
    $this->immatriculation = $immatriculation;
    $this->couleur = $couleur;
    $this->poids = $poids;
    $this->puissance = $puissance;
    $this->capacite_du_reservoir = $capacite_du_reservoir;
    $this->nombre_de_place = $nombre_de_place;
    $this->niveau_dessence = 5.0;
    $this->assure = false;
    $this->message_tableau_bord = "Hello";
}

public function get_immatriculation(){
    return $this->immatriculation;
    }

public function get_couleur(){
    return $this->couleur;
    }


public function get_poids(){
    return $this->poids;
    }

public function get_puissance(){
    return $this->puissance;
    }

function get_capacite_du_reservoir(){
    return $this->capacite_du_reservoir;
    }

public function get_nombre_de_place(){
    return $this->nombre_de_place;
    }

public function get_niveau_dessence(){
    return $this->niveau_dessence;
    }

public function get_assure(){
    return $this->assure;
    }

public function get_message_tableau_bord(){
    return $this->message_tableau_bord;
    }

public function set_assure($boolassure){
    $this->assure= $boolassure;

    if($boolassure){
 
    $this->message = "Je suis assurée";

}

    else{

    $this->message = "Je ne suis pas assurée";

}
}
}
?>

<?php
require ('index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo_metis_voiture</title>
</head>
<body>
    
    <?php

    $Volkswagen = new Voiture ('AA-129-AA','Grey_Limestone','1320','184','50','5');

   echo $Volkswagen->get_message_tableau_bord() . '<br />';

   var_dump($Volkswagen);

    ?>
</body>
</html>

