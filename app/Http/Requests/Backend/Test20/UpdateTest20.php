<?php
  namespace App\Http\Requests\Backend\Test20;
  
  use Illuminate\Foundation\Http\FormRequest;
  use Illuminate\Support\Facades\Gate;
  use Illuminate\Validation\Rule;


  class UpdateTest20 extends FormRequest{

        /**
        * Determine if the user is authorized to make this request.
        *
        * @return bool
        */

        public function authorize()
        {
            return true;
            //   return Gate::allows('admin.test20.edit', $this->test20);
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