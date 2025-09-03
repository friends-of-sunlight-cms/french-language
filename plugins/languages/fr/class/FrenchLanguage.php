<?php

namespace SunlightLanguage\Fr;

use Sunlight\Plugin\LanguagePlugin;

class FrenchLanguage extends LanguagePlugin
{
    function formatInteger(int $integer): string
    {
        if ($integer > 9999) {
            return parent::formatInteger($integer);
        }

        return sprintf('%d', $integer);
    }

    function formatFloat(float $float, int $decimals): string
    {
        if ($float > 9999) {
            return parent::formatFloat($float, $decimals);
        }

        return number_format($float, $decimals, $this->data->options['decimal_point'], '');
    }
}

