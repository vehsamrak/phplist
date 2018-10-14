<?php
/**
 * Created by PhpStorm.
 * User: petr
 * Date: 14.10.18
 * Time: 16:42
 */
namespace Test\Vehsamrak\ListCollection;

use PHPUnit\Framework\TestCase;
use Vehsamrak\ListCollection\IntegerList;

class IntegerListTest extends TestCase
{
    /**
     * @test
     * @dataProvider getValidConstructorParameters
     */
    public function construct_validConstructorParameters_newIntegerListCreatedWithNoExceptions(array $parameters): void
    {
        $integerList = null;
        $exception = null;

        try {
            $integerList = new IntegerList($parameters);
        } catch (\Exception $exception) {
        }

        $this->assertInstanceOf(IntegerList::class, $integerList);
        $this->assertNull($exception);
    }

    public function getValidConstructorParameters()
    {
        return [
            [[]],
            [[1]],
            [[1,2]],
            [[1,2,3]],
        ];
    }
}
