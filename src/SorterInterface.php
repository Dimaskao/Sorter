<?php

declare(strict_types=1);

namespace Dimaskao\Sorter;

/**
 * Interface SorterInterface describes the sort() method.
 */
interface SorterInterface
{
    public function sort(array $array): array;
}
