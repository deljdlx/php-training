<?php
ini_set('display_errors', true);


$uneVille = [
    'nom' => 'Saint-Egreve',
    'codePostal' => 38120,
     'region' => 'Auvergne-Rhône-Alpes',
     'siteWeb' => 'https://www.saint-egreve.fr',
     'mairie' => [
         'adresse' => ' 36 Avenue Général de Gaulle',
         'ouverture' => '08:30'
     ],
     'rues' => [
         'Avenue du général De Gaulle' => [
            2  => [
                 'Café du Pont',
                 'Jullea'
             ],
             '2 Bis' => 'MFR',
             9 => 'Caisse d\'Epargne St Egrève',
             10 => 'Sports - Services Association (S.S.A.)',
             36 => 'Mairie',
         ],
         'Rue Casimir Brenier' => [
             2 => 'EMIR\'ART',
             3 => 'CLANA BALLONS',
             7 => 'Meli-Melo',
             19 => 'Saniffage'
         ]
     ]
 ];
 


 function donneMoiUn()
 {
     return 1;
 }
 
 
 //j'affiche ce que la fonction me donne
 echo donneMoiUn();
 
 //je stocke dans $variable ce que la fonction me donne
 $variable = donneMoiUn();
 
 
 
 var_dump(donneMoiUn());
 
 //=============================================
 
 function donneMoiCeQUeJaiDonne($parameter)
 {
     return $parameter;
 }
 
$chaine = 'hello';
$chaine = donneMoiCeQUeJaiDonne($chaine);
echo $chaine;

//=============================================



 
 //=============================================



function nothing($something)
{
    echo '<div style="border: solid 2px #F00">';
        echo '<div style="; background-color:#CCC">@'.__FILE__.' : '.__LINE__.'</div>';
        echo '<pre>';
        print_r($something);
        echo '</pre>';
    echo '</div>';
}





function exo00($parameter)
{
    $returnValue = $parameter." world";
    echo $returnValue;

    //return 1;
}
//=============================================
$chaine = 'hello';
exo00($chaine);
//=============================================

$chaine = exo00($chaine);



//=============================================

function htmlDebug($variable)
{

    echo '<div style="border: solid 2px #F00">';
        echo '<div style="; background-color:#CCC">@'.__FILE__.' : '.__LINE__.'</div>';
        echo '<pre>';
        print_r($variable);
        echo '</pre>';
    echo '</div>';
}
htmlDebug($uneVille);

//=============================================



function exo01($parameter)
{
    $returnValue = $parameter." world";
    return $returnValue;

    //return 1;
}
//=============================================
$chaine = 'hello';
$chaine = exo01($chaine);

//=============================================

