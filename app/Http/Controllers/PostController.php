<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTag;
use App\User;
use URL;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::getAllPost();
        // return $posts;
        return view('backend.post.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=PostCategory::get();
        $tags=PostTag::get();
        $users=User::get();
        return view('backend.post.create')->with('users',$users)->with('categories',$categories)->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title'=>'string|required',
            'quote'=>'string|nullable',
            'summary'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tags'=>'nullable',
            'added_by'=>'nullable',
            'post_cat_id'=>'nullable',
            'status'=>'required|in:active,inactive'
        ]);

      
/* print_r($data);
exit();
        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/blog'),$image_name);

           $image_path = "/blog/" . $image_name;

    } */

    $data=$request->all();
    if($request->hasFile('photo')){
        $photo = $request->file('photo');
        $image_name = date('YmdHis') . '_' . uniqid() . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path('blog'), $image_name);
        $data['photo'] =  $url = URL::to("/blog/$image_name");
    
    }
   /*  if($data['photo']){
        $data['photo'] = "/blog/" . $image_name;
    } */
  
    $data['title']=$request->title;
        $slug=Str::slug($request->title);
        $count=Post::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        $data['summary']=$request->summary;
        $data['description']=$request->description;
        $data['quote']=$request->quote;
        $data['post_cat_id']=$request->post_cat_id;
      

        $tags=$request->input('tags');
        if($tags){
            $data['tags']=implode(',',$tags);
        }
        else{
            $data['tags']='';
        }
        // return $data;

        $status=Post::create($data);
        if($status){
            request()->session()->flash('success','Post added');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        $categories=PostCategory::get();
        $tags=PostTag::get();
        $users=User::get();
        return view('backend.post.edit')->with('categories',$categories)->with('users',$users)->with('tags',$tags)->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post=Post::findOrFail($id);
         // return $request->all();
         $this->validate($request,[
            'title'=>'string|required',
            'quote'=>'string|nullable',
            'summary'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tags'=>'nullable',
            'added_by'=>'nullable',
            'post_cat_id'=>'nullable',
            'status'=>'required|in:active,inactive'
        ]);

        $data=$request->all();
        if($request->hasFile('photo')){
        $photo = $request->file('photo');
        $image_name = date('YmdHis') . '_' . uniqid() . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path('blog'), $image_name);
        $data['photo'] =  $url = URL::to("/blog/$image_name");
        }
        $data['title']=$request->title;
        $slug=Str::slug($request->title);
        $count=Post::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        $data['summary']=$request->summary;
        $data['description']=$request->description;
        $data['quote']=$request->quote;
        $data['post_cat_id']=$request->post_cat_id;
        $tags=$request->input('tags');
        // return $tags;
        if($tags){
            $data['tags']=implode(',',$tags);
        }
        else{
            $data['tags']='';
        }
        // return $data;

        $status=$post->fill($data)->save();
        if($status){
            request()->session()->flash('success','Post updated');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::findOrFail($id);

        $status=$post->delete();

        if($status){
            request()->session()->flash('success','Post deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting post ');
        }
        return redirect()->route('post.index');
    }
}
