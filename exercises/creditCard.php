<?php

function maskify(string $cc): string
{
    if ($cc === '') return '';
    $reg = '/[0-9]/';
    $mask = preg_replace($reg, '#', $cc);
    $mask = substr($mask, 1, -4);

    return $cc[0]. $mask . substr($cc, -4);
}
