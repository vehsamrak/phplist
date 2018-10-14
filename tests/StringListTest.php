<?php
namespace Test\Vehsamrak\ListCollection;

use Vehsamrak\ListCollection\StringList;

class StringListTest extends AbstractListTest
{
    protected function getListClassName(): string
    {
        return StringList::class;
    }

    public function getValidParameters()
    {
        return [
            [[]],
            [['first']],
            [['first', 'second']],
        ];
    }

    public function getInvalidParameters()
    {
        return [
            [[1.1]],
            [[1]],
            [[1, 'string']],
            [[new self()]],
            [[true]],
        ];
    }
}
