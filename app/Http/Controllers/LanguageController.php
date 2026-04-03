<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Change la langue de l'application.
     *
     * @param string $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeLanguage($locale)
    {
        // Vérifier si la langue sélectionnée est supportée
        if (in_array($locale, ['en', 'fr', 'es', 'de'])) {
            // Changer la locale de l'application
            App::setLocale($locale);

            // Stocker la langue sélectionnée dans la session
            Session::put('locale', $locale);
        }

        // Rediriger l'utilisateur à la page précédente
        return redirect()->back();
    }
}
