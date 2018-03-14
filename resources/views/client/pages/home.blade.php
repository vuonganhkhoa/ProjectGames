@extends('client.layout.master')
@section('title', 'Trang chủ')
@section('content')
<div class="section-seperator">
</div>
<!-- Work -->
<div class="bg-color-sky-light overflow-h">
	<div class="content-md container">
		<!--// end row -->

		<!-- Masonry Grid -->
		<div class="masonry-grid">
			<div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>

			@foreach($games as $game)
			<div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
				<div class="work">
					<div class="work-overlay">
						<img style="height: 200px !important" class="full-width img-responsive" src="adminAssets/img/hinh_game/{{ $game->image }}" alt="Portfolio Image">
					</div>
					<div class="work-content">
						<h3 class="color-white margin-b-5">{{ $game->title }}</h3>
						<p class="color-white margin-b-0"></p>
					</div>
					<a class="content-wrapper-link" href="games/{{ $game->url }}"></a>
				</div>
			</div>
			@endforeach

		</div>
		<!-- End Masonry Grid -->
	</div>
</div>
<!-- End Work -->

<!-- Team -->
<div class="bg-color-sky-light">
	<div class="content-md container">
		<div class="row margin-b-40">
			<div class="col-sm-6">
				<h2><a href="{{ route('TinTuc') }}">Tin tức</a></h2>
			</div>
		</div>
		<!--// end row -->

		<div class="row">
			<!-- Team -->

			@foreach($news as $new)
			<div class="col-sm-4 sm-margin-b-50">
				<div class="bg-color-white margin-b-20">
					<div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
						<a href="tin-tuc/{{$new->url}}"><img style="height: 220px !important" class="img-responsive" src="adminAssets/img/hinh_tin/{{ $new->image }}" alt="Team Image"></a>
					</div>
				</div>
				<h4><a href="tin-tuc/{{$new->url}}">{{ $new->title }}</a> <br> <span class="text-uppercase ">{{ date('d/m/Y', strtotime($new->update_at)) }}</span></h4>
				<p>{!! $new->description !!}</p>
				<a class="link" href="tin-tuc/{{$new->url}}">Xem thêm</a>
			</div>
			@endforeach

			<!-- End Team -->
		</div>
		<!--// end row -->
	</div>
</div>
<!-- End Team -->
<div class="section-seperator">
</div>

@endsection