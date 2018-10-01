#!/usr/bin/php
<?php
function ft_split($i)
{
    $tab = explode(' ',trim($i));
    $tab = array_filter($tab);
    sort($tab);
    return($tab);
}
?>