<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasIndoIranianVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the translation in Bengali.
     *
     * @return mixed
     */
    public function inBengali()
    {
        return $this->getTranslationIn('bn');
    }

    /**
     * Function to retrieve the translation in Gujarati.
     *
     * @return mixed
     */
    public function inGujarati()
    {
        return $this->getTranslationIn('gu');
    }

    /**
     * Function to retrieve the translation in Hindi.
     *
     * @return mixed
     */
    public function inHindi()
    {
        return $this->getTranslationIn('hi');
    }

    /**
     * Function to retrieve the translation in Kurdish (Kurmanji).
     *
     * @return mixed
     */
    public function inKurmanjiKurdish()
    {
        return $this->getTranslationIn('ku');
    }

    /**
     * Function to retrieve the translation in Marathi.
     *
     * @return mixed
     */
    public function inMarathi()
    {
        return $this->getTranslationIn('mr');
    }

    /**
     * Function to retrieve the translation in Nepali.
     *
     * @return mixed
     */
    public function inNepali() : string
    {
        return $this->getTranslationIn('ne');
    }

    /**
     * Function to retrieve the translation in Pashto.
     *
     * @return mixed
     */
    public function inPashto() : string
    {
        return $this->getTranslationIn('ps');
    }

    /**
     * Function to retrieve the translation in Persian.
     *
     * @return mixed
     */
    public function inPersian() : string
    {
        return $this->getTranslationIn('fa');
    }

    /**
     * Function to retrieve the translation in Punjabi.
     *
     * @return mixed
     */
    public function inPunjabi() : string
    {
        return $this->getTranslationIn('pa');
    }

    /**
     * Function to retrieve the translation in Urdu.
     *
     * @return mixed
     */
    public function inUrdu() : string
    {
        return $this->getTranslationIn('ur');
    }

    /**
     * Function to retrieve the translation in Tajik.
     *
     * @return mixed
     */
    public function inTajik() : string
    {
        return $this->getTranslationIn('tg');
    }

    /**
     * Function to retrieve the translation in Sinhala.
     *
     * @return mixed
     */
    public function inSinhala() : string
    {
        return $this->getTranslationIn('si');
    }

    /**
     * Function to retrieve the translation in Sindhi.
     *
     * @return mixed
     */
    public function inSindhi() : string
    {
        return $this->getTranslationIn('sd');
    }
}
