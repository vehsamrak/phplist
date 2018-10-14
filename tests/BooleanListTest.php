<?php
namespace Test\Vehsamrak\ListCollection;

use Vehsamrak\ListCollection\BooleanList;

class BooleanListTest extends AbstractListTest
{
    protected function getListClassName(): string
    {
        return BooleanList::class;
    }

    public function getValidParameters()
    {
        return [
            [[]],
            [[true]],
            [[true,false]],
        ];
    }

    public function getInvalidParameters()
    {
        return [
            [[1.1]],
            [[1]],
            [['string']],
            [[1, 'string']],
            [[new self()]],
        ];
    }
}
