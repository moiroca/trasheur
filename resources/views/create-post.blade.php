@extends('layouts.app')

@section('content')

<div class="container">
	<div class="sub-container">
		<h1>Create Post</h1>
		<nav class="step-nav">
			<a href="">Basics</a>
			<a href="">Post</a>
			<a href="">Share</a>
		</nav>

		<div class="sub-wrapper step1">
			<h2>Step 1</h2>
			<p>Tell us about yourself.</p>
			<div class="form-group">
				<label>Full Name</label>
				<input type="text" name="" class="form-control">
			</div>
			<div class="form-group">
				<label>Location</label>
				<input type="text" name="" class="form-control">
			</div>
			<div class="form-group">
				<label>Email Address</label>
				<input type="email" name="" class="form-control">
			</div>
			<div class="form-group">
				<label>Contact No.</label>
				<input type="text" name="" class="form-control">
			</div>
			<footer>
				<button class="pull-right">Save and Next</button>
			</footer>
		</div>

		<div class="sub-wrapper step2">
			<h2>Step 2</h2>
			<p>Tell us about your Post.</p>
			<div class="form-group">
				<label>Post Title</label>
				<input type="text" name="" class="form-control">
			</div>
			<div class="form-group">
				<label>Location</label>
				<input type="text" name="" class="form-control">
			</div>
			
			<div class="form-group">
				<div class="row">
					<select>
						<option>- Choose Status -</option>
						<option>Disposal</option>
						<option>Needed</option>
					</select>
				</div>
			</div>	

			<div class="form-group">
				<label>Discription</label>
				<textarea class="form-control" rows="5" cols="50"></textarea>
			</div>
			<footer>
				<button class="pull-right">Save and Next</button>
			</footer>
		</div>

		<div class="sub-wrapper step2">
			<h2>Step 3</h2>
			<p>Share your Post!</p>
			<ul class="step-nav">
				<li>
					<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<span>Share</span>	
				</li>
				<li>
					<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<span>Tweet</span>
				</li>
				<li><a href=""></a></li>
			</ul>
			<footer>
				<button class="pull-right">Next</button>
				<button class="pull-right">Continue</button>
			</footer>
		</div>

	</div>	
</div>	

@endsection