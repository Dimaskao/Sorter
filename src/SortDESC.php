<?php

declare(strict_types=1);

namespace Dimaskao\Sorter;

/**
 * Class SortASC
 *
 * Sorts the array in descending order.
 */
final class SortDESC implements SorterInterface
{
    public function sort(array $array): array
    {
        \arsort($array);

        return $array;
    }
}
