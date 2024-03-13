@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('storearticle')}}">
@csrf
<label for ="title">Title</label>
<input id="title" name="title" type="text" />
<label for="content">Content</lable>
<textarea id="content" name="content"></textarea>
<input type="hidden" name="post_id" value="{{session('globalvar')}}"/>
<button type="submit">SUBMIT</button>
</form>
@endsection