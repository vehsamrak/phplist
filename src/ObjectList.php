<?php declare(strict_types=1);
namespace Vehsamrak\ListCollection;

use Vehsamrak\ListCollection\Exceptions\InvalidTypeException;

/**
 * List which contains only untyped objects
 */
class ObjectList extends AbstractTypedList
{
    public function __construct(array $elements = [])
    {
        foreach ($elements as $element) {
            $this->checkType($element);
        }

        parent::__construct($elements);
    }

    /** @inheritDoc */
    public function checkType($element): void
    {
        if (!is_object($element)) {
            throw new InvalidTypeException(
                sprintf('Element "%s" is not an object', json_encode($element))
            );
        }
    }
}
