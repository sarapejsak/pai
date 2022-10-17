<?php


$no = array(41, 52, 87, 21, 47, 52, 63, 36, 34, 74);

foreach ($no as $value) {
  echo "$value ";
}
;echo "<br>";

echo "ta tablica ma ".count($no)." znaków";
echo "<br>";
echo "<br>";

sort($no, SORT_NUMERIC);
foreach ($no as $value) {
  echo "$value ";
}
echo "<br>";
shuffle($no);

echo "<br>"."shuffle"."<br>";
foreach ($no as $value) {
  echo "$value ";
}


echo "<br>";
$x = "To zdanie składa się z siedmiu słów";
$djfv = explode(' ', $x );
echo "<br>"
;
foreach ($djfv as $value) {
  echo "$value ";
}
echo "<br>";

echo "ta tablica ma ".count($djfv)." znaków";
echo "<br>";
echo "<br>";

echo "<br>";
shuffle($djfv);

echo "<br>"."shuffle"."<br>";
foreach ($djfv as $value) {
  echo "$value ";
}
echo "<br>";
echo "<br>";
sort($djfv, SORT_STRING);
foreach ($djfv as $value) {
  echo "$value ";
}
echo "<hr>";
echo "zerowy: ".current($djfv) . "<br>". "<br>";
next($djfv);
echo next($djfv)."<br>"."<br>";
echo reset($djfv)."<br>"."<br>";





?>