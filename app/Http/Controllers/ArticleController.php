<?Php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller{
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        Article::create([
            'title'=>$request->title,
            'content'=>$request->content,
        ]);

    }
    public function show(){
          return view('blog/createarticle');
    }

} 

