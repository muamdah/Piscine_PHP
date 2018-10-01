#!/usr/bin/php
<?php
$tab = explode(' ',trim($argv[1]));
$tab = array_reverse($tab);
$tab = array_filter($tab);
$e = implode(' ',$tab);
print($e);