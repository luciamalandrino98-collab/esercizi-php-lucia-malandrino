<?php

// for ($i = 1; $i <=100; $i++){


// switch($i){
//     case $i % 15 == 0:
//         echo "buzzfizz\n";
//         break;
//     case $i % 5 == 0:
//         echo "fizz\n";
//         break;
//     case $i % 3 == 0:
//         echo "buzz \n";
//         break;
//         default :
//         echo $i . "\n";
// }

// }

// Scrivere del codice che permetta di agire se un qualsiasi numero in questa maniera. Finchè questo numero è maggiore di 1 dovrà essere diviso per 2 se è pari, oppure moltiplicato *3 e sommato ad 1 se è dispari.

// es. 10  -> 10/2=5 -> (5*3)+1=16 e così via finchè non diventa 1


// $num = 50;

// while($num > 1){
//     if($num % 2 == 0){
//         $num = $num / 2 ;
//         echo "$num \n";
       
//     } else{
//         $num =($num*3)+1;
//         echo "$num \n";
//     }

// }
    


// Traccia 4:



// Creare un array di utenti. Ogni utente dovrà essere un array chiave-valore con i seguenti parametri:

// id
// name
// gender (Da valorizzare con "M", "F" oppure "N"
// Scrivere un codice che permetta di ciclare sull'array degli utenti. Per ogni utente, se il gender è M stampare la stringa "Buongiorno Sig. [nome utente]". Se il gender è F stampare la stringa "Buongiorno Sig.ra [nome utente]". Se il gender è N stampare la stringa "Buongiorno [nome utente]"


$users = [[
"id"=> 1,
"name"=>" Vlad",
"gender" => "n" ],
["id" => 2,
"name" => "VladirmiraVampira",
"gender" => "f"],
[
"id"=> 3,
"name"=>" darioneilvampirone",
"gender" => "m"]
];
foreach($users as $user){
if( $user ["gender"] == "f"){
    echo "buongiorno signorina ". $user ["name"]."\n";
}elseif($user ["gender"] == "m") {
    echo "buongiorno signor". $user ["name"]."\n";

}else{
    echo "buongiorno". $user ["name"]."\n";
}


}
