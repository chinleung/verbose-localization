<?php

namespace ChinLeung\VerboseLocalization;

trait HasVerboseLocalization
{
    use Concerns\HasAfroAsiaticVerboseMethods,
        Concerns\HasAustronesianVerboseMethods,
        Concerns\HasDravidianVerboseMethods,
        Concerns\HasFrenchCreoleVerboseMethods,
        Concerns\HasHmongMienVerboseMethods,
        Concerns\HasIndoEuropeanVerboseMethods,
        Concerns\HasIsolateVerboseMethods,
        Concerns\HasJaponicVerboseMethods,
        Concerns\HasKartvelianVerboseMethods,
        Concerns\HasKraDaiVerboseMethods,
        Concerns\HasMonogolicVerboseMethods,
        Concerns\HasNigerCongoVerboseMethods,
        Concerns\HasTurkicVerboseMethods,
        Concerns\HasUralicVerboseMethods;

    /**
     * Retrieve the translation in another locale.
     *
     * @var  string  $locale
     * @return mixed
     */
    abstract public function getTranslationIn(string $locale);
}
