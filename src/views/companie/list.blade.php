@extends("master")

@section("title", "Lista de empresas")

@section("content")
<div class="d-flex flex-row-reverse">
</div>
@if($_SESSION['profesor'] == 1)
      <a class="btn btn-primary" href="{{$router->generate('companie_create')}}"> Añadir empresa</a>
      @endif
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">URL</th>
      <th scope="col">Mode</th>
      <th scope="col">Description</th>
      @if($_SESSION['profesor'] == 1)
      <th scope="col">Acciones</th>
      @endif
    </tr>
  </thead>
  <tbody>
    @forelse  ($companies as $companie)
      <tr>
        <th scope="row">{{$companie->id}}</th>
        <td><a href="{{$companie->url}}">{{$companie->name}}</a></td>
        <td>{{$companie->url}}</td>
        <td>{{$companie->mode}}</td>
        <td>{{$companie->description}}</td>
        @if($_SESSION['profesor'] == 1)
      <td scope="col"><a class="btn btn-outline-warning" href="{{$router->generate('companie_edit', ['id' => $companie->id])}}">Editar</a>
      <a class="btn btn-danger" href="{{$router->generate('companie_delete', ['id' => $companie->id])}}">Borrar</a></td>
      @endif
      </tr>
    @empty
      <tr>
        <td colspan="6" class="text-center bg-danger text-white">No hay usuarios</td>
      </tr>
    @endforelse
  </tbody>
</table>


@endsection
