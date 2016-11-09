@extends('layouts.app')

@section('content')
<div class="homepage-wrapper">
	<div class="outer-container">

	    <div class="inner-wrapper">
	    	<div class="screen"></div>
	        <div class="covertext-wrapper">
	            <h1>Trashure</h1>
	            <p>One man's trash is another man's treasure</p>
	            @if($isSeller)
		            <a href="{{ route('posts.get_create') }}" class="btn-action">Post an Item</a>
		        @endif
	        </div>
	    </div>
	</div>
@endsection
