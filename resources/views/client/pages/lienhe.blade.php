@extends('client.layout.master')
@section('title', 'Liên hệ')
@section('content')

<div id="map" class="map height-300">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15679.811522414357!2d106.6779607!3d10.7381151!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x31e4d76059405939!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgU8OgaSBHw7Ju!5e0!3m2!1svi!2s!4v1520336937833" height="360" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
</div>

<!-- Contact List -->
<div class="section-seperator">
	<div class="content-md container">
		<div class="row">
			<!-- Contact List -->
			<div class="col-sm-4 sm-margin-b-50">
				<h4><a href="#">Thành phố Hồ Chí Minh</a> <span class="text-uppercase margin-l-20"></span></h4>
				<p>Vương Anh Khoa</p>
				<ul class="list-unstyled contact-list">
					<li><i class="margin-r-10 color-base icon-call-out"></i> 028 3850 5520</li>
					<li><i class="margin-r-10 color-base icon-envelope"></i> stu@acidus.com</li>
					<li><i class="margin-r-10 color-base icon-envelope"></i> 180 Cao Lỗ, Phường 4, Quận 8, Hồ Chí Minh</li>
				</ul>
			</div>
			<!-- End Contact List -->

			<!-- Contact List -->
			<div class="col-sm-4 sm-margin-b-50">
				<h4><a href="#">Thành phố Hồ Chí Minh</a> <span class="text-uppercase margin-l-20"></span></h4>
				<p>Thi Trường Minh</p>
				<ul class="list-unstyled contact-list">
					<li><i class="margin-r-10 color-base icon-call-out"></i> 028 3850 5520</li>
					<li><i class="margin-r-10 color-base icon-envelope"></i> stu@acidus.com</li>
					<li><i class="margin-r-10 color-base icon-envelope"></i> 180 Cao Lỗ, Phường 4, Quận 8, Hồ Chí Minh</li>
				</ul>
			</div>
			<!-- End Contact List -->

			<!-- Contact List -->
			<div class="col-sm-4 sm-margin-b-50">
				<h4><a href="#">Thành phố Hồ Chí Minh</a> <span class="text-uppercase margin-l-20"></span></h4>
				<p>Võ Hoàng Sơn</p>
				<ul class="list-unstyled contact-list">
					<li><i class="margin-r-10 color-base icon-call-out"></i> 028 3850 5520</li>
					<li><i class="margin-r-10 color-base icon-envelope"></i> stu@acidus.com</li>
					<li><i class="margin-r-10 color-base icon-envelope"></i> 180 Cao Lỗ, Phường 4, Quận 8, Hồ Chí Minh</li>
				</ul>
			</div>
			<!-- End Contact List -->
		</div>
		<!--// end row -->
	</div>
</div>
<!-- End Contact List -->

<!-- Comment -->
<div class="section-seperator">
	<div class="content-md container">
		<div class="row margin-b-40">
			<div class="col-sm-6">
				<h2>Liên hệ với chúng tôi</h2>
				<p>Nếu bạn có thắc mắc, hãy cho chúng tôi biết.</p>
			</div>
		</div>
		<!--// end row -->

		<div class="row">
			<div class="col-md-5 col-sm-7">
				<form action="lien-he" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="margin-b-10">
						<input type="text" class="form-control" name="Name" placeholder="Tên của bạn">
					</div>
					<div class="margin-b-10">
						<input type="text" class="form-control" name="Email" placeholder="Địa chỉ email">
					</div>
					<div class="margin-b-10">
						<input type="text" class="form-control" name="Phone" placeholder="Điện thoại">
					</div>
					<div class="margin-b-20">
						<textarea class="form-control" rows="5" name="Message" placeholder="Nội dung"></textarea>
					</div>
					<button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Gửi</button>
				</form>
			</div>
		</div>
		<!--// end row -->
	</div>
</div>
<!-- End Comment -->

@endsection