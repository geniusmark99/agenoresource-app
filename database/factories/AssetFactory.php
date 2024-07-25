<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AssetFactory extends Factory
{
    protected $model = Asset::class;

    public function definition()
    {

        // $user = User::factory()->create();
        $plans = ['bronze', 'silver', 'gold', 'diamond', 'platinum'];
        $planPrices = [
            'bronze' => 5000,
            'silver' => 6000,
            'gold' => 7000,
            'diamond' => 8000,
            'platinum' => 9000
        ];

        $aassetimagePaths = [
            'images/bronze-image.jpg',
            'images/cobalt-image.webp',
            'images/copper-image.jpg',
            'images/diamond-image.jpg',
            'images/gold-image.jpg',
            'images/silver-image.jpg',
            'images/tungsten-image.jpg',
            'images/zinc-image.jpg',
            'images/iron-image.jpg',
        ];

        $randomImagePath = fake()->randomElements($aassetimagePaths, rand(2, 5));

        $assetName = fake()->word;
        $plan = fake()->randomElement($plans);
        $plan_price = $planPrices[$plan];
        $durations = ['1 week', '2 weeks', '3 weeks', '4 weeks'];
        $duration = fake()->randomElement($durations);

        return [
            'user_id' => $this->faker->numberBetween(1, 100),
            'uid' => $this->faker->unique()->uuid,
            'project_id' => $this->faker->unique()->uuid,
            'asset_type' => $this->faker->randomElement(['diamond', 'silver', 'lithium', 'tantalite', 'columbite', 'tungsten', 'tin', 'nickel', 'cobalt', 'manganese', 'lead', 'beryl', 'tourmaline', 'amethyst', 'citrine', 'zinc', 'gold']),
            'asset_name' => $assetName,
            'slug' => Str::slug($assetName . '-' . Str::random(6)),
            'pictures' => json_encode($randomImagePath),
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
