<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Dewan Bootstrap - Popover</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-danger">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<div class="container mb-3">
		<h3 align="center" class="mb-3 mt-3">Dewan Popover Bootstrap 4</h3>

		<h5 class="bg-dark text-white" align="center">Popover Standar</h5>
		<button type="button" class="btn btn-primary" data-toggle="popover" title="Judul Popover" data-content="Isi dari popover judul dan konten yang ingin ditampilkan.">
			Klik untuk memunculkan Popover
		</button>

		<button type="button" class="btn btn-danger" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="Judul Popover" data-content="Ini adalah popover yang tidak hilang saat klik tombol berkali-kali.">
			Dismissible popover
		</button>

		<button type="button" class="btn btn-success" data-placement="bottom" data-html="true" data-toggle="popover" title="Judul Popover" data-content="<em>Dewan</em> <u>Komputer</u> <b>Popover dengan HTML saat diklik</b> ">
			Popover HTML
		</button>

		<button type="button" class="btn btn-info" data-placement="bottom" data-html="true" data-toggle="popover" title="<i class='fa fa-car'></i> Judul Popover <i class='fa fa-car'></i>" data-content="<em>Dewan</em> <u>Komputer</u> <b>Popover dengan HTML saat diklik</b> <img src='dk.png' width='80px;'>">
			Popover Dengan Icon dan Gambar
		</button>

		<span class="d-inline-block" data-toggle="popover" data-content="Disabled popover">
		  <button class="btn btn-primary" style="pointer-events: none;" type="button" disabled>Disabled button</button>
		</span>

		<h5 class="bg-dark text-white mt-5" align="center">Popover Aligment</h5>
		<button type="button" class="btn btn-success" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Isi dari popover yang ingin ditampilkan di atas.">
		  Popover Atas
		</button>

		<button type="button" class="btn btn-primary" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="Isi dari popover yang ingin ditampilkan pada sebelah kanan.">
		  Popover Kanan
		</button>

		<button type="button" class="btn btn-danger" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Isi dari popover yang ingin ditampilkan di bawah.">
		  Popover Bawah
		</button>

		<button type="button" class="btn btn-warning" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="left" data-content="Isi dari popover yang ingin ditampilkan di sebelah kiri.">
		  Popover Kiri
		</button>

		<h5 class="bg-dark text-white mt-5" align="center">Popover Form Input</h5>
		<div class="form-group">
			<input type="text" name="text" placeholder="Popover pada Input Text" data-container="body" data-toggle="popover" data-placement="right" data-trigger="focus" title="Judul Popover" data-content="Isi dari popover yang ingin ditampilkan pada Input Text.">
		</div>

		<div class="form-group">
			<select name="text" data-container="body" data-toggle="popover" data-placement="right" data-trigger="focus" title="Judul Popover" data-content="Isi dari popover yang ingin ditampilkan pada Input Text.">
				<option>Option 1</option>
				<option>Option 2</option>
				<option>Option 3</option>
			</select>
		</div>
		
		<div class="form-group">
			<input type="radio" name="radio" data-container="body" data-toggle="popover" data-placement="right" data-trigger="focus" title="Judul Popover" data-content="Isi dari popover yang ingin ditampilkan pada Input Text."> Radio Button
		</div>

		<div class="form-group">
			<input type="checkbox" name="checkbox" data-container="body" data-toggle="popover" data-placement="right" data-trigger="focus" title="Judul Popover" data-content="Isi dari popover yang ingin ditampilkan pada Input Text."> Checkbox
		</div>		
	</div>

	<div class="navbar bg-dark fixed-bottom">
		<div style="color: #fff;">© <?php echo date('Y'); ?> Copyright:
		    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
		    $('[data-toggle="popover"]').popover();   
		});
	</script>
</body>
</html>