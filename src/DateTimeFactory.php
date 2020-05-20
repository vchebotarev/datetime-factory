<?php

declare(strict_types=1);

namespace Chebur\DateTimeFactory;

use DateTime;
use DateTimeInterface;
use DateTimeZone;
use InvalidArgumentException;

class DateTimeFactory implements DateTimeFactoryInterface
{
    public function createDateTime(string $time = 'now'): DateTimeInterface
    {
        return new DateTime($time);
    }

    public static function createDateTimeFromFormat(string $format, string $time, ?DateTimeZone $timezone = null): DateTimeInterface
    {
        $datetime = DateTime::createFromFormat($format, $time, $timezone);
        if ($datetime === false) {
            throw new InvalidArgumentException(implode(', ', DateTime::getLastErrors()['errors']));
        }
        return $datetime;
    }
}
