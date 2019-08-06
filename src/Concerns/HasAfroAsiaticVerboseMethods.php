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
     * @returnsmixed
     */
    public function inAmharic()
    {
        return $this->getTranslationIn('am');
    }

    /**
     * Function to retrieve the translation in Arabic.
     *
     * @returnsmixed
     */
    public function inArabic()
    {
        return $this->getTranslationIn('ar');
    }

    /**
     * Function to retrieve the translation in Hausa.
     *
     * @returnsmixed
     */
    public function inHausa()
    {
        return $this->getTranslationIn('ha');
    }

    /**
     * Function to retrieve the translation in Hebrew.
     *
     * @returnsmixed
     */
    public function inHebrew()
    {
        return $this->getTranslationIn('iw');
    }

    /**
     * Function to retrieve the translation in Maltese.
     *
     * @returnsmixed
     */
    public function inMaltese()
    {
        return $this->getTranslationIn('mt');
    }

    /**
     * Function to retrieve the translation in Somali.
     *
     * @returnsmixed
     */
    public function inSomali()
    {
        return $this->getTranslationIn('so');
    }
}
