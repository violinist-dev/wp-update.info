<header class="py-5 mb-3 bg-dark">
  <div class="container-fluid ml-md-5">
    <h1>
      <i class="text-white fab fa-wordpress" aria-hidden></i>
      <a class="brand text-white" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    </h1>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <div class="mt-4">
      <a href="https://twitter.com/share"
         class="twitter-share-button"
         data-hashtags="WordPress"
         data-show-count="false">Tweet</a>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

      <a href="http://b.hatena.ne.jp/entry/s/wordpress-update.info/"
         class="hatena-bookmark-button"
         data-hatena-bookmark-layout="basic-label-counter"
         data-hatena-bookmark-lang="ja"
         title="このエントリーをはてなブックマークに追加">
        <img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png"
             alt="このエントリーをはてなブックマークに追加"
             width="20"
             height="20"
             style="border: none;"/>
      </a>
      <script type="text/javascript"
              src="https://b.st-hatena.com/js/bookmark_button.js"
              charset="utf-8"
              async="async"></script>
    </div>
  </div>
</header>
