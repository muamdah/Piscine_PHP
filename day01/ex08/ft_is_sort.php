#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
    $tab2 = $tab;
    sort($tab);
    $i = 0;
    foreach($tab as $i)
    {
        if ($tab != $tab2)
            return (false);
        $i++;
    }
    return(true);
}
?>