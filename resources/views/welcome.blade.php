@extends('layouts.app')

@section('content')
<div class="outer-container">
    <div class="inner-wrapper">
        <div class="covertext-wrapper">
            <h1>Trashure</h1>
            <p>One man's trash is another man's treasure</p>
            <a href="{{ route('posts.get_create') }}" class="btn-action">Post Item</a>
        </div>
    </div>
</div>
@endsection
