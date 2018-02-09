<header class="banner py-5 mb-3 bg-dark">
  <div class="container">
    <h1>
      <a class="brand text-white" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    </h1>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
