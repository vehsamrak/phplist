<?php
namespace Test\Vehsamrak\ListCollection;

use Vehsamrak\ListCollection\ResourceList;

class ResourceListTest extends AbstractListTest
{
    protected function getListClassName(): string {
        return ResourceList::class;
    }

    public function getValidParameters()
    {
        return [
            [[]],
            [[opendir(__DIR__)]],
            [[opendir(__DIR__), opendir(__DIR__)]],
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
