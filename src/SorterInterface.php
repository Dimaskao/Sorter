<?php

declare(strict_types=1);

namespace Dimaskao\Sorter;

/**
 * Interface SorterInterface
 *
 * Describes the sort() method.
 */
interface SorterInterface
{
    public function sort(array $array): array;
}
