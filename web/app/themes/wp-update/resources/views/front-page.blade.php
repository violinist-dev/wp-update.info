@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-sm-6">
      @include('partials.about')
    </div>

    <div class="col-sm-6">
      @include('partials.users')

      @include('partials.posts')
    </div>
  </div>
@endsection
