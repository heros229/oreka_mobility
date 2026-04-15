
@php
    $currentLocale = session('locale', app()->getLocale());
    $alternateLocale = $currentLocale === 'fr' ? 'en' : 'fr';
    $currentLang = [
        'fr' => ['name' => 'Français', 'flag' => 'country-fr.svg'],
        'en' => ['name' => 'English', 'flag' => 'country-us.svg'],

    ][$currentLocale];
    $alternateLang = [
        'fr' => ['name' => 'Français', 'flag' => 'country-fr.svg'],
        'en' => ['name' => 'English', 'flag' => 'country-us.svg'],

    ][$alternateLocale];
@endphp


<div class="container">
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
								<span class="bar-icon">
									<span></span>
									<span></span>
									<span></span>
								</span>
            </a>
            <a href="{{ route('accueil') }}" class="navbar-brand logo">
                <img src="{{ asset('assets/img/logo_oreka_3.png')}}" class="img-fluid" width="140"  alt="Logo">
            </a>
            <a href="{{ route('accueil') }}" class="navbar-brand logo-small">
                <img src="{{ asset('assets/img/logo_oreka_3.png')}}" class="img-fluid" width="100"   alt="Logo" >
            </a>
        </div>
        <div class="main-menu-wrapper d-block d-md-none">
            <div class="menu-header">
                <a href="{{ route('accueil') }}" class="menu-logo">
                    <img src="{{ asset('assets/img/logo_oreka.png')}}" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
            </div>
            <ul class="main-nav">
                <li class="active">
                    @if (App::getLocale() == 'fr')
                        <a href="{{ route('accueil') }}" style="font-size: 20px; padding: 20px; font-weight: bold">Accueil </a>
                    @elseif (App::getLocale() == 'en')
                        <a href="{{ route('accueil') }}" style="font-size: 20px; padding: 20px; font-weight: bold">Home </a>
                    @endif


                </li>
                <li class="">
                    <a href="{{ route('accueil') }}#about-us" style="font-size: 20px; padding: 20px; font-weight: bold">À propos de nous </a>
                </li>
                <li class="has-submenu">
                    <a href="{{ route('accueil') }}#parcours" style="font-size: 20px; padding: 20px; font-weight: bold">Nos Parcours <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="{{ route('amazone') }}" style="font-size: 17px; padding: 20px; font-weight: bold">Place de l'amazone</a></li>
                        <li><a href="{{ route('devoue') }}" style="font-size: 17px; padding: 20px; font-weight: bold">Monument aux dévoués</a></li>
                        <li><a href="{{ route('patrimoine') }}" style="font-size: 17px; padding: 20px; font-weight: bold">Mur du patrimoine</a></li>
                        <li><a href="{{ route('guerra') }}" style="font-size: 17px; padding: 20px; font-weight: bold">Place Bio Guerra</a></li>
                        <li><a href="{{ route('peche') }}" style="font-size: 17px; padding: 20px; font-weight: bold">Route des pèches</a></li>
                        <li><a href="{{ route('sofitel') }}" style="font-size: 17px; padding: 20px; font-weight: bold">Sofitel</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="{{ route('accueil') }}#pricing" style="font-size: 20px; padding: 20px; font-weight: bold">Offres Spéciales <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="{{ route('details') }}?plan=velo-sport"
                               onclick="localStorage.setItem('selectedPlan','velo-sport')" style="font-size: 17px; padding: 20px; font-weight: bold">Vélo Sport</a></li>
                        <li><a href="{{ route('details') }}?plan=randonnee"
                               onclick="localStorage.setItem('selectedPlan','randonnee')" style="font-size: 17px; padding: 20px; font-weight: bold">Randonner à Vélo</a></li>
                        <li><a href="{{ route('details') }}?plan=tourisme"
                               onclick="localStorage.setItem('selectedPlan','tourisme')" style="font-size: 17px; padding: 20px; font-weight: bold">Vélo Tourisme</a></li>
                        <li><a href="{{ route('details') }}?plan=apprentissage"
                               onclick="localStorage.setItem('selectedPlan','apprentissage')" style="font-size: 17px; padding: 20px; font-weight: bold">Apprentissage</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{ route('contact') }}" style="font-size: 20px; padding: 20px; font-weight: bold">Contact </a>

                </li>
                <li class="active">
                    <a href="{{ route('location_reservation_step_1') }}" style="font-size: 20px; padding: 20px; font-weight: bold">Location Individuelle</a>
                </li>
                <li class="mt-4">
                    <div class="select-menu1" style="width: 200px;" >
                        <div class="select-btn1">
                            <img src="{{ asset('vendor/blade-flags/' . $currentLang['flag']) }}" width="32" height="32" alt="{{ $currentLang['name'] }}" style="margin-right: 12px"/>
                            <span class="sBtn-text">{{ $currentLang['name'] }}</span>
                            <i class="bx bx-chevron-down"></i>
                        </div>
                        <ul class="options1">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li class="option2" >
                                    <a rel="alternate" class="option-text1" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" style="color: black">
                                        @if($localeCode == "en")
                                            <img src="{{ asset('vendor/blade-flags/country-us.svg') }}" width="32" height="32" alt="{{ $properties['native'] }}" style="margin-right: 12px"/>
                                        @elseif($localeCode == "fr")
                                            <img src="{{ asset('vendor/blade-flags/country-fr.svg') }}" width="32" height="32" alt="{{ $properties['native'] }}" style="margin-right: 12px"/>
                                        @endif
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <ul class="nav header-navbar-rht">
            {{--<li class="nav-item">
                <a class="nav-link login-link" href="login.html"><span><i class="bx bx-user me-2"></i></span>Sign In / </a>
                <a class="nav-link login-link ms-1" href="register.html">Register </a>
            </li>--}}
            <li class="nav-item">
                <a class="nav-link header-reg" href="{{ route('accueil') }}#pricing">S’inscrire à une activité</a>
            </li>
            <li>

                <div class="select-menu1" >
                    <div class="select-btn1">
                        <img src="{{ asset('vendor/blade-flags/' . $currentLang['flag']) }}" width="32" height="32" alt="{{ $currentLang['name'] }}" style="margin-right: 12px"/>
                        <span class="sBtn-text">{{ $currentLang['name'] }}</span>
                        <i class="bx bx-chevron-down"></i>
                    </div>
                    <ul class="options1">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li class="option2">
                                <a rel="alternate" class="option-text1" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    @if($localeCode == "en")
                                        <img src="{{ asset('vendor/blade-flags/country-us.svg') }}" width="32" height="32" alt="{{ $properties['native'] }}" style="margin-right: 12px"/>
                                    @elseif($localeCode == "fr")
                                        <img src="{{ asset('vendor/blade-flags/country-fr.svg') }}" width="32" height="32" alt="{{ $properties['native'] }}" style="margin-right: 12px"/>
                                    @endif
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>
        </ul>

    </nav>
</div>


