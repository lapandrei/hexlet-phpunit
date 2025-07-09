<?php

namespace Hexlet\PhpUnit\Utils;

function reverseString(string $string): string
{
    return implode(array_reverse(str_split($string)));
}
