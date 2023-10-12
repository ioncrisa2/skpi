@props(['route', 'title', 'icon'])

<a class="nav-link nav-item @if (request()->routeIs($route)) active @endif" href="{{ route($route) }}">
    <div class="nav-link-icon"><i data-feather="{{ $icon }}"></i></div>
    {{ $title }}
</a>
