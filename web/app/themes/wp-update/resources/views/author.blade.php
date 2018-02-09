@extends('layouts.app')

@section('content')
  <div class="container">

    <h2>{{ $user->display_name }}</h2>

    <div class="card bg-light mb-3">
      <div class="card-header">
        プロフィール
      </div>
      <div class="card-body">
        <p class="card-text">{{ $user->description }}</p>
      </div>
    </div>

    <div class="card bg-light mb-3">
      <div class="card-header">
        料金プラン
      </div>
      <div class="card-body">
        <p class="card-text">{!! $user->plan !!}</p>
      </div>
    </div>

    <div class="card bg-light mb-3">
      <div class="card-header">
        サーバー
      </div>
      <div class="card-body">
        <p class="card-text">{!! $user->server !!}</p>
      </div>
    </div>

    <div class="card bg-light mb-3">
      <div class="card-header">
        申し込み方法
      </div>
      <div class="card-body">
        <p class="card-text">{!! $user->apply !!}</p>
      </div>
    </div>

    <div class="card bg-light mb-3">
      <div class="card-header">
        申し込み先URL
      </div>
      <div class="card-body">
        <p class="card-text">
          @if(!empty($user->apply_url))
            <a href="{{ $user->apply_url }}" target="_blank"
               rel="noreferrer noopener nofollow">{{ $user->apply_url }}</a>
          @endif
        </p>
      </div>
    </div>

  </div>

@endsection
