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
        // $durationDate = Carbon::now()->addDays(rand(7, 90));
        $plans = ['Free', 'Bronze', 'Silver', 'Gold', 'Diamond', 'Platinum'];
        $planPrices = [
            'Free' => 0,
            'Bronze' => 5000,
            'Silver' => 6000,
            'Gold' => 7000,
            'Diamond' => 8000,
            'Platinum' => 9000
        ];

        $assetName = $this->faker->word;
        $plan = $this->faker->randomElement($plans);
        $plan_price = $planPrices[$plan];
        $durations = ['1 week', '2 weeks', '3 weeks', '4 weeks'];
        $duration = $this->faker->randomElement($durations);

        return [
            'user_id' => \App\Models\User::factory(),
            'uid' => $this->faker->unique()->uuid,
            'project_id' =>  $user->uuid . '-' . $user->id,
            'asset_name' => $this->faker->word,
            'asset_type' => $this->faker->randomElement(['Sale', 'Lease', 'Partner', 'Equipment']),
            'slug' => Str::slug($assetName . '-' . Str::random(6)),
            'pictures' => $this->faker->imageUrl(200, 200),
            'video' => $this->faker->text,
            'asset_location_details' => $this->faker->address,
            'asset_information' => $this->faker->randomElement(['greenfield', 'brownfield']),
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
            'active' => $this->faker->randomElement([false, true]),
            'plan' => $plan,
            'duration' => $duration,
        ];
    }
}
