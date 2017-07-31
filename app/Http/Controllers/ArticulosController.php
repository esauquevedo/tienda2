<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Articulo;
use App\User;
use PDF;
use DB;
use Mail;

class ArticulosController extends Controller
{

 public function mostrarArticulo(){
        $articulo = DB::table('articulos')->paginate(15);
        return view('mostrarArticulo', compact('articulo'));
    }


 public function consultarProductos(){
        $articulo = DB::table('articulos')->paginate(15);
        return view('productos', compact('articulo'));
    }

public function vuelta()
{

    $lista =  $_POST['listaCarrito'];

//$sqlData = array();




/* $lista=DB::table('compras')
//DB::table('compras')->insert($sqlData);
 $lista->id=$datos->input('total');
         $lista->save();
*/

  return response()->json([
    'lista' => $lista
    ]);


}

 public function consultar(Request $datos){
  $users= new User();
	// $email=$users->email=$datos->input('email');
	$sexo=$users->sexo=$datos->input('sexo');

	$lista=DB::table('users')
	->select('users.*')
	->where('sexo', 'like', $sexo)
	->get();
	$articulo=Articulo::all();     

	   return view('admin.articulos',compact('lista','articulo'));
}
public function enviar(){
      $articulo=Articulo::all();
      return view('admin.articulos',compact('articulo'));

    }
public function enviarPromociones(Request $datos){
      $articulo=Articulo::all();
     	$CorreoBienvenido=$datos->input('id');

for ($i=0; $i < count($CorreoBienvenido); $i++) {  
  
Mail::send('admin.correoPromociones', ['CorreoBienvenido' => $CorreoBienvenido[$i]] ,function($message) use ($CorreoBienvenido,$i) {
        $message->from('testsantillan@gmail.com','TecShop');
        $message->to($CorreoBienvenido[$i])->subject('Tenemos nuevas ofertas para ti');
  });

}
return view('admin.articulos', compact('articulo'));

   } 
}
