@extends('layouts.default')

@section('header')
<header class="wrapper simplonheader">
  <div class="container">
    <div class="row  text-center pt-4 ">
      <div class="col-md-12 col-xs-12">
        <img src="img/header_logo_simplon.png" class="simplonlogo">
      </div>
    </div>  
  </div>
</header>
@endsection

@section('content')

<section class="we-sr" style="min-height: 450px">
    <div class="container-home_sr we">
        <div class="row justify-content-center">
           <div class="col-md-5 text-center">
            
            @isset($infos)
                {!! $infos->title !!}
                {!! $infos->content !!}
            @endisset
        
            </div> 
            <div class="col-md-5 text-center">
                <img class="img-thumbnail" src="img/thomas.jpg"  alt="responsive image">
            </div>
        </div>
    </div>    
</section>
 
<section class="news-sr" >
    <div class="container-home_sr">

        <div class="row justify-content-center">

            @isset($news)

                @foreach($news as $articledown)
                    <div class="col-md-5">
                        <div class="cardach($articleOne as $articledown) text-center news" style="min-height: 350px">
                            {!! $articledown->title !!}
                            {!! $articledown->content !!}
                        </div>  
                    </div>
                @endforeach
                
            @endisset
       </div>
    </div>
  </div>
</section>
<section class="carousel sr">
  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->

  <div class="carousel-inner" style="min-height: 450px">
    <div class="carousel-item active">
      <img src="img/menu.png" alt="image 1 carousel">
    </div>
    <div class="carousel-item">
      <img src="img/ragt1.png" alt="image 2 carousel">
    </div>
    <div class="carousel-item">
      <img src="img/plan.png" alt="image 3 carousel">
    </div>
  </div>

  <!-- Left and right controls -->

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</section>
@endsection

