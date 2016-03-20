@extends('layout')

@section('content')
  <div class="col-md-6">
    <form class="form-horizontal" action="{{ route('person.store') }}" method="post">
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name:</label>
        <div class="col-sm-10">
          <input type="text" name="name" value="{{ old('name') }}"
            class="form-control" id="name" placeholder="Name">
        </div>
      </div>
      <div class="form-group">
        <label for="nickname" class="col-sm-2 control-label">Nickname:</label>
        <div class="col-sm-10">
          <input type="text" name="nickname" value="{{ old('nickname') }}"
            class="form-control" id="nickname" placeholder="Nickname">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="radio">
            <label>
              <input type="radio" name="gender" value="F" {{ (old('gender') == 'F') ? 'checked' : null }}>
              <i class="fa fa-female"></i><br />
              <input type="radio" name="gender" value="M" {{ (old('gender') == 'M') ? 'checked' : null }}>
              <i class="fa fa-male"></i>
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>
  </div>

  <div class="col-md-6">
    @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
  </div>
@endsection
