<?php

declare(strict_types=1);

/*
 * This library can sort array.
 */

namespace Dimaskao\Sorter;

class Sorter
{
    private $strategy;

    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    public function setSorter(SorterInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function sort(array $array): array
    {
        $result = $this->strategy->sort($array);

        return $result;
    }
}
