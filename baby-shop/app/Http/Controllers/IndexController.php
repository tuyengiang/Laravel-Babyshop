<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category_Taxonomy;
use App\CategoryTerm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    /**show_index */
    public function show_index(){
        $category=DB::table('category_taxonomy')->get();
        $cate_term=DB::table('tabe_category_terms')->get();
        $post=DB::table('posts')->paginate(4);
        return view('index',compact(['category','cate_term','post']));
    }

    public function show_category_product($slug){
        $category=Category_Taxonomy::find($slug);
    }
    public function show_category_term($slug){
        $category=CategoryTerm::find($slug);
    }
}
