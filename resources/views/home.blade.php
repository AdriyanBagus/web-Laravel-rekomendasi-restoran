<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="style.css">
		<title>Web Rekomendasi Restoran</title>
	</head>
	<body>
		<img src="img/Banner tegal.jpeg" width="1518px" height="320px">
		<div class = "container">
				<div>
					<ul>
						<li><a class="active" href="/">Home</a></li>
						<li><a href="{{ url('/form') }}">Form Tempat</a></li>
						<li><a href="{{ url('/tampil') }}">Tampilkan Rekomendasi</a></li>
					</ul>
				</div>
			<main class = "grid">
				<article>
					<img src = "img/imperial kitchen.png" width="300px" height="300px">
					<div class = "content" style="padding: 20px" data-name="p-1">
						<h2>Imperial Kitchen & Dimsum</h2>
						<p>Jl. Kolonel Soegiono, Transmart Tegal, 52112 Tegal</p>
					</div>
					
				</article>
				<article>
					<img src = "img/pizza hut.jpeg" width="280px" height="300px">
					<div class = "content">
						<h2>Pizza Hut Restoran</h2>
						<p>Pacific Mall, Jl. Mayjend Sutoyo No.3335, Tegal Barat Tegal</p>
					</div>
					
				</article>
				<article>
					<img src = "img/gacoan.jpg" width="300px" height="300px">
					<div class = "content">
						<h2>Mie Gacoan</h2>
						<p>Jl. Kapten Sudibyo 52124 Pekauman Jawa Tengah</p>
					</div>
					
				</article>
				<article>
					<img src = "img/mcd.jpg" width="300px" height="300px">
					<div class = "content">
						<h2>McDonald's</h2>
						<p>Jl. Mayjend Sutoyo No.54 52131 Tegal Jawa Tengah</p>
					</div>
					
				</article>
				<article>
					<img src = "img/kfc.jpg" width="300px" height="300px">
					<div class = "content">
						<h2>KFC Transmart Tegal</h2>
						<p>Jl. Mayjend Sutoyo No.42 52113 Tegal Jawa Tengah</p>
					</div>
					
				</article>
				<article>
					<img src = "img/ss.jpg" width="300px" height="300px">
					<div class = "content">
						<h2>Waroeng SS (Super Sambel) Tegal</h2>
						<p>Jl. Kapten Sudibyo.221 Randugunting, Tengah, Kota Tegal</p>
					</div>
					
				</article>
				<article style="padding-bottom: 30px">
					<img src = "img/tea.jpg" width="300px" height="300px">
					<div class = "content">
						<h2>Tea N Tea Gopek House</h2>
						<p>Pacific Mall, Jl. Kapten Sudibyo 52125 Tegal Jawa Tengah </p>
					</div>
					
				</article>
				<article style="padding-bottom: 30px">
					<img src = "img/steakk.jpg" width="305px" height="300px">
					<div class = "content">
						<h2>Waroeng Stake and shake</h2>
						<p>Jln. Kapt Ismail 116, Tegal 52112 Indonesia</p>
					</div>
					
				</article>
				<article>
					<img src = "img/ramen.jpg" width="305px" height="300px">
					<div class = "content">
						<h2>Gokana Ramen And Teppan Pacific Mall</h2>
						<p>Pacific Mall, Jl. Kapten Sudibyo, Kota Tegal</p>
					</div>
					
				</article>
			</main>
		</div>

		<!--FONT AWESOME-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!--GOOGLE FONTS-->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
		</head>		
		<footer>
		<div class="footer">

		<div class="row">
		<ul>
			<li><a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ url('/form') }}">Form Tempat</a></li>
			<li><a href="{{ url('/tampil') }}">Tampilkan Rekomendasi</a></li>
			<li><a href="{{ url('/login') }}">Login Admin</a></li>
		</div>

		<div class="row">
		INFERNO Copyright © 2021 Inferno - All rights reserved || Designed By: Mahesh 
		</div>
		</div>
		</footer>
	</body>
</html>