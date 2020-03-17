<!DOCTYPE html>
<html>
<head>
	<title>World Flights</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">World Flights</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="category.php">Category</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="airlines.php">Airlines</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="reviews.php">Reviews</a>
      </li>
   
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
                                      <!-- main image  -->
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
<img src="images/d1.jpeg" alt="Los Angeles" width="100%" height="500"style="z-index:-5;position: relative;">
      <div class="carousel-caption">
      	<div class="container-fluid">
	<div class="row">
			<div class="col-lg-6 col-md-6 col-12" id="cate_search">
								<select class="category">
								<option value=" ">Select your categories</option>
							  	<option value="Premium">Premium</option>
							  	<option value="Budget">Budget</option>
							  	<option value="International">International</option>
							  	<option value="regional">regional</option>
							</select>
					<button class="col-lg-6 col-md-6 col-12" id="btn_cate"><a href="category.html">search</a></button>
			</div>
			
			</div>
	</div> 	
        <h3>Srilanka</h3>
        <p>We had such a great time in SL!</p>
      </div>   
    </div>
    <div class="carousel-item">
   <img src="images/2.jpg" alt="Chicago" width="100%" height="500" style="z-index:-5;position: relative;">
      <div class="carousel-caption">
      	<div class="container-fluid">
	<div class="row">
			<div class="col-lg-6 col-md-6 col-12" id="cate_search">
								<select class="category">
								<option value=" ">Select your categories</option>
							  	<option value="Premium">Premium</option>
							  	<option value="Budget">Budget</option>
							  	<option value="International">International</option>
							  	<option value="regional">regional</option>
							</select>
					<button class="col-lg-6 col-md-6 col-12" id="btn_cate"><a href="category.html">search</a></button>	
			</div>
			
			</div>
	</div> 	
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
  <img src="images/1.jpg" alt="New York" width="100%" height="500" style="z-index:-5;position:relative;">
      <div class="carousel-caption">
      	<div class="container-fluid">
	<div class="row">
			<div class="col-lg-6 col-md-6 col-12" id="cate_search">
								<select class="category">
								<option value=" ">Select your categories</option>
							  	<option value="Premium">Premium</option>
							  	<option value="Budget">Budget</option>
							  	<option value="International">International</option>
							  	<option value="regional">regional</option>
							</select>
					<button class="col-lg-6 col-md-6 col-12" id="btn_cate"><a href="category.html">search</a></button>
			</div>
			
			</div>
	</div> 	
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- section for data -->
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Introduction</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
			<img src="images/1.jpg" class="img-fluid" class="aboutimg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">world Flights</h2>
			<p class="py-3">Fly with Qatar Airways and experience the world like never before with our expanding global network. Embark on a new journey with us and discover more vibrant cities, breathtaking vistas, green landscapes and rich cultures.</p>
			<a href="airlines.html" class="btn btn-outline-success"> check more</a>
			</div>
	</div>

</section>
<section class="my-5" >
	<div class="py-5" >
		<h2 class="text-center">Our services</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
						<div class="card">
							  <img class="card-img-top" src="images/1.jpg" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">Qatar airlines</h4>
							    <p class="card-text">Some example text.</p>
							    <a href="airline.php?airline_id=qatar" class="btn btn-primary">See Profile</a>
  						     </div>
                        </div>
			</div>

						<div class="col-lg-4 col-md-4 col-12">
						<div class="card">
							  <img class="card-img-top" src="images/1.jpg" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">PIA airlines</h4>
							    <p class="card-text">Some example text.</p>
							    <a href="#" class="btn btn-primary">See Profile</a>
  						</div>
</div>
			</div>
						<div class="col-lg-4 col-md-4 col-12">
						<div class="card">
							  <img class="card-img-top" src="images/1.jpg" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">British Airways</h4>
							    <p class="card-text">Some example text.</p>
							    <a href="#" class="btn btn-primary">See Profile</a>
  						</div>
</div>
			</div>
		</div>

	</div>



</section>


                     <!-- Destinations -->
    <section class="my-5" >
	<div class="py-5" >
		<h2 class="text-center">Destinations Around the world</h2>
	</div> 
		<div class="container-fluid">
		<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
							
								  <img src="images/d1.jpeg" class="img-fluid pb-3">
								 
	                        </div>
	                        				<div class="col-lg-4 col-md-4 col-12">
							
								  <img src="images/d1.jpeg" class="img-fluid pb-3">
								 
	                        </div>
	                        				<div class="col-lg-4 col-md-4 col-12">
							
								  <img src="images/d1.jpeg" class="img-fluid pb-3">
								 
	                        </div>
	                        				<div class="col-lg-4 col-md-4 col-12">
							
								  <img src="images/d4.jpeg" class="img-fluid pb-3">
								 
	                        </div>
	                        				<div class="col-lg-4 col-md-4 col-12">
							
								  <img  src="images/d4.jpeg" class="siz img-fluid pb-3 ">
								 
	                        </div>
	                        				<div class="col-lg-4 col-md-4 col-12">
							
								  <img src="images/d4.jpeg" class=" siz img-fluid pb-3">
								 
	                        </div>

			   </div>
		</div>

</section>

                               <!--footer  -->

<section>
	<footer class="page-footer font-small mdb-color lighten-3 pt-4 text-light bg-dark">
		 <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://Worldairlines.com/">World Flights</a>
  </div>
	</footer>
</section>
</body>
</html>