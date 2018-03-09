@extends('client.layout.master')
@section('title', $game->title)
@section('content')


<div class="section-seperator">
</div>

<!-- Slider -->
<div class="bg-color-sky-light">
	<div class="content-md container">
		<img class="img-responsive" src="adminAssets/img/hinh_game/{{ $game->image }}" alt="Slider Image">
	</div>
</div>
<!-- End Slider -->

<!-- Clients -->
<div class="container">
	<div class="row">
	<div class="col-sm-12 sm-margin-b-50 text-justify" style="font-size: 60px !important">
		{!! $game->description !!}
	</div>
	</div>
</div>


<!-- End Clients -->

<!-- About -->
<div class="content-md container">
	<div class="row">
		<div class="col-sm-8 sm-margin-b-50 text-justify">
			{!! $game->content !!}
		</div>
	</div>
	<!--// end row -->
</div>
<!-- End About -->

<!-- Team -->
<div class="bg-color-sky-light">
	<div class="content-md container">
		<div class="row margin-b-40">
			<div class="col-sm-6">
				<h3>Một vài hình ảnh</h3>
			</div>
		</div>
		<!--// end row -->

		<div class="row">
			<!-- Team -->
			@foreach($pictures as $pic)
			<div class="col-sm-4 sm-margin-b-50">
				<div class="bg-color-white margin-b-20">
					<div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
						<img style="height: 250px !important" class="img-responsive" src="adminAssets/img/hinh_game/{{ $pic->image }}" alt="Team Image">
					</div>
				</div>
			</div>
			<!-- End Team -->
			@endforeach
		</div>
		<!--// end row -->
	</div>
</div>
<!-- End Team -->

<div class="bg-color-sky-light">
	<div class="content-md container">
		<div class="row margin-b-40">
			<div class="col-sm-6">
				<h3>Gameplay</h3>
			</div>
		</div>
		<!--// end row -->

		<div class="row">
			<iframe width="560" height="315" src="{{ $game->trailer }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
		<!--// end row -->
	</div>
</div>

<div class="section-seperator">
	<div class="content-md container">
		<div class="row">
			<div class="col-sm-4 sm-margin-b-50">
				<div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
					<h3>Cấu hình tối thiểu</h3>
					{!! $game->minimum !!}
				</div>
			</div>
			<div class="col-sm-4 sm-margin-b-50">
				<div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
					<h3>Cấu hình đề nghị</h3>
					{!! $game->recommended !!}
				</div>
			</div>
		</div>
		<!--// end row -->
	</div>
</div>

<div class="section-seperator">
	<div class="content-md container">
		<div class="row">
			<div class="col-sm-4 sm-margin-b-50">
				<div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
					<h3>Link Download</h3>
					@if(!empty($links[0]))
						@foreach($links as $link)
						<h2><a href="{{ $link->link }}">{{ $link->note }}</a></h2>
						@endforeach
					@else
						<h2>Sắp cập nhật</h2>
					@endif
				</div>
			</div>
		</div>
		<!--// end row -->
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="page-header">
				<h3><small class="pull-right">{{ $count_comments }} bình luận</small> Bình luận </h3>
			</div> 
			<div class="comments-list">
				@foreach($comments as $comment)
				<div class="media">
					<p class="pull-right"><small>{{ date('d/m/Y', strtotime($comment->update_at)) }}</small></p>
					<div class="media-body">

						<h4 class="media-heading user_name">{{ $comment->name }}</h4>
						{{ $comment->content }}

						<p><small><a href="#">Like</a> - <a href="#">Share</a></small></p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

<div class="section-seperator">
	<div class="content-md container">
		<div class="row margin-b-40">
			<div class="col-sm-6">
				<h3>Bình luận về bài viết</h3>
				<p>Bạn nghĩ gì về game này?</p>
			</div>
		</div>
		<!--// end row -->

		<div class="row">
			<div class="col-md-5 col-sm-7">
				<form action="binhluan/{{ $game->id }}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="margin-b-10">
						<input type="text" class="form-control" name="Name" placeholder="Tên của bạn" required>
					</div>
					<div class="margin-b-20">
						<textarea class="form-control" rows="5" name="Message" placeholder="Nội dung" required></textarea>
					</div>
					<input type="submit" class="btn btn-info" value="Gửi bình luận">
				</form>
			</div>
		</div>
		<!--// end row -->
	</div>
</div>

<div class="section-seperator">
</div>

@endsection