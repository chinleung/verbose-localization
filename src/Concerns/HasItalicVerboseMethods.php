<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasItalicVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Catalan.
     *
     * @return mixed
     */
    public function inCatalan()
    {
        return $this->getTranslationIn('ca');
    }

    /**
     * Function to retrieve the translation in Corsican.
     *
     * @return mixed
     */
    public function inCorsican()
    {
        return $this->getTranslationIn('co');
    }

    /**
     * Function to retrieve the translation in French.
     *
     * @return mixed
     */
    public function inFrench()
    {
        return $this->getTranslationIn('fr');
    }

    /**
     * Function to retrieve the translation in Galician.
     *
     * @returnsmixed
     */
    public function inGalician()
    {
        return $this->getTranslationIn('gl');
    }

    /**
     * Function to retrieve the translation in Italian.
     *
     * @returnsmixed
     */
    public function inItalian()
    {
        return $this->getTranslationIn('it');
    }

    /**
     * Function to retrieve the translation in Latin.
     *
     * @returnsmixed
     */
    public function inLatin()
    {
        return $this->getTranslationIn('la');
    }

    /**
     * Function to retrieve the translation in Portuguese.
     *
     * @returnsmixed
     */
    public function inPortuguese() : string
    {
        return $this->getTranslationIn('pt');
    }

    /**
     * Function to retrieve the translation in Romanian.
     *
     * @returnsmixed
     */
    public function inRomanian() : string
    {
        return $this->getTranslationIn('ro');
    }

    /**
     * Function to retrieve the translation in Spanish.
     *
     * @returnsmixed
     */
    public function inSpanish() : string
    {
        return $this->getTranslationIn('es');
    }
}
