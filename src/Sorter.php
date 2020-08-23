<?php

declare(strict_types=1);

namespace Dimaskao\Sorter;

/**
 * Class Sorter
 *
 * Contain logics for "Strategy" pattern.
 */
final class Sorter
{
    /** @var object Contain object of sorter */
    private object $sorter;

    public function __construct(object $sorter)
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
