@extends('layouts.app')

@section('content')
  <div class="container">

    @while(have_posts()) @php(the_post())
    @include('partials.content-single-'.get_post_type())
    @endwhile

  </div>
@endsection
