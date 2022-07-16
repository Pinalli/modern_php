<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
require __DIR__ . '/../../fullstackphp/fsphp.css';
fullStackPHPClassName("02.03 - Comandos de saída");



/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);
echo "<p>Hello! "," ", "<span class='tag'>#BoraProgramar!</span>","</p>";


$hello = "Hello, World!";
$code = "<span class='tag'>#BoraProgramar!</span>";
echo "<p>$code</p>";

$day = "dia";
echo "<p>Hoje é $day 23</p>";
echo "<p>Faltam 23 {$day}s </p>";
//   {} protecao da variavel
echo "<h3>{$hello}</h3>";
echo "<h4>{$hello} {$code}</h4>";
echo '<h3>' . $hello . " " . $code . '</h3>';



/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);
print "print";
print $hello;
print "<h3>{$hello} {$code}</h3>";

/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);
$array = [
    "nome" => "Full Stack",
    "curso" => "PHP",
    "comandos" => "Comandos de saída"
];
print_r($array);
echo "<pre>", print_r($array, true), "</pre>";


/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

$article = "<article>
<h1>%s</h1>
<p>%s</p>
</article>";
$title = "{$hello} {$code}";
$subtitle = "Mussum Ipsum, cacilds vidis litro abertis. Si num tem leite então bota uma pinga aí cumpadi!Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.Delegadis gente finis, bibendum egestas augue arcu ut est.Suco de cevadiss deixa as pessoas mais interessantis.";
printf($article, $title, $subtitle);
/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);

$company = "<article><h1>Escola %s</h1><p>Curso <b>%s</b>, aula <b>%s</b></p></article>";
vprintf($company, $array);
echo vprintf($company, $array);
/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);
echo "Debugger: ";
//var_dump($array);

var_dump($array,
$hello,
$code,
);