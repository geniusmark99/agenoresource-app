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
        $contactInformation = fake()->randomElement(['+234']);

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
        $randomImagePath = fake()->randomElements($aassetimagePaths, rand(3, 5));
        $addressLocationDetails = fake()->randomElement([
            '15, Dugbe Road, Dugbe, Ibadan', '22, Ring Road, Challenge, Ibadan', '5, University Road, UI, Ibadan',
            '10, Mokola Hill, Mokola, Ibadan', '10, Mokola Hill, Mokola, Ibadan', '30, Marina Road, Lagos Island, Lagos',
            '12, Lekki Phase 1, Lekki, Lagos', '25, Allen Avenue, Ikeja, Lagos', '5, Victoria Island, Lagos', '8, Surulere, Lagos',
            '14, Wuse 2, Abuja', '9, Garki Area 11, Abuja', '3, Asokoro, Abuja', '7, Maitama, Abuja', '20, Jabi, Abuja',
            '27, Agodi GRA, Agodi, Ibadan', '30, New Bodija, Bodija, Ibadan', '12, Oluyole Estate, Oluyole, Ibadan', '14, Ikoyi Crescent, Ikoyi, Lagos',
            '11, Central Business District, Abuja', '23, Utako, Abuja'
        ]);

        $assetName = fake()->randomElement([
            'Diamond Asset', 'Silver Asset', 'Lithium Asset', 'Tantalite Asset', 'Columbite Asset',
            'Tungsten Asset', 'Tin Asset', 'Nickel Asset', 'Cobalt Asset', 'Manganese Asset', 'Lead',
            'Beryl Asset', 'Tourmaline Asset', 'Amethyst Asset', 'Citrine Asset', 'Zinc Asset', 'Gold Asset'
        ]);

        $mineralDetails = fake()->randomElement([
            "Diamonds are precious gemstones known for their extraordinary hardness and brilliance. They are formed under high-pressure, high-temperature conditions deep within the Earth and are used in jewelry and industrial applications.",
            "Silver is a versatile precious metal with a long history of use in coinage, jewelry, and industrial applications. It has excellent electrical and thermal conductivity, making it valuable in electronics and solar panels.",
            "Gold is a highly sought-after precious metal prized for its rarity, beauty, and malleability. It is used in jewelry, currency, and various technological applications due to its excellent conductivity and resistance to tarnish.",
            "Cobalt is a critical metal used in the production of high-performance alloys, batteries, and catalysts. Its unique properties make it essential for the aerospace, electronics, and renewable energy industries.",
            "Lithium is a lightweight metal known for its high electrochemical potential, making it a key component in rechargeable batteries for electronic devices, electric vehicles, and energy storage systems.",
            "Tantalite is a mineral containing tantalum, which is highly resistant to corrosion and has a high melting point. It is crucial in the manufacture of electronic components, particularly capacitors and high-power resistors.",
            "Columbite is a black mineral group that contains niobium and tantalum. It is used in the production of high-strength steel alloys, electronics, and superconducting materials.",
            "Tungsten is a dense metal known for its high melting point and tensile strength. It is used in the manufacture of light bulb filaments, cutting tools, and military applications.",
            "Tin is a soft, malleable metal that is often used in alloys such as bronze. It has applications in soldering, coating for steel cans, and various industrial products.",
            "Nickel is a hard, silvery-white metal used in stainless steel, coins, rechargeable batteries, and special alloys. Its resistance to corrosion and oxidation makes it valuable in various industrial processes.",
            "Cobalt is a critical metal used in the production of high-performance alloys, batteries, and catalysts. Its unique properties make it essential for the aerospace, electronics, and renewable energy industries.",
            "Manganese is a metal with important industrial metal alloy uses, particularly in stainless steels. It improves the strength, toughness, and wear resistance of steel.",
            "Lead is a heavy metal known for its high density and softness. It is used in batteries, radiation shielding, and various types of glass and ceramics.",
            "Beryl is a mineral composed of beryllium aluminum cyclosilicate. It comes in various colors, the most famous being emerald (green) and aquamarine (blue). It is used in jewelry and as a source of beryllium.",
            "Tourmaline is a crystalline boron silicate mineral that comes in a wide variety of colors. It is valued as a gemstone and used in jewelry.",
            "Amethyst is a purple variety of quartz prized for its color and clarity. It is used in jewelry and has been believed to have various healing properties.",
            "Citrine is a yellow to brownish quartz that is often used as a gemstone. It is prized for its clarity and sunny color and is believed to have various healing properties.",
            "Zinc is a bluish-white metal used to galvanize iron and steel to protect against corrosion. It is also an essential mineral for human health, involved in numerous biological processes."

        ]);

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
            'video' => $this->faker->url(),
            'asset_location_details' => $addressLocationDetails,
            'asset_information' => $this->faker->randomElement(['greenfield', 'brownfield']),
            'technical_report' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 1000, 100000),
            'coordinates' => $this->faker->latitude . ', ' . $this->faker->optional()->longitude,
            'land_size' => $this->faker->randomFloat(2, 1, 1000),
            'mineral_details' => $mineralDetails,
            'reserve_deposit' => $this->faker->text,
            'jorc_report' => $this->faker->text,
            'opportunity_type' => $this->faker->optional()->randomElement(['JV or partnership', 'sale', 'lease']),
            'geological_location' => $this->faker->text,
            'contact_information' => $contactInformation,
            'date_added' => now(),
            'view_count'=> 0,
            'click_rate'=> 0,
            'date_activated'=> null,
            'active' => $this->faker->randomElement([false, true]),
            'plan' => $plan,
            'duration' => $duration,
        ];
    }
}
