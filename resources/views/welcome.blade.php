@extends('layouts.app')

@section('content')
<div>
   <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
               <li data-target="#carousel-example-generic" data-slide-to="5"></li>


              </ol>

              <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
            <center>   <a href="http://localhost/tiendaonline-master/public/productos" target="_blank">  <img src="{{ asset('img/images/1.jpg') }}"  height="200" width="315"></a></center>
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
             <center>  <a href="http://localhost/tiendaonline-master/public/productos" target="_blank">   <img src="{{ asset('img/images/2.jpg') }}"  height="200" width="315"></a></center>
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
             <center>   <a href="http://localhost/tiendaonline-master/public/productos" target="_blank">  <img src="{{ asset('img/images/3.jpg') }}"  height="200" width="315"></a></center>
                  <div class="carousel-caption">
                  </div>
                </div>

                 <div class="item">
            <center>   <a href="http://localhost/tiendaonline-master/public/productos" target="_blank">   <img src="{{ asset('img/images/4.jpg') }}"  height="200" width="315"></a></center>
                  <div class="carousel-caption">
                  </div>
                </div>

                 <div class="item">
                 <center> <a href="http://localhost/tiendaonline-master/public/productos" target="_blank"> <img src="{{ asset('img/images/5.jpg') }}"  height="200" width="315"></a></center>
                  <div class="carousel-caption">
                  </div>
                </div>
            </div>

            

              <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</div>

<center> <img src="{{ asset('img/images/logo.jpg') }}"  height="220" width="515"> </center> 
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>

              </ol>

              <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
            <center>   <a href="//www.samsung.com/mx/" target="_blank">  <img src="{{ asset('img/tb1.jpg') }}"  height="200" width="315"></a></center>
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
             <center>  <a href="//www.lg.com/mx/" target="_blank">   <img src="{{ asset('img/tb2.jpg') }}"  height="200" width="315"></a></center>
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
             <center>   <a href="//www.hponline.com.mx/" target="_blank">  <img src="{{ asset('img/tb3.jpg') }}"  height="200" width="315"></a></center>
                  <div class="carousel-caption">
                  </div>
                </div>

                 <div class="item">
            <center>   <a href="//www.cisco.com/c/es_mx/index.html" target="_blank">   <img src="{{ asset('img/tb4.jpg') }}"  height="200" width="315"></a></center>
                  <div class="carousel-caption">
                  </div>
                </div>

                 <div class="item">
                 <center> <a href="//www.panasonic.com/mx/" target="_blank"> <img src="{{ asset('img/tb5.jpg') }}"  height="200" width="315"></a></center>
                  <div class="carousel-caption">
                  </div>
                </div>
            </div>

            

              <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</div>
@endsection
