@extends("layouts.app")
@section("header")

@endsection
@section("main")
<p>Our main section</p>
@if(count($students))
<table class="table table-dark table-hover">
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