<?php
                            // Esercizi sulle istruzioni condizionali per incentivare il problem solving //

// 1. Cercare la funzione che determina la lunghezza di una stringa. Prendere poi due stringhe e determinare la più lunga.//

$valore1 = "145";
$valore2 = "2586";

if($valore1 < $valore2) {
    echo "La seconda stringa è la più lunga. \n";
} else {
    echo "La prima stringa è la più lunga. \n";
}
echo "\n";



// 2. Cercare la funzione che serve a trasformare in maiuscolo in PHP. Dopo assegnare un valore ad una stringa, trasformala in maiuscolo e visualizzala. //

$frase = "la frase e scritta in minuscolo e stata trasformata in maiuscolo.\n";

echo strtoupper($frase);
echo "\n";

/* 3. Cercare la funzione che consente di sostituire parti di una stringa in PHP: Dunque sccrivete un programma che sostituisce una parte di una stringa con un'altra e poi stampa il risultato. 
Ad esempio: 
$frase = "la mela è rossa";
deve diventare
$frase ="La fragola è rossa.";
occorre sostituire mela con fragola.
**
(per sostituire uso str_replace(...))
**
*/

$frase = "La mela è rossa.";

$frase = str_replace("mela", "fragola", $frase);
echo $frase ."\n";

echo "\n";

                                       // Esercizi sulle istruzioni interattive//

// 1. Stampare una sequenza di numeri nell'intervallo [10,50]. (con il "for" e con il "while")//

for($i=10; $i <= 50; $i++) {
    echo $i . " "; 
}

echo  "\n";

$i = 10; 

while($i <= 50) {
   echo $i . ",";
    $i++;
}
echo  "\n";

// 2. Stampare i numeri dispari da 1 a 100. (con il "for" e con il "while") //
 
for($i = 1; $i < 100; $i+=2){
    echo $i . ";";
 }
 echo  "\n";

 $i = 1;

 while($i < 100) {
    echo $i . "-";
    $i+=2;
 }

  echo  "\n";

// 3. Stampare una sequenza di numeri pari nell'intervallo [30,60]. (lo eseguo con il "for" e con il "while")//

for($i = 30; $i <= 60; $i+=2){
    echo $i . ";";
}
echo  "\n";
 
$i = 30;
while($i <= 60) {
    echo $i . " ";
    $i+=2;
}
echo  "\n";

// 4. Calcolare la somma dei numeri da 10 a 20.//

$somma = 0;
$i = 10;

while($i<=20) {$somma+=$i; $i++;}
echo $somma;
    
echo "\n";

$somma1 = 0;

for($i = 10; $i <= 20; $i++) {
    $somma1 = $somma1 + $i;
}

echo $somma1;
echo "\n";


/* 5. Calcolare il prodotto dei numeri da 1 a 10. 
(p) (per il prodotto) inizializzata a 1.
(i) (per il contatore) inizializzata a 1.
Quindi, utilizzo un ciclo while per moltiplicare $p per ogni valore di $i da 1 a 10.*/

$p = 1;
$i = 1;

while ($i <= 10) {
    $p *= $i;
    $i++;
}

echo "Il prodotto dei numeri da 1 a 10 è: $p \n";

echo "\n";

// 6. Stampare la tabellina del 3 con for e while. // da fare //


for($i = 0; $i <= 10; $i++) {
echo "(3 x $i) = ". 3 * $i ." \n";
}
    
$i = 0;
    
while($i <= 10) {
    echo "(3 x $i) = ". 3 * $i ." \n";
    $i++;
}

echo "\n";

                                  // Esercizi sugli Array//

// 1. Create un array di anumali e stampate il primo e l'ultimo elemento. Aggiungete poi un altro elemento all'array e visualizzate l'array completo con var_dump. //

$animali = ['cane', 'gatto', 'leone', 'zebra', 'pantera']; //array di animali 
$lunghezza = count($animali); 
echo $animali[($lunghezza) -1];
echo "\n";

echo $animali[0];
echo "\n";

var_dump($animali);
echo "\n";

$animali[] = "volpe"; // inserisco volpe nell'elenco array.
var_dump($animali);
echo "\n";

// 2. create una array di piante e stampate tutti gli elementi con il ciclo "for". 

$piante = ['origano', 'zenzero', 'timo', 'stevia', 'sedano',]; //array di piante
$lunghezza = count($piante);

for($i = 0; $i < count($piante); $i++){
    echo $piante[$i] . " ; ";
}

?>