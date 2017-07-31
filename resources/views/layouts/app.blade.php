<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ecommerce</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
    <script>
    var app = angular.module('myApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });

    app.controller('myCtrl', function($scope) {
    
    $scope.listaCarrito = [];

    $scope.agregar = function(item)
    {
          $scope.listaCarrito.push(JSON.parse(JSON.stringify(item)));
    }

    $scope.IniciarArticulos = function(articulo)
    {
         console.log(articulo);
    }

     $scope.mostrar = function(articulo)
    {
        $scope.listaCarrito.push(articulo);   
         }

  $scope.guardar = function()
    {
     // Using the core $.ajax() method
$.ajax({
 
    // The URL for the request
    url: "vuelta",
 
    // The data to send (will be converted to a query string)
    data: {
        'listaCarrito': $scope.listaCarrito

    }, 
    // Whether this is a POST or GET request
    type: "POST",
 
    // The type of data we expect back
    dataType : "json",
     headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
})
  // Code to run if the request succeeds (is done);
  // The response is passed to the function
  .done(function( json ) {
    console.log(json);
        alert( "Agregado al carrito" );

  })
  // Code to run if the request fails; the raw request and
  // status codes are passed to the function
  .fail(function( xhr, status, errorThrown ) {
    alert( "Sorry, there was a problem!" );
    console.log( "Error: " + errorThrown );
    console.log( "Status: " + status );
    console.dir( xhr );
  })
  // Code to run regardless of success or failure;
  .always(function( xhr, status ) {
  //  alert( "The request is complete!" );
  });
         }
});


 



    </script>

</head>
<body ng-app="myApp" ng-controller="myCtrl">
  
    <div id="app" >
        <nav class="navbar navbar-default" style="background:#013ADF;">
        <div class="container-fluid">
            <div class="navbar-header" >
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
           
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">TechShop Online Store</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @else
                        @if (Auth::user()->role == 1)
                            <li><a href="{{url('admin')}}">Inicio</a></li>
                            
                            <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Registro de Usuarios<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/registrarUsuarios') }}" target="_blank">Nuevo Usuario</a></li>
                                        <li><a href="{{ url('/consultarUsuarios') }}" target="_blank">Consultar Usuarios</a></li>
                                    </ul>
                                </li>
                             
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Añadir Articulos<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/registroArticulo')}}" target="_blank">Nuevo Articulo</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/consultarArticulo')}}" target="_blank">Almacen</a></li>
                              <!--   <li><a href="{{ url('/articulos')}}" target="_blank">Enviar Promociones</a></li>
                              -->
                                @else
                                <li><a href="{{ url('/') }}">Inicio</a></li>
                                <li><a href="{{ url('/mostrarArticulo')}}" target="_blank">Articulos</a></li>
                                <li><a href="{{ url('/productos')}}" target="_blank">Productos en linea</a></li>

                                
                        @endif

                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="text-transform: uppercase;">
                                        {{ Auth::user()->name }}<b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('logout') }}"><i class="glyphicon glyphicon-log-in"></i>&nbsp;&nbsp;Salir</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
             <br>
             
                <br>
                <br>
                <br>
    @yield('content')
  <br><br><br> <br> <br><br> <br>
<hr>
  <!--information-starts-->
    <div class="information">
        <div class="container">
            <div class="infor-top">
                <div class="col-md-3 infor-left">

                    <h4>Redes Sociales  </h4>
                    <ul>
                        <li><a href="//facebook.com"target="_newblank"><span class="fb"></span><h6>Facebook</h6></a></li>
                        <li><a href="//twitter.com" target="_newblank"><span class="twit"></span><h6>Twitter</h6></a></li>
                        <li><a href="//plus.google.com" target="_newblank"><span class="google"></span><h6>Google+</h6></a></li>
                    </ul>
                </div>
                <div class="col-md-2 infor-left"> 
                    <h4>Contactanos</h4>
                    <h6>Telefono: +14545745</h6>
                    <p>Email: <a href="mailto:example@email.com">testsantillan@gmail.com</a></p>

                </div>
                <div class="col-md-2 infor-left">
                </div>
                <div class="col-md-2 infor-left">
                    <h4>Información de la pagina</h4>
                    <h6>Toda la tecnologia a un click
                        <span>
                    Marcas reconocidas
                        </span>
                        Samsung,LG,HP,Cisco,Panasonic
                        </h6>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--information-end-->
    <!--footer-starts-->
   
        <hr>
        <div class="content">
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b></b> 
            <p class="pull-right"><a href="#">Regresar arriba</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>