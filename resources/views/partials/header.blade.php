@php

    $navEl = Config('db.navEl');

@endphp

<div>
    <header>
        <nav class="container d-flex align-items-stretch justify-content-between py-3">

            <a href="/">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
            </a>

            <ul class="nav justify-content-end position-relative ">
                <li class="nav-item d-flex align-items-center position-relative">
                    <a class="nav-link {{ Route::currentRouteName() == 'aaaaa' ? 'active' : '' }}"
                        href="{{ route('comics.index') }}">CHARACTERS</a>
                    <div class="bt_bar {{ Route::currentRouteName() == 'aaaaa' ? 'd-block' : '' }}"></div>
                </li>
                <li class="nav-item d-flex align-items-center position-relative">
                    <a class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}"
                        href="{{ route('comics.index') }}">COMICS</a>
                    <div class="bt_bar {{ Route::currentRouteName() == 'comics.index' ? 'd-block' : '' }}"></div>
                </li>
                <li class="nav-item d-flex align-items-center position-relative">
                    <a class="nav-link {{ Route::currentRouteName() == 'movies.index' ? 'active' : '' }}"
                        href="{{ route('movies.index') }}">MOVIES</a>
                    <div class="bt_bar {{ Route::currentRouteName() == 'movies.index' ? 'd-block' : '' }}"></div>
                </li>
                <li class="nav-item d-flex align-items-center position-relative">
                    <a class="nav-link {{ Route::currentRouteName() == 'aaaaa' ? 'active' : '' }}"
                        href="{{ route('comics.index') }}">TV</a>
                    <div class="bt_bar {{ Route::currentRouteName() == 'aaaaa' ? 'd-block' : '' }}"></div>
                </li>
                <li class="nav-item d-flex align-items-center position-relative">
                    <a class="nav-link {{ Route::currentRouteName() == 'aaaaa' ? 'active' : '' }}"
                        href="{{ route('comics.index') }}">GAMES</a>
                    <div class="bt_bar {{ Route::currentRouteName() == 'aaaaa' ? 'd-block' : '' }}"></div>
                </li>
                <li class="nav-item d-flex align-items-center position-relative">
                    <a class="nav-link {{ Route::currentRouteName() == 'aaaaa' ? 'active' : '' }}"
                        href="{{ route('comics.index') }}">COLLECTIBLES</a>
                    <div class="bt_bar {{ Route::currentRouteName() == 'aaaaa' ? 'd-block' : '' }}"></div>
                </li>
                <li class="nav-item d-flex align-items-center position-relative">
                    <a class="nav-link {{ Route::currentRouteName() == 'aaaaa' ? 'active' : '' }}"
                        href="{{ route('comics.index') }}">VIDEOS</a>
                    <div class="bt_bar {{ Route::currentRouteName() == 'aaaaa' ? 'd-block' : '' }}"></div>
                </li>
                <li class="nav-item d-flex align-items-center position-relative">
                    <a class="nav-link {{ Route::currentRouteName() == 'aaaaa' ? 'active' : '' }}"
                        href="{{ route('comics.index') }}">FANS</a>
                    <div class="bt_bar {{ Route::currentRouteName() == 'aaaaa' ? 'd-block' : '' }}"></div>
                </li>
                <li class="nav-item d-flex align-items-center position-relative">
                    <a class="nav-link {{ Route::currentRouteName() == 'aaaaa' ? 'active' : '' }}"
                        href="{{ route('comics.index') }}">NEWS</a>
                    <div class="bt_bar {{ Route::currentRouteName() == 'aaaaa' ? 'd-block' : '' }}"></div>
                </li>
            </ul>


        </nav>
        <div class="jumbotron">

        </div>


    </header>
</div>
