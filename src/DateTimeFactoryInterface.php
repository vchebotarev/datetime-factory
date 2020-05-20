<?php

declare(strict_types=1);

namespace Chebur\DateTimeFactory;

use DateTimeInterface;
use DateTimeZone;
use InvalidArgumentException;

interface DateTimeFactoryInterface
{
    public function createDateTime(string $time = 'now'): DateTimeInterface;

    /**
     * @throws InvalidArgumentException
     */
    public static function createDateTimeFromFormat(string $format, string $time, ?DateTimeZone $timezone=null): DateTimeInterface;
}
