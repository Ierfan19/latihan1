<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="contaner">
		<div class="navigation">
			<ul>
				<li>
					<a href="#">
						<span class="icon"><img src="img/pp.jpg" width="40" style="border-radius: 50%;"></span>
						<span class="brand"><h2>IerfanX</h2></span>
					</a>
				</li>
				<li>
					<a href="index.php?page=home">
						<span class="icon"><ion-icon name="home-outline"></ion-icon></span>
						<span class="title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="index.php?page=customer">
						<span class="icon"><ion-icon name="person-outline"></ion-icon></span>
						<span class="title">Customers</span>
					</a>
				</li>
				<li>
					<a href="index.php?page=home">
						<span class="icon"><ion-icon name="chatbubbles-outline"></ion-icon></span>
						<span class="title">Message</span>
					</a>
				</li>
				<li>
					<a href="index.php?page=home">
						<span class="icon"><ion-icon name="help-outline"></ion-icon></span>
						<span class="title">Help</span>
					</a>
				</li>
				<li>
					<a href="index.php?page=home">
						<span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
						<span class="title">Setting</span>
					</a>
				</li>
				<li>
					<a href="index.php?page=home">
						<span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
						<span class="title">Password</span>
					</a>
				</li>
				<li>
					<a href="index.php?page=home">
						<span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
						<span class="title">Sign Out</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<div class="topbar">
				<div class="toggle">
					<ion-icon name="menu-outline"></ion-icon>
				</div>
				<div class="search">
					<label>
						<input type="text" placeholder="Search here">
						<ion-icon name="search-outline"></ion-icon>
					</label>
				</div>
				<div class="user">
					<img src="img/pp.jpg" width="60">
				</div>
			</div>
			<!-- data list -->
			<div class="details">
				<?php 
					if (empty($_GET['page'])) {
						echo "<script>document.location.href='index.php?page=home'</script>";
					}else {
						$page = $_GET['page'];
						include "page/$page.php";
					}
				 ?>
			</div>
		</div>
	</div>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script>
		//toggle 
		let toggle = document.querySelector('.toggle');
		let navigation = document.querySelector('.navigation');
		let main = document.querySelector('.main');

		toggle.onclick = function(){
			navigation.classList.toggle('active');
			main.classList.toggle('active');
		}


		//hovered list
		let list = document.querySelectorAll('.navigation li');
		function activeLink() {
			list.forEach((item) =>
			item.classList.remove('hovered'));
			this.classList.add('hovered');
		}
		list.forEach((item) =>
		item.addEventListener('mouseover',activeLink));
	</script>
</body>
</html>