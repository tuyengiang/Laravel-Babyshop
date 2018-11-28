<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ArticlesRequest;
use App\Http\Requests\CateArticleRequest;
use App\Article;
use App\CategoryArticle;

class ArticleController extends Controller
{
    public function show_category_post(){
        $category=DB::table('category_posts')->get();
        return view('bb-admin.posts.add-category-post',compact('category'));
    }

    public function add_category_post(Request $request,CateArticleRequest $caterequest){
        $all=$request->all();
        $title=$all['title'];
        $slug=$all['slug'];
        $content=$all['content'];
        DB::table('category_posts')->insert(['title'=>$title,'slug'=>$slug,'content'=>$content]);
        Session::flash('flash','Thêm chuyên mục thành công !!!');
        return redirect()->route('show-category-post');
    }

    public function delete_category_post($id){
        $delete=CategoryArticle::find($id);
        $delete->delete();
        Session::flash('flash','Xóa chuyên mục thành công !!!');
        return redirect()->route('show-category-post');
    }

    public function edit_category_post($id){
        $category=CategoryArticle::find($id);
        $all=Db::table('category_posts')->get();
        return view('bb-admin.posts.edit-category-post',compact('category','all'));
    }

    public function update_category_post($id,CateArticleRequest $request){
        $category=CategoryArticle::find($id);
        DB::table('category_posts')->where('id',$id)
        ->update(['title'=>$request->get('title'),'slug'=>$request->get('slug'),'content'=>$request->get('content')]);
        Session::flash('flash','Sửa chuyên mục thành công !!!');
        return redirect()->route('show-category-post');
    }


    /**post */

    public function all_post(){
        $post=DB::table('posts')
        ->join('category_posts','posts.id_category','=','category_posts.id')
        ->select('posts.*','category_posts.title as name')->get();

        return view('bb-admin.posts.all-posts',compact('post'));
    }
    public function show_form_post(){
        $category=DB::table('category_posts')->get();
        return view('bb-admin.posts.add-posts',compact('category'));
    }

    public function insert_form_post(Request $request,ArticlesRequest $arequest){
        if($request->hasFile('images')){
            $all=$request->all();
            $title=$all['title'];
            $slug=$all['slug'];
            $content=$all['content'];
            $excerpt=$all['excerpt'];
            $category=$all['id_category'];
            $images=$request->file('images');
            $name=time().'.'.$images->getClientOriginalExtension();
            $path=public_path('/gallery/images_posts');
            $images->move($path,$name);
            DB::table('posts')
            ->insert(['title'=>$title,'slug'=>$slug,'content'=>$content,'excerpt'=>$excerpt,'images'=>$name,'id_category'=>$category]);
            Session::flash('flash','Thêm bài viết thành công !!!');
            return redirect()->route('add-post');
        }
    }

    public function delete_posts($id){
        $delete=Article::find($id);
        $delete->delete();
        Session::flash('flash','Xóa bài viết thành công !!!');
        return redirect()->route('add-post');
    }
    public function show_edit_posts($id){
        $post=Article::find($id);
        $category=DB::table('category_posts')->get();
        return view('bb-admin.posts.edit-posts',compact('post','category'));
    }

    public function update_posts($id,ArticlesRequest $request){
        if($request->hasFile('images')){
            $post=Article::find($id);
            $images=$request->file('images');
            $name=time().'.'.$images->getClientOriginalExtension();
            $path=public_path('/gallery/images_posts');
            $images->move($path,$name);
            DB::table('posts')->where('id',$id)
            ->update(['title'=>$request->get('title'),'slug'=>$request->get('slug'),'content'=>$request->get('content'),'excerpt'=>$request->get('excerpt'),'id_category'=>$request->get('id_category'),'images'=>$name]);
            Session::flash('flash','Sửa bài viết thành công !!!');
            return redirect()->route('show_posts');
        }

    }
}
