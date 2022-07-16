<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFirstName = "Alberto";
$userLastName = "Rocha Pinalli";
echo "<h3>{$userFirstName} {$userLastName}</h3>";

$userAge = '52';
echo "<p><b>{$userFirstName} {$userLastName}</b> <span class='tng'>tem {$userAge} anos</span></p>";

$userEmail = "betopinalli@gmail.com";
echo $userEmail;

fullStackPHPClassSession("variáveis variáveis", __LINE__);
$company = "FullStack";
$$company = "Studio";
echo "<h3>{$company} {$FullStack}</h3>";

fullStackPHPClassSession("Referência de variáveis", __LINE__);
$calA = 12;
$calB = 13;
$calB  = &$calA;
$calB = 123;
//var_dump($calA);
var_dump([
    "a" => $calA,
    "b" => $calB
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);
$true = true;
$false = false;
var_dump($true, $false);

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>One call user Function!</h1></article>";
$codeClear = call_user_func("strip_tags", $code);
var_dump($code, $codeClear);

$codeMore = function ($code) {
    var_dump($code);
};
$codeMore("BoraProgramar!");

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);
$string ="string";
$array = ["string"];
$object = new StdClass();
$object->hello = $string;
$null = null;
$int =123;
$float = 123.45;

var_dump([$string,
 $array,
  $object,
   $null, 
   $int,
    $float
]);