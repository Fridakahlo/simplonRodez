<style>
/***************************************/
/*   C.S.S Description Page by David   */
/***************************************/
	/**************************************/
	/*   Style general of section Block   */
	/**************************************/
.block {
 	height: 30rem;
 	background-color: #efefef;
}
.block h2 {
 	padding-bottom: 5%;
}
.block h4 {
 	text-align: right;
 	padding-bottom: 5rem;
	color: #000;
}	
.block i {
 	text-align: center;
	color: #ce0033;
}
	/******************************************/
	/*   End style general of section Block   */
	/******************************************/
	/***************************/
	/*   Style Block 1 and 3   */
	/***************************/
.block1 h1, .block3 h1 {
 	padding-top: 10%;
 	padding-bottom: 10%;
 	text-align: center;
 	color: #ce0033;
}
.block3 img {
	margin-left: 19%;
	border-radius: 5%;
	border: solid 3px #000;
}
	/*******************************/
	/*   End style Block 1 and 3   */
	/*******************************/
	/*********************/
	/*   Style Block 2   */
	/*********************/
.block2 {
	background-color: #fff;
	text-align: right;
}
.block2 h1 {
	padding-top: 10%;
 	padding-bottom: 10%;
 	text-align: center;
 	color: #ce0033;	
}
.block2 img {
	margin-right: 19%;
	border-radius: 5%;
	border: solid 3px #ec0033;
}
	/*************************/
	/*   End style Block 2   */
	/*************************/
#carouselDescription {
	color: #000;
}
#carouselDescription, .description {
	height: 50rem;
}
.carouselIcon {
	font-size: 5rem;
}
.imgDescription {
	width: 20rem;
	height: 15rem;
	margin-top: 3%;
}
/*******************************************/	
/*   End C.S.S Description Page by David   */
/*******************************************/	
</style>

@extends('layouts.default')
@section('content')
<div class="wrap">
<!-- Block 1 -->
	<div class="block block1">
		<div class="col-md-12">
			<div class="col-md-6">
				<h1>DÉVELOPPEUR.SE WEB</h1>
			</div>
			<div id="carouselDescription" class="d-flex">
				<div class="col-md-6">					
				  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  	<div class="carousel-inner">
						    <div class="carousel-item active">
						    	<i class="d-block fab fa-git fa-10x"></i>
						        <div class="carousel-caption d-none d-md-block">
									<h4>Git</h4>
								</div>
						    </div>
						    <div class="carousel-item">
						    	<i class="d-block fab fa-github fa-10x"></i>
						        <div class="carousel-caption d-none d-md-block">
									<h4>Git-Hub</h4>
								</div>
						    </div>
						    <div class="carousel-item">
						    	<i class="d-block fab fa-html5 fa-10x"></i>
						        <div class="carousel-caption d-none d-md-block">
									<h4>H.T.M.L 5</h4>
								</div>
						    </div>
						    <div class="carousel-item">
						    	<i class="d-block fab fa-css3 fa-10x"></i>
						        <div class="carousel-caption d-none d-md-block">
									<h4>C.S.S 3</h4>
								</div>
						    </div>
						    <div class="carousel-item">
						    	<i class="d-block fab fa-js fa-10x"></i>
						        <div class="carousel-caption d-none d-md-block">
									<h4>Javascript</h4>
								</div>
						    </div>
						    <div class="carousel-item">
						    	<i class="d-block fab fa-angular fa-10x"></i>
						        <div class="carousel-caption d-none d-md-block">
									<h4>Angular.js</h4>
								</div>
						    </div>
						    <div class="carousel-item">
						    	<i class="d-block fab fa-react fa-10x"></i>
						        <div class="carousel-caption d-none d-md-block">
									<h4>React.js</h4>
								</div>
						    </div>
						    <div class="carousel-item">
						    	<i class="d-block fab fa-vuejs fa-10x"></i>
						        <div class="carousel-caption d-none d-md-block">
									<h4>Vue.js</h4>
								</div>
						    </div>
						    <div class="carousel-item">
						    	<i class="d-block fab fa-php fa-10x"></i>
						        <div class="carousel-caption d-none d-md-block">
									<h4>P.H.P</h4>
								</div>
						    </div>
						    <div class="carousel-item">
						    	<i class="d-block fab fa-wordpress fa-10x"></i>
						        <div class="carousel-caption d-none d-md-block">
									<h4>Wordpress</h4>
								</div>
						    </div>
						    <div class="carousel-item">
						    	<i class="d-block fab fa-laravel fa-10x"></i>
						        <div class="carousel-caption  d-md-block">
									<h4>Laravel</h4>
								</div>
						    </div>
					    </div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <p class="carouselIcon text-danger"> < </p>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">	   <p class="carouselIcon text-danger"> > </p>   
						</a>
					</div>  
				</div>	
				<div class="description col-md-6">
					<h2>Qu'apprendre à Simplon Rodez ?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, veniam voluptatibus doloribus praesentium distinctio harum, ducimus eos esse nam, repudiandae amet explicabo eius unde! Impedit ab nostrum quae recusandae reprehenderit?
						<br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptatem et distinctio modi odio quo ducimus impedit aspernatur minus, optio, accusantium ab voluptas quibusdam assumenda possimus qui nemo! Obcaecati, corporis.		
					</p>
				</div>
			</div>									
		</div>	
	</div>
<!-- End Block 1 -->

<!-- Block 2 -->
	<div class="block block2">
		<div class="col-md-12">
			<div class="d-flex">
				<div class="col-md-6">&nbsp;</div>
				<div class="col-md-6">
					<h1>LE DIPLÔME, LA DURÉE</h1>
				</div>	
			</div>	
			<div class="d-flex">
				<div class="description col-md-6">
					<h2>Le diplôme, la durée .</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto ea inventore ratione nulla quis provident voluptatem dolorum, laudantium velit, facere a quod nisi blanditiis maiores rem, magnam quos illum optio.
						<br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit et sapiente vitae provident labore, minus at saepe recusandae! Quaerat molestias dolorem, perspiciatis repellat adipisci pariatur repellendus, velit at possimus voluptatem?	
					</p>
				</div>	
				<div class="col-md-6">
					<img src="img/diplome.jpg" class="imgDescription" alt="Responsive image">
				</div>
			</div>
		</div>	
	</div>
<!-- End Block 2 -->

<!-- Block 3 -->
	<div class="block block3">
		<div class="col-md-12">	
			<div class="col-md-6">
				<h1>TÉMOIGNAGES</h1>
			</div>			
			<div class="d-flex">
				<div class="img col-md-6">
					<img src="img/micro.jpg" class="imgDescription" alt="Responsive image">
				</div>
				<div class="col-md-6">
					<h2>Témoignages :</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ipsam enim pv classspiciatis et autem consequuntur earum maxime laboriosam optio. Consequatur at dolore, culpa minus, fugiat iure necessitatib
						<br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla aspernatur, consequatur culpa, asperiores commodi impedit porro autem facere, sit ipsam provident id, minima expedita quidem ab aperiam tempore eos quis.	
					</p>
				</div>
			</div>	
		</div>
	</div>
<!-- End Block 3 -->	
</div>	
@endsection
