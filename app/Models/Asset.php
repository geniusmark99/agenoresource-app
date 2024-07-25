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
        'asset_qty', 'asset_capacity', 'slug', 'pictures',
        'video', 'asset_location_details', 'asset_information',
        'technical_report', 'price', 'coordinates',
        'land_size', 'mineral_details', 'reserve_deposit',
        'jorc_report', 'opportunity_type', 'geological_location',
        'contact_information',  'active', 'plan', 'duration',
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // protected function pictures(): Attribute
    // {

    //     // $pictures = json_decode($value, true) ?? [];
    //     // return is_array($pictures) && count($pictures) > 0 ? $pictures[0] : null;
    //     // return Attribute::make(
    //     //     set: fn ($value) => json_decode($value, true),
    //     // );
    // }


    public function getPicturesAttribute($value)
    {
        return json_decode($value, true) ?? [];
    }

    protected function getActiveAttribute($value)
    {
        // return $this->user ? $this->user->active : false;
        return (bool) $value;
    }



    protected function casts(): array
    {
        return [
            'paid' => 'boolean',
        ];
    }


    protected function getPriceAttribute($value)
    {
        return number_format($value, 0, '.', '');
    }


    public static function boot()
    {
        parent::boot();

        static::creating(function ($asset) {
            $asset->slug = static::generateSlug($asset->asset_name);
        });
    }

    public static function generateSlug($name)
    {
        $slug = Str::slug($name);
        $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }
}
