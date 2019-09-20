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
    // rumus kubus
  $volume_kubus = "sisi * sisi * sisi";
  $luas_kubus = "6 * (sisi * sisi)";
  $keliling_kubus = "12  rusuk";
  $luas_sisi_kubus = "rusuk * rusuk";

  // rumus balok
  $volume_balok = "p * l * t ";
  $luas_balok = "(2 * p * l)+(2 * p * t)+(2 * l * t)";
  $keliling_balok = "4 * (p+l+t)";

  // rumus prisma
  $volume_prisma = "1/2 * p * l * t";
  $luas_prisma = "keliling alas segitiga * t +(2 * luas alas segitiga)";

  // rumus limas
  $volume_limas = "1/3 * p * l * t";
  $luas_limas = "luas alas + luas selubung limas";

  // rumus tabung
  $volume_tabung = "π*r2*t";
  $luas_tabung = "(2*π*r*r)+(π*d*t)";

  // rumus kerucut
  $volume_kerucut = "1/3*π*r2*t";
  $luas_kerucut = "(π*r2)+(π*r*s)";

  // rumus bola
  $volume_bola = "4/3*π*r3";
  $luas_bola = "4*π*r2";

 ?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tugas Kedua</title>

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
        margin-top: 78px;
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
     <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm fixed-top" style="background-image: linear-gradient(to right, blue, darkorchid)">
  <a href="index.php"> <h3 class="my-0 mr-md-auto font-weight-normal" style="color: white;margin-left: 80px">Kelompok 3</h3>
  <nav class="my-2 my-md-0 mr-md-3" style="margin-left: 380px;">
    <a class="p-2-text-dark" href="tugas_pertama.php">Tugas Pertama</a>
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
 <p><img src="gambar/bangun_ruang.webp" style="float: right; width: 540px;height: 330px;margin-right: 60px; margin-top: 25px;"> <h1 class="display-4" style="color: blue;">Tugas Kedua Kita</h1>
  <p class="lead">Disini Kita Akan <br>Menampilkan Data Bangun Ruang<br><br>
    <hr width="18px" color="red" style="margin-left: 93px;height: 18px;border-radius: 1px 9px 1px 9px;margin-bottom: -10px;">
     <hr width="18px" color="blue" style="margin-left: 93px;height: 18px;border-radius: 1px 9px 1px 9px;margin-bottom: -10px;">
     <hr width="18px" color="lime" style="margin-left: 93px;height: 18px;border-radius: 1px 9px 1px 9px;margin-bottom: -15px;">
     <br>
  </p>

    </p>
      <br>
    <hr width="90%" color="blue">
          <br>
            <!-- bangun ruang -->
            <center><h2>Bangun Ruang</h2></center><br>
      <div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Kerucut</h4>
      </div>
      <div class="card-body">
        <img src="gambar/kerucut.gif" class="img-circle">
          <div class="card-header"></div>
        <ul class="list-unstyled mt-3 mb-4">
          <li><b>Volume Kerucut : </b><?php echo "$volume_kerucut"; ?></li>
          <li><b>Luas Kerucut : </b><?php echo "$luas_kerucut"; ?></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Baca selengkapnya>></button>
      </div>
    </div>

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Kubus</h4>
      </div>
      <div class="card-body">
        <img src="gambar/kubus.gif" class="img-circle">
          <div class="card-header"></div>
        <ul class="list-unstyled mt-3 mb-4">
          <li><b>Volume Kubus : </b><?php echo "$volume_kubus"; ?></li>
          <li><b>Luas Kubus : </b><?php echo "$luas_kubus"; ?></li>
          <li><b>Keliling Kubus : </b><?php echo "$keliling_kubus"; ?></li>
          <li><b>Luas Sisi Kubus : </b><?php echo "$luas_sisi_kubus"; ?></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Baca selengkapnya>></button>
      </div>
    </div>

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Balok</h4>
      </div>
      <div class="card-body">
        <img src="gambar/balok.gif" class="img-circle">
          <div class="card-header"></div>
        <ul class="list-unstyled mt-3 mb-4">
          <li><b>Volume Balok : </b><?php echo "$volume_balok"; ?></li>
          <li><b>Luas Balok : </b><?php echo "$luas_balok"; ?></li>
          <li><b>Keliling Balok : </b><?php echo "$keliling_balok"; ?></li>
          
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Baca selengkapnya>></button>
      </div>
    </div>

  </div>
      
     <div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Limas</h4>
      </div>
      <div class="card-body">
        <img src="gambar/limas.gif" class="img-circle">
          <div class="card-header"></div>
        <ul class="list-unstyled mt-3 mb-4">
          <li><b>Volume Limas : </b><?php echo "$volume_limas"; ?></li>
          <li><b>Luas Limas : </b><?php echo "$luas_limas"; ?></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Baca selengkapnya>></button>
      </div>
    </div>

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Prisma</h4>
      </div>
      <div class="card-body">
        <img src="gambar/prisma.gif" class="img-circle">
          <div class="card-header"></div>
        <ul class="list-unstyled mt-3 mb-4">
          <li><b>Volume Prisma : </b><?php echo "$volume_prisma"; ?></li>
          <li><b>Luas Prisma : </b><?php echo "$luas_prisma"; ?></li>
          
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Baca selengkapnya>></button>
      </div>
    </div>

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Tabung</h4>
      </div>
      <div class="card-body">
        <img src="gambar/tabung.gif" class="img-circle">
          <div class="card-header"></div>
        <ul class="list-unstyled mt-3 mb-4">
          <li><b>Volume Tabung : </b><?php echo "$volume_tabung"; ?></li>
          <li><b>Luas Tabung : </b><?php echo "$luas_tabung"; ?></li>
          
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Baca selengkapnya>></button>
      </div>
    </div>

  </div>

   <footer>
    <br>
    <hr width="90%" color="blue">
      <div class="col-12 col-md">
       <center>
        <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2019 Fajar,Reza,Abiandra</small>
        </center>
      </div>
  </footer>
  </body>
</html>