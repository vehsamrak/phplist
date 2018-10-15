<?php
namespace Test\Vehsamrak\ListCollection;

use Doctrine\Common\Collections\ArrayCollection;
use Vehsamrak\ListCollection\CollectionList;
use Vehsamrak\ListCollection\FloatList;
use Vehsamrak\ListCollection\IntegerList;

class CollectionListTest extends AbstractListTest
{
    protected function getListClassName(): string
    {
        return CollectionList::class;
    }

    public function getValidParameters()
    {
        return [
            [[]],
            [[new ArrayCollection()]],
            [[new FloatList(), new IntegerList()]],
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
