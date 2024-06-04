<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class Asset extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id', 'uid', 'project_id', 'asset_name', 'asset_type',
        'asset_location_details', 'asset_information', 'pictures',
        'video', 'technical_report', 'price', 'coordinates',
        'land_size', 'mineral_details', 'reserve_deposit',
        'jorc_report', 'opportunity_type', 'geological_location',
        'contact_information', 'date_added', 'duration_date', 'active',
        'times_viewed', 'paid', 'slug',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function casts(): array
    {
        return [
            'paid' => 'boolean',
        ];
    }


    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => number_format($value, 2, '.', '')
        );
    }


    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->asset_name . '-' . Str::random(6));
            }
        });
    }

    // public function getPriceAttribute($value)
    // {
    //     return number_format($value, 2, '.', '');
    // }
}
