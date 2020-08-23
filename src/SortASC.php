<?php

declare(strict_types=1);

namespace Dimaskao\Sorter;

/**
 * Class SortASC.
 *
 * Sorts the array in ascending order.
 */
final class SortASC implements SorterInterface
{
    public function sort(array $array): array
    {
        \asort($array);

        return $array;
    }
}
