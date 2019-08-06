<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasIsolateVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @var  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Basque.
     *
     * @return mixed
     */
    public function inBasque()
    {
        return $this->getTranslationIn('eu');
    }

    /**
     * Function to retrieve the translation in Esperanto.
     *
     * @return mixed
     */
    public function inEsperanto()
    {
        return $this->getTranslationIn('eo');
    }
}
