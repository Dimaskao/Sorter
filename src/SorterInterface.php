<?php

declare(strict_types=1);

/*
 * This library can sort array.
 */

namespace Dimaskao\Sorter;

interface SorterInterface
{
    public function sort(array $array): array;
}
