@extends ('layouts.layout')
@section('main_content')
  <h1>Pagina Students</h1>

  <h2>Teacher: </h2>
  <div id="lista-students">

  </div>

  <script id="students-template" type="text/x-handlebars-template">
    <ul>
      <li>Nome: @{{ nome }}</li>
      <li>Cognome: @{{ cognome }}</li>
      <li>Voto: @{{ voto }}</li>
      <li>Descrizione: @{{ descrizione }}</li>
    </ul>
  </script>
  {{-- <div>
    @foreach ($students as $student)
      <ul>
        <li>Nome: {{ $student->nome }}</li>
        <li>Cognome: {{ $student->cognome }}</li>
        <li>Voto: {{ $student->voto }}</li>
        <li>Descrizione: {{ $student->descrizione }}</li>
      </ul>

    @endforeach

  </div> --}}
@endsection
