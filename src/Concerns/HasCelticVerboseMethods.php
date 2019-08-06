<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasCelticVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Irish.
     *
     * @returnsmixed
     */
    public function inIrish()
    {
        return $this->getTranslationIn('ga');
    }

    /**
     * Function to retrieve the translation in Welsh.
     *
     * @returnsmixed
     */
    public function inWelsh() : string
    {
        return $this->getTranslationIn('cy');
    }

    /**
     * Function to retrieve the translation in Scots Gaelic.
     *
     * @returnsmixed
     */
    public function inScotsGaelic() : string
    {
        return $this->getTranslationIn('gd');
    }
}
