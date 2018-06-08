@extends('layouts.default')

@section('content')
<div class="wrapper">
	<div class="container-fluid" style="min-height: 450px">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6">
					<h1 class="title_project">LE NOM DU PROJET</h1>
				</div>
				<div class="col-md-6 offset-md-6">	
					<h2 class="name_apprenant">Le nom de l'apprenant</h2>
				</div>	
			</div>
		</div>
		<div class="row">	
			<div class="col-md-12 d-flex ">	
				<!-- <div class="col-sm-1"></div> -->
				<div class="col-sm-4">
					<img class="img-project" src="img/code.jpg" alt="Responsive image">
				</div>
				<div class="col-sm-4">
					<img class="img-project" src="img/css.png" alt="Responsive image">
				</div>	
				<div class="col-sm-4">
					<img class="img-project" src="img/diplome.jpg" alt="Responsive image">
				</div>	
			</div>
		</div>	
	</div>

	<div class="container-fluid background" style="min-height: 450px">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-md-12">
				<h1 class="title_project">DESCRIPTIF DU PROJET</h1>
			</div>
			<div class="col-sm-1"></div>
		</div>
		<div class="row">	
			<div class="col-md-12 d-flex">			
				<div class="col-sm-1"></div>
				<div class="col-sm-10 descriptive_project">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto ea inventore ratione nulla quis provident voluptatem dolorum, laudantium velit, facere a quod nisi blanditiis maiores rem, magnam quos illum optio.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.Quaerat molestias dolorem, perspiciatis repellat adipisci pariatur repellendus, velit at possimus voluptatem?</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit et sapiente vitae provident labore, minus at saepe recusandae! Quaerat molestias dolorem, perspiciatis repellat adipisci pariatur repellendus, velit at possimus voluptatem?	Iusto ea inventore ratione nulla quis provident voluptatem dolorum, laudantium velit, facere a quod nisi blanditiis maiores rem, magnam quos illum optio.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
				</div>	
				<div class="col-sm-1"></div>
			</div>
		</div>		
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4"></div>	
	<!-- Large modal -->
			<div class="col-sm-4 text-center">
				<button type="button" class="btn btn-secondary btn-lg btn-modal" data-toggle="modal" data-target=".bd-example1-modal-lg">PROMO</button>
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
				<button type="button" class="btn btn-secondary btn-lg btn-modal" data-toggle="modal" data-target=".bd-example2-modal-lg">SUJET</button>
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
				<button type="button" class="btn btn-secondary btn-lg btn-modal btn-example3" data-toggle="modal" data-target=".bd-example3-modal-lg">TYPE DE PROJET</button>
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
	
</div>




@endsection