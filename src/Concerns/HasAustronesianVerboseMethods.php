<?php

namespace ChinLeung\VerboseLocalization\Concerns;

trait HasAustronesianVerboseMethods
{
    /**
     * Retrieve the translation in another locale.
     *
     * @param  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);

    /**
     * Function to retrieve the name in Cebuano.
     *
     * @return mixed
     */
    public function inCebuano() : string
    {
        return $this->getTranslationIn('ceb');
    }

    /**
     * Function to retrieve the name in Filipino.
     *
     * @return mixed
     */
    public function inFilipino() : string
    {
        return $this->getTranslationIn('tl');
    }

    /**
     * Function to retrieve the name in Hawaiian.
     *
     * @return mixed
     */
    public function inHawaiian() : string
    {
        return $this->getTranslationIn('haw');
    }

    /**
     * Function to retrieve the translation in Indonesian.
     *
     * @return mixed
     */
    public function inIndonesian()
    {
        return $this->getTranslationIn('id');
    }

    /**
     * Function to retrieve the name in Javanese.
     *
     * @return mixed
     */
    public function inJavanese() : string
    {
        return $this->getTranslationIn('jw');
    }

    /**
     * Function to retrieve the name in Khmer.
     *
     * @return mixed
     */
    public function inKhmer() : string
    {
        return $this->getTranslationIn('km');
    }

    /**
     * Function to retrieve the name in Malagasy.
     *
     * @return mixed
     */
    public function inMalagasy() : string
    {
        return $this->getTranslationIn('mg');
    }

    /**
     * Function to retrieve the name in Malay.
     *
     * @return mixed
     */
    public function inMalay() : string
    {
        return $this->getTranslationIn('ms');
    }

    /**
     * Function to retrieve the name in Maori.
     *
     * @return mixed
     */
    public function inMaori() : string
    {
        return $this->getTranslationIn('mi');
    }

    /**
     * Function to retrieve the name in Samoan.
     *
     * @return mixed
     */
    public function inSamoan() : string
    {
        return $this->getTranslationIn('sm');
    }

    /**
     * Function to retrieve the name in Sundanese.
     *
     * @return mixed
     */
    public function inSundanese() : string
    {
        return $this->getTranslationIn('su');
    }

    /**
     * Function to retrieve the name in Vietnamese.
     *
     * @return mixed
     */
    public function inVietnamese() : string
    {
        return $this->getTranslationIn('vi');
    }
}
