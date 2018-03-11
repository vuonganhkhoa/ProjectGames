@extends('client.layout.master')
@section('title', $news->title )
@section('content')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="section-seperator">
</div>

<div class="content-md container">
	<div class="row margin-b-20">
		<div class="col-sm-8">
			<h2>{{$news->title}}</h2>
		</div>
	</div>
	<!--// end row -->

	<div class="row text-justify">
		<div class="col-sm-8 sm-margin-b-50">
			<div class="margin-b-30">
				<p></p>
			</div>
			{!! $news->content !!}
		</div>
	</div>
	<!--// end row -->
	
	<div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div>
</div>

@endsection