<?php

declare(strict_types=1);

/*
 * This library can sort array.
 */

namespace Dimaskao\Sorter;

class SortASC implements SorterInterface
{
    public function sort(array $array): array
    {
        \asort($array);

        return $array;
    }
}
