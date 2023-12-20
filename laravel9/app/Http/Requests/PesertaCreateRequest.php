<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PesertaCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama' => 'unique:peserta_magang|required',
            'asal' => 'required',
            'nohp' => 'unique:peserta_magang|max:12|required',
        ];
    }

    public function attributes()
    {
        return [
            'nohp' => 'Nomer Handphone',
            'asal' => 'Asal Sekolah',
        ];
    }

    public function messages()
    {
        return[
            'nama' => 'Form nama wajib diisi !',
            'nama' => 'Nama Peserta sudah ada !',
            'asal' => 'Form asal sekolah wajib diisi !',
            'nohp' => 'Form nomer handphone wajib diisi !',
            'nohp' => 'Nomer handphone sudah ada !',
            'nohp' => 'Nomer handphone jangan lebih dari :max !',
        ];
    }
}
