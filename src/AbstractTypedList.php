<?php declare(strict_types=1);
namespace Vehsamrak\ListCollection;

use Doctrine\Common\Collections\ArrayCollection;
use Vehsamrak\ListCollection\Exceptions\InvalidTypeException;

abstract class AbstractTypedList extends ArrayCollection
{
    public function set($key, $value): void
    {
        $this->checkType($value);

        parent::set($key, $value);
    }

    public function add($element): bool
    {
        $this->checkType($element);

        return parent::add($element);
    }

    /**
     * @param $element mixed Type to check
     * @throws InvalidTypeException
     */
    abstract public function checkType($element): void;
}
