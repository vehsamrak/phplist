<?php
/** @noinspection PhpUnitUndefinedDataProviderInspection */
namespace Test\Vehsamrak\ListCollection;

use PHPUnit\Framework\TestCase;
use Vehsamrak\ListCollection\AbstractTypedList;
use Vehsamrak\ListCollection\Exceptions\InvalidTypeException;

abstract class AbstractListTest extends TestCase
{
    /**
     * @test
     * @dataProvider getValidParameters
     */
    public function construct_validConstructorParameters_newListCreatedWithNoExceptions(array $parameters): void
    {
        try {
            $integerList = $this->createList($parameters);
        } catch (\Exception $exception) {
        }

        $this->assertInstanceOf($this->getListClassName(), $integerList);
        $this->assertNull($exception);
    }

    /**
     * @test
     * @dataProvider getInvalidParameters
     */
    public function construct_invalidConstructorParameters_invalidTypeExceptionThrowed(array $parameters): void
    {
        try {
            $integerList = $this->createList($parameters);
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
        $integerList = $this->createList();

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
        $integerList = $this->createList();

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
        $integerList = $this->createList();

        try {
            foreach ($parameters as $parameter) {
                $integerList->set(0, $parameter);
            }
        } catch (\Exception $exception) {
        }

        $this->assertInstanceOf($this->getListClassName(), $integerList);
        $this->assertNull($exception);
    }

    /**
     * @test
     * @dataProvider getInvalidParameters
     */
    public function set_invalidParameters_noExceptions(array $parameters): void
    {
        $integerList = $this->createList();

        try {
            foreach ($parameters as $parameter) {
                $integerList->set(0, $parameter);
            }
        } catch (\Exception $exception) {
        }

        $this->assertInstanceOf(InvalidTypeException::class, $exception);
    }

    protected function createList(array $parameters = []): AbstractTypedList
    {
        $className = $this->getListClassName();

        return new $className($parameters);
    }

    abstract protected function getListClassName(): string;
}
