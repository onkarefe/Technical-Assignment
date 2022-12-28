<?php
/*The basis of the prime number algorithm begins by rounding
the square root of the number to be searched whether it is prime or not.
The number under consideration is prime if it is not divisible
by an integer smaller than the rounded number.*/

function asalKontrol($sayilar){
    if ($sayilar == 1)
    return 0;
     
    for ($i = 2; $i <= sqrt($sayilar); $i++){
        if ($sayilar % $i == 0)
            return 0;
    }
    return 1;
}

foreach(range(500,599) as $indis){
    $asal = asalKontrol($indis);
    if($asal == 1){
        echo "$indis is a prime number. <br>";
    }
}

/*output directly coppied from the browser:
503 is a prime number.
509 is a prime number.
521 is a prime number.
523 is a prime number.
541 is a prime number.
547 is a prime number.
557 is a prime number.
563 is a prime number.
569 is a prime number.
571 is a prime number.
577 is a prime number.
587 is a prime number.
593 is a prime number.
599 is a prime number. */

?>

