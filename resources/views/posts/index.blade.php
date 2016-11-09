@extends('layouts.app')

@section('content')

<div class="profile-wrapper">
	<div class="inner-wrapper">
		<h2>{{ Auth::user()->name }}</h2>
		<span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ Auth::user()->location }} </span>
	</div>
	
	<div class="sub-wrapper">
		<div class="inner-wrapper">

			@forelse( $posts as $post )
				<div class="item-card">
					<header>
						<img src="{{ $post->images()->first()->imageFullUrl() }}">
						<span class="hidden">Sold</span>
					</header>
					<footer>
						<a>{{ $post->title }}</a>
						<p>{{ $post->description }}</p>
					</footer>
				</div>
			@empty
			@endforelse
		</div>
	</div>
</div>

@endsection