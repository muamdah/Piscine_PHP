#!/usr/bin/php
<?php

while (1)
{
    echo "Entrez un nombre: ";
    $element = trim(fgets(STDIN));
    if(empty($element))
        exit;
    if(is_numeric($element))
    {
        if($element % 2 == 0)
            echo "Le chiffre {$element} est Paire\n";
        else
            echo "Le chiffre {$element} est Impare\n";
    }
    else
        echo "'{$element}' n'est pas un chiffre\n";
}