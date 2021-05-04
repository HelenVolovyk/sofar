<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	 <title>Sofar</title>


	 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@700&family=Permanent+Marker&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@700&family=Permanent+Marker&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script
	 src="https://code.jquery.com/jquery-3.5.1.min.js"
	 integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
	 crossorigin="anonymous"></script>
	 <script type="text/javascript" src="js/jQuery.js"></script>
	 
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
	 <link rel="stylesheet" href="css/animate.css">
	 <link rel="stylesheet" href="css/style.css">
	 <script src="js/animate-css.js"></script>
	 <script src="js/wow.min.js"></script>
	


</head>


<body>
 
        <header>
			
            <div class="container-fluid">
		
                <div class="first row centered">
						<div class="med ">
							<span class="">медицинское и косметологическое оборудование</span>
							</div>
                    <nav class="navbar  justify-content-between">

                        <div class="brend">
                            <a class="navbar-brand" href="#">
                                <img src="./img/лого2.png" class="navbar-brand" alt="" >
                            </a>
                       
								</div>
								<div class="n-text">
									<!-- ремонт  медицинского <br> оборудования -->
									<!-- <a class="rec" href="">ремонт</a>
									<a class="rec" href="">продажа</a>
									<a class="rec" href="">обучение</a>
									<a class="rec" href="">т.123-22-33-33</a> -->
								 
							  </div>
	
								<div class="end">
								
								<div class="search">
								
									 <input type="checkbox" id="check">
										<div class="box">
											<input type="text"  placeholder="поиск">
											<label for="check">	<i class="fa fa-search" aria-hidden="true"></i></label>
										 
									 </div>
									
								</div>

								<div class="lang">
									<div class="lang-a">
									   RU
								   </div>
								</div>
                        <div class="burger">
                            <div class="header__burger">
                                <span></span>
                                <span></span>
                                <span></span>
									 </div>
								</div>
							</div>
						
						  </nav>
						 
                </div>
            </div>
        </header>



        <div class="menu__body ">
		
            <ul class="menu__list">
             
                <li><a class="menu__link" href="#">ремонт оборудования</a></li>
           <ul class="menu__list-a">
				  <li><a class="menu__link-a" href="">медицинское</li>
				  <li><a class="menu__link-a" href="">косметологическое</a></li>
			  </ul>
             
                <li><a class="menu__link" href="#">продажа оборудования</a></li>
           <ul class="menu__list-a">
				  <li><a class="menu__link-a" href="">медицинское</li>
				  <li><a class="menu__link-a" href="">косметологическое</a></li>
			  </ul>
					 
					 <li><a class="menu__link" href="#">о нас</a></li>
					 <li><a class="menu__link" href="#">контакты</a></li>
					
					 <li><a class="menu__link" href="">
						<div class="lang__menu">
							<div class="lang-a">
								ru
							</div>
						</div>
					</a>
					 </li>
					 <li>
						
						<div class="search__menu">
								
							<!-- <form class="d-flex">
								<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
								<button class="btn btn-primary" type="submit">Search</button>
							 </form> -->

							 <input type="checkbox" id="check2">
							 <div class="box2">
								 <input type="text"  placeholder="поиск">
								 <label for="check2"><i class="fa fa-search menu" aria-hidden="true"></i></label>
							  
						  </div>
					  </div>
					 </li>
					 <li><a class="menu__link" href="#">
						<div class="menu__line"></div>
						<div class="phone d-flex">
							
												
					<a href="phone"><i class="fa fa-phone" aria-hidden="true"></i></a>	
				
					<a href=""><img class="viber" src="img/brand_viber_icon_157761.svg"  alt=""></a>
				
					<i class="fa fa-telegram " aria-hidden="true"></i>
					
				
				</div>
			</a></li>
            </ul>
		  </div>
		  
		  @yield('content')

</body>
</html>