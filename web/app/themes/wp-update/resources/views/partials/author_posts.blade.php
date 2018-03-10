<div class="card bg-white mb-3">
  <h5 class="card-header bg-white">
    投稿
  </h5>

  <div class="list-group list-group-flush">
    @while(have_posts()) @php(the_post())
    <a href="{{ get_permalink() }}" class="list-group-item list-group-item-action">
      {{ get_the_title() }}
    </a>
    @endwhile
  </div>
</div>

{!! \App\author::pagination() !!}
