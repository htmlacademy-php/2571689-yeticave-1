<?php
/**
 * Функция форматирует цену лота
 * @param float $price
 * @return string
 */
const SIGN = '₽';
function formatPrice(float $price): string
{
    if ($price < 1000) {
        return $price . ' ' . SIGN;
    }
    $price = floor($price);
    $price = number_format($price, 0, '.', ' ');
    return $price . ' ' . SIGN;
}
