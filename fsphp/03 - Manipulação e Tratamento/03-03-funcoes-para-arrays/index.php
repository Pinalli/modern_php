<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);
$index = [
"AC/DC",
"Iron Maiden",
"Nirvana",
];
//var_dump($index);

$associativo = [
    "band1" => "AC/DC",
    "band2" =>  "Iron Maiden",
    "band3" =>  "Nirvana",
];
// array_unshif  = add na frente
array_unshift($index, "Metallica");
$associativo = ["band5" => "Pearl Jam", "band6" => "Queen"] + $associativo;


//array_push = add no final
array_push($index, "Pink Floyd");


//array_shift = remove no inicio
// array_shift($index);
//array_shift($associativo);


//array_pop = remove no final
// array_pop($index);
// array_pop($associativo);

//array_filter = remove os valores nulo
// array_filter($index);
// array_filter($associativo);


var_dump($index,$associativo );

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);
//array_reverse = altera a ordem do array
//$index = array_reverse($index);

// asort($associativo);//ordena o array associativo por chave
// ksort($index);//ordena o array pelo indice

sort($index);//ordena o array pelo indice
rsort($index);//ordena o array pelo indice inverso

var_dump($index,$associativo );

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);




var_dump ([
    array_keys($associativo),
    array_values($associativo),
]);

if(in_array("AC/DC",$associativo)){
    echo "<p>AC/DC está na lista</p>";
}

//arrToString = converte o array em string
$arrToString = implode(", ", $associativo);
echo "<p>Eu curto {$arrToString} e muitas outras!</p>";
echo "<p>{$arrToString} </p>";

//explode = converte string em array
var_dump(explode(", ", $arrToString));

//var_dump($index,$associativo );
/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

$profile = [
    "name" => "Alberto",
    "company" => "PUCRS",
    "mail" => "pinalli@emailcom"
];

$template = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <p>{{company}}</p>        
    <a href="mailto:{{mail}}" title="Enviar e-mail para {{name}}">Enviar e-mail</a></p></article>
TPL;

echo $template;

echo str_replace(
    array_keys($profile),
    array_values($profile),
    $template
);

$replaces = "{{" . implode("}}&{{", array_keys($profile)). "}}";

//var_dump(explode("&", $replaces));
echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template
);

   // echo $replaces;