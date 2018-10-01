#!/usr/bin/php
<?php
$i = 1;
while($argc-- > 1)
    $tab[$i - 1] = $argv[$i++];
sort($tab);
$e = implode("\n",$tab);
print($e);
echo "\n";