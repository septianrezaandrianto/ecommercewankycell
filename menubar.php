<!-- navbar -->
	<nav class="navbar navbar-default">
		<a class="navbar-brand" href="#">Wanky Cell</a>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav navbar-nav navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item dropdown">
				<a href="index.php">HOME</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          			KATEGORI
        			</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          				<a class="dropdown-item" href="#">Kategori 1</a>
         		 		<a class="dropdown-item" href="#">Kategori 2</a>
         		 	</div>
     			</li>
				<li><a href="keranjang.php">KERANJANG</a>
				<li><a href="checkout.php">CHECK OUT</a></li>
	
				<!-- Jika Sudah Login (ada session pelanggan) -->
				<?php if(isset($_SESSION['pelanggan'])): ?>
					<li><a href="riwayat_pembelian.php">RIWAYAT PEMBELIAN</a></li>
					<li><a href="logout.php" onclick="return confirm('Apakah anda yakin ingin Log Out?')">LOG OUT</a></li>
				<!-- Jika Belum login (tidak ada session pelanggan) -->
					<?php else: ?>
				<li><a href="login.php">LOG IN</a></li>
					<?php endif ?>
				
				</ul>
		<form class="form-inline my-2 my-lg-0" method="get" action="cari.php" name="cari">
    		<input class="form-control mr-sm-2" type="search" name="txt_cari" placeholder="Cari" required>
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">
        			<i class="glyphicon glyphicon-search"></i>
      				</button>
			</form>
		</div>
	</nav>


	