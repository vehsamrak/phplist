<?php declare(strict_types=1);
namespace Vehsamrak\ListCollection;

use Vehsamrak\ListCollection\Exceptions\InvalidTypeException;

/**
 * Strongly typed list of objects that can be accessed by index
 */
class TypedList extends AbstractTypedList
{
    /** @var string */
    private $className;

    public function __construct(string $className, array $elements = [])
    {
        $this->className = $className;

        foreach ($elements as $element) {
            $this->checkType($element);
        }

        parent::__construct($elements);
    }

    /** @inheritDoc */
    public function checkType($element): void
    {
        if (!is_object($element) || !$element instanceof $this->className) {
            if (is_object($element)) {
                $elementData = get_class($element);
            } else {
                $elementData = json_encode($element);
            }

            throw new InvalidTypeException(
                sprintf('Element "%s" is not an instance of %s', $elementData, $this->className)
            );
        }
    }
}
