<?php 
	include 'controller/kalkulator.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>latihan pertemuan ke-9</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery-2.2.1.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<!--awal css-->
	<style>
		.media {
			background-color: #000; 
				}
		.huruf-besar {
			color: green;
					}		
	</style>
	<!--akhir css-->
</head>
<body>
	<!--start navbar-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item active">
        			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      			</li>
   			 </ul>
    	<form class="form-inline my-2 my-lg-0">
      		<ul class="navbar-nav mr-auto">
     			 <li class="nav-item dropdown" style="padding-right: 30px;" >
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				MENU
        			</a>
        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          		<a class="dropdown-item" href="#">CONTACT</a>
         		 <a class="dropdown-item" href="#">ABOUT</a>
          		<div class="dropdown-divider"></div>
        	</div>
         		</li>
              <li class="nav-item" style="padding-right: 15px;">
        		<a class="nav-link" href="#">LOG IN</a>
     
      			</li>
    		</ul>
    	</form>
  	</div>
</nav>
<!--finish navbar-->

<!---strat conten--->
<div class="container" style="padding-top: 40px; padding-bottom: 40px">
	<!--deklarasi variabel-->
	<?php 
		$nama = "Budi";
		$no_telp = "085859437366";
	 ?>
	 <!-- akhir deklarasi variabel-->
	 <h1>Nama&nbsp;&nbsp; : <?= $nama; ?> </h1>
	 <h1>No telp&nbsp;&nbsp; : <?= $no_telp; ?> </h1>
	 <br><br>
	 <hr>

	 <?php 
	 	$bil_A = 10;
	 	$bil_B = 5;
	 	$hasil=0;
	 	if (penjumlahan($bil_A, $bil_B)<=15) {
	 		echo "penjumlahan terlalu sedikit";
	 	}else{
	 		$hasil=penjumlahan($bil_A, $bil_B);
	 	}
	  ?>
	  <h2> nilai ,bil. pertama&nbsp;= <?= $bil_A; ?></h2>
	  <h2> nilai ,bil. kedua&nbsp;= <?= $bil_B; ?></h2>
	  <h2>hasil penjumlahan&nbsp;= 
	  	<?= $hasil ?></h2>

	<!--start form-->
	<form action="detail.php" method="POST">
	  <div class="form-group">
	   <label for="exampleInputEmail1">Your email</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">  </div>
	     <div class="form-group">
	    <label for="exampleFormControlTextarea1"></label>
	    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="message"></textarea>
	  </div>
	   <br>
	   <button type="button" class="btn btn-primary" >SEND NOW ▶</button>
	  </div>
	</form>
	<!-- / finish form-->

	<!--start tabel-->
	<table class="table table-bordered">
		<tr>
			<th width="15%">NO</th>
			<th width="20%">Nama</th>
			<th width="20%">Kelas</th>
			<th width="20%">Email</th>
			<th width="35%">Alamat</th>
		</tr>
		<tr>
			<td>1</td>
			<td>budi</td>
			<td>jarkom 2</td>
			<td>adi@mail.com</td>
			<td>sleman</td>
		</tr>
		<tr>
			<td>2</td>
			<td>alex</td>
			<td>jarkom 2</td>
			<td>alex@mail.com</td>
			<td>bantul</td>
		</tr>
		<tr>
			<td>3</td>
			<td>budi</td>
			<td>jarkom 2</td>
			<td>adi@mail.com</td>
			<td>kutoarjo</td>
		</tr>
	</table>
	<!-- / finish tabel-->
</div>


</body>
</html>