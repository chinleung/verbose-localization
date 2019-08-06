<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasGermanicVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Afrikaans.
     *
     * @return mixed
     */
    public function inAfrikaans()
    {
        return $this->getTranslationIn('af');
    }

    /**
     * Function to retrieve the translation in Danish.
     *
     * @return mixed
     */
    public function inDanish()
    {
        return $this->getTranslationIn('da');
    }

    /**
     * Function to retrieve the translation in Dutch.
     *
     * @return mixed
     */
    public function inDutch()
    {
        return $this->getTranslationIn('nl');
    }

    /**
     * Function to retrieve the translation in English.
     *
     * @return mixed
     */
    public function inEnglish()
    {
        return $this->getTranslationIn('en');
    }

    /**
     * Function to retrieve the translation in Frisian.
     *
     * @return mixed
     */
    public function inFrisian()
    {
        return $this->getTranslationIn('fy');
    }

    /**
     * Function to retrieve the translation in German.
     *
     * @return mixed
     */
    public function inGerman()
    {
        return $this->getTranslationIn('de');
    }

    /**
     * Function to retrieve the translation in Icelandic.
     *
     * @return mixed
     */
    public function inIcelandic()
    {
        return $this->getTranslationIn('is');
    }

    /**
     * Function to retrieve the translation in Luxembourgish.
     *
     * @return mixed
     */
    public function inLuxembourgish()
    {
        return $this->getTranslationIn('lb');
    }

    /**
     * Function to retrieve the translation in Norwegian.
     *
     * @return mixed
     */
    public function inNorwegian() : string
    {
        return $this->getTranslationIn('no');
    }

    /**
     * Function to retrieve the translation in Yiddish.
     *
     * @return mixed
     */
    public function inYiddish() : string
    {
        return $this->getTranslationIn('yi');
    }

    /**
     * Function to retrieve the translation in Swedish.
     *
     * @return mixed
     */
    public function inSwedish() : string
    {
        return $this->getTranslationIn('sv');
    }
}
