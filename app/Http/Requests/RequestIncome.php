<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestIncome extends FormRequest
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
            'nominal' => 'required|integer',
            'keterangan' => 'required|max:255',
            'kategori' => 'required|max:255',
            'tanggal_pemasukan' => 'required|date'
        ];
    }
}
