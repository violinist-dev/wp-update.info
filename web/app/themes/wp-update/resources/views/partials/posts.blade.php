@if (have_posts())
  <div class="card bg-white mb-3">
    <h4 class="card-header text-white bg-dark">
      投稿 ({{ wp_count_posts()->publish }})
    </h4>

    <div class="list-group list-group-flush">
      @while(have_posts()) @php(the_post())
      <a href="{{ get_permalink() }}" class="list-group-item list-group-item-action">
        {{ get_the_title() }}
      </a>
      @endwhile
    </div>
  </div>
@endif
