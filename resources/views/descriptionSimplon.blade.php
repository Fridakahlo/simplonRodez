<!----------------------------------------------->
<!--   C.S.S Style in file App.css line 10420  -->
<!----------------------------------------------->


@extends('layouts.default') 
@section('content')
<div class="wrapper">
	<div class="container-fluid">
		<div class="row">


		<!-- Block 1 -->
			<div class="blockD block1">
				<div class="col-md-12">
					<div class="col-md-6">
						<h1>DÉVELOPPEUR.SE WEB</h1>
					</div>
					<div class="d-flex">
						<div class="col-md-6">					
							<div id="carouselDescription" class="carousel slide" data-ride="carousel">	
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
								        <div class="carousel-caption d-none d-md-block">
											<h4>Laravel</h4>
										</div>
								    </div>
							    </div>
								<a class="carousel-control-prev" href="#carouselDescription" role="button" data-slide="prev">
								    <p class="carouselIcon text-danger"> < </p>
								</a>
								<a class="carousel-control-next" href="#carouselDescription" role="button" data-slide="next">	   
									<p class="carouselIcon text-danger"> > </p>   
								</a>
							</div>	
						</div>
						<div class="description col-md-6">
							

				                {!! $infos->title !!}
				                {!! $infos->content !!}
				        
            
						</div>
					</div>									
				</div>	
			</div>
		</div>
	</div>
</div>			
		<!-- End Block 1 -->


		<!-- Block 2 -->
<div class="wrapper">
	<div class="container-fluid">
		<div class="row">		
			<div class="blockD block2">
				<div class="col-md-12">
					<div class="d-flex">
						<div class="col-md-6">&nbsp;</div>
						<div class="col-md-6">
							<h1>LE DIPLÔME, LA DURÉE</h1>
						</div>	
					</div>	
					<div class="d-flex">
						<div class="description col-md-6">

		                        {!! $news->title !!}
		                        {!! $news->content !!}
		                        
						</div>	
						<div class="col-md-6">
							<img src="img/diplome.jpg" class="imgDescription" alt="Responsive image">
						</div>
					</div>
				</div>
			</div>		
		</div>
	</div>		
</div>			
		<!-- End Block 2 -->


		<!-- Block 3 -->
<div class="wrapper">
	<div class="container-fluid">
		<div class="row">	
			<div class="blockD block3">
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
		</div>	
	</div>
</div>	
		<!-- End Block 3 -->


@endsection