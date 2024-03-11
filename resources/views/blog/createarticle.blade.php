@extends('layouts.app')

@section('content')
<form method="Post" action="{{route(storearticle)}}">
<label for ="title">Title</label>
<input id="title" type="text" />
<label for="content">Content</lable>
<input id="content" type="longtext">
<button type="submit"></button>
</form>
@endsection