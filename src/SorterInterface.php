<?php

declare(strict_types=1);

namespace Dimaskao\Sorter;

/**
 * Interface SorterInterface.
 */
interface SorterInterface
{
    public function sort(array $array): array;
}
