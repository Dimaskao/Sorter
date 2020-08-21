# Library for sorting
This library can sort array with numbers and letters.
# Table of contents
* [Installation](#Installation)
* [How to use](#How-to-use)
    * [General](#General)
    * [NullSorter](#NullSorter)
* [Library extension](#Library-extension)
* [Example](#Example)
## Installation
You can use composer to install this extension.

Just run:
```
$ composer require dimaskao/sorter
```
## How to use
### General
At first include this library classes: 
```php
require_once __DIR__ . '/XXXXX/vendor/autoload.php';

use Dimaskao\Sorter\Sorter //required class

use Dimaskao\Sorter\NullSorter; //|\
use Dimaskao\Sorter\SortASC;    //|- Choose what you need
use Dimaskao\Sorter\SortDESC;   //|/
```
Where `XXXXX` path to library root folder. 

If you want to sort array create `Sorter` object and pass `SortASC` or `SortDESC` object.
```php
$sorter = new Sorter(new SortASC());
```

Then use `->sort()` method and pass an array to it.
This method will return a sorted array.
```php
$sorter->sort($array);
```

This library use Strategy patterns so you can cheng sorting method by `-setSorter()`.
Just pass it a new sort object.
```php
$sorter = new Sorter(new SortDESC());

$sorter->setSorter(new SortASC());
```
### NullSorter
For debugging you can use `NullSorter()`.
```php
$sorter->setSorter(new SortASC());//this will sort array
$sorter->setSorter(new NullSorter());//this would not sort array
$b = $sorter->sort($arr);
```
## Library extension
If you would add new formats of sorting, you should create your own class 
which implements `SorterInterface.php`.
```php
require_once __DIR__ . '/vendor/autoload.php';

use Dimaskao\Sorter\SorterInterface;

class YourFormat implements SorterInterface {

}
```
## Example
Let's see how it works.
```php
require_once __DIR__ . 'vendor/autoload.php';

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

```
As a result, we get.
```php
Array
(
    [4] => 77
    [0] => 9
    [3] => 5
    [2] => 1
    [1] => 0
    [5] => -5
)
Array
(
    [5] => -5
    [1] => 0
    [2] => 1
    [3] => 5
    [0] => 9
    [4] => 77
)
Array
(
    [0] => 9
    [1] => 0
    [2] => 1
    [3] => 5
    [4] => 77
    [5] => -5
)
```