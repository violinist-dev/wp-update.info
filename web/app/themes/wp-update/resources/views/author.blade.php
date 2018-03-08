@extends('layouts.app')

@section('content')
  <div class="container">

    <h1>{!! get_avatar($user->ID, 32, '', '', ['class' => 'rounded-circle my-3']) !!} {{ $user->display_name }}</h1>

    <div class="card bg-white mb-3">
      <h5 class="card-header bg-white">
        プロフィール
      </h5>
      <div class="card-body">
        <p class="card-text">{!! $user->profile !!}</p>
      </div>
    </div>

    <div class="card bg-white mb-3">
      <h5 class="card-header bg-white">
        料金プラン
      </h5>
      <div class="card-body">
        <p class="card-text">{!! $user->plan !!}</p>
      </div>
    </div>

    <div class="card bg-white mb-3">
      <h5 class="card-header bg-white">
        サーバー
      </h5>
      <div class="card-body">
        <p class="card-text">{!! $user->server !!}</p>
      </div>
    </div>

    <div class="card bg-white mb-3">
      <h5 class="card-header bg-white">
        申し込み方法
      </h5>
      <div class="card-body">
        <p class="card-text">{!! $user->apply !!}</p>
      </div>
    </div>

    <div class="card bg-white mb-3">
      <h5 class="card-header bg-white">
        申し込み先URL
      </h5>
      <div class="card-body">
        <p class="card-text">
          @if(!empty($user->apply_url))
            <a href="{{ $user->apply_url }}" target="_blank"
               rel="noreferrer noopener nofollow">{{ $user->apply_url }}</a>
          @endif
        </p>
      </div>
    </div>

    @if (have_posts())
      <div class="card bg-white mb-3">
        <h5 class="card-header bg-white">
          投稿
          <a href="{{ get_author_posts_url($user->ID) }}feed/" class="badge badge-pill badge-dark">FEED</a>
        </h5>

        <div class="list-group list-group-flush">
          @while(have_posts()) @php(the_post())
          <a href="{{ get_permalink() }}" class="list-group-item list-group-item-action">
            {{ get_the_title() }}
          </a>
          @endwhile
        </div>
      </div>
    @endif

  </div>

@endsection
