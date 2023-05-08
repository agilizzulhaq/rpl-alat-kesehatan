<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePerawatanRuanganRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'txtkode' => 'required|numeric',
            // |unique:pemeliharaans',
            'txtnama' => 'required',
            'txtlokasi' => 'required',
            'txtkondisi' => 'required',
            'txtstatusp' => 'required',
            'txthistory' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'txtkode.required' => 'Oops, :attribute tidak boleh kosong',
            'txtkode.numeric' => 'Oops, kode tidak valid',
            //'txtkode.unique' => 'Oops, kode sudah ada',
            // 'txtkode.min' => 'Oops, kode tidak valid',
            // 'txtkode.max' => 'Oops, kode tidak valid',
            'txtnama.required' => 'Oops, :attribute  tidak boleh kosong',
            'txtlokasi.required' => 'Oops, :attribute  tidak boleh kosong',
            'txtkondisi.required' => 'Pilih salah satu',
            'txthistory.required' => 'Oops, :attribute tidak boleh kosong',
            'txtstatusp.required' => 'Oops, :attribute tidak boleh kosong',
        ];
    }
    public function attributes(): array
    {
        return [
            'txtkode' => 'Kode Alat',
            'txtnama' => 'Nama Alat',
            'txtlokasi' => 'lokasi',
            'txtkondisi' => 'Kondisi Alat',
            'txtstatusp' => 'Status Perawatan',
            'txthistory' => 'Tanggal Terakhir Dirawat',
        ];
    }
}
