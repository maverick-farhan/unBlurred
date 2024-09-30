<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// Admin Validation, Authentication and Middleware to retreive Admin features
class AuthController extends Controller
{
    public function loginView(){
        return view('admin.login');
    }
    public function registerView(){
        return view('admin.register');
    }
    public function admin(Request $req){
        $req->validate([
            'name'=>'required',
            'password'=>'required',
        ]);
        $admin = DB::table('auths')->insert([
            'name'=>trim($req->name),
            'password'=>trim(Hash::make($req->password)),
        ]);
        return redirect()->route('admin.login');
    }
    public function login(Request $req){
        $credentials = $req->validate([
            'name'=>'required',
            'password'=>'required',
        ]);
        Hash::make($credentials["password"]); 
        if(Auth::attempt($credentials)){
            return redirect()->route('admin.panel');
        }
    }
    public function panel(){
        if(Auth::check()){
            $posts = DB::table('posts')->get();
            return view('admin.panel',compact('posts'));
        }else{
            return view('admin.login');
        }
    }
    
    public function editPost(string $id){
        $post = DB::table('posts')->where('id',$id)->get();
        foreach($post as $edit){
            return view('admin.editpost',compact('edit'));
        }
    }

public function update(Request $req,string $id){
    $post = DB::table('posts')->where('id',$id)->get();
    $imagefilepath = public_path('images/'.$post[0]->image);

if(file_exists($imagefilepath)) {
    @unlink($imagefilepath);
}
$image = $req->file('image');
        $image_ext = $image->getClientOriginalExtension();
        $imagerandomName = date('Ymdhis').Str::random(10);
        $imagename = strtolower($imagerandomName).'.'.$image_ext;
        $image->move('images/',$imagename);

$posts = DB::table('posts')->where('id','=',$id)->get();
$id = $posts[0]->id;
    $edit = DB::table('posts')
    ->where('id','=',$id)
    ->update([
        'title'=>trim($req->title),
        'author'=>trim($req->author),
        'image'=>$imagename,
        'category'=>trim($req->category),
        'keywords'=>trim($req->keywords),
        'credit'=>trim($req->credit),
        'article'=>trim($req->article),
        'references'=>trim($req->references),
        'created_at'=>now(),
        'updated_at'=>now()
    ]);
    // foreach($posts as $d){
    //     if($post){
    //         return redirect()->route('admin.panel',compact("d"));
    //     }          
    // }
        return redirect()->route("admin.panel");
}

    public function delete(string $id){
        $posts = DB::table('posts')->where('id',$id)->get();
        $imagefilepath = public_path('images/'.$posts[0]->image);
    if(file_exists($imagefilepath)) {
        @unlink($imagefilepath);
        DB::table('posts')->where('id',$id)->delete();
        return redirect()->route('admin.panel')->with('status','Your Biomini link successfully deleted');
    }
    return redirect()->route('admin.panel')->with('status','Your Biomini link successfully deleted');

}
}
