<?php
require_once('controladores/funciones.php');
require_once('helpers.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Codigo de boostrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Codigo de boostrap -->
	<!-- Codigo de fuentes -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	<!-- Codigo de fuentes -->
	<!-- Codigo de fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Codigo de fontawesome -->

     <!-- Codigo de css -->
	 <link rel="stylesheet" href="css/products.css">
	 <!-- Codigo de css -->
    <title>Productos de la tienda</title>
</head>
<body>
     <!-- Menu de navegacion -->
     <?php
		require_once('navbar.php');
	    ?>
    <!-- Menu de navegacion -->
<br><br><br>
  <div class="container">

<br>  <h2 class="text-center">Nuestros productos <a href="http://bootstrap-ecommerce.com/"></a></h2>
<hr>




<div class="row">
<div class="col-md-4">
	<figure class="card card-product">
		<div class="img-wrap"><img src="img/producto1.jpg"></div>
		<figcaption class="info-wrap">
				<h4 class="title"> <a href="producto1.html" class="nav-item nav-link">Modelo Niza</a></h4>
				<p class="desc"></p>
				<div class="rating-wrap">
					<div class="label-rating">132 reviews</div>
					<div class="label-rating">154 orders </div>
				</div> <!-- rating-wrap.// -->
		</figcaption>
		<div class="bottom-wrap">
			<a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
			<div class="price-wrap h5">
				<span class="price-new">$1280</span> <del class="price-old">$1980</del>
			</div> <!-- price-wrap.// -->
		</div> <!-- bottom-wrap.// -->
	</figure>
</div> <!-- col // -->
<div class="col-md-4">
	<figure class="card card-product">
		<div class="img-wrap"><img src="img/producto2.jpg"> </div>
		<figcaption class="info-wrap">
				<h4 class="title"><a href="producto2.html" class="nav-item nav-link">Modelo Punta del Este</a></h4>
				<p class="desc"></p>
				<div class="rating-wrap">
					<div class="label-rating">132 reviews</div>
					<div class="label-rating">154 orders </div>
				</div> <!-- rating-wrap.// -->
		</figcaption>
		<div class="bottom-wrap">
				<a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
				<div class="price-wrap h5">
					<span class="price-new">$580</span> <del class="price-old">$1180</del>
				</div> <!-- price-wrap.// -->
		</div> <!-- bottom-wrap.// -->
	</figure>
</div> <!-- col // -->
<div class="col-md-4">
	<figure class="card card-product">
		<div class="img-wrap"><img src="img/producto3o.jpg"></div>
		<figcaption class="info-wrap">
				<h4 class="title"><a href="producto3.html" class="nav-item nav-link">Modelo Bali</a></h4>
				<p class="desc">Some small description goes here</p>
				<div class="rating-wrap">
					<div class="label-rating">132 reviews</div>
					<div class="label-rating">154 orders </div>
				</div> <!-- rating-wrap.// -->
		</figcaption>
		<div class="bottom-wrap">
				<a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
				<div class="price-wrap h5">
					<span class="price-new">$720</span> <del class="price-old">$1380</del>
				</div> <!-- price-wrap.// -->
		</div> <!-- bottom-wrap.// -->
	</figure>
</div> <!-- col // -->
<div class="col-md-4">
	<figure class="card card-product">
		<div class="img-wrap"><img src="img/producto4o.jpg"></div>
		<figcaption class="info-wrap">
				<h4 class="title"><a href="producto4.html" class="nav-item nav-link">Modelo Texas</a></h4>
				<p class="desc">Some small description goes here</p>
				<div class="rating-wrap">
					<div class="label-rating">132 reviews</div>
					<div class="label-rating">154 orders </div>
				</div> <!-- rating-wrap.// -->
		</figcaption>
		<div class="bottom-wrap">
			<a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
			<div class="price-wrap h5">
				<span class="price-new">$420</span> <del class="price-old">$1980</del>
			</div> <!-- price-wrap.// -->
		</div> <!-- bottom-wrap.// -->
	</figure>
</div> <!-- col // -->
<div class="col-md-4">
	<figure class="card card-product">
		<div class="img-wrap"><img src="img/producto5.jpg"> </div>
		<figcaption class="info-wrap">
				<h4 class="title"><a href="producto5.html" class="nav-item nav-link">Modelo New York</a></h4>
				<p class="desc"></p>
				<div class="rating-wrap">
					<div class="label-rating">132 reviews</div>
					<div class="label-rating">154 orders </div>
				</div> <!-- rating-wrap.// -->
		</figcaption>
		<div class="bottom-wrap">
				<a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
				<div class="price-wrap h5">
					<span class="price-new">$1280</span> <del class="price-old">$1980</del>
				</div> <!-- price-wrap.// -->
		</div> <!-- bottom-wrap.// -->
	</figure>
</div> <!-- col // -->
<div class="col-md-4">
	<figure class="card card-product">
		<div class="img-wrap"><img src="img/producto6.jpg"></div>
		<figcaption class="info-wrap">
				<h4 class="title"><a href="producto6.html" class="nav-item nav-link">Modelo Madrid</a></h4>
				<p class="desc"></p>
				<div class="rating-wrap">
					<div class="label-rating">132 reviews</div>
					<div class="label-rating">154 orders </div>
				</div> <!-- rating-wrap.// -->
		</figcaption>
		<div class="bottom-wrap">
				<a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
				<div class="price-wrap h5">
					<span class="price-new">$1280</span> <del class="price-old">$1980</del>
				</div> <!-- price-wrap.// -->
		</div> <!-- bottom-wrap.// -->
	</figure>
</div> <!-- col // -->
<div class="col-md-4">
	<figure class="card card-product">
		<div class="img-wrap"><img src="img/producto7.jpg"></div>
		<figcaption class="info-wrap">
				<h4 class="title"><a href="producto7.html" class="nav-item nav-link">Modelo Hombre1</a></h4>
				<p class="desc">Some small description goes here</p>
				<div class="rating-wrap">
					<div class="label-rating">132 reviews</div>
					<div class="label-rating">154 orders </div>
				</div> <!-- rating-wrap.// -->
		</figcaption>
		<div class="bottom-wrap">
			<a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
			<div class="price-wrap h5">
				<span class="price-new">$1280</span> <del class="price-old">$1980</del>
			</div> <!-- price-wrap.// -->
		</div> <!-- bottom-wrap.// -->
	</figure>
</div> <!-- col // -->
<div class="col-md-4">
	<figure class="card card-product">
		<div class="img-wrap"><img src="img/producto8.jpg"> </div>
		<figcaption class="info-wrap">
				<h4 class="title"><a href="producto8.html" class="nav-item nav-link">Modelo Hombre 2</a></h4>
				<p class="desc">Some small description goes here</p>
				<div class="rating-wrap">
					<div class="label-rating">132 reviews</div>
					<div class="label-rating">154 orders </div>
				</div> <!-- rating-wrap.// -->
		</figcaption>
		<div class="bottom-wrap">
				<a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
				<div class="price-wrap h5">
					<span class="price-new">$1280</span> <del class="price-old">$1980</del>
				</div> <!-- price-wrap.// -->
		</div> <!-- bottom-wrap.// -->
	</figure>
</div> <!-- col // -->
<div class="col-md-4">
	<figure class="card card-product">
		<div class="img-wrap"><img src="img/producto9.jpeg"></div>
		<figcaption class="info-wrap">
				<h4 class="title"><a href="producto9.html" class="nav-item nav-link">Modelo Hombre 3</a></h4>
				<p class="desc">Some small description goes here</p>
				<div class="rating-wrap">
					<div class="label-rating">132 reviews</div>
					<div class="label-rating">154 orders </div>
				</div> <!-- rating-wrap.// -->
		</figcaption>
		<div class="bottom-wrap">
				<a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
				<div class="price-wrap h5">
					<span class="price-new">$1280</span> <del class="price-old">$1980</del>
				</div> <!-- price-wrap.// -->
		</div> <!-- bottom-wrap.// -->
	</figure>
</div> <!-- col // -->
</div> <!-- row.// -->



</div>
<!--container.//-->

<br><br><br>
<!-- Footer -->
<?php
 require_once('footer.php');
?>
<!-- Footer -->


</body>
</html>
