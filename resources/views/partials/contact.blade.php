<div class="panel panel-default @if($person->gender == 'F') panel-danger @else panel-info @endif">
  <div class="panel-heading">
    <h3 class="panel-title">
      @if ($person->gender == 'F')
        <i class="fa fa-female"></i>
      @else
        <i class="fa fa-male"></i>
      @endif

      {{ $person->nickname }}

      <span class="pull-right">
        <a href="{{ route('person.edit', ['id' => $person->id]) }}"
          class="btn btn-success btn-xs" data-toggle="tooltip"
          data-placement="top" title="Edit">
          <i class="fa fa-edit"></i>
        </a>

        <a href="{{ route('person.delete', ['id' => $person->id]) }}"
          class="btn btn-danger btn-xs" data-toggle="tooltip"
          data-placement="top" title="Delete">
          <i class="fa fa-times"></i>
        </a>
      </span>
    </h3>
  </div>
  <div class="panel-body">
    <h3>{{ $person->name }}</h3>

    <p><a href="#" class="label label-primary">New Phone</a></p>
    <table class="table table-hover">
      @foreach($person->phones as $phone)
        <tr>
          <td>{{ $phone->type }}</td>
          <td>{{ $phone->number }}</td>
          <td>
            <a href="{{ route('phone.delete', ['id' => $phone->id]) }}"
              class="text-danger" data-toggle="tooltip" data-placement="top" title="Delete">
              <span class="fa fa-minus-circle"></span>
            </a>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
</div>
