<?php

declare(strict_types=1);

namespace Dimaskao\Sorter;

/**
 * Class NullSorter.
 */
class NullSorter implements SorterInterface
{
    public function sort(array $array): array
    {
        // Do nothing with array.

        return $array;
    }
}
