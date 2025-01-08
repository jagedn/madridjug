@php $level = $level ?? 0 @endphp

<ul class="my-0">
    @foreach ($items as $label => $item)
        @include('_nav.menu-item')
    @endforeach
</ul>

@if ($level == 1)
<ul class="my-0">
    <a href="#" class="lvl0   nav-menu__item hover:text-blue-500">Charlas</a>
    @foreach ($charlas as $label => $item)
    @include('_nav.menu-charla')
    @endforeach
</ul>
@endif