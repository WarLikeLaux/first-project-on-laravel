<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
          'name' => 'required',
          'email' => 'required|email',
          'subject' => 'required|min:5|max:50',
          'message' => 'required|min:15|max:500'
        ];
    }

    public function attributes()
    {
        return [
        'name' => 'Имя',
        'email' => 'Почта',
        'subject' => 'Тема сообщения',
        'message' => 'Сообщение'
      ];
    }

    public function messages()
    {
        return [
        'required' => 'Поле ":attribute" является обязательным',
        'email' => 'Поле ":attribute" должно быть валидным почтовым адресом',
        'min' => 'Поле ":attribute" должно состоять минимум из :min символов',
        'max' => 'Поле ":attribute" должно состоять не более чем из :max символов'
      ];
    }
}
