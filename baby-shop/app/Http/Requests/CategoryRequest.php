<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'id_category'=>'max:15|required',
            'name_category'=>'min:8|max:50|required',
        ];
    }
    public function messages(){
        return[
            'name_category.min'=>'Tên danh mục bạn nhập có ký tự lớn hơn 8 ký tự !!!',
            'name_category.max'=>'Tên danh mục bạn nhập có ký tự nhỏ hơn 50 ký tự !!!',
            'name_category.required'=>'Mời bạn nhập tên danh mục !!!',
            'id_category.max'=>'Mã danh mục bạn nhập phải nhỏ hơn 15 ký tự',
            'id_category.required'=>'Mời bạn nhập mã danh mục !!!',
        ];
    }
}
