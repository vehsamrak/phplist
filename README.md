# List implementation for PHP
List structure PHP implementation based on Doctrine collections.

### Installation
Install the latest version with
```
composer require vehsamrak/php-list
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

$integerList = new IntegerList();
$integerList->add(1);
$integerList->add('not a number'); // will throw InvalidTypeException

// more usecases can be found in Doctrine collections documentation: https://www.doctrine-project.org/projects/doctrine-collections/en/latest/index.html
```
