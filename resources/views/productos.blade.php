@extends('layouts.app')
@section('encabezado')
@stop
@section('content')
 <button type="button" class="btn btn-default btn-xs" data-toggle="modal" ng-click="guardar()" >
  <span class="glyphicon glyphicon-success" aria-hidden="true"> guardar</span>
</button>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

				@foreach($articulo as $art)




<div class="row" >
    <div class="col s12 m6 l3"><p><img src="{{asset('img/images/1.jpg ')}}" height="180" width="180" alt=""> </p>
   <div>#XWZ-{{$art->id}} </div>
    <div>{{$art->name}}</div>
    <div>${{number_format($art->precio)}} MXP</div>
    <div>Descripcion: {{$art->descripcion}}</div>
    <br>
    <p><a class="btn btn-primary" role="button" ng-click="mostrar('{{$art->id}}')">Agregar al carrito</a> </p>

    </div>

    
  @endforeach



</div>





@stop