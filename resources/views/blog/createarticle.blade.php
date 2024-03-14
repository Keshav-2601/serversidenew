@extends('layouts.app')
@section('styles')
 <link href="{{ asset('css/articleform.css') }}" rel="stylesheet">
@endsection
@section('content')
<form class="articleform" method="POST" action="{{route('storearticle')}}">
@csrf
<label class="l1"  for ="title">Title</label>
<input id="title" name="title" type="text" />
<label class="l1"  for="content">Content</lable>
<textarea id="content" name="content"></textarea>
<input type="hidden" name="post_id" value="{{session('globalvar')}}"/>
<button type="submit">SUBMIT</button>
</form>
@endsection