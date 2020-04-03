<?php

/**
 * @Revs(1000000)
 * @Iterations(5)
 */
class GetFirstElementOfArray
{
    const TEST_ARRAY = [
        'A', 'B', 'C',
    ];

    public function benchWithCurrent()
    {
        $array = self::TEST_ARRAY;
        $x     = current($array);
    }

    public function benchWithFirstKey()
    {
        $array = self::TEST_ARRAY;
        $x     = $array[0];
    }

    public function benchWithForeach()
    {
        $array = self::TEST_ARRAY;

        foreach ($array as $value) {
            $x = $value;
            break;
        }
    }

    public function benchWithReset()
    {
        $array = self::TEST_ARRAY;
        $x     = reset($array);
    }
}
