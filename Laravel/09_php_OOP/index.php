<?php
require_once('animal.php');

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
echo $sheep->cold_blooded // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

?>