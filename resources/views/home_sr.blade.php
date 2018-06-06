@extends('layouts.default')

<style>
/*=========================*/
/*  view home_sr.blade.php */
/*=========================*/
.container-home_sr {
  margin: 1em;
}
.we-sr {
  background-color: #EFEFEF;
  padding-top: 6em;
}
.news-sr, .carousel {
  margin-top: 3em;
}
.we {
  margin: 2em;
 
}
.btn-secondary {
  text-decoration: none;
}
.link-news {
  margin-top: 3em;
}
.presentation_h3 {
  margin-top: 2em;
}
.h1_news {
  padding-top: 0.5em;
}
.h3_news {
  padding-bottom: 1em;
}
.news {
  padding: 2em;
  border-radius: 5px;
  background-color: #EFEFEF;
  border-radius: 5px;
  box-shadow: 8px 0 8px -10px #000000,-8px 0 8px -10px #000000;
}
</style>

@section('content')

<section class="we-sr" style="min-height: 450px">
    <div class="container-home_sr we">
        <div class="row justify-content-center">
            <div class="col-md-5 text-center">

                {!! $infos->title !!}
                {!! $infos->content !!}
        
            </div> 
            <div class="col-md-5 text-center">
                <img class="img-thumbnail" src="img/footer_logo_ecole_regionale_numerique.jpg"  alt="responsive image">
            </div>
        </div>
    </div>    
</section>
<section class="news-sr" >
    <div class="container-home_sr">
        <div class="row justify-content-center">
            @foreach($news as $articledown)
                <div class="col-md-5">
                    <div class="cardach($articleOne as $articledown) text-center news" style="min-height: 350px">
                        {!! $articledown->title !!}
                        {!! $articledown->content !!}
                    </div>  
                </div>
            @endforeach
       </div>
    </div>
  </div>
</section>
<section class="carousel sr">
  <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="min-height: 450px">
      <div class="item active">
        <img class="img-responsive" src="img/html5.png" alt="ecole_regionale_numerique">

      </div>
      <div class="carousel-item">
        <img src="img/js.png" alt="js">
      </div>
      <div class="carousel-item">
        <img src="img/css.png" alt="css">
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


