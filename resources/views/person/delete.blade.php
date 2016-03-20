@extends('layout')

@section('content')
  <div class="col-md-6">
    <h3>Do you really want to delete this user?</h3>
    <form action="{{ route('person.destroy', ['id' => $person->id]) }}" method="post">
      <input type="hidden" name="_method" value="DELETE">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{ route('phonebook.index') }}" class="btn btn-primary">Cancel</a>
    </form>
  </div>
  <div class="col-md-6">
    @include('partials.contact')
  </div>
@endsection
