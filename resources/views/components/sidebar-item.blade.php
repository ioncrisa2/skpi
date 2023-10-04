@props(['route','title','icon'])

<a class="nav-link" href="{{ route($route) }}">
    <div class="nav-link-icon"><i data-feather="{{ $icon }}"></i></div>
    {{ $title }}
</a>
