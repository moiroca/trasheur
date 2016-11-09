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
					<h2 name="title">What is Lorem Ipsum?</h2>
					<ul>
						<li><a href=""><i class="fa fa-user" aria-hidden="true"></i> Toper Cinco</a></li>
						<li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> Tacloban City</a></li>
					</ul>
				</header>	
				<div class="form-group">
					<div name="gallery" class="coverPhoto-wrapper">
						<img src="images/trash.jpg">
					</div>
				</div>
				<div class="form-group desc-wrapper">
					<label>Description</label>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
			<div class="col-lg-4 side-wrapper">
				<div id="light-gallery">
					<a href="/uploads/1.png">
					    <img width="150px" height="150px" src="/uploads/1.png" />
					</a>
				</div>
				<button class="btn-purhcase btn-action">Purchase</button>
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