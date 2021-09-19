<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Welcome
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<?php 
  session_start();
  include_once "php/config.php";
?>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        	<li class="nav-item">
          		<a class="nav-link active" aria-current="page" href="#">Home</a>
        	</li>
        	<li class="nav-item">
          		<a class="nav-link" href="#">Contact Us</a>
        	</li>
        	<li class="nav-item dropdown">
          		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            	Login/SignUp
          		</a>
          	<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            	<li><a class="dropdown-item" href="login.php">Login</a></li>
            	<li><hr class="dropdown-divider"></li>
            	<li><a class="dropdown-item" href="register.php">SignUp</a></li>
          	</ul>
        	</li>
      	</ul>
      	<form class="d-flex">
        	<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        	<button class="btn btn-outline-success" type="submit">Search</button>
      	</form>
    	</div>
  	</div>
	</nav>

	<div class="p-3 mb-2 bg-primary text-white bg-opacity-75" style="height: 70px;">
	<div class="fs-3">Featured Items</div>
	</div>
	<div class="bg-success p-2" style="--bs-bg-opacity: .35;">
	<div class="container">
		<div class="card" style="width: 18rem;">
  		<img src="https://source.unsplash.com/250x200/?books" class="card-img-top" alt="...">
  		<div class="card-body">
    	<h5 class="card-title">Book on Sale</h5>
    	<p class="card-text">Second hand like new book on sale</p>
    	<a href="#" class="btn btn-primary">Buy Now</a>
    	<a href="#" class="btn btn-warning">More info</a>
  		</div>
	</div>
	
	<div class="card" style="width: 18rem;">
  		<img src="https://source.unsplash.com/250x200/?textbook" class="card-img-top" alt="...">
  		<div class="card-body">
    	<h5 class="card-title">Book<span class="badge bg-secondary">New</span></h5>
    	<p class="card-text">Second hand like new</p>
    	<a href="#" class="btn btn-primary">Buy Now</a>
    	<a href="#" class="btn btn-warning">More info</a>
  		</div>
	</div>
	
	<div class="card" style="width: 18rem;">
  		<img src="https://source.unsplash.com/250x200/?book" class="card-img-top" alt="...">
  		<div class="card-body">
    	<h5 class="card-title">Book</h5>
    	<p class="card-text">Second hand like new</p>
    	<a href="#" class="btn btn-primary">Buy Now</a>
    	<a href="#" class="btn btn-warning">More info</a>
  		</div>
	</div>
	
	<div class="card" style="width: 18rem;">
  		<img src="https://source.unsplash.com/250x200/?copy" class="card-img-top" alt="...">
  		<div class="card-body">
    	<h5 class="card-title">Book <span class="badge bg-secondary">New</span></h5>
    	<p class="card-text">Second hand like new.</p>
    	<a href="#" class="btn btn-primary">Buy Now</a>
    	<a href="#" class="btn btn-warning">More info</a>
  		</div>
	</div>
	</div>
	</div>

<div class="p-3 mb-2 bg-warning text-black bg-opacity-75" style="height: 70px;">
	<div class="fs-3">More Items</div>
	</div>
	<div class="bg-success p-2" style="--bs-bg-opacity: .35;">
	<div class="container" style="display: flex;">
				<?php 
    $sql = mysqli_query($conn, "SELECT * FROM products");
    if (mysqli_num_rows($sql)> 0){
    	while(mysqli_fetch_assoc($sql)){
    		$row = mysqli_fetch_assoc($sql);
    	  	?>
    	 <div class="card" style="width: 18rem;">
  		<img src="php/images/<?php echo $row['img']; ?>" class="card-img-top" alt="">
  		<div class="card-body">
    	<h5 class="card-title"><?php echo $row['product_name']?></h5>
    	<p class="card-text"><?php echo $row['details']?></p>
    	<a href="#" class="btn btn-primary">Buy Now</a>
    	<a href="moreinfo.php" class="btn btn-warning">More info</a>
  		</div>
  	</div>
  		<?php
  	}}
  	?>
  
	</div>
	</div>
		<nav aria-label="Page navigation example">
  <ul class="pagination" style="width:18rem;">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
	</nav>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>