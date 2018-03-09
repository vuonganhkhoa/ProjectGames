<footer class="footer">
	<!-- Links -->
	<div class="section-seperator">
		<div class="content-md container">
			<div class="row">
				<div class="col-sm-2 sm-margin-b-30">
					<!-- List -->
					<ul class="list-unstyled footer-list">
						<li class="footer-list-item"><a href="./">Trang chủ</a></li>
						<li class="footer-list-item"><a href="{{ route('Games') }}">Games</a></li>
						<li class="footer-list-item"><a href="{{ route('TinTuc') }}">Tin tức</a></li>
						<li class="footer-list-item"><a href="{{ route('LienHe') }}">Liên hệ</a></li>
					</ul>
					<!-- End List -->
				</div>
		

				<div class="col-sm-2 sm-margin-b-30">
					<!-- List -->

					<ul class="list-unstyled footer-list">
						@foreach($the_loai_1 as $theloai)
						<li class="footer-list-item"><a href="the-loai/{{ $theloai->url }}">{{ $theloai->name }}</a></li>
						@endforeach
					</ul>

					<!-- End List -->
				</div>

				<div class="col-sm-2 sm-margin-b-30">
					<!-- List -->

					<ul class="list-unstyled footer-list">
						@foreach($the_loai_2 as $theloai)
						<li class="footer-list-item"><a href="the-loai/{{ $theloai->url }}">{{ $theloai->name }}</a></li>
						@endforeach
					</ul>

					<!-- End List -->
				</div>

				<div class="col-sm-2 sm-margin-b-30">
					<!-- List -->

					<ul class="list-unstyled footer-list">
						@foreach($the_loai_3 as $theloai)
						<li class="footer-list-item"><a href="the-loai/{{ $theloai->url }}">{{ $theloai->name }}</a></li>
						@endforeach
					</ul>

					<!-- End List -->
				</div>

				<div class="col-sm-3 sm-margin-b-30">
					<!-- List -->
					<ul class="list-unstyled footer-list">
						<li class="footer-list-item"><a href="https://www.facebook.com/anhkhoa.vuong.71">Facebook</a></li>
						<li class="footer-list-item"><a href="https://www.youtube.com">YouTube</a></li>
						<li class="footer-list-item"><a href="https://github.com/vuonganhkhoa/ProjectGames">Github</a></li>
					</ul>
					<!-- End List -->
				</div>
			</div>
			<!--// end row -->
		</div>
	</div>
	<!-- End Links -->

	<!-- Copyright -->
	<div class="content container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<p class="margin-b-0"><a class="fweight-700" href=""></a> Vương Anh Khoa | Thi Trường Minh | Võ Hoàng Sơn <a class="fweight-700" href=""></a></p>
			</div>
		</div>
		<!--// end row -->
	</div>
	<!-- End Copyright -->
</footer>