<?php

function maskify(string $card): string
{
    if ($card === '') return '';
    $reg = '/[0-9]/';
    $mask = preg_replace($reg, '#', $card);
    $mask = substr($mask, 1, -4);

    return $card[0]. $mask . substr($card, -4);
}
