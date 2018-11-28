<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TermRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_term'=>'max:15|min:2',
            'category_name'=>'min:8|max:50',
            'id_category'=>'required',
            'slug'=>'required'
        ];
    }

    public function messages(){
        return [
            'id_term.max'=>'Mã danh mục bạn nhập phải nhỏ hơn 15 ký tự !!!',
            'id_term.min'=>'Mã danh mục bận nhập phải lớn hơn 2 ký tự !!!',
            'category_name.max'=>'Tên danh mục bạn nhập phải nhỏ hơn 50 ký tự !!!',
            'category_name.min'=>'Tên danh mục bạn nhập phải nhỏ hơn 8 ký tự !!!',
            'id_category.required'=>'Bạn chưa chọn danh mục thuộc phần nào !!!',
            'slug.required'=>'Bạn chưa chọn nhập đường dẫn !!!'
        ];
    }
}
