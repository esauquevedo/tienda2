@extends('layouts.app')
@section('encabezado')
@stop
@section('content')
<h2 class="text-center">ALMACEN DE PRODUCTOS</h2>
<hr>
<div class="container" >
		<table class="table table-striped table-hover table-bordered" >
			<thead style="color:white">
				<tr style="background:#013ADF;">
					<th class="text-center">ID</th>
					<th class="text-center">NOMBRE</th>
					<th class="text-center">DESCRIPCIÓN</th>
					<th class="text-center">PRECIO</th>
					<th class="text-center">TIPO</th>
					<th class="text-center">CANTIDAD</th>

					
					<th class="text-center">OPCIONES</th>
				</tr>
			</thead>
			<tbody>
				@foreach($articulo as $art)
				<tr class="active">
					<td>{{$art->id}}</td>
					<td>{{$art->name}}</td>
					<td style="text-align: justify-all; text-transform: uppercase;">{{$art->descripcion}}</td>
					<td class="text-center">${{number_format($art->precio)}}</td>
					<td style="text-align: justify-all; text-transform: uppercase;">{{$art->genero}}</td>
					<td class="text-center">{{$art->cantidad}}</td>
				<!--	<td class="text-center"><img src="{{asset('img/images/ $art->imagen')}}" style="max-width: 100px;">
						<input type="hidden" id="img" name="img" value="{{$art->imagen}}">					
						</td> -->

					<td align="center">
						<a href="{{url('/actualizarArticulo')}}/{{$art->id}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true">Editar</span></a>
						<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal{{$art->id}}">
						  <span class="glyphicon glyphicon-remove" aria-hidden="true">Borrar</span>
						</button>
					</td>
				</tr>
				<!-- Modal -->
				<div class="modal fade" id="modal{{$art->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h5 class="modal-title" id="myModalLabel">Articulo sera removido del inventario</h5>
				      </div>
				      
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        <a href="{{url('/eliminarArticulo')}}/{{$art->id}}" class="btn btn-danger">Confirmar</a>
				      </div>
				    </div>
				  </div>
				</div>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{!! $articulo->render() !!}
		</div>
	</div>
</div>
@stop