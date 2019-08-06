<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasIndoEuropeanVerboseMethods
{
    use HasBaltoSlavicVerboseMethods,
        HasCelticVerboseMethods,
        HasGermanicVerboseMethods,
        HasIndoIranianVerboseMethods,
        HasItalicVerboseMethods;

    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Albanian.
     *
     * @return mixed
     */
    public function inAlbanian()
    {
        return $this->getTranslationIn('sq');
    }

    /**
     * Function to retrieve the translation in Armenian.
     *
     * @return mixed
     */
    public function inArmenian()
    {
        return $this->getTranslationIn('hy');
    }

    /**
     * Function to retrieve the translation in Greek.
     *
     * @returnsmixed
     */
    public function inGreek()
    {
        return $this->getTranslationIn('el');
    }
}
