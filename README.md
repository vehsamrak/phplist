# List implementation for PHP
List structure PHP implementation based on Doctrine collections.
Supported lists:
* TypedList (by class name)
* IntegerList
* StringList
* BooleanList
* FloatList
* FunctionList
* CollectionList
* ArrayList
* ObjectList
* ResourceList

### Installation
```
composer require vehsamrak/phplist
```

### Usage

```php
<?php

use Vehsamrak\ListCollection\TypedList;
use Vehsamrak\ListCollection\IntegerList;

$typedList = new TypedList(Foobar::class, [new Foobar(), new Foobar()]);

$foobar = new Foobar();
$typedList->add($foobar);
$typedList->remove($foobar);

$otherType = new OtherType();
$typedList->add($otherType); // will throw InvalidTypeException

$integerList = new IntegerList();
$integerList->add(1);
$integerList->add('not a number'); // will throw InvalidTypeException

// Examples could be found in `tests` directory

// More use cases can be found in Doctrine collections documentation:
// https://www.doctrine-project.org/projects/doctrine-collections/en/latest/index.html
```

### Creation of custom typed lists

You can create your own typed lists simply by extending TypedList.

```php
<?php
use Vehsamrak\ListCollection\TypedList;

class CustomList extends TypedList
{
    public function __construct(array $elements = [])
    {
        parent::__construct(Custom::class, $elements);
    }
}
```

### Testing
First, install development requirements with `composer install`. Then, tests could be executed with `vendor/bin/phpunit tests`
