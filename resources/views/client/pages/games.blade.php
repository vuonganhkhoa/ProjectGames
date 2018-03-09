@extends('client.layout.master')
@section('title', 'Tất cả games')
@section('content')
<div class="section-seperator">
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12  text-justify" style="margin-top: 20px">
			<div class="TimKiem">

			@if(isset($genre))
			<h4>Thể loại: {{ $genre->name }}</span></h4>
			@endif

			@if(isset($count))
			<h4>Tìm thấy <span style="color:red">{{ $count }}</span> kết quả phù hợp với từ khóa: <span style="color:red">'{{ $key }}'</span></h4>
			@endif


			</div>
		</div>
	</div>
</div>

<!-- Work -->
<div class="bg-color-sky-light overflow-h">
	<div class="content-md container">
		<!--// end row -->

		<!-- Masonry Grid -->
		<div class="masonry-grid">
			<div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1">
			</div>

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
		<div class="text-center">
			{{ $games->appends(request()->input())->links() }}
		</div>
	</div>
</div>
<!-- End Work -->


<div class="section-seperator">
</div>

@endsection