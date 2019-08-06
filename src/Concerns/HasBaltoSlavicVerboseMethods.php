<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasBaltoSlavicVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Belarusian.
     *
     * @return mixed
     */
    public function inBelarusian()
    {
        return $this->getTranslationIn('be');
    }

    /**
     * Function to retrieve the translation in Bosnian.
     *
     * @return mixed
     */
    public function inBosnian()
    {
        return $this->getTranslationIn('bs');
    }

    /**
     * Function to retrieve the translation in Bulgarian.
     *
     * @return mixed
     */
    public function inBulgarian()
    {
        return $this->getTranslationIn('bg');
    }

    /**
     * Function to retrieve the translation in Croatian.
     *
     * @return mixed
     */
    public function inCroatian()
    {
        return $this->getTranslationIn('hr');
    }

    /**
     * Function to retrieve the translation in Czech.
     *
     * @return mixed
     */
    public function inCzech()
    {
        return $this->getTranslationIn('cs');
    }

    /**
     * Function to retrieve the translation in Latvian.
     *
     * @return mixed
     */
    public function inLatvian()
    {
        return $this->getTranslationIn('lv');
    }

    /**
     * Function to retrieve the translation in Lithuanian.
     *
     * @return mixed
     */
    public function inLithuanian()
    {
        return $this->getTranslationIn('lt');
    }

    /**
     * Function to retrieve the translation in Macedonian.
     *
     * @return mixed
     */
    public function inMacedonian()
    {
        return $this->getTranslationIn('mk');
    }

    /**
     * Function to retrieve the translation in Polish.
     *
     * @return mixed
     */
    public function inPolish() : string
    {
        return $this->getTranslationIn('pl');
    }

    /**
     * Function to retrieve the translation in Russian.
     *
     * @return mixed
     */
    public function inRussian() : string
    {
        return $this->getTranslationIn('ru');
    }

    /**
     * Function to retrieve the translation in Serbian.
     *
     * @return mixed
     */
    public function inSerbian() : string
    {
        return $this->getTranslationIn('sr');
    }

    /**
     * Function to retrieve the translation in Slovak.
     *
     * @return mixed
     */
    public function inSlovak() : string
    {
        return $this->getTranslationIn('sk');
    }

    /**
     * Function to retrieve the translation in Slovenian.
     *
     * @return mixed
     */
    public function inSlovenian() : string
    {
        return $this->getTranslationIn('sl');
    }

    /**
     * Function to retrieve the translation in Ukrainian.
     *
     * @return mixed
     */
    public function inUkrainian() : string
    {
        return $this->getTranslationIn('uk');
    }
}
