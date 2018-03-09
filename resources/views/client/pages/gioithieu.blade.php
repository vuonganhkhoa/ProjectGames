@extends('client.layout.master')
@section('title', 'Giới thiệu')
@section('content')

<!-- Slider -->
<!-- <div class="bg-color-sky-light">
	<div class="content-md container">
		<img class="img-responsive" src="clientAssets/img/1920x1080/02.jpg" alt="Slider Image">
	</div>
</div> -->
<!-- End Slider -->

<!-- Features -->
<div class="section-seperator">
</div>
<!-- End Features -->

<!-- About -->
<div class="content-md container">
	<div class="row margin-b-20">
		<div class="col-sm-6">
			<h2>Giới thiệu chung</h2>
		</div>
	</div>
	<!--// end row -->

	<div class="row text-justify">
		<div class="col-sm-7 sm-margin-b-50">
			<div class="margin-b-30">
				<p>Chào thầy!</p>
			</div>
			<p>Libraryofgame là website giới thiệu về các tựa game offline gồm nhiều thể loại khác nhau như hành động, thể thao, phiêu lưu, sinh tồn, ... . Ý tưởng để nhóm em xây dựng nên website này được lấy từ các trang web game hàng đầu ở VN như là fullcrackpc.com, batgioistudio.com, tructiepgame.com, ... . </p>
			<p>Chức năng chính của website là tổng hợp các tựa game offline và tin tức về thế giới game. Trong từng tựa game đều có hình ảnh và các thông tin chi tiết. Ngoài ra phần Admin còn có chức năng thêm/xoá/sửa nhiều mục khác nhau dựa vào Database. Các chức năng phụ như bình luận, tìm kiếm, sắp xếp các tựa game cũng được tích hợp vào website</p>
			<p>Phía dưới là thông tin của những thành viên trong nhóm và công việc của từng thành viên. File báo cáo chúng em gắn vào link Download bên dưới </p>
		</div>
		<div class="col-sm-5">
			<img style="height: 300px !important" class="img-responsive" src="clientAssets/img/website.png" alt="Our Office">
		</div>
	</div>
	<!--// end row -->
</div>
<!-- End About -->
<div class="section-seperator">
</div>
<!-- Team -->
<div class="bg-color-sky-light" style="margin-top: 60px">
	<div class="content-md container">
		<div class="row margin-b-40">
			<div class="col-sm-6">
				<h2>Thành viên nhóm</h2>
			</div>
		</div>
		<!--// end row -->

		<div class="row">
			<!-- Team -->
			<div class="col-sm-4 sm-margin-b-50">
				<div class="bg-color-white margin-b-20">
					<div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
						<img  class="img-responsive" src="clientAssets/img/khoa2.jpg" alt="Team Image">
					</div>
				</div>
				<h4><a href="#">Vương Anh Khoa</a></h4>
				<p>Lớp: D14_TH02</p>
				<p>MSSV: DH51400553</p>
				<p>Điện thoại: 0906 482 639</p>
				<p>Email: vuonganhkhoa96@gmail.com</p>
			</div>
			<!-- End Team -->

			<!-- Team -->
			<div class="col-sm-4 sm-margin-b-50">
				<div class="bg-color-white margin-b-20">
					<div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
						<img  class="img-responsive" src="clientAssets/img/minh.jpg" alt="Team Image">
					</div>
				</div>
				<h4><a href="#">Thi Trường Minh</a></h4>
				<p>Lớp: D14_TH02</p>
				<p>MSSV: DH51400704</p>
				<p>Điện thoại: 0982 656 153</p>
				<p>Email: ericlam1320@gmail.com</p>
			</div>
			<!-- End Team -->

			<!-- Team -->
			<div class="col-sm-4 sm-margin-b-50">
				<div class="bg-color-white margin-b-20">
					<div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
						<img  class="img-responsive" src="clientAssets/img/son.jpg" alt="Team Image">
					</div>
				</div>
				<h4><a href="#">Võ Hoàng Sơn</a> </h4>
				<p>Lớp: D14_TH02</p>
				<p>MSSV: DH51401092</p>
				<p>Điện thoại: 0903 660 801</p>
				<p>Email: vohoangson996@gmail.com</p>
			</div>
			<!-- End Team -->
		</div>
		<!--// end row -->
	</div>
</div>
<!-- End Team -->

<!-- Clients -->
<div class="section-seperator">
</div>
<!-- End Clients -->

<div class="bg-color-sky-light" style="margin-top: 60px">
	<div class="content-md container">
		<div class="row margin-b-40">
			<div class="col-sm-6">
				<h2>Phân công</h2>
			</div>
		</div>
		<!--// end row -->

		<div class="row">
			<!-- Team -->
			<div class="col-sm-4 sm-margin-b-50">
				<h4><a href="#">Vương Anh Khoa</a></h4>
				<p>Thêm, xóa, sửa admin - games</p>
				<p>Thêm, xóa, sửa admin - games</p>
			</div>
			<!-- End Team -->

			<!-- Team -->
			<div class="col-sm-4 sm-margin-b-50">
				<h4><a href="#">Thi Trường Minh</a></h4>
				<p>Thêm, xóa, sửa admin - Thể loại game</p>
				<p>Thêm, xóa, sửa admin - Bình luận </p>
			</div>
			<!-- End Team -->

			<!-- Team -->
			<div class="col-sm-4 sm-margin-b-50">
				<h4><a href="#">Võ Hoàng Sơn</a> </h4>
				<p>Thêm, xóa, sửa admin/games</p>
				<p>Thêm, xóa, sửa admin/games</p>
			</div>
			<!-- End Team -->
		</div>
		<!--// end row -->
	</div>
</div>

<div class="section-seperator">
</div>
<!-- End Clients -->

<div class="bg-color-sky-light" style="margin-top: 60px">
	<div class="content-md container">
		<div class="row margin-b-40">
			<div class="col-sm-6">
				<h2>File báo cáo </h2><a href=""> Download</a>
			</div>
		</div>
	</div>
</div>
<div class="section-seperator">
</div>
@endsection