<?php declare(strict_types=1);
namespace Vehsamrak\ListCollection\Exceptions;

class InvalidTypeException extends \DomainException
{
    public function __construct(string $message = '')
    {
        parent::__construct($message);
    }
}
