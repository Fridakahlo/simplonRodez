<!--=======================================*/
/*       view list_project.blade.php       */
/*=========================================*/-->
@extends('layouts.default')


@section('content')

<div class="wrapper">
  <div class="container-fluid">
    <div class="row col-md-12">
      <div class="col-md-6">
        <h1 class="title_projects">PROJETS</h1>
      </div>
    </div>
   </div> 
</div>  

<div class="wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <p class="presentation_projects">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto ea inventore ratione nulla quis provident voluptatem dolorum, laudantium velit, facere a quod nisi blanditiis maiores rem, magnam quos illum optio.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
      </div>
      </div>
      <div class="col-sm-1"></div> 
</div>  
  

<section class="project1">
    <div class="container-fluid list" >
        	<div class="row justify-content-center" style="min-height: 300px">
              <div class="col-md-5 text-center">
                  <img class="img-list align-middle" src="img/html5.png" alt="image">        
              </div> 
              <div class="col-md-5">
              	<h2 class="text-center titleList">Blabla</h2>
                  <ul class="list">
                    <li>Apprenant: </li><p class="text">Quentin Chamallow</p>
                    <li>Promo: </li><p class="text">2020-2021</a>
                    <li>Catégorie: </li><p class="text">Sed elementum laoreet fringilla. Fusce mollis lectus et ex auctor, vel luctus ipsum pretium.</p>
                  </ul> 
                  <a href="#" class="link_project">Voir le projet</a>  
              </div>
        </div>
    </div>    
</section>
<section class="project2">
    <div class="container-fluid list">
    	<div class="row justify-content-center" style="min-height: 300px">
          <div class="col-md-5 text-center">
              <img class="img-list project2" src="img/html5.png"  alt="image">        
          </div> 
          <div class="col-md-5">
          	<h2 class="text-center titleList">Title</h2>
            <ul class="list">
              <li>Apprenant: </li><p class="text">Lala Faiskoi</p>
              <li>Promo: </li><p class="text">2020-2021</a>
              <li>Catégorie: </li><p class="text">Sed elementum laoreet fringilla. Fusce mollis lectus et ex auctor, vel luctus ipsum pretium.</p>
            </ul> 
            <a href="#" class="link_project">Voir le projet</a>  
          </div>
      </div>
    </div>    
</section>
<section class="project3">
  <div class="container-fluid list">
  	<div class="row justify-content-center" style="min-height: 300px">
      <div class="col-md-5 text-center">
          <img class="img-list project3" src="img/html5.png"  alt="image">        
      </div> 
      <div class="col-md-5">
      	<h2 class="text-center titleList">Title</h2>
        <ul class="list">
          <li>Apprenant: </li><p class="text">Lulu Pourki</p>
          <li>Promo: </li><p class="text">2020-2021</a>
          <li>Catégorie: </li><p class="text">Sed elementum laoreet fringilla. Fusce mollis lectus et ex auctor, vel luctus ipsum pretium.</p>
        </ul> 
        <a href="#" class="link_project">Voir le projet</a>  
      </div>
    </div>
  </div>    
</section>
@stop