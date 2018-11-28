<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateArticleRequest extends FormRequest
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
            'title'=>'min:2|max:100',
            'content'=>'min:2|max:100',
            'slug'=>'min:2|max:254'
        ];
    }
    public function messages(){
        return [
            'title.min'=>'Tên chuyên mục bạn nhập phải từ 2 ký tự trở nên !!!',
            'title.max'=>'Tên chuyên mục bạn nhập phải dưới 15 ký tự trở nên',
            'content.min'=>'Giới thiệu chuyên mục bạn nhập phải từ 2 ký tự trở nên !!!',
            'content.max'=>'Giới thiệu chuyên mục bạn nhập phải dưới 15 ký tự trở nên',
            'slug.min'=>'Đường dẫn chuyên mục bạn nhập phải từ 2 ký tự trở nên !!!',
            'slug.max'=>'Đường dẫn mục bạn nhập phải dưới 15 ký tự trở nên',
        ];
    }
}
