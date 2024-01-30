@extends("master")

@section("title", "Elecciones de los alumnos")

@section("content")
<div class="d-flex flex-row-reverse">
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Alumno</th>
      <th scope="col">Elecciones</th>
    </tr>
  </thead>
  <tbody>
    @forelse  ($choice as $choice)
      <tr>
        <th scope="row">{{$choice->id}}</th>
        <td><a href="{{$choice->url}}">{{$choice->user_id}}</a></td>
        <td>{{$choice->company_id}}</td>
      </tr>
    @empty
      <tr>
        <td colspan="6" class="text-center bg-danger text-white">No hay usuarios</td>
      </tr>
    @endforelse
  </tbody>
</table>


@endsection
