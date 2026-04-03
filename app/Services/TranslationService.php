<?php

namespace App\Services;

use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\Cache;

class TranslationService
{
    protected $translator;

    public function __construct()
    {
        $this->translator = new GoogleTranslate();
    }

    public function translate($text, $targetLang, $sourceLang = 'fr')
    {
        $cacheKey = "translation_{$sourceLang}_{$targetLang}_" . md5($text);

        return Cache::remember($cacheKey, now()->addDays(30), function () use ($text, $targetLang, $sourceLang) {
            $this->translator->setSource($sourceLang);
            $this->translator->setTarget($targetLang);
            return $this->translator->translate($text);
        });
    }
}
