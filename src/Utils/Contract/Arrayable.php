<?php
declare(strict_types=1);

namespace Nlitt\MongoDb\Utils\Contract;
/**
 * Interface Arrayable
 */
interface Arrayable
{
    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray(): array;
}
