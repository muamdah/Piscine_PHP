#!/usr/bin/php
<?php
echo "Entrez un nombre:";
$i = fgets(STDIN);
echo $i;
if($i % 2 == 0)
{
    echo "paire";
}
else
    echo "impare";