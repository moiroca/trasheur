@extends('layouts.app')

@section('content')

<div class="container">
	<div class="inner-wrapper">
		<div class="sub-wrapper viewlistings-wrapper">
			<h1>Item Listings</h1>
			<table>	
				<thead>
					<tr>
						<th>Item</th>
						<th>Seller</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Fan Blade</th>
						<th>John Roca</th>
						<th>Nov 3, 2016</th>
						<th><button>View</button></th>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>	

@endsection