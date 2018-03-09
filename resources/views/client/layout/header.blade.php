<header class="header">
	<!-- Navbar -->
	<nav class="navbar" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="menu-container">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="toggle-icon"></span>
				</button>

				<!-- Logo -->
				<div class="navbar-logo">
					<a class="navbar-logo-wrap" href="./">
						<img class="navbar-logo-img" src="clientAssets/img/logo.png" alt="Acidus Logo">
					</a>
				</div>
				<!-- End Logo -->
			</div>
			

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse nav-collapse">
				<div class="menu-container">
					<ul class="navbar-nav navbar-nav-right">

						<li class="nav-item">
							<form action="timkiem" method="GET">
							<input class="nav-item-child" type="text" name="key" placeholder="Tìm kiếm">
							</form>
						</li>

						<!-- Home -->
						<li class="nav-item">
							<a class="nav-item-child" href="./">
								Trang chủ
							</a>
						</li>
						<!-- End Home -->

						<!-- About -->
						<li class="nav-item">
							<a class="nav-item-child" href="{{ route('GioiThieu') }}">
								Giới thiệu
							</a>
						</li>
						<!-- End About -->

						<li class="nav-item">
							<a class="nav-item-child" href="{{ route('Games') }}">
								Games
							</a>
						</li>

						<li class="nav-item dropdown">
							<a href="#" class="nav-item-child dropdown-toggle" data-toggle="dropdown">Thể loại <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-2">
								<li>
									<div class="row" style="width: 440px;">
										<ul class="col-md-4 multi-column-dropdown">
											@foreach($the_loai_1 as $theloai)
											<li><a href="the-loai/{{ $theloai->url }}">{{ $theloai->name }}</a></li>
											@endforeach
										</ul>
										<ul class="col-md-4 multi-column-dropdown">
											@foreach($the_loai_2 as $theloai)
											<li><a href="the-loai/{{ $theloai->url }}">{{ $theloai->name }}</a></li>
											@endforeach
										</ul>
										<ul class="col-md-4 multi-column-dropdown">
											@foreach($the_loai_3 as $theloai)
											<li><a href="the-loai/{{ $theloai->url }}">{{ $theloai->name }}</a></li>
											@endforeach
										</ul>
									</div>
								</li>
							</ul>
						</li>
						<!-- End Work -->

						<li class="nav-item">
							<a class="nav-item-child" href="{{ route('TinTuc') }}">
								Tin tức
							</a>
						</li>

						<!-- Contact -->
						<li class="nav-item">
							<a class="nav-item-child" href="{{ route('LienHe') }}">
								Liên hệ
							</a>
						</li >
						<!-- End Contact -->
					</ul>
				</div>
			</div>
			<!-- End Navbar Collapse -->
		</div>

	</nav>

	<!-- Navbar -->
</header>