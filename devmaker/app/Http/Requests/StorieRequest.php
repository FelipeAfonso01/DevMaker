<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorieRequest extends FormRequest
{
  public function authorize()
  {
      return true;
  }


  public function rules()
  {
      return [
          'title' => 'required|min:3',
          'description' => 'required|max:250'

      ];
  }
  public function messages()
  {
      return [
          'required' => 'O campo :attribute é obrigatório.',
      ];
  }
}
