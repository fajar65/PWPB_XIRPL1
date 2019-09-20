<?php 
	$nama_fajar = "Fajar Firmansyah";
	$hobi_fajar = "Main Futsal";
	$umur_fajar = 16;
	$tinggi_fajar = 164;

	$nama_abiandra = "Abiandra Nurul Hamidah";
	$hobi_abiandra = "Dengerin musik";
	$umur_abiandra = 16;
	$tinggi_abiandra = 160;

	$nama_reza = "Reza Octawiadi";
	$hobi_reza = "Badminton";
	$umur_reza = 15;
	$tinggi_reza = 170;

	$rata_rata = ($tinggi_fajar + $tinggi_abiandra + $tinggi_reza) /3;
 ?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <title>Tugas Pertama</title>

    	<style>
    		.navbar a.p-2-text-dark{
    			color: white;
    			margin: 13px;
    		}
    		.btn {
			  border-radius: 7px;
			  border: 1px solid blue;
			  background-color: white;
			  color: blue;
			  padding: 10px 18px;
			  font-size: 15px;
			  cursor: pointer;
			  
			}
			.beranda {
			  border-color: #2196F3;
			  color: blue;
			  margin-left: 30px;
			  margin-right: 30px;
			  
			}

			.beranda:hover {
			  background: blueviolet;
			  color: white;
			  transition: 0.3s all;
			  border: 1px solid white;
			}
			.display-4{
	          font-size: 40px;
	          margin-left: 90px;
	          margin-top: 80px;
	          color: blue;
	        }
			.lead{
        	  font-size: 22px;
        	  margin-left: 90px;
        	  margin-top: 30px;
        	}
        	.img-circle{
        		width: 300px;
        		height: 260px;
        		border-radius: 100px 50px 100px 50px;
        		border: 1px solid white;
        	}
    	</style>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<nav class="navbar">
     <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm fixed-top" style="color: white; background-image: linear-gradient(to right, blue, darkorchid)">
 <a href="index.php"> <h3 class="my-0 mr-md-auto font-weight-normal" style="color: white;margin-left: 80px">Kelompok 3</h3>
  <nav class="my-2 my-md-0 mr-md-3" style="margin-left: 380px;">
    <a class="p-2-text-dark" href="#">Tugas Pertama</a>
    <a class="p-2-text-dark" href="tugas_kedua.php">Tugas Kedua</a>
    <a class="p-2-text-dark" href="tugas_ketiga.php">Tugas Ketiga</a>
    <a class="p-2-text-dark" href="#">Tugas Keempat</a>
  </nav>
  	<a class="btn beranda" href="#" style="{color: blue;background: white;}:hover{color: white;}"><b>Sign In</a></b>
</nav>
</div>
	<br>
	<br>
	
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-left">
  <p><img src="gambar/gambar.jpg" style="float: right; width: 500px;height: 350px;margin-right: 80px;"><h1 class="display-4" style="font-size: 45px;">Tugas Pertama Kita</h1></p>
  <p class="lead">Disini kita akan memperkenalkan diri<br>(Introduce Myself)</p><br>
  	<hr width="18px" color="red" style="margin-left: 93px;height: 18px;border-radius: 1px 9px 1px 9px;margin-bottom: -10px;">
     <hr width="18px" color="blue" style="margin-left: 93px;height: 18px;border-radius: 1px 9px 1px 9px;margin-bottom: -10px;">
     <hr width="18px" color="lime" style="margin-left: 93px;height: 18px;border-radius: 1px 9px 1px 9px;margin-bottom: -15px;">
     <br>
  	
</div>
	<br>
			<hr width="90%" color="blue"><br>
				<center><h2 style="font-family: arial;">Kelompok 3</h2></center>
			<br>
			<br>
<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Fajar</h4>
      </div>
      <div class="card-body">
        <img src="gambar/fajar1.jpg" class="img-circle">
        	<div class="card-header"></div>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Nama Lengkap : <?php echo $nama_fajar ?></li>
          <li>Hobi : <?php echo $hobi_fajar ?></li>
          <li>Umur : <?php echo $umur_fajar ?> tahun</li>
          <li>Tinggi Badan : <?php echo $tinggi_fajar ?> cm</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Baca selengkapnya>></button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Abiandra</h4>
      </div>
      <div class="card-body">
        <img src="gambar/abiandra.jpg" class="img-circle">
        	<div class="card-header"></div>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Nama Lengkap : <?php echo $nama_abiandra ?></li>
          <li>Hobi : <?php echo $hobi_abiandra ?></li>
          <li>Umur : <?php echo $umur_abiandra ?> tahun</li>
          <li>Tinggi Badan : <?php echo $tinggi_abiandra ?> cm</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Baca selengkapnya>></button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Reza</h4>
      </div>
      <div class="card-body">
        <img src="gambar/reza.jpg" class="img-circle">
        	<div class="card-header"></div>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Nama Lengkap : <?php echo $nama_reza ?></li>
          <li>Hobi : <?php echo $hobi_reza ?></li>
          <li>Umur : <?php echo $umur_reza ?> tahun</li>
          <li>Tinggi Badan : <?php echo $tinggi_reza ?> cm</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Baca selengkapnya>></button>
      </div>
    </div>
  </div>

  	<h4><center>Rata-rata tinggi badan : <?php echo $rata_rata ?> cm</center></h4>

  <footer>
  	<br>
    <hr width="100%" color="blue">
      <div class="col-12 col-md">
       <center>
       	<img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2019 Fajar,Reza,Abiandra</small>
    		</center>
      </div>
  </footer>
  </body>
</html>