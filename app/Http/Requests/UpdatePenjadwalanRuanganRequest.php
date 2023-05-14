<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePenjadwalanRuanganRequest extends FormRequest
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
            'txtnama' => 'required',
            'txtjenis' => 'required',
            'txtlokasi' => 'required',
            'txtnamaorang' => 'required',
            'txtkapasitas' => 'required|numeric',
            'txtstatus' => 'required',
            'txttanggal' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'txtnama.required' => 'Oops, :attribute  tidak boleh kosong',
            'txtjenis.required' => 'Oops, :attribute tidak boleh kosong',
            'txtlokasi.required' => 'Oops, :attribute  tidak boleh kosong',
            'txtnamaorang.required' => 'Oops, :attribute tidak boleh kosong',
            'txtkapasitas.required' => 'Oops, :attribute tidak boleh kosong',
            'txtkapasitas.numeric' => 'Oops, :attribute harus di isi angka',
            'txtstatus.required' => 'Oops, :attribute tidak boleh kosong',
            'txttanggal.required' => 'Oops, :attribute tidak boleh kosong',

        ];
    }
    public function attributes(): array
    {
        return [
            'txtnama' => 'Nama Ruangan',
            'txtjenis' => 'Jenis Ruangan',
            'txtlokasi' => 'lokasi',
            'txtnamaorang' => 'Nama Peminjam',
            'txtkapasitas' => 'Kapasitas Ruangan',
            'txtstatus' => 'Status',
            'txttanggal' => 'Tanggal Dipinjam',

        ];
    }
}
