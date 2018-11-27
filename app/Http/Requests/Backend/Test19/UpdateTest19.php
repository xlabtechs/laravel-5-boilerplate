<?php
  namespace App\Http\Requests\Backend\Test19;
  
  use Illuminate\Foundation\Http\FormRequest;
  use Illuminate\Support\Facades\Gate;
  use Illuminate\Validation\Rule;


  class UpdateTest19 extends FormRequest{

        /**
        * Determine if the user is authorized to make this request.
        *
        * @return bool
        */

        public function authorize()
        {
            return true;
            //   return Gate::allows('admin.test19.edit', $this->test19);
        }

        /**
        * Get the validation rules that apply to the request.
        *
        * @return array
        */

        public function rules()
        {

           return [
            'name'=>'required',
            'status'=>'required',
            'zipcode'=>'nullable',

            ];
        }

}