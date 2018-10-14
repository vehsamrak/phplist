<?php
namespace Test\Vehsamrak\ListCollection;

use PHPUnit\Framework\TestCase;
use Vehsamrak\ListCollection\Exceptions\InvalidTypeException;
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

    /**
     * @test
     * @dataProvider getInvalidConstructorParameters
     */
    public function construct_invalidConstructorParameters_invalidTypeExceptionThrowed(array $parameters): void
    {
        $integerList = null;
        $exception = null;

        try {
            $integerList = new IntegerList($parameters);
        } catch (\Exception $exception) {
        }

        $this->assertNull($integerList);
        $this->assertInstanceOf(InvalidTypeException::class, $exception);
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

    public function getInvalidConstructorParameters()
    {
        return [
            [[1.1]],
            [['string']],
            [[1, 'string']],
            [[new self()]],
        ];
    }
}
