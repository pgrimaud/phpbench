# PHPBench
Some PHP benchmarks - Very nice! WoW!

Based on [phpbench/phpbench](https://github.com/phpbench/phpbench).

## Installation

```
composer install
```

## Usage

Run all tests

```
bin/bench benchmarks 
```

Run specific test

```
bin/bench benchmarks/GetFirstElementOfArray.php
```

## Results

[Get first element of array](https://github.com/pgrimaud/phpbench/blob/master/benchmarks/FirstElementOfArray.php)

```shell script
+-------------------+---------+-------+
| subject           | mean    | diff  |
+-------------------+---------+-------+
| benchWithFirstKey | 0.048μs | 1.00x |
| benchWithCurrent  | 0.060μs | 1.27x |
| benchWithForeach  | 0.065μs | 1.36x |
| benchWithReset    | 0.107μs | 2.25x |
+-------------------+---------+-------+
```

## LICENSE
Licensed under the terms of the MIT License.
