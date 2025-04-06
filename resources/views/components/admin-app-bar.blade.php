<header class="app-bar">
    <div class="breadcrumbs">
        <div class="wrapper">
            <a href="{{ $before_link ?? null }}" class="before">{{ $before }}</a>
            <img src="{{ asset('direction.svg') }}" class="direction">
            <a href="{{ $after_link ?? null }}" class="after">{{ $after }}</a>
        </div>
    </div>
    <form action="#" class="logout-form" method="POST">
        <button type="submit" class="logout-btn">
            <img src="{{ asset('logout-icon.svg') }}" alt="">
        </button>
    </form>
</header>