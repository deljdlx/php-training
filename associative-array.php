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



/*
echo $uneVille; //choisir la bonne réponse
string
array
Saint-Egreve

//=======================================================

echo $uneVille['nom'];  //choisir la bonne réponse
string
null
Saint-Egreve

//=======================================================
if($uneVille['siteWeb'] != '') {
    echo $uneVille['siteWeb'];
}

//choisir la bonne réponse ?
siteWeb
https://www.saint-egreve.fr
null
//=======================================================


echo count($uneVille['rues']);  //choisir la bonne réponse 
1
2
5
//=======================================================

echo count($uneVille['Avenue du général De Gaulle']);   //choisir la bonne réponse 
2
5
une erreur
//=======================================================


echo count($uneVille['rues']['Avenue du général De Gaulle']);   //choisir la bonne réponse 
2
5
6
//=======================================================
echo $uneVille['rues']['Avenue du général De Gaulle'][9]; //choisir la bonne réponse 
Caisse d'Epargne St Egrève
array
null
//=======================================================
echo $uneVille['rues']['Avenue du général De Gaulle'][2]; //choisir la bonne réponse 
array
null
MFR
//=======================================================






*/

























