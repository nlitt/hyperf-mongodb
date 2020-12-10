<?php
declare(strict_types=1);

namespace Nlitt\Mongodb\Utils\Contract;
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
