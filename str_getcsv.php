<?php

echo "str_getcsv <br>";


$csv = array_map('str_getcsv', file('data.csv'));

?>
