<?php

namespace unaspbr;

/**
 * Iugu ─ Wraps iugu-php to be used on Laravel
 *
 * @author Mateus Felipe <mateusfccp@gmail.com>
 * @package IuguLaravel
 * @version 1.3
 */
class Iugu {
    public static function r($resource)
    {
        $class = implode(
            array_map(
                function ($word) use ($resource) {return strtoupper(substr($word, 0, 1)) . strtolower(substr($word, 1));},
                explode('_', $resource)));

        return "unaspbr\\Iugu\\{$class}";
    }
}
