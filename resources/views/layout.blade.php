<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phone Book</title>

    <link href="css/app.css" rel="stylesheet">
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 page-header">
          <h1>
            Phone book<br>
            <small><i class="glyphicon glyphicon-phone-alt"></i> Phones</small>
            <span class="pull-right">
              <form class="form-inline" action="#" method="post">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search contact...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="fa fa-search"></span></button>
                  </span>
                </div>
              </form>
            </span>
          </h1>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          @foreach(range('A', 'Z') as $letter)
            <a href="{{ route('phonebook.letter', ['letter' => $letter]) }}" class="btn btn-primary btn-xs">{{ $letter }}</a>
          @endforeach
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 btn-row">
          <a href="#" class="btn btn-primary">New contact</a>
        </div>
      </div>

      <div class="row">
        @yield('content')
      </div>
    </div>

    <script src="js/scripts.js"></script>
  </body>
</html>
