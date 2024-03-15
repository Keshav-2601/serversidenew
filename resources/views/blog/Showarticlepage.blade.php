
@section('styles')
 <link href="{{ asset('css/showartpage.css') }}" rel="stylesheet">
@endsection
@foreach($articles as $article)
<h2>{{$article->title}}</h2>
<p>{{$article->content}}</p>
@endforeach