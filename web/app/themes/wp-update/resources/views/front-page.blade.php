@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-sm-6">
      @include('partials.about')
    </div>

    <div class="col-sm-6">

      <h2 class="bg-white">参加者リスト({{ $users->get_total() }})
        @unless(is_user_logged_in())
          <a href="/login/" class="btn btn-outline-dark" rel="nofollow">ログイン</a>
        @endunless
      </h2>

      <div class="table-responsive">
        <table class="table table-hover bg-white table-bordered">
          <thead class="thead-dark">
          <tr>
            <th scope="col">名前</th>
            <th scope="col">一言メッセージ</th>
          </tr>
          </thead>
          <tbody>
          @foreach($users->get_results() as $user)
            <tr>
              <th scope="row">
                <a href="{{ get_author_posts_url($user->ID) }}">
                  {!! get_avatar($user->ID, 24, '', '', ['class' => 'rounded-circle']) !!}
                  {{ $user->display_name }}
                </a>
              </th>
              <td>{{ $user->message }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>

      {!! \App\Controllers\FrontPage::pagination($users->get_total()) !!}
    </div>
  </div>
@endsection
