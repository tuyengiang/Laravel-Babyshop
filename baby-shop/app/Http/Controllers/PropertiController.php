<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WeightReuqest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\ProductWeight;

class PropertiController extends Controller
{
    public function add_weight(){
        $weight=DB::table('product_weight')->get();
        return view('bb-admin.properties.add-weight',compact('weight'));
    }

    public function insert_weight(Request $request,WeightReuqest $weightrequest){
        $all=$request->all();
        $age=$all['age'];
        $height=$all['height'];
        $size=$all['size'];
        $weight=$all['weight'];
        DB::table('product_weight')->insert(['age'=>$age,'height'=>$height,'size'=>$size,'weight'=>$weight]);
        Session::flash('flash','Thêm cân nặng thành công !!!');
        return redirect()->route('add_weight');
    }

    public function delete_weight($id_weight){
        $delete=ProductWeight::find($id_weight);
        $delete->delete();
        Session::flash('flash','Xóa cân nặng thành công !!!');
        return redirect()->route('add_weight');
    }

    public function edit_weight($id){
        $weight=ProductWeight::find($id);
        $all=DB::table('product_weight')->get();
        return view('bb-admin.properties.edit-weight',compact(['weight','all']));
    }

    public function update_weight($id,WeightReuqest $request){
        $weight=ProductWeight::find($id);
        DB::table('product_weight')->where('id',$id)
        ->update(['age'=>$request->get('age'),'height'=>$request->get('height'),'weight'=>$request->get('weight'),'weight'=>$request->get('weight')]);
        Session::flash('flash','Sửa danh mục thành công !!!');
        return redirect()->route('add_weight');
    }
}
