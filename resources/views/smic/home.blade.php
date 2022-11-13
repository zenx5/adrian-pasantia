<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-home.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <script src="{{asset('js/all.js')}}"></script>
    <title></title>
    
  </head>
  <body>
    @if(\Session::has('message'))
      @include('store.partials.message')
    @endif      
    @include('store.partials.nav-menu')
    <section class="container-fluid slider ">
    
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3 class="display-4 animated zoomIn titulo text-center">Smic Pro</h3>
              <p class="display-4 animated zoomIn titulo text-center">Busca analizar de manera cualitativa las relaciones entre las variables que componen un sistema dentro de una empresa, organización, sociedad, país etc</p>
              
            </div>
            
          </div>
        </div>
    </section>


    <section class="container my-5 slider-2">
          <h3 class="text-center mb-5">El metodo Micmac es parte del análisis estructural y se apoya en el juicio cualitativo de actores y/ o expertos que son parte de un sistema.</h3>
           <h3 class="text-center mb-5">Las diferentes fases del método MICMAC de acuerdo a Godet (1997)
son las siguientes:</h3>
        <div class="row">
              <div class="col-md-4 text-center">
                  <i class="fas fa-search-dollar fa-3x"></i>
                  <h3 class="my-4">FASE I</h3>
                  <p >listado de las variables del sistema.</p>
              </div>
              <div class="col-md-4 text-center">
                <i class="fas fa-bullseye fa-3x "></i>
                <h3 class="my-4">FASE II</h3>
                <p>la descripción de relaciones entre variables del sistema.</p>
              </div>
              <div class="col-md-4 text-center">
                  <i class="fas fa-lightbulb fa-3x"></i>
                <h3 class="my-4">FASE III</h3>
                <p>la identificación de variables clave y sus categorías e interpretación.</p>
              </div>
        </div>
    </section>

     <section class="container-fluid my-5 slider-3 p-5">
          <div class="container">
              <div class="text-center mb-5">
                  <h3>Precios</h3>
                  <p class="font-weight-normal mt-3">Opciones de precios flexibles adaptadas a sus necesidades.</p>
              </div> 

              <div class="card-deck mb-3 d-flex justify-content-center text-center">
                  <div class="row">
                          @foreach($servicios as $item)
                          <div class="card card-1 mb-4 col-md-4 ml-2 p-2">
                              <div class="card-header">
                                  <h4 class="my-0 font-weight-normal">{{$item->nombre}}</h4>
                              </div>
                              <div class="card-body">
                                  <h1 class="card-title pricing-card-title">{{$item->precio}} $<small class="text-muted">/ mo</small></h1>
                                  <p class="card-text">{{$item->slug}}</p>
                                  <a href="{{ route('cart-add', $item->slug) }}"><button type="button" class="btn btn-lg btn-block p-2"><i class="fas fa-shopping-cart"></i> Comprar</button></a>
                              </div>
                          </div>
                          @endforeach
                  </div>   
          </div> 
          </div>
          <p class="text-center"><a href="{{route('servicios')}}">Ver detalles de precios</a></p>
    </section>

   

   

    @extends('store.partials.footer')
  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/mdb.min.js')}}"></script>
  <script src="{{asset('js/fontawesome.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="{{asset('js/form.js')}}"></script>
  </body>
</html>
