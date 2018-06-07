<style>
.block {
	padding: 2.5%;
 	background-color: #efefef;
 }
 .block h1 {
 	text-align: center;
 }
 .block h5 {

 }	
 .block i {
 	text-align: center;
	color: #ce0033;
 }
#carouselDescription h5{
	padding-top: 10%;
	color: #000;
}
.arrow {
	background-color: #ce0033;
}
.carousel-control-prev-icon,
.carousel-control-next-icon {
  height: 100px;
  width: 100px;
  outline: black;
  background-size: 100%, 100%;
  border-radius: 50%;
  border: 1px solid black;
  background-image: none;
}
.carousel-control-next-icon:after {
  content: '>';
  font-size: 55px;
  color: red;
}
.carousel-control-prev-icon:after {
  content: '<';
  font-size: 55px;
  color: red;
}
</style>
@extends('layouts.default')
@section('content')
{{-- Block 1 --}}
	<div class="block">
		<div class="col-md-12">
			<div class="col-md-6">
				<h1>DÉVELOPPEUR.SE WEB</h1>
			</div>
			<div class="d-flex">
				<div class="col-md-6">
					<div id="carouselDescription">
					  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						    <ol class="carousel-indicators">
							    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
						    </ol>
						  	<div class="carousel-inner">
							    <div class="carousel-item active">
							    	<i class="d-block fab fa-git fa-10x"></i>
							        <div class="carousel-caption d-none d-md-block">
										<h5>Git</h5>
									</div>
							    </div>
							    <div class="carousel-item">
							    	<i class="d-block fab fa-github fa-10x"></i>
							        <div class="carousel-caption d-none d-md-block">
										<h5>Git-Hub</h5>
									</div>
							    </div>
							    <div class="carousel-item">
							    	<i class="d-block fab fa-html5 fa-10x"></i>
							        <div class="carousel-caption d-none d-md-block">
										<h5>H.T.M.L 5</h5>
									</div>
							    </div>
							    <div class="carousel-item">
							    	<i class="d-block fab fa-css3 fa-10x"></i>
							        <div class="carousel-caption d-none d-md-block">
										<h5>C.S.S 3</h5>
									</div>
							    </div>
							    <div class="carousel-item">
							    	<i class="d-block fab fa-js fa-10x"></i>
							        <div class="carousel-caption d-none d-md-block">
										<h5>Javascript</h5>
									</div>
							    </div>
							    <div class="carousel-item">
							    	<i class="d-block fab fa-angular fa-10x"></i>
							        <div class="carousel-caption d-none d-md-block">
										<h5>Angular.js</h5>
									</div>
							    </div>
							    <div class="carousel-item">
							    	<i class="d-block fab fa-react fa-10x"></i>
							        <div class="carousel-caption d-none d-md-block">
										<h5>React.js</h5>
									</div>
							    </div>
							    <div class="carousel-item">
							    	<i class="d-block fab fa-vuejs fa-10x"></i>
							        <div class="carousel-caption d-none d-md-block">
										<h5>Vue.js</h5>
									</div>
							    </div>
							    <div class="carousel-item">
							    	<i class="d-block fab fa-php fa-10x"></i>
							        <div class="carousel-caption d-none d-md-block">
										<h5>P.H.P</h5>
									</div>
							    </div>
							    <div class="carousel-item">
							    	<i class="d-block fab fa-wordpress fa-10x"></i>
							        <div class="carousel-caption d-none d-md-block">
										<h5>Wordpress</h5>
									</div>
							    </div>
							    <div class="carousel-item">
							    	<i class="d-block fab fa-laravel fa-10x"></i>
							        <div class="carousel-caption d-none d-md-block">
										<h5>Laravel</h5>
									</div>
							    </div>
						    </div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    
							</a>
						</div>  
					</div>
				</div>	
				<div class="col-md-6">
					<h2>Qu'apprendre à Simplon Rodez ?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, veniam voluptatibus doloribus praesentium distinctio harum, ducimus eos esse nam, repudiandae amet explicabo eius unde! Impedit ab nostrum quae recusandae reprehenderit?
						<br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptatem et distinctio modi odio quo ducimus impedit aspernatur minus, optio, accusantium ab voluptas quibusdam assumenda possimus qui nemo! Obcaecati, corporis.		
					</p>
				</div>
			</div>									
		</div>	
	</div>
{{-- End block 1 --}}

	{{-- Block 2 --}}
	{{-- <div class="block">
		<div class="col-md-12">
			<h2>LE DIPLÔME, LA DURÉE</h2>
				
			<div class="col-sm-1"></div>
			<div class="col-sm-3">
				<img src="img/diplome.jpg" class="img-thumbnail" alt="Responsive image">
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-6">
				<h2>Le diplôme, la durée .</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto ea inventore ratione nulla quis provident voluptatem dolorum, laudantium velit, facere a quod nisi blanditiis maiores rem, magnam quos illum optio.
					<br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit et sapiente vitae provident labore, minus at saepe recusandae! Quaerat molestias dolorem, perspiciatis repellat adipisci pariatur repellendus, velit at possimus voluptatem?	
				</p>
			</div>	
			<div class="col-sm-1"></div>
		</div>	
	</div>
	Block 3
	<div class="block">
		<div class="col-md-12">	
			<h2>TÉMOIGNAGES</h2>
		</div>	
		<div class="col-md-12">
			<div class="col-sm-1"></div>
			<div class="img col-sm-3">
				<img src="img/micro.jpg" class="img-thumbnail" alt="Responsive image">
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-6">
				<h2>Témoignages :</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ipsam enim pv classspiciatis et autem consequuntur earum maxime laboriosam optio. Consequatur at dolore, culpa minus, fugiat iure necessitatib
					<br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla aspernatur, consequatur culpa, asperiores commodi impedit porro autem facere, sit ipsam provident id, minima expedita quidem ab aperiam tempore eos quis.	
				</p>
			</div>
			<div class="col-sm-1"></div>
		</div>			
	</div>	 --}}	
@endsection
