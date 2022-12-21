<?php



if (isset($_GET["number"])) {

  $number = $_GET["number"];

  $password = randomChar($number) ;

 

}


  function randomChar($number) {
    $chars = "abcdefghilmnopqrstuvwxyz";
    $charsMaisc = "ABCDEFGHILMNOPQRSTUVWXYZ";
    $charsymbol = "!£$%&/()=?^-*+ç°é*§-.,;:_#@[]><|";
    $numbers = "1234567890";


    // inizializziamo una variabile che conterra' la nostra password
    $password = "";
    
    
    // a partire da 4 dizionari diversi li uniamo in un unico
     $totalString = $chars . $charsMaisc . $charsymbol . $numbers;


    // parte un ciclo che si ripete tante volte quanto e' il numero rappresentato dalla variabile $number
     for($i = 0 ; $i < $number ; $i++ ) {

      // generiamo un indice random che va da zero a un massimo della lunghezza di $TotalString - 1
      $numRand = rand(0, strlen($totalString) - 1);
      // aggiungiamo alla variabile $password ad ogni ripetizione del ciclo un elemento in posizione $numRand di $totalString
      $password .= $totalString[$numRand];

     }


    return $password;

  };



?>