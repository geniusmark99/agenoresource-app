<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssetRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'uid' => 'required|unique:assets,uid,' . $this->route('asset'),
            'slug' => 'required|unique:assets,slug,' . $this->route('asset'),
            'project_id' => 'required|string|max:255',
            'price' => 'required|string|max:255|min:2',
            'asset_name' => 'required|string|max:255',
            'asset_type' => 'required|string|in:sale,lease,partner',
            'asset_location_details' => 'required|string',
            'asset_information' => 'required|string|in:greenfield,brownfield',
            'pictures.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'video' => 'nullable|string',
            'technical_report' => 'required|string',
            'coordinates' => 'required|string',
            'land_size' => 'required|numeric|min:0',
            'mineral_details' => 'required|string',
            'reserve_deposit' => 'required|string',
            'jorc_report' => 'required|string',
            'opportunity_type' => 'required|string|in:JV or partnership,sale,lease',
            'geological_location' => 'required|string',
            'contact_information' => 'required|string',
            'date_added' => 'date',
            'times_viewed' => 'nullable|integer|min:0',
            'paid' => 'required|boolean',
            'duration_date' => 'required|date',
            'active' => 'required|boolean',
        ];
    }
}
