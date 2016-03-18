@extends('layout')

@section('content')
  @foreach($people as $person)
    <div class="col-md-6">
      @include('partials.contact')
    </div>
  @endforeach
@endsection
