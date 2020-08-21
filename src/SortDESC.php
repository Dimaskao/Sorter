<?php

declare(strict_types=1);

/*
 * This library can sort array.
 */

namespace Dimaskao\Sorter;

class SortDESC implements SorterInterface
{
    public function sort(array $array): array
    {
        \arsort($array);

        return $array;
    }
}
