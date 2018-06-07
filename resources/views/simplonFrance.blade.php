@extends('layouts.default')

@section('content')

<div class="wrapper">
    <div class="container"> 
        <div class="block">
            <div class="col-md-12">
                <h2>Simplon France</h2>
            </div>
            <div class="col-md-12 d-flex">          
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <img src="img/logo.png" class="img-thumbnail" alt="Logo Simplon">
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-6">
                    <p>Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam. <br> Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam. 
                    </p>  
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>
</div>


<div class="wrapper">
    <section class="carousel sr">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
                <div class="carousel-inner" style="min-height: 450px">
                    <div class="carousel-item active">
                        <img src="img/rodez_vue.jpg" alt="rodez">
                    </div>
                    <div class="carousel-item">
                        <img src="img/layoule.jpg" alt="rodez">
                    </div>
                    <div class="carousel-item">
                        <img src="img/vue_rodez.jpg" alt="rodez">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
        </div>
    </section>
</div>

<div class="wrapper">
    <div class="container"> 
        <div class="block">
            <div class="col-md-12">
                <h2>La méthode active</h2>
            </div>
            <div class="col-md-12 d-flex">          
                <div class="col-sm-1"></div>
                <div class="col-sm-6">
                    <p class="prgp">Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam. <br> Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam.  
                    </p>  
                </div>
                <div class="col-sm-3">
                    <img src="img/Pédagogie_active_schéma.jpg" class="img-thumbnail" alt="méthode active">
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper">
    <div class="container">    
        <div class="block">
        	<div class="col-md-12">
        		<h2>Partenaires Simplon Rodez</h2>
        	</div>
        	<div class="col-md-12 d-flex">			
        		<div class="col-sm-1"></div>
        			<p class="psr">Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam. <br> Duis id luctus elit. Vestibulum sed molestie enim. Donec in nibh facilis, tempus mauris vitae, effectur quam.	
        			</p>	
        		<div class="col-sm-1"></div>
        	</div>
        	<div class="d-flex justify-content-sm-center" id="first">
        		<div class="p-2">
        			<img src="img/image_gallery.png" id="line" alt="CCI Aveyron">
        		</div>
        		<div class="p-2">
        			<img src="img/logo-fic.png" id="line" alt="Fabrique d'initiatives citoyennes">
        		</div>
        		<div class="p-2">
        			<img src="img/illam_logo.png" id="line" alt="illam Informatique">
        		</div>
        	</div>
        	<div class="d-flex justify-content-sm-center" id="second">
        		<div class="p-2">
        			<img src="img/téléchargement.png" id="line" alt="mjc">
        		</div>
        		<div class="p-2">
        			<img src="img/rmi.png" id="line" alt="rmi">
        		</div>
        		<div class="p-2">
        			<img src="img/footer_logo_rodez_agglomeration_222x100.png" id="line" alt="rodez aglo">
        		</div>
        	</div>
        </div>
    </div>
</div>


@endsection


