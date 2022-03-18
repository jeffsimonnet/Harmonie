<?php

namespace App\Twig;

use Twig\Extension\RuntimeExtensionInterface;

class DateLocaleFilterRuntime implements RuntimeExtensionInterface
{
    private $fmt;

    public function __construct()
    {
        $this->fmt = new \IntlDateFormatter(
            'fr_FR',
            \IntlDateFormatter::FULL,
            \IntlDateFormatter::FULL,
            'Europe/Paris',
            \IntlDateFormatter::GREGORIAN,
            'MMMM'
        );
    }

    public function dateLocale($date, string $format)
    {
        if (is_string($date)) {
            $date = strtotime($date);
        }

        switch ($format) {
            case "full":
                return date('d', $date) . ' ' . ucwords(datefmt_format($this->fmt, $date)) . ' ' . date('Y', $date);
            case "month":
                return ucwords(datefmt_format($this->fmt, $date));
        }

        return $date;
    }
}
