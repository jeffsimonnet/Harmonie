<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('date_locale', [DateLocaleFilterRuntime::class, 'dateLocale']),
        ];
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('offuscate', [$this, 'offuscate']),
        ];
    }

    // NOTE To be used in a href element
    public function offuscate(string $url, $bypass = false)
    {
        if ($bypass) return $url;
        return 'javascript:;" data-qcd="' . base64_encode($url);
    }
}
