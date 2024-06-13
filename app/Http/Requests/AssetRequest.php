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
            // 'uid' => 'required|unique:assets,uid,' . $this->route('asset'),
            // 'project_id' => 'required|string|max:255',
            'asset_name' => 'required|string|max:255',
            'asset_type' => 'required|string|in:sale,lease,partner,equipment',
            'asset_location_details' => 'required|string',
            'asset_information' => 'required|string',
            'pictures.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000',
            'technical_report' => 'required|string',
            'price' => 'required|string|max:255|min:2',
            'coordinates' => 'required|string',
            'land_size' => 'required|numeric|min:0',
            'mineral_details' => 'required|string',
            'reserve_deposit' => 'required|string',
            'jorc_report' => 'required|string',
            'opportunity_type' => 'required|string|in:JV or partnership,sale,lease',
            'geological_location' => 'required|string',
            // 'contact_information' => 'required|string',
            'date_added' => 'date',
            'paid' => 'nullable|boolean',
            'plan' => 'required|in:Free or Bronze,Silver,Gold,Diamond,Platinum',
            'duration' => 'required|string',
            // 'slug' => 'required|unique:assets,slug,' . $this->route('asset'),
            // 'active' => 'required|boolean',
        ];
    }
}
