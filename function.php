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

function incremente($parameter)
{
    $parameter ++;
    return $parameter;
}


$variable = 0;

$variable = incremente($variable);

$variable = incremente($variable);

incremente($variable); //ici la valeur retournée est 3

echo '<div style="border: solid 2px #F00">';
    echo '<div style="; background-color:#CCC">@'.__FILE__.' : '.__LINE__.'</div>';
    echo '<pre>';
    print_r($variable);
    echo '</pre>';
echo '</div>';
exit();



//=============================================

function addition($parameter0 ,$parameter1)
{
    $parameter3 = $parameter0 + $parameter1; 
    return $parameter3;
}

echo addition(1,2);
//=============================================


function estCeUnNombre($parameter)
{
   $result =  is_int($parameter);
    return $result; 
}

echo estCeUnNombre(1);
echo estCeUnNombre('coucou');

//=============================================

function estUnNombreAVirgule($parameter)
{

}

echo estCeUnNombre(1.1); //return true
echo estCeUnNombre(2); //return false

//=============================================

function chaineTropLongue($chaine, $length)
{

}

echo chaineTropLongue(
    'hello world',
    4
); //return true


echo chaineTropLongue(
    'hello world',
    20
); //return false


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

