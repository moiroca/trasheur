@extends('layouts.app')

@section('content')

<div class="container">
	<div class="inner-wrapper">
		<div class="sub-wrapper viewlistings-wrapper">
			<h1>Item Listings</h1>
			<table>	
				<thead>
					<tr>
						<th> Item </th>
						<th> Seller </th>
						<th> Date </th>
						<th> Action </th>
					</tr>
				</thead>
				<tbody>
					@forelse( $posts as $post )
						<tr>
							<td>{{ $post->title }}</td>
							<td>{{ $post->seller->name }} </td>
							<td>{{ $post->created_at }}</td>
							<td>
							<a class="btn btn-primary" href="{{ route('admin.view_user_posts', [ 'item' => $post->id ])}}">View</a>
							</td>
						</tr>
					@empty
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>	

@endsection