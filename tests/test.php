#!/usr/bin/php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dimaskao\Sorter\NullSorter;
use Dimaskao\Sorter\SortASC;
use Dimaskao\Sorter\SortDESC;
use Dimaskao\Sorter\Sorter;

$arr = [9, 0, 1, 5, 77, -5];

$sorter = new Sorter(new SortDESC());
$a = $sorter->sort($arr);

\print_r($a);

$sorter->setSorter(new SortASC());
$b = $sorter->sort($arr);

\print_r($b);

$sorter->setSorter(new SortASC());
$sorter->setSorter(new NullSorter());
$b = $sorter->sort($arr);

\print_r($b);
