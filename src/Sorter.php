<?php


namespace Dimaskao\Sorter;


class Sorter
{
    private $strategy;

    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(SorterInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function sort(array $array): array
    {
        $result = $this->strategy->sort($array);

        return $result;
    }
}