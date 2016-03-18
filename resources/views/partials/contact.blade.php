<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{{ $person->nickname }}</h3>
  </div>
  <div class="panel-body">
    <h3>{{ $person->name }}</h3>

    <table class="table table-hover">
      @foreach($person->phones as $phone)
        <tr>
          <td>{{ $phone->type }}</td>
          <td>{{ $phone->country }} ({{ $phone->ddd }}) {{ $phone->prefix }}-{{$phone->suffix}}</td>
          <td><a href="#" class="text-danger"><span class="fa fa-minus-circle"></span></a></td>
        </tr>
      @endforeach
    </table>
  </div>
</div>
