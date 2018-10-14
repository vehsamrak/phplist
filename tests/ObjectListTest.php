<?php
namespace Test\Vehsamrak\ListCollection;

use Vehsamrak\ListCollection\ObjectList;

class ObjectListTest extends AbstractListTest
{
    protected function getListClassName(): string
    {
        return ObjectList::class;
    }

    public function getValidParameters()
    {
        return [
            [[]],
            [[new self()]],
            [[new self(), new self()]],
        ];
    }

    public function getInvalidParameters()
    {
        return [
            [['string']],
            [[1]],
            [[1.1]],
            [[1, 'string']],
            [[true]],
        ];
    }
}
