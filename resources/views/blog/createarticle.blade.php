@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('storearticle',['post'=>$post_id])}}">
@csrf
<label for ="title">Title</label>
<input id="title" name="title" type="text" />
<label for="content">Content</lable>
<textarea id="content" name="content"></textarea>
<input type="hidden" name="post_id" value="{{$post_id}}"/>
<button type="submit">SUBMIT</button>
</form>
@endsection