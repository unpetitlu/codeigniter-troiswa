<?php

// Réécriture d'une fonction déjà existante dans un helper
/*
function anchor($uri = '', $title = '', $attributes = '')
{
        return 'salut';
}
*/

// Création d'une nouvelle fonction
function sayHello($firtsname)
{
    return 'Hello '.$firtsname;
}