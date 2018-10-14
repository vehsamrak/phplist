<?php
namespace Test\Vehsamrak\ListCollection;

use PHPUnit\Framework\TestCase;
use Vehsamrak\ListCollection\Exceptions\InvalidTypeException;
use Vehsamrak\ListCollection\IntegerList;

class IntegerListTest extends TestCase
{
    /**
     * @test
     * @dataProvider getValidParameters
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
     * @dataProvider getInvalidParameters
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

    /**
     * @test
     * @dataProvider getValidParameters
     */
    public function add_validParameters_noExceptions(array $parameters): void
    {
        $integerList = new IntegerList();
        $exception = null;

        try {
            foreach ($parameters as $parameter) {
                $integerList->add($parameter);
            }
        } catch (\Exception $exception) {
        }

        $this->assertNull($exception);
    }

    /**
     * @test
     * @dataProvider getInvalidParameters
     */
    public function add_invalidParameters_noExceptions(array $parameters): void
    {
        $integerList = new IntegerList();
        $exception = null;

        try {
            foreach ($parameters as $parameter) {
                $integerList->add($parameter);
            }
        } catch (\Exception $exception) {
        }

        $this->assertInstanceOf(InvalidTypeException::class, $exception);
    }

    /**
     * @test
     * @dataProvider getValidParameters
     */
    public function set_validParameters_noExceptions(array $parameters): void
    {
        $integerList = new IntegerList();
        $exception = null;

        try {
            foreach ($parameters as $parameter) {
                $integerList->set(0, $parameter);
            }
        } catch (\Exception $exception) {
        }

        $this->assertInstanceOf(IntegerList::class, $integerList);
        $this->assertNull($exception);
    }

    /**
     * @test
     * @dataProvider getInvalidParameters
     */
    public function set_invalidParameters_noExceptions(array $parameters): void
    {
        $integerList = new IntegerList();
        $exception = null;

        try {
            foreach ($parameters as $parameter) {
                $integerList->set(0, $parameter);
            }
        } catch (\Exception $exception) {
        }

        $this->assertInstanceOf(InvalidTypeException::class, $exception);
    }

    public function getValidParameters()
    {
        return [
            [[]],
            [[1]],
            [[1,2]],
            [[1,2,3]],
        ];
    }

    public function getInvalidParameters()
    {
        return [
            [[1.1]],
            [['string']],
            [[1, 'string']],
            [[new self()]],
        ];
    }
}
