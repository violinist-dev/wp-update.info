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
