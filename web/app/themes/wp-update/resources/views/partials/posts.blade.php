@if (have_posts())
  <h2 class="bg-white">投稿</h2>

  <div class="card bg-white mb-3">
    <div class="list-group list-group-flush">
      @while(have_posts()) @php(the_post())
      <a href="{{ get_permalink() }}" class="list-group-item list-group-item-action">
        {{ get_the_title() }}
      </a>
      @endwhile
    </div>
  </div>
@endif
