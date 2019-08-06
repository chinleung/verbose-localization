<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasKraDaiVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Lao.
     *
     * @return mixed
     */
    public function inLao()
    {
        return $this->getTranslationIn('lo');
    }

    /**
     * Function to retrieve the translation in Thai.
     *
     * @return mixed
     */
    public function inThai()
    {
        return $this->getTranslationIn('th');
    }
}
