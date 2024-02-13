<?php

use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

/**
 * @Revs(10000)
 * @Iterations(1)
 * @BeforeMethods({"getRandomArray"})
 */
class ArrayHasKeyBench
{
    private array $array = [];

    public function getRandomArray()
    {
        for ($i = 0; $i < 100000; $i++) {
            $this->array['k' . $i] = $i;
        }
    }

    public function benchWithIsset()
    {
        isset($this->array['k99999']);
    }

    public function benchWithArrayKeyExists()
    {
        array_key_exists('k99999', $this->array);
    }

    public function benchWithArrayAndCast()
    {
        in_array('k99999', array_keys($this->array));
    }

    public function benchWithNullCoalescingOperator()
    {
        $this->array['k99999'] ?? false;
    }
}
