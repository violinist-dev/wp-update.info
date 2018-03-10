@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>{!! get_avatar($user->ID, 32, '', '', ['class' => 'rounded-circle my-3']) !!} {{ $user->display_name }}</h1>

    <div class="row">
      @if (have_posts())
        <div class="col-sm-6">
          @include('partials.author_profile')
        </div>
        <div class="col-sm-6">
          @include('partials.author_posts')
        </div>
      @else
        @include('partials.author_no_posts')
      @endif

    </div>
  </div>
@endsection
