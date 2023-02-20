@extends('./layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-1">Hola con layouts</h1>
                <a href="{{Route('Contacto')}}"> Ir a contacto</a>
            </div>
        </div>
    </div>
@endsection