<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticlesRequest extends FormRequest
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
            'title'=>'min:10|max:100',
            'excerpt'=>'min:10|max:100',
            'slug'=>'min:5|max:254',
            'images'=>'image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }

    public function messages(){
        return [
            'title.min'=>'Tên bài viết bạn nhập phải lớn hơn 10 ký tự !!!',
            'title.max'=>'Tên bài viết bạn nhập phải nhỏ hơn 100 ký tự !!!',
            'excerpt.min'=>'Nội dung tóm tắt bạn nhập phải lớn hơn 10 ký tự !!!',
            'excerpt.max'=>'Nội dung tóm tắt nhập phải nhỏ hơn 100 ký tự !!!',
            'slug.min'=>'Đường dẫn bạn nhập bạn nhập phải lớn hơn 10 ký tự !!!',
            'images.mimes'=>'Ảnh đại diện của bạn phải ở dạng jpeg,jpg,png,gif !!!',
            'images.max'=>'Hình ảnh có size lớn hơn 2MB !!!'
        ];
    }
}
