<?php



$parking = [
    'A' => [true, true, true, true, true, true],
    'B' => [true, false, true, false, true, false],
    'C' => [true, true, true, true, true, true],
    'D' => [false, false, false, false, false, false],
    'E' => [true, false, true, true, true, true],
];





//=============================================


//ne marche pas ; boucle infinie (trouver la raison)
/*
for ($i=0 ; $i < count($parking['B']) ; $i+2) {
    echo "ttttt\t".mt_rand(100,2000)."\n";
    $parking['B'][$i]= true;
}
print_r($parking);
echo "\n";
echo __FILE__.':'.__LINE__; exit();
*/

//=============================================

//syntaxe complète
/*
foreach($tableau as $index => $valeur) {

}

//syntaxe courte
foreach($tableau as $valeur) {

}
*/


function mettreEnLibre($range, $parking)
{
  foreach($parking[$range] as $numeroPlace => $estLibre) {
        $parking[$range][$numeroPlace] = true;
    }
    return $parking;
}
$range = 'D';

$parking = mettreEnLibre($range, $parking);
print_r($parking['D']);
echo __FILE__.':'.__LINE__; exit();
//=============================================






//comment mettre toutes les places de numero pair de la rangée B à libre (true) ?
foreach($parking['B'] as $numeroPlace => $estLibre) {
    if($numeroPlace%2) {
        $parking['B'][$numeroPlace] = true;
    }
}





echo "\n";
print_r($parking);
echo "\n";
echo __FILE__.':'.__LINE__; exit();
//=============================================






foreach($parking as $lettre => $rangee) {
    foreach($rangee as $index => $place) {
        //echo '<td>'..'<td>';
    }
}








//comment savoir si la place C2 est dispible ?
echo $parking['C'][1]; //la place est disponible


//comment mettre toutes les places de la rangée C à libre (true) ?


$rangeC = $parking[ 'C'];

//foreach( $parking['C'] as $numeroPlace => &$estLibre) {

foreach($rangeC as $numeroPlace => &$estLibre) {
    $estLibre = false;
}


//============================================= 
function hello($something) {
    $something = 'hello '.$something;
    return $something;
}

$world = 'world';
echo hello($world);
echo "\n";

print_r($world);


//=============================================

echo "\n";
echo __FILE__.':'.__LINE__; exit();



$parking['C'] = true;

print_r($parking);












//=============================================
/*
foreach($parking as $letter => $places) {
    foreach($places as $index => $isFree) {
        if($letter == $askedLetter && $index == $askedIndex) {
            //return true;
        }
    }
}
*/


//return false;
//=============================================




