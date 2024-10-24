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
        'user_id', //done
        'uid', //done
        'project_id', //done
        'likes', //done
        'dislikes', //done
        'asset_type', //done
        'asset_type_value', //done
        'asset_qty', //done
        'slug', //done
        'pictures', //done
        'asset_location_details', //done
        'asset_information', //done
        'price', //done
        'land_size', //done
        'mineral_details', //done
        'reserve_deposit', //done
        'plan', //done
        'duration', //done
        'geological_location', //done
        'contact_information', //done
        'date_added',
        'click_rate',
        'active',
        'view_count',
        'date_activated',
        'date_deactivated',
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDateActivatedAttribute($value)
    {
        return $value ? \Carbon\Carbon::parse($value)->format('F d, Y H:i A') : null;
    }

    public function getDateAddedAttribute($value)
    {
        return $value ? \Carbon\Carbon::parse($value)->format('F d, Y H:i A') : null;
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
            $asset->slug = static::generateSlug($asset->asset_type_value);
        });

        static::saving(function ($asset) {
            if ($asset->asset_type_value === 'land') {
                if ($asset->asset_qty > 1) {
                    $asset->asset_qty = $asset->asset_qty . ' plots';
                } else {
                    $asset->asset_qty = $asset->asset_qty . ' plot';
                }
            }
        });
    }

    public static function generateSlug($name)
    {
        $slug = Str::slug($name);
        $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }
}
