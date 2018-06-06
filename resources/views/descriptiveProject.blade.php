<!--=======================================*/
/*    view descriptiveProject.blade.php     */
/*=========================================*/-->
@extends('layouts.default')



<style>
/*=====================================*/
/*  css view descriptiveProject.blade.php */
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
  background-color: #EFEFEF;
  
}
/*.block:nth-child(even) {
  background-color: #EFEFEF;
}*/
.btn {
	min-width: 10em;
	margin-top: 3em;
}
.btn-secondary {
	background-color: #EFEFEF;	
}

</style>


@section('content')
<div class="container block" style="min-height: 450px">
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

<div class="block container background" style="min-height: 450px">
	<div class="col-sm-1"></div>
	<div class="col-md-12">
		<h2>DESCRIPTIF DU PROJET</h2>
	</div>
	<div class="col-sm-1"></div>
	<div class="col-md-12 d-flex">			
		<div class="col-sm-1"></div>
		<div class="col-sm-10 descriptive_project">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto ea inventore ratione nulla quis provident voluptatem dolorum, laudantium velit, facere a quod nisi blanditiis maiores rem, magnam quos illum optio.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.Quaerat molestias dolorem, perspiciatis repellat adipisci pariatur repellendus, velit at possimus voluptatem?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit et sapiente vitae provident labore, minus at saepe recusandae! Quaerat molestias dolorem, perspiciatis repellat adipisci pariatur repellendus, velit at possimus voluptatem?	Iusto ea inventore ratione nulla quis provident voluptatem dolorum, laudantium velit, facere a quod nisi blanditiis maiores rem, magnam quos illum optio.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
		</div>	
		<div class="col-sm-1"></div>
	</div>	
</div>


<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>	
	<!-- Large modal -->
			<div class="col-sm-4 text-center">
				<button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target=".bd-example1-modal-lg">PROMO</button>
				<div class="col-sm-4"></div>

				<div class="modal fade bd-example1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title">Promo</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit et sapiente vitae provident labore, minus at saepe recusandae! Quaerat molestias dolorem, perspiciatis repellat adipisci pariatur repellendus, velit at possimus voluptatem?	Iusto ea inventore ratione nulla quis provident voluptatem dolorum, laudantium velit, facere a quod nisi blanditiis maiores rem, magnam quos illum optio.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4"></div>	
	<!-- Large modal -->
			<div class="col-sm-4 text-center">
				<button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target=".bd-example2-modal-lg">SUJET</button>
					<div class="col-sm-4"></div>

					<div class="modal fade bd-example2-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title">Sujet</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit et sapiente vitae provident labore, minus at saepe recusandae! Quaerat molestias dolorem, perspiciatis repellat adipisci pariatur repellendus, velit at possimus voluptatem?	Iusto ea inventore ratione nulla quis provident voluptatem dolorum, laudantium velit, facere a quod nisi blanditiis maiores rem, magnam quos illum optio.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>		
		</div>



		<div class="row">
			<div class="col-sm-4"></div>	
	<!-- Large modal -->
			<div class="col-sm-4 text-center">
				<button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target=".bd-example3-modal-lg">TYPE DE PROJET</button>
					<div class="col-sm-4"></div>

					<div class="modal fade bd-example3-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title">Type de projet</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit et sapiente vitae provident labore, minus at saepe recusandae! Quaerat molestias dolorem, perspiciatis repellat adipisci pariatur repellendus, velit at possimus voluptatem?	Iusto ea inventore ratione nulla quis provident voluptatem dolorum, laudantium velit, facere a quod nisi blanditiis maiores rem, magnam quos illum optio.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>		
		</div>
	</div>	
</section>


@endsection