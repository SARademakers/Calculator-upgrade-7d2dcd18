<?php
echo ("Welke operatie wil je uitvoeren? (+, -, %)" . PHP_EOL);
$line = readline();
echo ("Eerste getal?" . PHP_EOL);
$a = readline();
echo ("Tweede getal?" . PHP_EOL);
$b = readline();
if ($line != "+" && $line != "-" && $line != "%") {
	exit($line . " " . "is geen geldige operatie");
}
if (!is_numeric($a)) {
	exit($a . " " . "is geen nummer");
}
if (!is_numeric($b)) {
	exit($b . " " .  "is geen nummer");
}
if ($line == "+") {
	echo ("Uw resultaat is:" . $a += $b);
}
if ($line == "-") {
	echo ("Uw resultaat is:" . $a -= $b);
}
if ($line == "%") {
	echo ("Uw resultaat is:" . $a %= $b);
}
?>