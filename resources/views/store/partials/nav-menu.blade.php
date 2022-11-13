<style>
          .slider{
                  width:100%;
                  height:50%;
                  background: url('img/calaco.png');
                  background-size: cover;
                  background-position: center;
          }
          
          .slider h3{
              margin-top:50px;
              color:#FFF;
           }
          
          @media(max-width:480px){
            .slider h3{
              display:flex;
              align-items:center;
              font-size:16px;
            }

            .slider img{
              visibility:hidden;
            }
          }

          @media(max-width:767px){
            .slider h3{
              font-size:16px;
            }

            .slider img{
              visibility:hidden;
            }
          }

          @media(max-width:1200px){
            .slider h3{
              font-size:20px;
            }

            .slider img{
              width:50%;
            }
          }


          .iconos{
              width: 50%;
              height: 50%;
              border-radius: 50%;
              background: red;
          }
          
          .fa-search-dollar{
            color:#a6cb12;
          }

          .fa-bullseye{
            color:#db2d43;
          }

          .fa-lightbulb{
            color:#e0bb20;
          }
          
          h3{
            color:#4B4B4C;
          }
          p{
            color:#808080;
          }
          p b{
            font-weight:bold;
          }

          ul li{
            color:#808080;
            margin-left:20px;
            text-align:justify;
          }
          
         .slider-2{
          font-family: 'Questrial', sans-serif;
         }

          .slider-3{
            background-color: #eeeeee;
            font-family: 'Questrial', sans-serif;
          }

          .slider-4 p{
            font-size:18px;
          }

       
    </style>
<nav class="navbar navbar-expand-lg p-4" >
<div class="container">
<a class="navbar-brand" href="{{route('inicio')}}">El Pasante</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item">
        <a class="nav-link" href="{{route('MicmacP')}}">Micmac</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('MactorH')}}">Mactor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('MorpholH')}}">morphol</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('SmicH')}}">Smic-Pro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('MultipolH')}}">Multipol</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('servicios')}}">Precios</a>
      </li>
     
      @include('store.partials.menu-user')
    </ul>
  </div>
</div>
</nav>
