@extends('layouts.app')

@section('styles')
	<link rel="stylesheet" type="text/css" href="/packages/lightgallery/css/lightgallery.min.css">
	<link rel="stylesheet" type="text/css" href="/packages/lightgallery/css/lg-transitions.min.css">
@endsection

@section('content')
	<div class="container">
		<div id="light-gallery">
			<!-- <a href="/uploads/1.png">
			    <img width="150px" height="150px" src="/uploads/1.png" />
			</a> -->
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