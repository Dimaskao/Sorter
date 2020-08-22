<?php

declare(strict_types=1);

namespace Dimaskao\Sorter;

/**
 * Class SortDESC.
 */
class SortDESC implements SorterInterface
{
    public function sort(array $array): array
    {
        \arsort($array);

        return $array;
    }
}
