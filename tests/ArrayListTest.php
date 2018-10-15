<?php
namespace Test\Vehsamrak\ListCollection;

use Vehsamrak\ListCollection\ArrayList;

class ArrayListTest extends AbstractListTest
{
    protected function getListClassName(): string
    {
        return ArrayList::class;
    }

    public function getValidParameters()
    {
        return [
            [[]],
            [[['array']]],
            [[['first', 'array'], ['second', 'array']]],
        ];
    }

    public function getInvalidParameters()
    {
        return [
            [['string']],
            [[1]],
            [[1, 'string']],
            [[new self()]],
            [[true]],
        ];
    }
}
