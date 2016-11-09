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
					<tr>
						<td> Fan Blade </td>
						<td> John Roca </td>
						<td> Nov 3, 2016 </td>
						<td>
							<button> View </button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>	

@endsection