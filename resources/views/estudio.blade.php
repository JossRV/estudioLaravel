@extends('./layouts/main')
@section('contenido')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="display-4 text-center">Informacion de usuarios en el estudio</div>
                {{-- {{print_r($items)}} --}}
                    <table class="table text-center mt-5">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre completo</th>
                                <th>Fecha de nacimiento</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->nombre .' '. $item->paterno}}</td>
                                <td>{{$item->FechaNacimiento}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection