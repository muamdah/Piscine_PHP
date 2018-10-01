#!/usr/bin/php
<?php
if ($argc == 2)
{
    $tab = explode(' ', trim($argv[1]));
    $tab = array_filter($tab);
    $i = implode(' ', $tab);
    print_r($i);
}