<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasAfroAsiaticVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Amharic.
     *
     * @return mixed
     */
    public function inAmharic()
    {
        return $this->getTranslationIn('am');
    }

    /**
     * Function to retrieve the translation in Arabic.
     *
     * @return mixed
     */
    public function inArabic()
    {
        return $this->getTranslationIn('ar');
    }

    /**
     * Function to retrieve the translation in Hausa.
     *
     * @return mixed
     */
    public function inHausa()
    {
        return $this->getTranslationIn('ha');
    }

    /**
     * Function to retrieve the translation in Hebrew.
     *
     * @return mixed
     */
    public function inHebrew()
    {
        return $this->getTranslationIn('iw');
    }

    /**
     * Function to retrieve the translation in Maltese.
     *
     * @return mixed
     */
    public function inMaltese()
    {
        return $this->getTranslationIn('mt');
    }

    /**
     * Function to retrieve the translation in Somali.
     *
     * @return mixed
     */
    public function inSomali()
    {
        return $this->getTranslationIn('so');
    }
}
