<style type="text/css">

	.simplonheader {
		background-image: url(/img/header_rodez_panorama_flou.jpg);
		background-size: cover;
	}

	.simplonheader img {
		margin-top: 2rem;
	}

	/*      STICKY HEADER POSITION    */

	.sticky.is-sticky {
	    position: fixed;
	    left: 0;
	    right: 0;
	    top: 0;
	    z-index: 1000;
	    width: 100%;
	}

	/*     CUSTOMIZED NAVIGATION ELEMENTS         */
	
	nav {
	    height: 50px;
	    min-height: 70px;
	    background-color: #CE0033;
	    /* ##### warm simplon-red ##### */
	    font-weight: bold;
	    z-index: 1000;
	    width: 100%;
	    color: #FFFFFF;
	}

	.bg-nav-red {
	    background-color: #CE0033;
	    /* ##### warm simplon-red ##### */
	}

	nav button {
		border-style: solid;
		border-color: #FFFFFF;
		border-width: 2;
		color: #FFFFFF;
	}

	.nav-item {
	    background-color: #CE0033;
	    /* ##### warm simplon-red ##### */
	    color: #FFFFFF;
	}

	.nav-elem .container-fluid {
	    margin: 0;
	}

	.btn_logo {
		background-color: #FFFFFF;
		padding: 3px;
		border-radius: 5px;
		height: 60px;
		width: 60px;
		margin-left: 2rem;
		margin-right: 2rem;
	}

	.img_logo {
		height: 54px;
		width: 54px;
	}

	.btn_menu {
	    background-color: #CE0033; 
	    color: #FFFFFF; 
	    border: 4px solid #FFFFFF;
		border-radius: 5px;
		height: 60px;
		width: 60px;
		padding: 3px;
		margin-left: 2rem;
		margin-right: 2rem;
	}


</style>


<!--********************-->		
<!--   start HEADER     -->
<!--********************-->

<!-- header background is : <img class="headerlogo"  src="../../../storage/app/public/img/header_rodez_panorama_flou.jpg>      -->

<div class="row simplonheader text-center pt-4 ">
	<div class="col-md-12 col-xs-12">
		<!-- Image stored in folder storage/app/public/img -->
		<img src="img/header_logo_simplon.png" width="50%">
	</div>
	<div class="col-md-12 col-xs-12 pt-4 my-4">
		<!-- Image stored in folder storage/app/public/img -->
		<img src="img/header_logo_ern_and_ra.png" width="50%">
	</div>	
</div>		

<!--*********************-->		
<!--      end HEADER     -->
<!--*********************-->
<!-- 
<div class="row">
   <div class="d-none d-sm-block col-sm-6">
       HIDE ME ON SMALL SCREENS.
       Show me on larger screens.
   </div>
   <div class="col-sm-6 col-xs-12">
       SHOW ME ON SMALL SCREENS.
       Show me on larger screens.
   </div>
</div> -->
<!-- .navbar -->
<nav class="navbar navbar-full navbar-dark bg-nav-red" data-toggle="sticky-onscroll">
	<a class="navbar-brand btn_logo" href="/home_sr">
		<img class="img_logo" src="/img/logo.png" />
	</a>
	<button class="navbar-toggler hidden-lg-up btn_menu" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">
		&#9776;
	</button>
	<div class="collapse navbar-toggleable-sm navbar-collapse justify-content-end " id="mainNavbarCollapse">
		<ul class="nav navbar-nav pull-lg-right text-white">
            <li class="nav-item">
                <a class="nav-link" href="/home_sr">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/simplonFrance">Simplon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Formations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Apprenants</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/list_project">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
		</ul>
	</div>
</nav>


<!--**************************-->
<!--   END NAVIGATIONBAR      -->
<!--**************************-->		




