<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");
/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);
define ('DATE_BR', "d/m/Y H:i:s");
$dateNow = new DateTime();
$dateBirth = new DateTime("1969-12-09");
$dateStatic = DateTime::createFromFormat(DATE_BR, "09/12/1969 16:00:00");
var_dump([
    $dateNow,
    $dateBirth,
]);
echo "<p>";
var_dump(get_class_methods($dateNow));
echo "<p>";
var_dump($dateStatic );
echo "<p>";

var_dump ([
    $dateNow->format(DATE_BR),
    $dateNow->format("d"),
]);
echo "<p>Hoje é dia {$dateNow->format("d")} do {$dateNow->format("m")} de {$dateNow->format("Y")}</p>";
echo "<p>";

$newTimeZone = new DateTimeZone("Pacific/Apia");
$newDateTime = new DateTime("now", $newTimeZone);

var_dump([
    $newDateTime,
    $newTimeZone,
    $dateNow
]);

echo "<p>";

/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);

$dateInterval = new DateInterval("P1Y2M3DT4H5M6S");
var_dump($dateInterval);
echo "<p>";

$dateTime = new DateTime("now");
//$dateTime->add($dateInterval);
$dateTime->sub($dateInterval);

var_dump($dateTime);
echo "<p>";

$birth = new DatetIme(date("Y") . "-12-09");
$dateNow = new DateTime("now");

$diff =$dateNow->diff($birth);
var_dump($birth, $diff);

if($diff->invert) {
    echo "<p>Seu aniversário foi a {$diff->days} dias.</p>";
} else {
    echo "<p>Falatam {$diff->days} dias para o seu aniversário.</p>";
}
echo "<p>";

$dateResources = new DateTime("now");
var_dump([
    $dateResources->format(DATE_BR),
    $dateResources->sub(DateInterval::createFromDateString("10 days"))->format(DATE_BR),
    $dateResources->add(DateInterval::createFromDateString("21 days"))->format(DATE_BR),

]);
echo "<p>";
/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);

$start = new DateTime("now");
$interval = new DateInterval('P1M');  //P#M#Y#DT#H#M#S
$end = new DateTime("+1 year");

$period = new DatePeriod($start, $interval, $end);
var_dump([
    $start->format(DATE_BR),
    $interval,
    $end->format(DATE_BR),

], $period, get_class_methods($period));

echo "<p>";

echo "<p>Sua assinatura</p>";
foreach ($period as $recurrences) {
    echo "<p>Próximo vencimento{$recurrences->format(DATE_BR)}</p>";
}
