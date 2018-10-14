<?php
namespace Test\Vehsamrak\ListCollection;

use Vehsamrak\ListCollection\FunctionList;

class FunctionListTest extends AbstractListTest
{
    protected function getListClassName(): string
    {
        return FunctionList::class;
    }

    public function getValidParameters()
    {
        $function = function () {};

        return [
            [[]],
            [[$function]],
            [[$function, $function]],
        ];
    }

    public function getInvalidParameters()
    {
        return [
            [[1.1]],
            [[1]],
            [[true]],
            [['string']],
            [[new self()]],
        ];
    }
}
