<?php

declare(strict_types=1);

namespace Chebur\DateTimeFactory;

use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;
use InvalidArgumentException;

class DateTimeImmutableFactory implements DateTimeFactoryInterface
{
    public function createDateTime(string $time = 'now'): DateTimeInterface
    {
        return new DateTimeImmutable($time);
    }

    public static function createDateTimeFromFormat(string $format, string $time, ?DateTimeZone $timezone = null): DateTimeInterface
    {
        $datetime = DateTimeImmutable::createFromFormat($format, $time, $timezone);
        if ($datetime === false) {
            throw new InvalidArgumentException(implode(', ', DateTimeImmutable::getLastErrors()['errors']));
        }
        return $datetime;
    }
}
