@extends('client.layout.master')
@section('title', 'Tin tức')
@section('content')

<div class="section-seperator">
</div>

<!-- Team -->
<div class="bg-color-sky-light">
	<div class="content-md container">
		<div class="row margin-b-40">
			<div class="col-sm-6">
				<h2><a href="">Tin tức</a></h2>
			</div>
		</div>
		<!--// end row -->

		<div class="row">
			<!-- Team -->

			@foreach($news as $new)

				

				<div class="row text-justify">

					<div class="col-sm-4">
						<div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
							<a href="tin-tuc/{{$new->url}}"><img style="height: 220px !important" class="img-responsive" src="adminAssets/img/hinh_tin/{{ $new->image }}" alt="Team Image"></a>
						</div>
					</div>

					<div style="height: 300px" class="col-sm-7 ">
						<h4><a href="tin-tuc/{{$new->url}}">{{ $new->title }}</a><br> <span class="text-uppercase ">{{ date('d/m/Y', strtotime($new->update_at)) }}</span></h4>
						<p>{!! $new->description !!}</p>	
						<div><a  class="link" href="tin-tuc/{{$new->url}}">Xem thêm</a></div>
					</div>
			
					
				</div>
			
			@endforeach

			<div class="text-center">{{ $news->links() }}</div>

			<!-- End Team -->
		</div>
		<!--// end row -->
	</div>
</div>
<!-- End Team -->
<div class="section-seperator">
</div>

@endsection