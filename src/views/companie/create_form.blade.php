@extends("master")

@section("title", "Nueva Empresa")

@section("content")
<form method="post" action="{{$router->generate('companie_post')}}">
  <div class="mb-3">
    <label for="input_name" class="form-label">Name</label>
    <input type="text" class="form-control" id="input_name" name="name">
    <label for="input_url" class="form-label">Url</label>
    <input type="text" class="form-control" id="input_url" name="url" >
    <label for="input_mode" class="form-label">Mode</label>
    <select name="mode" id="input_description">
      <option value="Presencial">Presencial</option>
      <option value="Semipresencial">Semipresencial</option>
      <option value="Online">Online</option>
    </select>
    <label for="input_description" class="form-label">Description</label>
    <input type="text" class="form-control" id="input_description" name="description" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection