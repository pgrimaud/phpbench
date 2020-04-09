<?php

/**
 * @Revs(10000)
 * @Iterations(5)
 */
class RemoveLastElementOfLargeArray
{
    /**
     * @var array
     */
    private $largeArray;

    public function __construct()
    {
        $this->largeArray = [];
        for ($i = 0; $i < 10000; $i++) {
            $this->largeArray[] = $i;
        }
    }

    public function benchWithAndArrayPop()
    {
        $array = $this->largeArray;
        array_pop($array);
    }

    public function benchWithAndUnset()
    {
        $array = $this->largeArray;
        unset($array[count($array) - 1]);
    }

    public function benchWithAndArraySlice()
    {
        $array = $this->largeArray;
        array_slice($array, 0, -1, true);
    }

    public function benchWithArrayReverseAndArrayShift()
    {
        $array = $this->largeArray;
        array_reverse($array);
        array_shift($array);
    }
}
