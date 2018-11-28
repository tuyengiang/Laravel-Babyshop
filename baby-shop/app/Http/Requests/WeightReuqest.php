<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeightReuqest extends FormRequest
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
           'age'=>'min:2',
           'height'=>'min:2',
           'weight'=>'min:2',
           'size'=>'min:2'
        ];
    }

    public function messages(){
        return [
            'age.min'=>'Độ tuổi bạn nhập phải có ký tự lớn hơn 1 !!!',
            'height.min'=>'Chiều cao bạn nhập phải có ký tự lớn hơn 1 !!!',
            'weight.min'=>'Cân nặng bạn nhập phải có ký tự lớn hơn 1 !!!',
            'size.min'=>'Size bạn nhập phải có ký tự lớn hơn 1 !!!',
        ];
    }
}
