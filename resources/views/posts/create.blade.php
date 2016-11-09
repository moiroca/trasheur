<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	@if ($errors->has('title'))
		<h1>{{ $errors->first('title') }}</h1>
	@endif
	@if ($errors->has('description'))
		<h1>{{ $errors->first	('description') }}</h1>
	@endif
	<form method="post" action="{{ route('posts.post_create') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" name="title">
		<textarea name="description"></textarea>
		<input type="submit" name="" value="Create Post">
	</form>
</body>
</html>