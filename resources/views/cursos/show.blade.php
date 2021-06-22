@extends('layout.plantilla')

@section('title','Curso '.$curso)
    
@section('content')
                                <!--con dobles {{}} imprimimos el valor de la variable.-->
        <h1>Bienvenido al curso  {{$curso}}</h1>
@endsection



