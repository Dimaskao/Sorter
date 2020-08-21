<?php

declare(strict_types=1);

/*
 * This library can sort array.
 */

namespace Dimaskao\Sorter;

class NullSorter implements SorterInterface
{
    public function sort(array $array): array
    {
        // Do nothing with array.

        return $array;
    }
}
