@extends('layouts.default')



<style>
/*=====================================*/
/*  view descriptive_project.blade.php */
/*=====================================*/
.img-fluid {
	max-width: 100%;
	height: auto;
}
.name_apprenant {
	margin-left: 52.5rem; 
}
.img-fluid {
	margin-bottom: 2rem;
}

/*Start Section Style Description Page: made by David*/
.block {
  padding-top: 3rem;
  padding-bottom: 3rem;
}
.block h3, .block p {
  padding-top: 1.5rem;
}
.block i {
  margin-top: 4rem;
  margin-left: 10rem;
  width: 17.5rem;
  height: 17.5rem;
}  
    /*Style section 1 and 3 of Description page*/
.block h2:nth-child(odd) { 
  margin-left: 12.5rem;
  padding-right: 1rem;
  padding-bottom: 1rem;
}
.block img:nth-child(odd){
  margin-left: 5rem;
  width: 17.5rem;
  height: 17.5rem;
}
.block:nth-child(odd) {
  background-color: #ce0033;
  color: #fff;
}
    /*End style section 1 and 3 of Description page*/
.block:nth-child(even) {
  background-color: #c9c9c9;
}
/*.carousel img{
  width:17.5rem;
  height: 17.5rem; 
}*/
/*End Section Style Description Page*/




</style>


@section('content')
<div class="block" style="min-height: 450px">
	<div class="col-md-12">
		<h2>LE NOM DU PROJET</h2>
		<h4 class="name_apprenant">Le nom de l'apprenant</h4>
	</div>
	<div class="col-md-12 d-flex ">	
		<!-- <div class="col-sm-1"></div> -->
		<div class="col-sm-4">
			<img class="img-fluid" src="img/code.jpg" alt="Responsive image">
		</div>
		<div class="col-sm-4">
			<img class="img-fluid" src="img/css.png" alt="Responsive image">
		</div>	
		<div class="col-sm-4">
			<img class="img-fluid" src="img/diplome.jpg" alt="Responsive image">
		</div>	
	</div>
</div>

<div class="block" style="min-height: 450px">
	<div class="col-sm-1"></div>
	<div class="col-md-12">
		<h2>DESCRIPTIF DU PROJET</h2>
	</div>
	<div class="col-sm-1"></div>
	<div class="col-md-12 d-flex">			
		<div class="col-sm-1"></div>
		<div class="col-sm-10 descriptive_project">
			<h3>Le diplôme, la durée .</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto ea inventore ratione nulla quis provident voluptatem dolorum, laudantium velit, facere a quod nisi blanditiis maiores rem, magnam quos illum optio.
				<br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit et sapiente vitae provident labore, minus at saepe recusandae! Quaerat molestias dolorem, perspiciatis repellat adipisci pariatur repellendus, velit at possimus voluptatem?	
			</p>
		</div>	
		<div class="col-sm-1"></div>
	</div>	
</div>

<div class="block">
	<div class="col-md-12">	
		<h2>TÉMOIGNAGES</h2>
	</div>	
	<div class="col-md-12 d-flex">
		<div class="col-sm-1"></div>
		<div class="img col-sm-3">
			<img src="img/micro.jpg" class="img-thumbnail" alt="Responsive image">
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-6">
			<h3>Témoignages :</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ipsam enim pv classspiciatis et autem consequuntur earum maxime laboriosam optio. Consequatur at dolore, culpa minus, fugiat iure necessitatib
				<br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla aspernatur, consequatur culpa, asperiores commodi impedit porro autem facere, sit ipsam provident id, minima expedita quidem ab aperiam tempore eos quis.	
			</p>
		</div>
		<div class="col-sm-1"></div>
	</div>			
</div>		
@endsection
