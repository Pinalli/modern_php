<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arrayProfile = [
     "name" => "John Doe",
     "company" => "FullStackPHP",
      "mail" =>"teste@teste.com"
];
$objectProfile = (object) $arrayProfile;
var_dump($arrayProfile);
echo "<p>";

var_dump($objectProfile);
echo "<p>";

echo "<p>{$arrayProfile['name']} trabalha na {$arrayProfile['company']}</p>";

echo "<p>{$objectProfile ->name} trabalha na {$objectProfile->company}</p>";
echo "<p>";

$ceo = $objectProfile;
unset($ceo->company);
var_dump($ceo);
echo "<p>";

$company = new StdClass();
$company->company = "FullStackPHP";
$company->ceo =$ceo;
$company->manager = new StdClass();
$company->manager = "Juca Balada";
$company->mail = "teste@teste.com";
var_dump($company);


/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date = new DateTime();

var_dump([
    "class" => get_class($date),
    "methods" => get_class_methods($date),
    "vars" => get_object_vars($date),
    "parent" => get_parent_class($date),
    "subclasses" => is_subclass_of($date, "DateTime"),
    
]);
echo "<p>";
$exception = new PDOException();
var_dump([
    "class" => get_class($exception),
    "methods" => get_class_methods($exception),
    "vars" => get_object_vars($exception),
    "parent" => get_parent_class($exception),
    "subclasses" => is_subclass_of($exception, "Exception"),
    
]);