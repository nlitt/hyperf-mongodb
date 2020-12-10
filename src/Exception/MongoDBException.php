<?php
declare(strict_types=1);

namespace Nlitt\Mongodb\Exception;

use Throwable;

class MongoDBException extends \Exception
{
    public function __construct(string $message, int $code, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
