@section('styles')
 <link href="{{ asset('css/showartpage.css') }}" rel="stylesheet">
@endsection
@foreach($articles as $article)
<h2 class="titleheading">{{$article->title}}</h2>
<p class="titlecontent">{{$article->content}}</p>
@endforeach