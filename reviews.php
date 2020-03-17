<!DOCTYPE html>
<html>
<head>
	<title>category</title>
		  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min">
  <link rel="stylesheet" type="text/css" href="style.css">
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
<!-- drop down -->
<section>
<form action="connection.php" method="post">
  <div class="form-group">
    <label for="name_box">Full Name:</label>
    <input name="name_box" type="text"  class="form-control" placeholder="Enter your name" id="name_box"  >
  </div>
  <div class="form-group">
    <label  for="Email_box">Email:</label>
    <input type="email" class="form-control" id="Email_box" placeholder="Enter email" name="Email_box">
  </div>
  <!-- category selection before review -->
 <select name="cate" class="custom-select custom-select-lg mb-3" >
      <option  selected>select category</option>
      <option  value="Premium">premium</option>
      <option  value="Budget">Budget</option>
      <option  value="International">International</option>
      <option  value="Regional">Regional</option>
    </select>
  </form>
</div>

<!-- select airline system -->
 <select name="airlines" class="custom-select custom-select-lg mb-3">
      <option selected>select airlines</option>
      <option value="Qatar">Qatar Airlines</option>
      <option value="British">British Airlines</option>
      <option value="Philiphines">Philiphines Airlines</option>
      <option value="American">American Airlines</option>
    </select>
  </form>
</div>

<!-- review points -->
<div class="container mt-3">
  <h2>Adjust range from 0-5 to REVIEW  AIRLINE System</h2>
  <form action="connection.php" method="post">
    <label for="customRange">Quality service</label>
    <input type="range" class="custom-range" id="customRange" name="points1">
     <label for="customRange">arrival timing service</label>
    <input type="range" class="custom-range" id="customRange" name="points2">
    <label for="customRange">luxury seats</label>
    <input type="range" class="custom-range" id="customRange" name="points3">
    <label for="customRange">ambience</label>
    <input type="range" class="custom-range" id="customRange" name="points4">
    <label for="customRange">cooperative stuff</label>
    <input type="range" class="custom-range" id="customRange" name="points5">
    <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment" name="txtarea"></textarea>
    <p><button type="submit" class="btn btn-primary" name="submit" >Review</button></p>
  </form>
</div>
</form>
</section>
</body>
</php>