<?Php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests;

class ArticleController extends Controller{

    protected $glovabvar;
    public function __construct(){
        $this->globalvar =null;
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $postid=session('globalvar');
        Article::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'post_id'=>$postid
        ]);
       
         return redirect('blog/show');
        
    }
    public function show($postid){
        session(['globalvar'=>$postid]);
          return view('blog/createarticle',['postid'=>$postid]);
    }
    
} 

