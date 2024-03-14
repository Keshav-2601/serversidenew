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
        //dd($request->all());
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'post_id'=>'required'
        ]);
        $postid=intval(session('globalvar'));
        // dd(session()->all());
        Article::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'post_id'=>$postid
        ]);
       
         return view('blog/index');
        
    }
    public function show($postid){
        session(['globalvar'=>$postid]);
          return view('blog/createarticle',['postid'=>$postid]);
    }
    
} 

