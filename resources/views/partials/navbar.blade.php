<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">PARDUS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menü
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="nav-link">Ana Sayfa</a>
                </li>
                <li class="nav-item {{ Request::is('vize-turleri*') ? 'active' : '' }}">
                    <a href="{{ route('visa-types.visa_types_index') }}" class="nav-link">Vize Türleri</a>
                </li>
                <li class="nav-item {{ Request::is('ulkeler*') ? 'active' : '' }}">
                    <a href="{{ route('countries.index') }}" class="nav-link">Ülkeler</a>
                </li>
                <li class="nav-item {{ Request::is('basvuru-sureci*') ? 'active' : '' }}">
                    <a href="{{ route('application-process.index') }}" class="nav-link">Başvuru Süreci</a>
                </li>
                <li class="nav-item {{ Request::is('hizmetlerimiz*') ? 'active' : '' }}">
                    <a href="{{ route('services.index') }}" class="nav-link">Hizmetlerimiz</a>
                </li>
                <li class="nav-item {{ Request::is('blog*') ? 'active' : '' }}">
                    <a href="{{ route('blog.index') }}" class="nav-link">Blog</a>
                </li>
                <li class="nav-item {{ Request::is('hakkimizda*') ? 'active' : '' }}">
                    <a href="{{ route('about.us') }}" class="nav-link">Hakkımızda</a>
                </li>
                <li class="nav-item {{ Request::is('iletisim*') ? 'active' : '' }}">
                    <a href="{{ route('contact.index') }}" class="nav-link">İletişim</a>
                </li>
            </ul>

            {{-- <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="nav-link">Ana Sayfa</a>
                </li>
                <li class="nav-item {{ Request::is('vize-turleri*') ? 'active' : '' }}">
                    <a href="{{ route('visa-types.index') }}" class="nav-link">Vize Türleri</a>
                </li>
                <li class="nav-item {{ Request::is('ulkeler*') ? 'active' : '' }}">
                    <a href="{{ route('countries.index') }}" class="nav-link">Ülkeler</a>
                </li>
                <li class="nav-item {{ Request::is('basvuru-sureci*') ? 'active' : '' }}">
                    <a href="{{ route('application-process') }}" class="nav-link">Başvuru Süreci</a>
                </li>
                <li class="nav-item {{ Request::is('hizmetlerimiz*') ? 'active' : '' }}">
                    <a href="{{ route('services.index') }}" class="nav-link">Hizmetlerimiz</a>
                </li>
                <li class="nav-item {{ Request::is('blog*') ? 'active' : '' }}">
                    <a href="{{ route('blog.index') }}" class="nav-link">Blog</a>
                </li>
                <li class="nav-item {{ Request::is('hakkimizda*') ? 'active' : '' }}">
                    <a href="{{ route('about') }}" class="nav-link">Hakkımızda</a>
                </li>
                <li class="nav-item {{ Request::is('iletisim*') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}" class="nav-link">İletişim</a>
                </li>
            </ul> --}}
        </div>
    </div>
</nav>
