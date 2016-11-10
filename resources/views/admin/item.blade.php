@extends('layouts.app')

@section('styles')
	<link rel="stylesheet" type="text/css" href="/packages/lightgallery/css/lightgallery.min.css">
	<link rel="stylesheet" type="text/css" href="/packages/lightgallery/css/lg-transitions.min.css">
@endsection

@section('content')
	<div class="container">
		<div class="inner-wrapper viewpost-wrapper">
			<div class="col-lg-8 main-wrapper">
				<header>
					<h2 name="title">{{ $post->title }}</h2>
					<ul>
						<li><a href="javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i> <b> {{ $post->seller->name }} </b> </a></li>
						<li><a href="javascript:void(0)"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $post->seller->location }}</a></li>
					</ul>
				</header>	
				<div class="form-group">
					<div name="gallery" class="coverPhoto-wrapper">
						<img src="{{ $post->images()->first()->imageFullUrl() }}">
					</div>
				</div>
				<div class="form-group desc-wrapper">
					<label>Description</label>
					<p>{{ $post->description }}</p>
				</div>
				<div class="form-group desc-wrapper">
					<label>Contact</label>
					<ul>
						<li><a href="mailto:{{ $post->seller->email }}"><i class="fa fa-envelope" aria-hidden="true"></i> {{ $post->seller->email }} </a></li>
						<li><a href="javascript:void(0)"><i class="fa fa-address-card" aria-hidden="true"></i> {{ $post->seller->contact }}</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 side-wrapper">
				<div id="light-gallery">
					@forelse( $post->images as $image )
						<a href="{{ $image->imageFullUrl() }}">
					    <img src="{{ $image->imageFullUrl() }}" />
					</a>
					@empty
					@endforelse
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script type="text/javascript" src="/js/lib/jquery-3.1.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="/packages/lightgallery/js/lightgallery.min.js"></script>
	<script type="text/javascript">
	    $(document).ready(function() {
	        $("#light-gallery").lightGallery();
	    });
	</script>
@endsection