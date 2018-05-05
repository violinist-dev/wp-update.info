<article @php post_class() @endphp>
  <div class="card my-5">
    <div class="card-body">

      <header>
        <h1 class="entry-title">{{ get_the_title() }}</h1>
        @include('partials/entry-meta')
      </header>

      <div class="entry-content mt-3">
        @php the_content() @endphp
      </div>

      <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
      </footer>

    </div>
  </div>
</article>
