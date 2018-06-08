<!--=======================================*/
/*       view list_project.blade.php       */
/*=========================================*/-->
@extends('layouts.default')


@section('content')
<section>
  <h1 class="text-center title_projects">Projets</h1>
</section>
<section class="project1 justify-content-center">
    <div class="container list" >
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
                  <a href="./descriptiveProject" class="link_project">Voir le projet</a>  
              </div>
        </div>
    </div>    
</section>
<section class="project2 justify-content-center">
    <div class="container list">
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
            <a href="./descriptiveProject" class="link_project">Voir le projet</a>  
          </div>
      </div>
    </div>    
</section>
<section class="project3 justify-content-center">
  <div class="container list">
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
        <a href="./descriptiveProject" class="link_project">Voir le projet</a>  
      </div>
    </div>
  </div>    
</section>
@stop