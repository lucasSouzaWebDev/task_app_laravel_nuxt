<?php

namespace App\Core\Shared\Exceptions;

use Exception;

class NotFoundException extends Exception
{
    public function __construct($entity, $code = 0)
    {
        parent::__construct("$entity not found.", $code);
    }
}