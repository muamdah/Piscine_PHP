#!/usr/bin/php
<?php
$i = 1;
while($argc-- > 1)
{
    print($argv[$i++]);
    echo "\n";
}