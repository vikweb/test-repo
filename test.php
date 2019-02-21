<?php

/**
 * @package vw-function
 * @version 1.1
 */
/*
  * Plugin Name: vw-function
  * Plugin URI: http://wordpress.org/
  * Description: расширение которое содержит все нужные функции из старой версии вордпресса
  * Author: Viktor Serobaba
  * Version: 1.1
  * Author URI: http://vikweb.net/
 */

if (!function_exists('eregi')) :

    function eregi(string $pattern, string $string, array &$regs)
    {
        if (empty($pattern))
            return $string;
        if (strstr($pattern, '%') === false)
            return preg_match_all("%" . $pattern . "%i", $string, $regs);
        if (strstr($pattern, '&') === false)
            return preg_match_all("&" . $pattern . "&i", $string, $regs);
        if (strstr($pattern, '|') === false)
            return preg_match_all("|" . $pattern . "|i", $string, $regs);
        return preg_match_all("/" . $pattern . "/i", $string, $regs);
    }

endif;

if (!function_exists('eregi_replace')) :

    function eregi_replace(string $pattern, string $replacement, string $string)
    {
        if (empty($pattern))
            return $string;
        if (strstr($pattern, '%') === false)
            return preg_replace("%" . $pattern . "%i", $replacement, $string);
        if (strstr($pattern, '&') === false)
            return preg_replace("&" . $pattern . "&i", $replacement, $string);
        if (strstr($pattern, '|') === false)
            return preg_replace("|" . $pattern . "|i", $replacement, $string);
        return preg_replace("/" . $pattern . "/i", $replacement, $string);
    }

endif;


if (!function_exists('split')):

    function split(string $pattern, string $string)
    {
        if (empty($pattern))
            return $string;
        if (strstr($pattern, '%') === false)
            return preg_split("%" . $pattern . "%i", $string);
        if (strstr($pattern, '&') === false)
            return preg_split("&" . $pattern . "&i", $string);
        if (strstr($pattern, '|') === false)
            return preg_split("|" . $pattern . "|i", $string);
        return preg_split("/" . $pattern . "/i", $string);
    }

endif;

if (!function_exists('strpos')):

    function strpos(string $haystack, string $needle, $offset = 0)
    {
        if (empty($haystack))
            return $haystack;
        return mb_strpos($haystack, $needle, $offset);
    }


endif;


