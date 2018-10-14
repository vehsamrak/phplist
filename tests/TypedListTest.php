<?php
namespace Test\Vehsamrak\ListCollection;

use Vehsamrak\ListCollection\AbstractTypedList;
use Vehsamrak\ListCollection\TypedList;

class TypedListTest extends AbstractListTest
{
    protected function createList(array $parameters = []): AbstractTypedList
    {
        $className = $this->getListClassName();

        return new $className(self::class, $parameters);
    }

    protected function getListClassName(): string {
        return TypedList::class;
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
