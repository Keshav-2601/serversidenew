<?Php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests;

class ArticleController extends Controller{
    public function store(Request $request,$post){
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        Article::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'post_id'=>$post
        ]);
       
        // return redirect('blog/show');
        return redirect()->route('storearticle',['post'=>$post]);
    }
    public function show(){
          return view('blog/createarticle');
    }
    
} 

