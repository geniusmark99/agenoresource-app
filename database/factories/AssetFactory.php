<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AssetFactory extends Factory
{
    protected $model = Asset::class;

    public function definition()
    {

        $user = User::factory()->create();
        $durationDate = Carbon::now()->addDays(rand(7, 90));
        $assetName = $this->faker->word;

        return [
            'user_id' => \App\Models\User::factory(),
            'uid' => $this->faker->unique()->uuid,
            'project_id' =>  $user->uuid . '-' . $user->id,
            'asset_name' => $this->faker->word,
            'asset_type' => $this->faker->randomElement(['sale', 'lease', 'partner', 'equipment']),
            'asset_location_details' => $this->faker->address,
            'asset_information' => $this->faker->randomElement(['greenfield', 'brownfield']),
            'pictures' => $this->faker->imageUrl(200, 200),
            'video' => $this->faker->text,
            'technical_report' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 1000, 100000),
            'coordinates' => $this->faker->latitude . ', ' . $this->faker->optional()->longitude,
            'land_size' => $this->faker->randomFloat(2, 1, 1000),
            'mineral_details' => $this->faker->text,
            'reserve_deposit' => $this->faker->text,
            'jorc_report' => $this->faker->text,
            'opportunity_type' => $this->faker->optional()->randomElement(['JV or partnership', 'sale', 'lease']),
            'geological_location' => $this->faker->text,
            'contact_information' => $this->faker->text,
            'date_added' => now(),
            'duration_date' => $durationDate,
            'active' => $this->faker->randomElement([false, true]),
            'times_viewed' => $this->faker->numberBetween(0, 100),
            'paid' => $this->faker->boolean,
            'slug' => Str::slug($assetName . '-' . Str::random(6)),
        ];
    }
}
