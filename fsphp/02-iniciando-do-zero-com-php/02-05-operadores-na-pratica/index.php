<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
require __DIR__ . '/../../fullstackphp/fsphp.css';
//echo "<link rel='stylesheet' href='../../fullstackphp/fsphp.css'/>";
echo fullStackPHPClassName("02.05 - Operadores na prática");
/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);


$operadorA = 5;
$operadores = [
    "a += 5" => $operadorA += 5,
    "a -= 5" => $operadorA -= 5,
    "a *= 5" => $operadorA *= 5,
    "a / 5" => $operadorA / 5,
];
var_dump($operadores);

$incrementoA = 5;
$incrementoB = 5;
$incrementos = [
    "pós-incremento" => $incrementoA++,
    "res-incremento" => $incrementoA,
    "pré-incremento" => ++$incrementoA,
    "pós-decremento" => $incrementoA--,
    "res-decremento" => $incrementoA,
    "pré-decremento" => --$incrementoA,
];
var_dump($incrementos);
/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);
$comparacaoA = 5;
$comparacaoB = "5";
$comparacaoC = 10;
$compara = [
    "==" => $comparacaoA == $comparacaoB,
    "===" => $comparacaoA === $comparacaoB,
    "!=" => $comparacaoA != $comparacaoB,
    ">" => $comparacaoA > $comparacaoB,
    "<" => $comparacaoA < $comparacaoC,
    ">=" => $comparacaoA >= $comparacaoC,
    "<=" => $comparacaoA <= $comparacaoC,     
];


var_dump($compara);
/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);
$logicA = true;
$logicB = false;
$logic = [
    "a && b" => $logicA && $logicB,
    'a || b' => $logicA || $logicB,
    "a" => $logicA, 
    "!a" => !$logicA,
    "!b" => !$logicB,
];
var_dump($logic );
/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);
$calcA = 5;
$calcB = 10;
$calc = [
    "a + b" => $calcA + $calcB,
    "a - b" => $calcA - $calcB,
    "a * b" => $calcA * $calcB,
    "a / b" => $calcA / $calcB,
    "a % b" => $calcA % $calcB,
    "a ** b" => $calcA ** $calcB,
];
var_dump($calc);
