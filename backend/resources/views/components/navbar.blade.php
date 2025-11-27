<nav class="site-navbar">
    <div class="container">
        <ul class="nav-list">
            @foreach (($menuItems ?? []) as $item)
                <li class="nav-item">
                    <a href="{{ $item['href'] }}" class="nav-link">{{ $item['label'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>


