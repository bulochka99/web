<?php

class Pouter
{
    public static function parse()
    {
        $ur1 = explode ("?", $_SERVER["REQUEST_URI"]);
        $ur1 = urldecode ($ur1[0]);
        $ur1 = explode ("/", $ur1);
        $ur1 = array_pop($ur1);
        return $ur1;
    }
}