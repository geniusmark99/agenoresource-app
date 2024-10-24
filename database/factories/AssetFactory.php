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
            'platinum' => 9000,
            'diamond' => 8000,
            'bronze' => 5000,
            'silver' => 6000,
            'gold' => 7000
        ];


        $contactInformation = fake()->randomElement(['+234']);


        $addressLocationDetails = fake()->randomElement([
            '15, Dugbe Road, Dugbe, Ibadan',
            '22, Ring Road, Challenge, Ibadan',
            '5, University Road, UI, Ibadan',
            '10, Mokola Hill, Mokola, Ibadan',
            '10, Mokola Hill, Mokola, Ibadan',
            '30, Marina Road, Lagos Island, Lagos',
            '12, Lekki Phase 1, Lekki, Lagos',
            '25, Allen Avenue, Ikeja, Lagos',
            '5, Victoria Island, Lagos',
            '8, Surulere, Lagos',
            '14, Wuse 2, Abuja',
            '9, Garki Area 11, Abuja',
            '3, Asokoro, Abuja',
            '7, Maitama, Abuja',
            '20, Jabi, Abuja',
            '27, Agodi GRA, Agodi, Ibadan',
            '30, New Bodija, Bodija, Ibadan',
            '12, Oluyole Estate, Oluyole, Ibadan',
            '14, Ikoyi Crescent, Ikoyi, Lagos',
            '11, Central Business District, Abuja',
            '23, Utako, Abuja'
        ]);



        $mineralDetails = [
            "diamond" => "Diamonds are precious gemstones known for their extraordinary hardness and brilliance. They are formed under high-pressure, high-temperature conditions deep within the Earth and are used in jewelry and industrial applications.",
            "silver" => "Silver is a versatile precious metal with a long history of use in coinage, jewelry, and industrial applications. It has excellent electrical and thermal conductivity, making it valuable in electronics and solar panels.",
            "gold" => "Gold is a highly sought-after precious metal prized for its rarity, beauty, and malleability. It is used in jewelry, currency, and various technological applications due to its excellent conductivity and resistance to tarnish.",
            "cobalt" => "Cobalt is a critical metal used in the production of high-performance alloys, batteries, and catalysts. Its unique properties make it essential for the aerospace, electronics, and renewable energy industries.",
            "tin" => "Tin is a soft, malleable metal that is often used in alloys such as bronze. It has applications in soldering, coating for steel cans, and various industrial products.",
            "lithium" => "Lithium is a lightweight metal known for its high electrochemical potential, making it a key component in rechargeable batteries for electronic devices, electric vehicles, and energy storage systems.",
            "tantalite" => "Tantalite is a mineral containing tantalum, which is highly resistant to corrosion and has a high melting point. It is crucial in the manufacture of electronic components, particularly capacitors and high-power resistors.",
            "columbite" => "Columbite is a black mineral group that contains niobium and tantalum. It is used in the production of high-strength steel alloys, electronics, and superconducting materials.",
            "tungsten" => "Tungsten is a dense metal known for its high melting point and tensile strength. It is used in the manufacture of light bulb filaments, cutting tools, and military applications.",
            "nickel" => "Nickel is a hard, silvery-white metal used in stainless steel, coins, rechargeable batteries, and special alloys. Its resistance to corrosion and oxidation makes it valuable in various industrial processes.",
            "cobalt" => "Cobalt is a critical metal used in the production of high-performance alloys, batteries, and catalysts. Its unique properties make it essential for the aerospace, electronics, and renewable energy industries.",
            "manganese" => "Manganese is a metal with important industrial metal alloy uses, particularly in stainless steels. It improves the strength, toughness, and wear resistance of steel.",
            "lead" => "Lead is a heavy metal known for its high density and softness. It is used in batteries, radiation shielding, and various types of glass and ceramics.",
            "beryl" => "Beryl is a mineral composed of beryllium aluminum cyclosilicate. It comes in various colors, the most famous being emerald (green) and aquamarine (blue). It is used in jewelry and as a source of beryllium.",
            "tourmaline" => "Tourmaline is a crystalline boron silicate mineral that comes in a wide variety of colors. It is valued as a gemstone and used in jewelry.",
            "amethyst" => "Amethyst is a purple variety of quartz prized for its color and clarity. It is used in jewelry and has been believed to have various healing properties.",
            "citrine" => "Citrine is a yellow to brownish quartz that is often used as a gemstone. It is prized for its clarity and sunny color and is believed to have various healing properties.",
            "zinc" => "Zinc is a bluish-white metal used to galvanize iron and steel to protect against corrosion. It is also an essential mineral for human health, involved in numerous biological processes.",
            "copper" => "Copper is a reddish-brown metal known for its excellent electrical and thermal conductivity. It has been used by humans for thousands of years, making it one of the earliest metals to be worked into tools, ornaments, and building materials. Copper is highly malleable, ductile, and resistant to corrosion, which makes it ideal for use in electrical wiring, plumbing, and various industrial applications. Its natural antibacterial properties also make it valuable in medical settings. Over time, copper develops a greenish patina, known as verdigris, which is often seen on old statues and buildings.",
            "bronze" => "Bronze is an alloy primarily composed of copper, usually with tin as the main additive. Known for its durability and resistance to corrosion, bronze has been used for thousands of years in various applications, from tools and weapons in ancient times to modern-day sculptures, coins, and industrial parts. Its distinctive reddish-brown color, which can develop a greenish patina over time, adds to its aesthetic appeal. Bronze is valued not only for its strength and hardness but also for its excellent conductivity, making it a versatile material in both historical and contemporary contexts.",
            "iron" => "Iron is a strong, silvery-gray metal that is one of the most abundant elements on Earth. It is a key component of steel, which is produced by alloying iron with carbon, and is essential in construction, manufacturing, and transportation industries. Iron's high tensile strength and affordability make it a fundamental material for building infrastructure, tools, and machinery. However, iron is prone to rusting when exposed to moisture, which can be mitigated by treatments such as galvanization or alloying with other metals. Iron is also crucial in biology, as it forms the core of hemoglobin, the molecule that carries oxygen in the blood.",
            "land" => "Buying land is a significant investment that offers long-term value and potential for development. Whether for residential, commercial, or agricultural purposes, owning land provides a tangible asset that can appreciate over time. Key considerations when purchasing land include location, zoning regulations, access to utilities, and future development plans in the area. Land ownership also grants flexibility, allowing buyers to build, lease, or hold the property as a financial asset. It’s important to conduct thorough research, including a title check and land survey, to ensure a smooth and secure purchase process.",
            "equipment" => "Hiring mining equipment is an efficient and cost-effective solution for companies looking to scale operations without the high upfront investment of purchasing machinery. It allows businesses to access top-tier equipment like excavators, drill rigs, and loaders without the long-term commitment. Renting also provides flexibility, enabling companies to upgrade or switch machinery based on project demands. Additionally, equipment hire often includes maintenance support, ensuring reduced downtime and smoother operations."
        ];

        $plan = fake()->randomElement($plans);

        $plan_price = $planPrices[$plan];
        $durations = [1, 2, 3, 4, 5, 6];
        $duration = fake()->randomElement($durations);
        // $assetType =  $this->faker->randomElement(array_keys($mineralDetails));
        $assetType = $this->faker->randomElement(['natural_minerals', 'mineral_assets']);
        $assetNaturalAssets = ($assetType == 'natural_minerals') ?
            $this->faker->randomElement(array_keys($mineralDetails)) : ($this->faker->randomElement(['land', 'equipment']));


        // Define matching pairs of asset types and corresponding pictures
        $assetTypePictures = [
            'diamond' =>   'images/diamond-image.jpg',
            'silver' =>  'images/silver-image.jpg',
            'gold' => 'images/gold-image.jpg',
            'tin' =>    'images/tin.jpeg',
            'lithium' =>  'images/lithium.jpeg',
            'tantalite' => 'images/tin.jpeg',
            'columbite' =>  'images/columbite.webp',
            'tungsten' => 'images/tungsten-image.jpg',
            'nickel' => 'images/nickel.jpg',
            'cobalt' => 'images/cobalt-image.webp',
            'manganese' =>  'images/manganese.jpg',
            'lead' => 'images/lead.jpg',
            'beryl' =>  'images/beryl.jpeg',
            'tourmaline' => 'images/tourmaline.jpeg',
            'amethyst' => 'images/amethyst.jpg',
            'citrine' => 'images/citrine.jpeg',
            'zinc' => 'images/zinc-image.jpg',
            'copper' => 'images/copper-image.jpg',
            'bronze' => 'images/bronze-image.jpg',
            'iron' => 'images/iron-image.jpg',
            'land' => 'images/land-1.jpg',
            'equipment' => 'images/equipment-1.webp',


        ];


        $assetQuantiy = $this->faker->numberBetween(10, 50);
        $likes = $this->faker->numberBetween(0, 100);
        $dislikes = $this->faker->numberBetween(0, 100);

        if ($likes > $dislikes) {
            $dislikes = $this->faker->numberBetween(0, $likes / 2); // reduce dislikes if likes are too high
        }

        // if ($assetType == 'natural_minerals') {
        //     $assetTypeValue = $assetNaturalAssets;
        //     $pictures = [fake()->randomElements($assetTypePictures[$assetTypeValue], rand(2, 3))];
        // } else if ($assetType == 'mineral_assets') {
        //     $assetTypeValue = $this->faker->randomElement(['land', 'equipment']);
        //     $pictures = [fake()->randomElements($assetTypePictures[$assetTypeValue], rand(2, 3))];
        // }

        $assetType = $this->faker->randomElement(['natural_minerals', 'mineral_assets']);
        $pictures = [];

        if ($assetType == 'natural_minerals') {
            $assetTypeValue = $assetNaturalAssets;
            $pictures = array_map(function () use ($assetTypePictures, $assetTypeValue) {
                return [
                    'url' => $assetTypePictures[$assetTypeValue],
                    'public_id' => Str::random(20),
                ];
            }, range(1, 3));
        } else if ($assetType == 'mineral_assets') {
            $assetTypeValue = $this->faker->randomElement(['land', 'equipment']);
            $pictures = array_map(function () use ($assetTypePictures, $assetTypeValue) {
                return [
                    'url' => $assetTypePictures[$assetTypeValue],
                    'public_id' => Str::random(20),
                ];
            }, range(1, 3));
        }



        return [
            'user_id' => $this->faker->numberBetween(1, 100),
            'uid' => $this->faker->unique()->uuid,
            'project_id' => $this->faker->unique()->uuid,
            'likes' => $likes,
            'dislikes' => $dislikes,
            'asset_type' => $assetType,
            'asset_type_value' => $assetTypeValue,
            'asset_qty' => $assetQuantiy,
            'slug' => Str::slug($assetTypeValue . '-' . Str::random(6)),
            'pictures' => json_encode($pictures),
            'asset_location_details' => $addressLocationDetails,
            'asset_information' => $this->faker->randomElement(['greenfield', 'brownfield']),
            'price' => $this->faker->randomFloat(2, 1000, 100000),
            'land_size' => $this->faker->randomFloat(2, 1, 1000),
            'mineral_details' => ($assetType == 'natural_minerals') ? $mineralDetails[$assetNaturalAssets] : (($assetTypeValue == 'land') ? $mineralDetails[$this->faker->randomElement(['land'])] : $mineralDetails[$this->faker->randomElement(['equipment'])]),
            'reserve_deposit' => $this->faker->text,
            'plan' => $plan,
            'duration' => $duration,
            'jorc_report' => $this->faker->text,
            'geological_location' => $this->faker->text,
            'contact_information' => $contactInformation,
            'date_added' => now(),
            'click_rate' => 0,
            'active' => $this->faker->randomElement([false, true]),
            'view_count' => 0,
            'date_activated' => null,
            'date_deactivated' => null,
        ];
    }
}
