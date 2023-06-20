<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'first_name' => 'required|min:5',
            'last_name' => 'required|min:5',
            'email' => 'required|email|min:5',
            'job_title' => 'required|min:5',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:1024'
        ];
    }
    public function messages() 
    {
        return ['first_name.required' => 'First Name လိုပါတယ်ခင်ဗျ',
                'first_name.min' => 'First Name အနည်းဆုံးစာလုံးရေငါးလုံးလိုပါတယ်ခင်ဗျ',
                'last_name.required' => 'Last Name လိုပါတယ်ခင်ဗျ',
                'last_name.min' => 'Last Name အနည်းဆုံးစာလုံးရေငါးလုံးလိုပါတယ်ခင်ဗျ',
                'email.required' => 'Email လိုပါတယ်ခင်ဗျ',
                'email.min' => 'Email အနည်းဆုံးစာလုံးရေငါးလုံးလိုပါတယ်ခင်ဗျ',
                'job_title.required' => 'Job Title လိုပါတယ်ခင်ဗျ',
                'job_title.min' => 'Job Title အနည်းဆုံးစာလုံးရေငါးလုံးလိုပါတယ်ခင်ဗျ',
                'image.mimes' => 'imageဖိုင်ဖြစ်ဖို့လိုပါတယ်',
                'image.require' => 'imageဖိုင်ထည့်ဖို့လိုပါတယ်',
                'image.max' => 'imageဖိုင်size1MBဖြစ်ဖို့လိုပါတယ်',
        ];
    }
}
