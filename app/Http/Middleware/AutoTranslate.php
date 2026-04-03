<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use App\Services\TranslationService;

class AutoTranslate
{
    protected $translationService;

    public function __construct(TranslationService $translationService)
    {
        $this->translationService = $translationService;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Vérifier si la réponse est du contenu HTML
        if (!$response->headers->has('Content-Type') || strpos($response->headers->get('Content-Type'), 'text/html') === false) {
            return $response;
        }

        // Récupérer le contenu HTML
        $content = $response->getContent();
        $targetLang = App::getLocale();

        // Traduire le contenu si la langue n'est pas l'anglais (ou la langue par défaut)
        if ($targetLang != 'fr') {
            $translatedContent = $this->translateContent($content, $targetLang);
            $response->setContent($translatedContent);
        }

        return $response;
    }

    /**
     * Méthode pour traduire le contenu HTML.
     */
    protected function translateContent($content, $targetLang)
    {
        // Utiliser DOMDocument pour manipuler le contenu HTML
        $dom = new \DOMDocument();
        @$dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));

        $xpath = new \DOMXPath($dom);
        $textNodes = $xpath->query('//text()[not(ancestor::script)][not(ancestor::style)]');

        // Traduire chaque nœud de texte
        foreach ($textNodes as $node) {
            $text = trim($node->nodeValue);
            if (!empty($text)) {
                $translatedText = $this->translationService->translate($text, $targetLang);
                $node->nodeValue = $translatedText;
            }
        }

        return $dom->saveHTML();
    }
}
