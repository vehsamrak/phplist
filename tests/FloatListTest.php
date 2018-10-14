<?php
namespace Test\Vehsamrak\ListCollection;

use Vehsamrak\ListCollection\FloatList;

class FloatListTest extends AbstractListTest
{
    protected function getListClassName(): string
    {
        return FloatList::class;
    }

    public function getValidParameters()
    {
        return [
            [[]],
            [[1.1]],
            [[1.1, 2.2]],
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
