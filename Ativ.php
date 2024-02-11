<?php
//Substituir todas as vogais por *
echo "Ex 1";
echo "<br>";

$string = "Manipulacao de strings";
echo str_replace(["a","e","i","o","u"],"*", $string);


echo"<br>";
echo"<br>";


//verificar se um número é primo ou não
echo "Ex 2";
echo "<br>";

function isPrimo($num){
    for($i = 2; $i < $num; $i++){
        if($num % $i === 0){
            return false;
        }
    }
    return true;    
}


$numero = 19;
if(isPrimo($numero)){
    echo "$numero é um número primo!";
} else{
    echo "$numero não é um número primo!";
}


echo "<br>";
echo "<br>";


//inverter uma string sem usar a função strrev
echo "Ex 3";
echo "<br>";

$string = "Repeticao";
$invertida = "";

for($i = strlen($string) - 1; $i >= 0; $i--){
    $invertida .= $string[$i];
}

echo $invertida;

echo "<br>";
echo "<br>";


// Crie uma função que receba um número e retorne se é positivo, negativo ou zero.
echo "Ex 4";
echo "<br>";

function numero($num){
    if($num > 0){
        echo"$num é um número positivo";
    } elseif($num < 0){
        echo "$num é um número negativo";
    } else{
        echo "$num é Zero";
    }
}

numero(0);


echo "<br>";
echo "<br>";


// Conte o número de palavras em uma frase e imprima cada palavra em uma nova linha.
echo "Ex 5";
echo "<br>";

function contarPalavras($frase){
    $numPalavras = str_word_count($frase);

    echo"$frase possui $numPalavras palavras <br><br>";

    $palavrasArray = str_word_count($frase,  1, 'àáãç3');

    foreach ($palavrasArray as $palavra) {
        echo "$palavra <br>";
    }
}

contarPalavras("Olá tudo bem");


echo "<br>";
echo "<br>";


//Crie uma função que verifique se uma palavra é palíndromo
echo "Ex 6";
echo "<br>";

function isPalindromo($palavra){
    $palavraInvertida = strrev($palavra);

    return strtolower($palavraInvertida) === strtolower($palavra);
}

$string = "Radar";

if(isPalindromo($string)){
    echo"$string é um palíndromo";
} else{
    echo "$string não é um plaíndromo";
}


echo "<br>";
echo "<br>";


// Crie um programa que imprima os números de 1 a 20, substituindo múltiplos de 3 por ?
echo "Ex 7";
echo "<br>";

for ($i =  1; $i <=  20; $i++) {
    if ($i %  3 ==  0) {
        echo "*";
    } else {
        echo $i;
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";


// Crie uma função que remova os espaços em branco de uma string.
echo "Ex 8";
echo "<br>";

$str = "Hello World A B C!";
echo $str . "<br>";
echo preg_replace('/\s/', '', $str);


echo "<br>";
echo "<br>";


// Crie um programa que calcule e imprima os números Fibonacci até o décimo termo.
echo "Ex 9";
echo "<br>";

function Fibo($num){
    $a = 1;
    $b = 0;
    $contador = 0;

    while ($contador < $num) {
        echo $b . " ";

        $fibo = $a + $b;
        $a = $b;
        $b = $fibo;
        $contador++;
    }
}
Fibo(10);


echo "<br>";
echo "<br>";


// Crie uma função que receba um texto e retorne se é um pangrama (contém todas
//as letras do alfabeto pelo menos uma vez).
echo "Ex 10";
echo "<br>";

function Pangrama($frase){
    $alfabeto = $alfabeto = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $minusculo = strtolower($frase);

    foreach($alfabeto as $letra){
        if(!str_contains($minusculo, $letra)){
            return false;
        }
    } return true;
}

$frasePagrama = "Jane quer LP, fax, CD, giz, TV e bom whisky";
if (Pangrama($frasePagrama)) {
    echo"$frasePagrama";
    echo "<br>";
    echo "É um pangrama.";
} else {
    echo"$frasePagrama";
    echo "<br>";
    echo "Não é um pangrama.";
}
?>