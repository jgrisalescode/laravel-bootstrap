@extends("layouts.app")
@section("header")
<h1>Here is the Header of Galery</h1>
@endsection
@section("main")
<p>Our main section</p>
@if(count($students))
<table border="1">
  <thead>
    <tr>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td>{{ $student }}</td>
    </tr>

    @endforeach
  </tbody>
</table>
@else
{{ "Sin alumnos" }}
@endif

@endsection
@section("footer")
@endsection