<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    
    <h1>LES BASES PHP</h1>

    
<?php 
    
    //echo"<h3>Hello World!</h3>";

    $_NomPersonne="Christophe";
    //echo"<p> Bonjour $_NomPersonne comment ça va? </p>";
    ?>
<?php 

    $Nombre = 85;
     
    $Nombre2 = 85.2;
?>

<?php
    $_var0="Jean";
    $_var1="Christophe";
    $_var3=5.5;
    $_var2=$_var1;

    //echo"$_var0, $_var2, $_var3 ";

?>

<?php
    $_prenoms = array($_var0,$_var2);

    //echo $_prenoms[0].'-'.$_prenoms[1].'.';
    ?>

<?php
    $n_prenoms = count($_prenoms);
   // echo" Il y a $n_prenoms éléments dans le tableau des prenoms. ";

    $_prenom_rechercher = "Jean";
    if(in_array($_prenom_rechercher, $_prenoms)):
        //echo'Oui la clée '.$_prenom_rechercher.' existe dans le tableau $_prenoms ';
    else :
        //echo'Non la clée '.$_prenom_rechercher.' n existe pas dans le tableau $_prenoms ';
    endif;

$_prenoms[] = "Julia";
unset($_prenoms[1]);
//var_dump($_prenoms);



$_prenoms[2] = "Laura";
//var_dump($_prenoms) ;
?>

<?php

$etudiants = array("Oceane"=>"11/20","Karim"=>"14/20","Jimmy"=>"13/20","Outman"=>"14/20","Fred"=>"15/20"
  );
  echo"<pre>";
  ksort($etudiants);

  echo <<<html

  <table class="notes">
  <thead>
    <tr>
    <th>Prenom</th>
    <th>Note</th>

  html;

  
  foreach($etudiants as $x => $x_value) {
    echo <<<html
    <tr>
    
       <td>{$x}</td>
       <td>{$x_value}</td>
    html;
  }
  
  
?>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
?>

<?php 
function table($nbr, $nbr2)
{
    $table = '<table border="1">';
    for ($a=1; $a <= 5; $a++) {
        $table .= '<tr>';
        for ($b=1; $b <= 5 ; $b++) {
            $table .= '<td>'.$a*$b.'</td>';
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    return $table;
}
 
echo table(5, 5);
?>

<?php





class voiture{





    public $codevin;


    public $marque;

    
    public $modèle;


    public $couleur;


    public $immatriculation;





    public function afficher() {





        echo <<<html

         <p> Le code vin de la voiture est: {$this->codevin},
         c'est une {$this->marque} {$this->modèle} de couleur {$this->couleur}
         et immatriculée: {$this->immatriculation}"

        html;




    }



}





echo "Bonjour";



echo "<pre>";



$v = new voiture();



$v->codevin = "12345";



$v->marque = "Volkswagen";


$v->modèle = "Golf 7 GTD";



$v->couleur = "Grey-Limestone";



$v->immatriculation = "AA-229-AA";



var_dump($v);



$v->afficher();





?>

</body>
</html>