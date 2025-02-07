<?php

namespace Database\Seeders;

use App\Enums\TrekDifficulty;
use App\Helpers\CuratorSeederHelper;
use App\Models\Destination;
use App\Models\Region;
use App\Models\Trek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trek = Trek::create([
            'title' => 'Everest Base Camp Trek',
            'description' => 'Followed by Real Sherpa’s village everybody wants to see a glimpse of the world’s highest mountain and that’s the reason why the Everest Base Camp Trek is very popular. The trek has a number of stunning attractions, not least of these is being able to say you’ve visited the highest mountain in the world. The trek gets you right into the high-altitude heart of the high Himalaya, more so than any other teahouse trek. There are some lovely villages and gompas (monasteries), and the friendly Sherpa people of the Solukhumbu region make trekking through the area a joy.

Everest Base Camp Trekking is known as the one of the most popular trekking in the world with the most thrilling and unforgettable experience of them all. If you are in search of quality service, Nepal Everest base camp trekking company provides you with quality services, guide and other necessary things which are needed for the trekking. We ensure that you won’t regret your decision for choosing us

The best season for this trip starts from beginning of March to May and  September to October is also favorable for the trek. During the trek, you can easily find food(local and continental), comfortable lodges. Hot shower is also available for some extra charge. Supplies are shipped to the Base Camp by guides or porters, and with the help of animals, usually yaks, mules and Jyopkyos.
',
            'duration' => '10',
            'grade' => '7',
            'starting_point' => 'Lukla',
            'ending_point' => 'Kathmandu',
            'best_time_for_trek' => 'Autumn (Sep-Oct-Nov) and Spring        (March-April-May)',
            'starting_altitude' => 2610,
            'highest_altitude' => 5545,
            'region_id' => Region::first()->id,
            'trek_difficulty' => TrekDifficulty::CHALLENGING,
            'costs_include' => [
                'Transfer from airport to your hotel during both arrival and departure.',
                'Stay three nights in Kathmandu with a BB plan.',
                'Go sightseeing around Kathmandu on a private vehicle.',
                'All entrance fees during Kathmandu Day Tour.',
                'Ground 4x4 luxury transportation through the private vehicle as referred to in the itinerary.',
                'All mandatory permit fees, including entry permit, national park permit, and restricted area permit.',
                'Accommodation in tea houses or lodges during the trekking.',
                'Three-course meals (breakfast, lunch, and dinner) during the trekking period.',
                'A skillful trekking guide with excellent communication skills.',
                'Two porters for three trekkers during the trekking.',
                'Insurance for the guide and porters.',
                'Farewell dinner at Kathmandu.',
                'All applicable VAT, Tax, and needed paperwork.',
            ],
            'costs_exclude' => [
                'Dinner and lunch in Kathmandu except for the farewell dinner.',
                'Your personal expenses for mineral water, soft beverages, confectionaries, laundries, phone calls, hot drinking water, bar bills, showers, etc.',
                'Internet facility, battery chargers, multi-plugs, etc.',
                'Personal trekking equipment.',
                'Your travel insurance that covers Helicopter evacuation.',
                'Medical expenses and trip cancellation.',
                'Any other extended trips and accommodation.',
                'Tips for the guide, porters, and driver as a token of appreciation.',
                'Any other expenses or charges that are not mentioned in the "costs include" list.',
                'Nepal arrival visa.',
            ],
            'is_featured' => true,
        ]);
        $trek->destinations()->sync(
            Destination::where('region_id', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );

        CuratorSeederHelper::seedBelongsTo(
            $trek,
            'cover_image_id',
            public_path('photos/mountain6.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $trek,
            'feature_image_id',
            public_path('photos/mountain7.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $trek,
            'images',
            public_path('photos/mountain5.jpg')
        );




        $trek2 = Trek::create([
            'title' => 'Annapurna Base Camp Trek',
            'description' => 'The Annapurna Base Camp (ABC) Trek is one of the most popular trekking routes in Nepal, offering breathtaking views of the Annapurna massif and other Himalayan peaks.',
            'duration' => '7', // Assuming duration
            'grade' => '6', // Moderate to Challenging
            'starting_point' => 'Nayapul',
            'ending_point' => 'Nayapul',
            'best_time_for_trek' => 'Spring (March-May) and Autumn (September-November)',
            'starting_altitude' => 1070,
            'highest_altitude' => 4130,
            'region_id' => 3,
            'trek_difficulty' => TrekDifficulty::MODERATE,
            'costs_include' => [
                'Transfer from airport to your hotel during both arrival and departure.',
                'Stay two nights in Kathmandu and two nights in Pokhara with a BB plan.',
                'Go sightseeing around Kathmandu on a private vehicle.',
                'All entrance fees during Kathmandu and Pokhara Day Tours.',
                'Ground 4x4 luxury transportation through the private vehicle as referred to in the itinerary.',
                'All mandatory permit fees, including TIMS card and Annapurna Conservation Area Permit.',
                'Accommodation in tea houses or lodges during the trekking.',
                'Three-course meals (breakfast, lunch, and dinner) during the trekking period.',
                'A skillful trekking guide with excellent communication skills.',
                'Two porters for three trekkers during the trekking.',
                'Insurance for the guide and porters.',
                'Farewell dinner at Kathmandu.',
                'All applicable VAT, Tax, and needed paperwork.',
            ],
            'costs_exclude' => [
                'Dinner and lunch in Kathmandu and Pokhara except for the farewell dinner.',
                'Your personal expenses for mineral water, soft beverages, confectionaries, laundries, phone calls, hot drinking water, bar bills, showers, etc.',
                'Internet facility, battery chargers, multi-plugs, etc.',
                'Personal trekking equipment.',
                'Your travel insurance that covers Helicopter evacuation.',
                'Medical expenses and trip cancellation.',
                'Any other extended trips and accommodation.',
                'Tips for the guide, porters, and driver as a token of appreciation.',
                'Any other expenses or charges that are not mentioned in the "costs include" list.',
                'Nepal arrival visa.',
            ],
            'is_featured' => true,
        ]);


        $trek2->destinations()->sync(
            Destination::where('region_id', 3)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );
        CuratorSeederHelper::seedBelongsTo(
            $trek2,
            'cover_image_id',
            public_path('photos/mountain7.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $trek2,
            'feature_image_id',
            public_path('photos/mountain6.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $trek2,
            'images',
            public_path('photos/mountain3.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $trek2,
            'images',
            public_path('photos/mountain2.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $trek2,
            'images',
            public_path('photos/mountain1.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $trek2,
            'images',
            public_path('photos/mountain4.jpg')
        );


        $trek3 = Trek::create([
            'title' => 'Manaslu Circuit Trek',
            'description' => 'The Manaslu Circuit Trek is a remote and stunning journey around the world’s eighth-highest peak, Mt. Manaslu (8,163m). This trek offers a spectacular blend of rich cultural heritage, breathtaking landscapes, and challenging high-altitude trekking.',
            'duration' => '14',
            'grade' => '8',
            'starting_point' => 'Soti Khola',
            'ending_point' => 'Besisahar',
            'best_time_for_trek' => 'Spring (March-May) and Autumn (September-November)',
            'starting_altitude' => 710,
            'highest_altitude' => 5160,
            'region_id' => 3,
            'trek_difficulty' => TrekDifficulty::CHALLENGING,
            'costs_include' => [
                'Airport transfers upon arrival and departure.',
                'Three nights in Kathmandu with a BB plan.',
                'Sightseeing tour in Kathmandu on a private vehicle.',
                'All necessary trekking permits (Manaslu Conservation Area, Annapurna Conservation Area, and Restricted Area Permit).',
                'Tea house or lodge accommodation during the trek.',
                'Three-course meals (breakfast, lunch, and dinner) during the trekking period.',
                'A professional English-speaking trekking guide.',
                'Porters to carry your luggage (1 porter for 2 trekkers).',
                'Insurance for the guide and porters.',
                'Ground transportation as per the itinerary.',
                'All applicable government taxes and service charges.',
            ],
            'costs_exclude' => [
                'Lunch and dinner in Kathmandu except for the farewell dinner.',
                'Personal trekking gear and equipment.',
                'Internet, battery charging, and hot showers at lodges.',
                'Personal expenses such as laundry, drinks, and phone calls.',
                'Travel insurance covering medical emergencies and helicopter evacuation.',
                'Medical expenses and trip cancellations.',
                'Any extra nights in Kathmandu due to early arrival or late departure.',
                'Gratuities for guides, porters, and drivers.',
                'Nepal entry visa fees.',
            ],
            'is_featured' => true,
        ]);

        $trek3->destinations()->sync(
            Destination::where('region_id', 3)
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );

        // Adding images for Trek 3
        CuratorSeederHelper::seedBelongsTo(
            $trek3,
            'cover_image_id',
            public_path('photos/mountain9.jpg')
        );
        CuratorSeederHelper::seedBelongsTo(
            $trek3,
            'feature_image_id',
            public_path('photos/mountain9.jpg')
        );

        CuratorSeederHelper::seedBelongsToMany(
            $trek3,
            'images',
            public_path('photos/mountain9.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $trek3,
            'images',
            public_path('photos/mountain8.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $trek3,
            'images',
            public_path('photos/mountain7.jpg')
        );
        CuratorSeederHelper::seedBelongsToMany(
            $trek3,
            'images',
            public_path('photos/mountain6.jpg')
        );

        $trek4 = Trek::create([
            'title' => 'Langtang Gosainkunda Trek',
            'description' => 'The Langtang Gosainkunda trek is a popular trekking route in Nepal that combines the scenic beauty of the Langtang Valley with the spiritual significance of the Gosainkunda lakes. This trek offers diverse landscapes, ranging from lush green valleys and rhododendron forests to high-altitude alpine terrain and glacial lakes.  Its a culturally rich experience, allowing you to interact with the Tamang people and explore their unique traditions. The trek culminates at the sacred Gosainkunda lakes, a significant pilgrimage site for Hindus.  It is considered a moderate to challenging trek, suitable for those with some prior trekking experience.

        The Langtang Gosainkunda trek offers a unique blend of natural beauty, cultural immersion, and spiritual significance. Its a great alternative to the more crowded Everest Base Camp trek, offering a more peaceful and intimate trekking experience. The best time to undertake this trek is during the pre-monsoon (March-May) and post-monsoon (September-November) seasons.',
            'duration' => '17',
            'grade' => '6', // Adjust grade as needed
            'starting_point' => 'Syabrubesi',
            'ending_point' => 'Kathmandu',
            'best_time_for_trek' => 'Autumn (Sep-Oct-Nov) and Spring (March-April-May)',
            'starting_altitude' => 1462, // Approximate starting altitude, adjust if needed
            'highest_altitude' => 4609,
            'region_id' => Region::find(4)->id, // Ensure you have Region data seeded
            'trek_difficulty' => TrekDifficulty::CHALLENGING, // Or appropriate difficulty
            'costs_include' => [
                'Arrival and Departure Transport.',
                'Accommodation in Kathmandu (Twin sharing) with breakfast.',
                'Trekking Duffle Bag.',
                'Breakfast, Lunch and Dinner during the Trekking.',
                'Accommodation in Tea house (mountain lodge) during trekking.',
                'Kathmandu - Syabrubesi and Sundarijal - Kathmandu transport.',
                'Trekking Porter with Insurance (1 porter for 2 pax).',
                'Trekking Guide with insurance.',
                'Trekking Guide and Porters food and accommodation, wages etc.',
                'Langtang Gosainkunda Trekking map.',
                'First Aid kit.',
                'Trekker’s Information Management system (TIMS).',
                'Langtang National park entry fees.',
                'Water purification tablets.',
                'Farewell dinner with cultural program.',
                'Government taxes.',
                'Office service charge.',
            ],
            'costs_exclude' => [
                'International Airfare.',
                'Travel insurance.',
                'Nepal entry Visa fee (US$ 50 for 30 days ad US$ 30 for 15 days).',
                'Drinks, Dessert, Juice, Mineral Water, Heater charge, Hot Shower during the Trekking and main meals in cities.',
                'Tips for Guide, Porter and driver.',
            ],
            'is_featured' => true,
        ]);

        $trek4->destinations()->sync(
            Destination::where('region_id', 4) // Or appropriate region ID
                ->inRandomOrder()
                ->limit(5) // Adjust the number of destinations as needed
                ->get()
                ->pluck('id')
                ->toArray()
        );

        CuratorSeederHelper::seedBelongsTo(
            $trek4,
            'cover_image_id',
            public_path('photos/qualitymount1.png') // Replace with actual image path
        );
        CuratorSeederHelper::seedBelongsTo(
            $trek4,
            'feature_image_id',
            public_path('photos/mountain2.jpg') // Replace with actual image path
        );

        CuratorSeederHelper::seedBelongsToMany(
            $trek4,
            'images',
            public_path('photos/mountain3.jpg') // Replace with actual image path, can be an array of paths
        );

        $everest_panorama_trek_data = Trek::create([
            'title' => 'Everest Panorama Trek',
            'description' => 'The Everest Panorama Trek is a short and relatively easy trek in the Everest region, perfect for those wanting stunning views of Everest without the challenges of high-altitude treks.  It offers a blend of natural beauty, Sherpa culture, and breathtaking mountain scenery, including Everest, Lhotse, Nuptse, and Ama Dablam. Trekkers experience the unique lifestyle of the Sherpa people, explore charming villages like Namche Bazaar and Khumjung, and hike to viewpoints like Hotel Everest View for unforgettable panoramic vistas.',
            'duration' => '12',
            'grade' => '5', // Adjust grade as needed (Moderate)
            'starting_point' => 'Kathmandu',
            'ending_point' => 'Kathmandu',
            'best_time_for_trek' => 'September to May',
            'starting_altitude' => 1400, // Kathmandu's altitude
            'highest_altitude' => 3962, // Hotel Everest View
            'region_id' => Region::first()->id, // Assuming Region::first() gets the Everest region.  Make sure your regions table is seeded.
            'trek_difficulty' => TrekDifficulty::MODERATE, // Or appropriate enum value
            'costs_include' => [
                // ... (Add your costs include details here -  get from your site)
                'Airport transfers',
                'Kathmandu accommodation',
                'Sightseeing tour in Kathmandu',
                'Flight to/from Lukla',
                'Accommodation in teahouses during trek',
                'Meals (breakfast, lunch, dinner) during trek',
                'Experienced trekking guide',
                'Porters to carry luggage',
                'Sagarmatha National Park entry permit',
                'TIMS card (Trekker\'s Information Management System)',
                // ...
            ],
            'costs_exclude' => [
                // ... (Add your costs exclude details here - get from your site)
                'Personal expenses (drinks, snacks, souvenirs)',
                'Lunch and dinner in Kathmandu',
                'Tips for guide and porters',
                'Travel insurance',
                'Visa fees',
                // ...
            ],
            'is_featured' => true,
        ]);

        // Associate destinations (replace with actual logic to select relevant destinations)
        $everest_panorama_trek_data->destinations()->sync(
            Destination::where('region_id', 1) // Assuming region_id 1 is Everest region
                ->inRandomOrder()
                ->limit(5)
                ->get()
                ->pluck('id')
                ->toArray()
        );


        // Seed Curator Images (replace with your actual paths and logic)
        CuratorSeederHelper::seedBelongsTo(
            $everest_panorama_trek_data,
            'cover_image_id',
            public_path('photos/mountain2.jpg') // Replace with the actual path
        );

        CuratorSeederHelper::seedBelongsTo(
            $everest_panorama_trek_data,
            'feature_image_id',
            public_path('photos/mountain3.jpg') // Replace with the actual path
        );

        CuratorSeederHelper::seedBelongsToMany(
            $everest_panorama_trek_data,
            'images',
            public_path('photos/mountain4.jpg')
        );
    }
}
