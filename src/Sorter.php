<?php

declare(strict_types=1);

namespace Dimaskao\Sorter;

/**
 * Class Sorter.
 *
 * Contain logics for "Strategy" pattern.
 */
final class Sorter
{
    /** @var SorterInterface Contain object of sorter */
    private $sorter;

    public function __construct(SorterInterface $sorter)
    {
        $this->sorter = $sorter;
    }

    public function setSorter(SorterInterface $sorter): void
    {
        $this->sorter = $sorter;
    }

    public function sort(array $array): array
    {
        return $this->sorter->sort($array);
    }
}
