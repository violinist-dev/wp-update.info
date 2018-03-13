<article @php(post_class())>
  <div class="card my-2">
    <div class="card-body">

      <header>
        <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
        @if (get_post_type() === 'post')
          @include('partials.entry-meta')
        @endif
      </header>
      <div class="entry-summary">
        @php(the_excerpt())
      </div>
    </div>
  </div>
</article>
