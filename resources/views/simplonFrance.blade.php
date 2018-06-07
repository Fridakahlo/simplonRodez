@extends('layouts.default')
@section('content')
        <!-- Block 1 -->
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">   
            <div class="block block4">
                <div class="col-md-12"> 
                    <div class="col-md-6">
                        <h1>Simplon France</h1>
                    </div>          
                    <div class="d-flex">
                        <div class="img col-md-6">
                            <img src="img/logoSimplon.png" class="imgSimplon" alt="Responsive image">
                        </div>
                        <div class="col-md-6">
                            <h2>Présentation</h2>
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
        <!-- End Block 1 -->
        <!-- Rodez Carousel -->
<div class="col-md-12">                  
    <div id="carouselDescription" class="carousel slide" data-ride="carousel">  
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="imgCarousel" src="img/rodez_vue.jpg" alt="rodez"> 
            </div>
            <div class="carousel-item">
                <img class="imgCarousel" src="img/layoule.jpg" alt="rodez">
            </div>
            <div class="carousel-item">
                <img class="imgCarousel" src="img/vue_rodez.jpg" alt="rodez">
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
        <!-- End Rodez Carousel -->
        <!-- Block 2 -->
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">       
            <div class="block block5">
                <div class="col-md-12">
                    <div class="d-flex">
                        <div class="col-md-6">&nbsp;</div>
                        <div class="col-md-6">
                            <h1>La Méthode Active</h1>
                        </div>  
                    </div>  
                    <div class="d-flex">
                        <div class="description col-md-6">
                            <h2>C'est quoi ?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto ea inventore ratione nulla quis provident voluptatem dolorum, laudantium velit, facere a quod nisi blanditiis maiores rem, magnam quos illum optio.
                                <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit et sapiente vitae provident labore, minus at saepe recusandae! Quaerat molestias dolorem, perspiciatis repellat adipisci pariatur repellendus, velit at possimus voluptatem?    
                            </p>
                        </div>  
                        <div class="col-md-6">
                            <img src="img/diplome.jpg" class="imgSimplon" alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>      
</div>          
        <!-- End Block 2 -->
        <!-- Block 3 -->
<div class="block block6"> 
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">   
                <div class="col-md-12">
                    <h1>Partenaires Simplon Rodez</h1>
                </div>          
                <div class="col-md-12">
                    <h2>Qui sont ils ?</h2>
                </div>
                <div class="allLogoPartners">
                    <div class="col-md-12">
                        <div class="d-flex">
                            <img class="rmiLogo" src="img/rmi.png" id="line" alt="R.M Ingiénérie">
                            <img class="imgPartners" src="img/footer_logo_rodez_agglomeration_222x100.png" alt="Rodez Agglomération">
                            <img class="imgPartners" src="img/image_gallery.png" alt="C.C.I Aveyron">
                            <img class="imgPartners" src="img/téléchargement.png" alt="M.J.C">
                            <img class="imgPartners" src="img/logo-fic.png" alt="Fabrique d'initiatives citoyennes">
                            <img class="imgPartners" src="img/illam_logo.png" alt="Illam Informatique">
                        </div>
                    </div>    
                </div>  
            </div>  
        </div>  
    </div>
</div>  
        <!-- End Block 3 -->
@endsection


