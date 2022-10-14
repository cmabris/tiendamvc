<?php

class Validate
{
    public static function number($string)
    {
        $search = [' ', '€', '$', ','];
        $replace = ['', '', '', ''];

        return str_replace($search, $replace, $string);
     }

    public static function date($string)
    {
        $date = explode('-', $string);

        return checkdate($date[1], $date[2], $date[0]);
    }

    public static function dateDif($string)
    {
        $now = new DateTime();
        $date = new DateTime($string);

        return ($date > $now);
    }

    public static function file($string)
    {
        $search = [' ', '*', '!', '@', '?', 'á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ', 'ü', 'Ü', '¿', '¡'];
        $replace = ['-', '', '', '', '', 'a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U', 'n', 'N', 'u', 'U', '', ''];
        $file = str_replace($search,$replace, $string);

        return $file;
    }
}