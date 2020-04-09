<?php

/**
 * @Revs(1000000)
 * @Iterations(5)
 */
class RemoveLastElementOf
{
    /**
     * @var array
     */
    private $tinyArray;

    public function __construct()
    {
        $this->tinyArray = [];
        for ($i = 0; $i < 10; $i++) {
            $this->tinyArray[] = $i;
        }
    }

    public function benchWithArrayPop()
    {
        $array = $this->tinyArray;
        array_pop($array);
    }

    public function benchWithUnset()
    {
        $array = $this->tinyArray;
        unset($array[count($array) - 1]);
    }

    public function benchWithArraySlice()
    {
        $array = $this->tinyArray;
        array_slice($array, 0, -1, true);
    }

    public function benchWithArrayReverseAndArrayShift()
    {
        $array = $this->tinyArray;
        array_reverse($array);
        array_shift($array);
    }
}
