<?php declare(strict_types=1);
namespace Vehsamrak\ListCollection;

use Doctrine\Common\Collections\Collection;

/**
 * List which contains only collections
 */
class CollectionList extends TypedList
{
    public function __construct(array $elements = [])
    {
        foreach ($elements as $element) {
            $this->checkType($element);
        }

        parent::__construct(Collection::class, $elements);
    }
}
