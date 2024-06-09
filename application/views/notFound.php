<!DOCTYPE html>
<html>
<head>
    <title>404 Error - Garage Genius</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
</head>

<link href="assets/dist/img/symbol.png" rel="icon" style="radius: 50%;">

<style>
	body{
  height: 100vh;
  font-family: "Poppins", sans-serif;
  background: black !important;
  color: white !important;
  font-weight: 900 !important;
}

.height-vh{
  height: 100vh;
}

.main-heading{
  font-size: 220px;
  font-weight: 700;
}

.fa{
  font-size: 20px !important;
  padding: 5px;
}

.btn{
  color: white !important;
  font-weight: 600 !important;
  border: 1px solid white !important;
  background: transparent !important;
  border-radius: 0px !important;
}

.home {
      color: white;
  }

  .btn:hover {
      color: black !important;
      background: #fff !important;
  }

  .btn:hover .home {
      color: black;
  }
</style>
<body>
	<div class="container-fluid">
	   <div class="row d-flex justify-content-center align-items-center height-vh">
		  <div class="col-lg-6 col-12">
			 <div class="col-md-12">
				<img src="assets/image/minion.png" width="100%" style="margin-left:50px;">
			 </div>
		  </div>
		  <div class="col-lg-6 col-12">
			 <div class="col-12 d-flex flex-column justify-content-center align-items-center">
				<h1 class="main-heading">404</h1>
				<h2>Oop's sorry we can't find that page!</h2>
				<div class="text-center mt-4 mb-5">
				<a href="<?=site_url('portofolio')?>" button class="btn btn-success px-3 mr-2"><i class="fa fa-home"></i> Home</button></a>
				  </div>
			 </div>
		  </div>
	   </div>
	</div>
 </body>
 
</html>

