<nav class="navigation" role="navigation">
    <ul class="navigation__list" role="list">
        @foreach (\App\Enums\Navigation::cases() as $navigation)
            <li class="navigation__item" role="listitem">
                <a class="navigation__item-title" href="{{ $navigation->getLink() }}">{{ $navigation->getTitle() }}</a>
            </li>
        @endforeach
    </ul>
</nav>
