<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\TermRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Category_Taxonomy;
use App\CategoryTerm;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class ProductController extends Controller
{
    /**product */
    public function show_add_product(){
        return view('bb-admin.products.add-product');
    }
    public function all_product(){
        return view('bb-admin.products.all-product');
    }

    /**category */
    public function show_add_category(){
        $category=Category_Taxonomy::all();
        return view('bb-admin.products.add-category',compact('category'));
    }
    public function add_category_product(Request $request,CategoryRequest $caterequest){
        $all=$request->all();
        $id_category=$all["id_category"];
        $category_name=$all["name_category"];
        $slug=$all["slug"];
        DB::table('category_taxonomy')->insert(['id_category'=>$id_category,'name_category'=>$category_name,'slug'=>$slug]);
        Session::flash('flash','Thêm danh mục thành công');
        return redirect()->route('add-category');
    }

    public function destroy_category($id){
        $category=Category_Taxonomy::find($id);
        $category->delete();
        Session::flash('flash',"Xóa danh mục thành công !!!");
        return redirect()->route('add-category');
    }

    public function edit_category($id){
        $edit=Category_Taxonomy::find($id);
        $category=Category_Taxonomy::all();
        return view('bb-admin.products.edit-category',compact(['category','edit']));
    }
    public function update_category($id,CategoryRequest $request){
        $category=Category_Taxonomy::find($id);
        DB::table('category_taxonomy')->where('id',$id)->update(['id_category'=>$request->get('id_category'),'name_category'=>$request->get('name_category'),'slug'=>$request->get('slug')]);
        Session::flash('flash','Sửa danh mục thành công !!!');
        return redirect()->route('add-category');
    }


    /**category terms */

    public function show_add_term(){
        $category=DB::table('tabe_category_terms')
        ->join('category_taxonomy','tabe_category_terms.id_category','=','category_taxonomy.id_category')
        ->select('tabe_category_terms.*','category_taxonomy.name_category')->get();
        $big=Category_Taxonomy::all();
        return view('bb-admin.products.add-term',compact(['category','big']));
    }

    public function Insert_term(Request $request,TermRequest $term){
        $all=$request->all();
        $id_term=$all['id_term'];
        $category_name=$all['category_name'];
        $id_category=$all["id_category"];
        $slug=$all["slug"];
        DB::table('tabe_category_terms')->insert(['id_term'=>$id_term,'category_name'=>$category_name,'id_category'=>$id_category,'slug'=>$slug]);
        Session::flash('flash','Thêm danh mục thành công !!!');
        return redirect()->route('show_terms');
    }

    public function delete_term($id){
        $delete=CategoryTerm::find($id);
        $delete->delete();
        Session::flash('flash','Xóa danh mục thành công !!!');
        return redirect()->route('show_terms');
    }

    public function show_term_edit($id){
        $category=DB::table('tabe_category_terms')
        ->join('category_taxonomy','tabe_category_terms.id_category','=','category_taxonomy.id_category')
        ->select('tabe_category_terms.*','category_taxonomy.name_category')->get();
        $edit=CategoryTerm::find($id);
        $big=Category_Taxonomy::all();
        return view('bb-admin.products.edit-term',compact(['category','edit','big']));
    }
    
    public function update_term($id,TermRequest $termrequest){ 
        $category=CategoryTerm::find($id);
        DB::table('tabe_category_terms')->where('id',$id)->update(['id_term'=>$termrequest->get('id_term'),'category_name'=>$termrequest->get('category_name'),'id_category'=>$termrequest->get('id_category'), 'slug'=>$termrequest->get('slug')
        ]);
        Session::flash('flash','Sửa danh mục thành công !!!');
        return redirect()->route('show_terms');

    }
}
