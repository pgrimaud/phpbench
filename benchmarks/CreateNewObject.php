<?php

/**
 * @Revs(1000000)
 * @Iterations(10)
 */
class CreateNewObject
{
    public function benchWithSdtClass()
    {
        $object      = new \stdClass();
        $object->foo = 'bar';
    }

    public function benchWithJsonEncode()
    {
        $object = json_decode('[\'foo\' => \'bar\']');
    }

    public function benchWithArrayAndCast()
    {
        $object = (object)[
            'foo' => 'bar'
        ];
    }

    public function benchWithAnonymousDeclaration()
    {
        $object = new class {
            public $foo = 'bar';
        };
    }
}
