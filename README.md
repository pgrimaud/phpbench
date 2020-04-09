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

[Get first element of array](https://github.com/pgrimaud/phpbench/blob/master/benchmarks/GetFirstElementOfArray.php)

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

[Remove last element of tiny array (10 entries)](https://github.com/pgrimaud/phpbench/blob/master/benchmarks/RemoveLastElementOfTinyArray.php)

```shell script
+------------------------------------+---------+-------+
| subject                            | mean    | diff  |
+------------------------------------+---------+-------+
| benchWithUnset                     | 0.117μs | 1.00x |
| benchWithArraySlice                | 0.135μs | 1.15x |
| benchWithArrayPop                  | 0.145μs | 1.24x |
| benchWithArrayReverseAndArrayShift | 0.253μs | 2.17x |
+------------------------------------+---------+-------+
```

[Remove last element of large array (10000 entries)](https://github.com/pgrimaud/phpbench/blob/master/benchmarks/RemoveLastElementOfLargeArray.php)

```shell script
+------------------------------------+----------+-------+
| subject                            | mean     | diff  |
+------------------------------------+----------+-------+
| benchWithArrayPop                  | 31.149μs | 1.00x |
| benchWithUnset                     | 32.279μs | 1.04x |
| benchWithArraySlice                | 33.904μs | 1.09x |
| benchWithArrayReverseAndArrayShift | 94.314μs | 3.03x |
+------------------------------------+----------+-------+

```

## LICENSE
Licensed under the terms of the MIT License.
