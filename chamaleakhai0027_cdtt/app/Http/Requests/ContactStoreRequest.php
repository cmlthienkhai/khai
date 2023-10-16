<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{    
    public function authorize():bool
    {
        return true;
    }
    public function rules():array
    {
        return [
            'name' => 'required',
            'metakey' => 'required',
            'metadesc' => 'required'
            
        ];
    }
    public function messages():array
    {
        return [
            'name.required' => 'Vui lòng điền Họ và Tên',
            'metakey.required' => 'Vui lòng điền Mô tả',
            'metadesc.required' => 'Vui lòng điền Từ khóa'
        ];
    }
}
