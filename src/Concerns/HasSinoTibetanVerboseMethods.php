<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasSinoTibetanVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the name in Chinese (Simplified).
     *
     * @return mixed
     */
    public function inSimplifiedChinese() : string
    {
        return $this->getTranslationIn('zh_CN');
    }

    /**
     * Function to retrieve the name in Chinese (Traditional).
     *
     * @return mixed
     */
    public function inTraditionalChinese() : string
    {
        return $this->getTranslationIn('zh_TW');
    }

    /**
     * Function to retrieve the name in Myanmar (Burmese).
     *
     * @return mixed
     */
    public function inBurmeseMyanmar() : string
    {
        return $this->getTranslationIn('my');
    }
}
