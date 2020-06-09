<?php
$a = 7;
$b = 3.14159;
$myName = "Raivis";
$isSunny = false;
$something = null;
$quote = "alus ari ira sula";


var_dump($a, $b, $myName, $isSunny, $something);
echo "<hr>";
echo $myName . " is " . strlen($myName) . "characters long";
echo "<br>";
echo "$a + $b = " . ($a + $b);
echo "<br>";
echo "$a + $myName = " . ($a + strlen($myName));
echo "<hr>";
echo "letter a is found " . mb_substr_count($quote, "a") . " times";
echo "<hr>";
echo "letter a is found " . substr_count($quote, "a") . " times";
echo "<hr>";
$myStr = "ķēpā kaķis";
echo substr($myStr, 2, 5);
echo "<hr>";
$newText = str_replace("aķ", "uū", $myStr);
echo $newText;
echo "<hr>";
echo strrev ($quote);
echo "<hr>";
// echo mb_strrev ($myStr); does not work