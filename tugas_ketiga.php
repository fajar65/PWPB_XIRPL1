<?php 

 ?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tugas Ketiga</title>

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

      input[type=text] {
	  margin-bottom: 3px;
	  padding: 7px;
	  border: 1px solid #ccc;
	  border-radius: 5px;
	  font-size: 16px;
		}
	  input[type=text]:hover{
	  	transition: 0.6s all;
	  }
	  input[type=number] {
	  margin-bottom: 3px;
	  padding: 7px;
	  border: 1px solid #ccc;
	  border-radius: 5px;
	  font-size: 16px;
		}
		 input[type=radio] {
	  margin-bottom: 3px;
	  padding: 7px;
	  border: 1px solid #ccc;
	  border-radius: 5px;
	  font-size: 16px;
	  margin: 5px;
		}
		input[type=date] {
	  margin-bottom: 3px;
	  padding: 7px;
	  border: 1px solid #ccc;
	  border-radius: 5px;
	  font-size: 16px;
		}
		textarea {
	  margin-bottom: 3px;
	  padding: 7px;
	  border: 1px solid #ccc;
	  border-radius: 5px;
	  font-size: 16px;
		}
		select {
	  margin-bottom: 3px;
	  padding: 7px;
	  border: 1px solid #ccc;
	  border-radius: 5px;
	  font-size: 16px;
		}
		input[type=submit] {
  border-radius: 5px;
  border: 2px solid #2196F3;
  background-color: #2196F3;
  color: #ffd;
  padding: 10px 90px;
  font-size: 15px;
  cursor: pointer;
  margin-left: 0;
  margin-right: 10px;
  margin-bottom: 10px;
}
input[type=submit]{
	background: #2196F3;
}
input[type=submit]:hover {
	color: #fff;
	background: blue;
	transition: 0.3s all;
}
input[type=reset] {
  border-radius: 5px;
  border: 2px solid #2196F3;
  background-color: #fff;
  color: #2196F3;
  padding: 10px 99px;
  font-size: 15px;
  cursor: pointer;
  margin-left: 0;
  margin-right: 10px;
  margin-bottom: 10px;
}
input[type=reset]{
	background: white;
}
input[type=reset]:hover {
	color: #fff;
	background: grey;
	transition: 0.3s all;
}
.box{
	padding: 30px 70px;
	margin: 180px;
	background-color: #fff9;
	box-shadow: 1px 1px 20px 2px #2196F3;
	border-radius: 10px;
	margin-bottom: 120px;
	font-family: arial ;
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
 <p><img src="gambar/perkenalan1.png" style="float: right; width: 540px;height: 330px;margin-right: 60px; margin-top: 25px;"> <h1 class="display-4" style="color: blue;">Tugas Ketiga Kita</h1>
  <p class="lead">Disini Kita Akan Menampilkan<br>Form Identitas Peserta<br>Didik Baru <br><br>
    <hr width="18px" color="red" style="margin-left: 93px;height: 18px;border-radius: 1px 9px 1px 9px;margin-bottom: -10px;">
     <hr width="18px" color="blue" style="margin-left: 93px;height: 18px;border-radius: 1px 9px 1px 9px;margin-bottom: -10px;">
     <hr width="18px" color="lime" style="margin-left: 93px;height: 18px;border-radius: 1px 9px 1px 9px;margin-bottom: -15px;">
     <br>
  </p>

    </p>
      <br>
    <hr width="90%" color="blue" style="margin-bottom: -130px;">
          <br>
      <div class="box">
  <center><h3 style="font-family: arial">Form Data Identitas Peserta Didik Baru <br>Tahun Ajaran 2019/2020 </h3></center>
  <!-- form -->
  	<hr width="50%" color="blue">
  	<hr width="30%" color="blue">
  	<hr width="10%" color="blue">
  		<br><br>
		  <form action="" method="post">
  	<tr>
  		<td><b>1. Nama Lengkap </td></b>
  		<td>:</td><br>
  		<td><input type="text" name="nm" placeholder="Masukkan Nama Lengkap" size="30"></td>
  	</tr><p></p>
  	<tr>
  		<td><b>2. Nama Panggilan </td></b>
  		<td>:</td><br>
  		<td><input type="text" name="np" placeholder="Masukkan Nama Panggilan" size="30"></td>
  	</tr><p></p>
  	<tr>
  		<td><b>3. Jenis Kelamin </td></b>
  		<td>:</td>
  		<td>&nbsp<input type="radio" name="jk" value="Pria">Pria</td>
  		<td>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="jk" value="Wanita">Wanita</td>
  	</tr><p></p>
  	<tr>
  		<td><b>4. NISN</td></b>
  		<td>:</td><br>
  		<td><input type="text" name="nisn" size="20" maxlength="8" placeholder="Masukkan Nomor NISN"></td>
  	</tr><p></p>
  	<tr>
  		<td><b>5. NIK </td></b>
  		<td>:</td><br>
  		<td><input type="text" name="nik" size="20" maxlength="16" placeholder="Masukkan Nomor NIK"></td>
  	</tr><p></p>
  	<tr>
  		<td><b>6. Tempat dan Tanggal Lahir </td></b>
  		<td>:</td><br>
  		<td><input type="text" name="tempat" placeholder="Masukkan Tempat lahir"></td>
  		<td><input type="date" name="tgl_lhr" placeholder="Masukkan Tanggal lahir"></td>
  	</tr><p></p>
  	<tr>
  		<td><b>7. Asal Sekolah </td></b>
  		<td>:</td><br>
  		<td><textarea cols="40" rows="4" name="asal" placeholder="Masukkan Asal Sekolah"></textarea></td>
  	</tr><p></p>
  	<tr>
  		<td><b>8. Nomor SKHUN </td></b>
  		<td>:</td><br>
  		<td><input type="text" name="skhun" size="25" maxlength="14" placeholder="Masukkan Nomor SKHUN"></td>
  	</tr><p></p>
  	<tr>
  		<td><b>9. Tanggal Diterima Di Sekolah Ini </td></b>
  		<td>:</td><br>
  		<td><input type="date" name="tgl_terima" size="20"></td>
  	</tr><p></p>
  	<tr>
  		<td><b>10. Jika Pindahan, Sebutkan Alasan Pindah </td></b>
  		<td>:</td><br>
  		<td><textarea name="alsn" cols="40" rows="4" placeholder="Masukkan Alasan Pindah"></textarea></td>
  	</tr><p></p>
  	<tr>
  		<td><b>11. Agama </td></b>
  		<td>:</td><br>
  		<td><select name="agama">
	  		<option>Islam</option>
	  		<option>Kristen</option>
	  		<option>Hindu</option>
	  		<option>Buddha</option>
	  		<option>Konghucu</option>
  		</select></td>
  	</tr><p></p>
  	<tr>
  		<td><b>12. Alamat </td></b>
  		<td>:</td><br>
  		<td><textarea name="alamat" cols="40" rows="4" placeholder="Masukkan Alamat Anda"></textarea></td>
  	</tr><p></p>
  	<tr>
  		<td><b>13. Tinggal Bersama </td></b>
  		<td>:</td><br>
  		<td><select name="tinggal">
	  		<option>Orang Tua </option>
	  		<option>Saudara</option>
	  		<option>Kost</option>
  		</select></td>
  	</tr><p></p>
  	<tr>
  		<td><b>14. Transportasi Ke Sekolah </td></b>
  		<td>:</td><br>
  		<td><select name="transportasi">
	  		<option>Angkot</option>
	  		<option>Mobil</option>
	  		<option>Ojek</option>
	  		<option>Motor</option>
  		</select></td>
  	</tr><p></p>
  	<tr>
  		<td><b>15. Nomor Telepon Rumah</td></b>
  		<td>:</td><br>
  		<td><input type="text" name="no_tlpn" size="25" maxlength="13" placeholder="Masukkan Nomor Telepon"></td>
  	</tr><p></p>
  	<tr>
  		<td><b>16. Nomor Handphone </td></b>
  		<td>:</td><br>
  		<td><input type="text" name="no_hp" size="28" maxlength="14" placeholder="Masukkan Nomor Handphone"></td>
  	</tr><p></p>
  	<tr>
  		<td><b>17. Nomor KPS(Kartu Perlindungan Sosial)*bagi yang memiliki </td></b>
  		<td>:</td><br>
  		<td><input type="text" name="kps" size="25" maxlength="18" placeholder="Masukkan Nomor KPS"></td>
  	</tr><p></p>
  	<tr>
  		<td><b>18. Data Ayah Kandung </td></b>
  		<td>:</td><br>
  			<td>a. Nama </td>
  			<td>:</td><br>
  		<td><input type="text" name="nama_ayah" size="30" placeholder="Masukkan Nama Ayah"></td><br>
  		<td>b. Tahun Lahir </td>
  			<td>:</td><br>
  		<td><input type="date" name="lahir_ayah" size="25" placeholder="Masukkan Tahun Lahir"></td><br>
  			<td>c. Pendidikan </td>
  			<td>:</td><br>
		<td><select name="pendidikan_ayah">
		   	<option>SD </option>
			<option>SMP </option>
		    <option>SMA </option>
		    <option>D3 </option>
		    <option>S1</option>
		    <option>S2 </option>
		    <option>S3</option>
		  	</select>
		  </td><p></p>
  			<td>d. Pekerjaan </td>
  			<td>:</td><br>
  		<td><input type="text" name="pekerjaan_ayah" size="25" placeholder="Masukkan Pekerjaan Ayah"></td><br>
  		<td>e. Penghasilan Perbulan </td>
  			<td>:</td><br>
  		<td><select name="penghasilan_ayah">
		   <option>Rp.0 > Rp.500.000> </option>
			<option>Rp.500.000 > Rp.1.000.000 </option>
		    <option>Rp.1.000.000 > Rp.2.000.000 </option>
		    <option>Rp.2.000.000 > Rp.3.000.000 </option>
		    <option>Rp.3.000.000 =></option>
		  	</select>
		  </td><p></p>
  	</tr>
  	<tr>
  		<td><b>19. Data ibu Kandung </td></b>
  		<td>:</td><br>
  			<td>a. Nama </td>
  			<td>:</td><br>
  		<td><input type="text" name="nama_ibu" size="30" placeholder="Masukkan Nama Ibu"></td><br>
  		<td>b. Tahun Lahir </td>
  			<td>:</td><br>
  		<td><input type="date" name="lahir_ibu" size="25" placeholder="Masukkan Tahun Lahir"></td><br>
  			<td>c. Pendidikan </td>
  			<td>:</td><br>
		<td><select name="pendidikan_ibu">
		   	<option>SD </option>
			<option>SMP </option>
		    <option>SMA </option>
		    <option>D3 </option>
		    <option>S1</option>
		    <option>S2 </option>
		    <option>S3</option>
		  	</select>
		  </td><p></p>
  			<td>d. Pekerjaan </td>
  			<td>:</td><br>
  		<td><input type="text" name="pekerjaan_ibu" size="25" placeholder="Masukkan Pekerjaan Ibu"></td><br>
		  	<td>e. Penghasilan Perbulan</td>
			<td>:</td><br>
  		<td><select name="penghasilan_ibu">
		   <option>Rp.0 > Rp.500.000> </option>
			<option>Rp.500.000 > Rp.1.000.000 </option>
		    <option>Rp.1.000.000 > Rp.2.000.000 </option>
		    <option>Rp.2.000.000 > Rp.3.000.000 </option>
		    <option>Rp.3.000.000 =></option>
		  	</select>
		  </td><p></p>
		<center>
  	<tr>
  		<td><input type="submit" name="simpan" value="Simpan"></td>
  		<td><input type="reset" name="reset" value="Reset"></td>
  	</tr>
  		</center>
  		 	</div>
			   </form>
			   <hr width="90%" color="blue" style="margin-bottom: -80px;">
<!-- hasil form -->
<div class="box">
<?php
	
	if (isset($_POST['simpan'])){
		echo "<center>
		<h3>Data Identitas Peserta Didik Baru<br>
		Tahun Ajaran 2019/2020</h3><br>
		</center>";
		
		echo "<br><b>Nama Lengkap : </b>" .$_POST['nm'];
		echo "<br><b>Nama Panggilan : </b>" .$_POST['np'];
		echo "<br><b>Jenis Kelamin : </b>" .$_POST['jk'];
		echo "<br><b>NISN : </b>" .$_POST['nisn'];
		echo "<br><b>NIK : </b>" .$_POST['nik'];
		echo "<br><b>Tempat dan Tanggal Lahir : </b>" .$_POST['tempat'] .$_POST['tgl_lhr'];
		echo "<br><b>Asal Sekolah : </b>" .$_POST['asal'];		
		echo "<br><b>Nomor SKHUN : </b>" .$_POST['skhun'];
		echo "<br><b>Tanggal Diterima Di Sekolah ini  : </b>" .$_POST['tgl_terima'];
		echo "<br><b>Jika Pindahan, Sebutkan Alasan Pindah : </b>" .$_POST['alsn'];
		echo "<br><b>Agama : </b>" .$_POST['agama'];
		echo "<br><b>Alamat : </b>" .$_POST['alamat'];
		echo "<br><b>Tinggal Bersama : </b>" .$_POST['tinggal'];
		echo "<br><b>Transportasi Ke Sekolah : </b>" .$_POST['transportasi'];
		echo "<br><b>Nomor Telepon : </b>" .$_POST['no_tlpn'];
		echo "<br><b>Nomor Handphone : </b>" .$_POST['no_hp'];
		echo "<br><b>Nomor KPS (Kartu Perlindungan Sosial)*bagi yang memiliki : </b>" .$_POST['kps'];
			// data ayah
		echo "<br><b>Data Ayah Kandung : </b>" ;
		echo "<br>a.  Nama : " .$_POST['nama_ayah'];
		echo "<br>b.  Tahun Lahir : " .$_POST['lahir_ayah'];
		echo "<br>c.  Pendidikan : " .$_POST['pendidikan_ayah'];
		echo "<br>d.  Pekerjaan : " .$_POST['pekerjaan_ayah'];
		echo "<br>e.  Penghasilan Perbulan : " .$_POST['penghasilan_ayah'];
			// data ibu
		echo "<br><b>Data ibu Kandung : </b>" ;
		echo "<br>a.  Nama : " .$_POST['nama_ibu'];
		echo "<br>b.  Tahun Lahir : " .$_POST['lahir_ibu'];
		echo "<br>c.  Pendidikan : " .$_POST['pendidikan_ibu'];
		echo "<br>d.  Pekerjaan : " .$_POST['pekerjaan_ibu'];
		echo "<br>e.  Penghasilan Perbulan : " .$_POST['penghasilan_ibu'];
		
		
	} 
?>
	</div>

</form>
   <footer>
    <br>
    <hr width="90%" color="blue" style="margin-top: -80px;">
      <div class="col-12 col-md">
       <center>
        <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2019 Fajar,Reza,Abiandra</small>
        </center>
      </div>
  </footer>
  </body>
</html>