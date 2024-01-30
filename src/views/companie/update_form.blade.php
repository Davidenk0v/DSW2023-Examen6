@extends("master")

@section("title", "Modificar Empresa")

@section("content")
<form method="post" action="{{$router->generate('companie_update')}}">
  <div class="mb-3">
    <label for="input_name" class="form-label">New name</label>
    <input type="text" class="form-control" id="input_name" name="name" 
    @if(isset($companie))
    value="{{$companie->name}}"
    @endif
    >
    <label for="input_url" class="form-label">New url</label>
    <input type="text" class="form-control" id="input_url" name="url" 
    @if(isset($companie))
    value="{{$companie->url}}"
    @endif
    >
    <label for="input_mode" class="form-label">New mode</label>
    <select name="mode" id="input_description">
      <option value="Presencial">Presencial</option>
      <option value="Semipresencial">Semipresencial</option>
      <option value="Online">Online</option>
    </select>
    <label for="input_description" class="form-label">New description</label>
    <input type="text" class="form-control" id="input_description" name="description" 
    @if(isset($companie))
    value="{{$companie->description}}"
    @endif
    >
    <input type="hidden" name="id" value="{{$companie->id}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection