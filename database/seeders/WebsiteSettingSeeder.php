<?php

namespace Database\Seeders;

use App\Enums\WebsiteSettingType;
use App\Helpers\CuratorSeederHelper;
use App\Models\WebsiteSetting;
use App\Settings\CompanySetting;
use App\Settings\ContactUsSetting;
use App\Settings\LandingPageSetting;
use App\Settings\PageSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class WebsiteSettingSeeder extends Seeder
{
    protected array $websiteSettings = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedLandingPageSettings();
        $this->seedPageSettings();
        $this->seedContactUsSettings();
        $this->seedCompanySettings();
    }

    public function seedLandingPageSettings()
    {
        $landingPageSetting = app(LandingPageSetting::class);

        $landingPageSetting->expedition_activity_image_id = CuratorSeederHelper::resolveFileData(public_path('/photos/mountain1.jpg'))->id;
        $landingPageSetting->trek_activity_image_id = CuratorSeederHelper::resolveFileData(public_path('/photos/mountain5.jpg'))->id;
        $landingPageSetting->tour_activity_image_id = CuratorSeederHelper::resolveFileData(public_path('/photos/culture.jpg'))->id;
        $landingPageSetting->peak_activity_image_id = CuratorSeederHelper::resolveFileData(public_path('/photos/mountain4.jpg'))->id;
        $landingPageSetting->expedition_activity_content = "Embark on the ultimate adventure with our expertly guided expeditions. Whether conquering the towering Himalayas or traversing remote landscapes, our seasoned team ensures a thrilling yet safe journey. Experience high-altitude challenges, breathtaking scenery, and a deep connection with nature like never before.";
        $landingPageSetting->trek_activity_content = "Discover the magic of Nepal’s breathtaking trails with our immersive treks. From the legendary Everest Base Camp to the serene Annapurna Circuit, we take you through diverse landscapes, rich cultures, and unforgettable moments. Let each step lead you to a new adventure!";
        $landingPageSetting->tour_activity_content = "Unveil the wonders of Nepal with our expertly curated tours. Explore ancient heritage, vibrant cities, and stunning natural beauty with our knowledgeable guides. Whether cultural, spiritual, or scenic, every tour is crafted for an enriching and unforgettable experience.";
        $landingPageSetting->peak_activity_content = "Reach new heights with our exhilarating peak climbing adventures. Designed for both seasoned climbers and ambitious beginners, we provide expert guidance, safety assurance, and unmatched Himalayan views. Conquer your dreams, one summit at a time!";

        $landingPageSetting->expedition_activity_count = '50+';
        $landingPageSetting->trek_activity_count = '200+';
        $landingPageSetting->tour_activity_count = '1000+';
        $landingPageSetting->peak_activity_count = '100+';

        $landingPageSetting->traveller_count = '500+';
        $landingPageSetting->association_count = '100+';
        $landingPageSetting->customer_feedback = '9.3';
        $landingPageSetting->success_rate = '96';

        $landingPageSetting->save();
    }

    public function seedPageSettings()
    {
        $pageSetting = app(PageSetting::class);

        $pageSetting->expedition_page_cover_image_id = CuratorSeederHelper::resolveFileData(public_path('/photos/mountain3.jpg'))->id;
        $pageSetting->trek_page_cover_image_id = CuratorSeederHelper::resolveFileData(public_path('/photos/mountain6.jpg'))->id;
        $pageSetting->tour_page_cover_image_id = CuratorSeederHelper::resolveFileData(public_path('/photos/culture2.jpg'))->id;
        $pageSetting->peak_page_cover_image_id = CuratorSeederHelper::resolveFileData(public_path('/photos/lobuche.jpg'))->id;
        $pageSetting->service_page_cover_image_id = CuratorSeederHelper::resolveFileData(public_path('/photos/temple.jpg'))->id;
        $pageSetting->about_us_page_cover_image_id = CuratorSeederHelper::resolveFileData(public_path('/photos/qualitymount1.png'))->id;

        $pageSetting->expedition_page_content = "Push your limits and embark on an extraordinary Himalayan expedition. Our expertly guided journeys take you to some of the highest and most challenging peaks on the planet. Experience raw adventure, breathtaking landscapes, and the triumph of reaching new heights with our experienced mountaineers and support teams.";
        $pageSetting->trek_page_content = "Step into the heart of the Himalayas with our unforgettable trekking adventures. Walk through lush forests, rugged mountain trails, and culturally rich villages as you discover Nepal’s most iconic routes. Whether you seek a short scenic trek or an epic multi-day journey, we create experiences that inspire.";
        $pageSetting->tour_page_content = "Experience Nepal beyond the mountains with our immersive tours. From exploring Kathmandu’s UNESCO-listed sites to witnessing the serene beauty of Pokhara and the wildlife of Chitwan, our tours blend history, nature, and culture into an unforgettable adventure tailored just for you.";
        $pageSetting->peak_page_content = "Challenge yourself with our thrilling peak climbing adventures. Designed for climbers of all levels, our expertly guided expeditions help you conquer Nepal’s stunning peaks, from beginner-friendly summits to technical ascents. Let the mountains call, and we’ll guide you to the top!";
        $pageSetting->service_page_content = "We offer a wide range of services to ensure your journey in Nepal is seamless and unforgettable. From guided expeditions and trekking adventures to cultural tours, logistics, permits, and safety support, we handle every detail so you can focus on the adventure ahead.";
        $pageSetting->about_us_page_content = "We offer a wide range of services to ensure your journey in Nepal is seamless and unforgettable. From guided expeditions and trekking adventures to cultural tours, logistics, permits, and safety support, we handle every detail so you can focus on the adventure ahead.";


        $pageSetting->save();
    }

    public function seedContactUsSettings()
    {
        $contactUsSetting = app(ContactUsSetting::class);

        $contactUsSetting->content = "We’d love to hear from you! Whether you’re planning your next big adventure, have questions about our trips, or need expert guidance, our team is here to help. Reach out to us for personalized travel advice, booking inquiries, or any other assistance. Let’s make your Himalayan journey a reality—contact us today!";
        $contactUsSetting->address = 'Thamel, Kathmandu';
        $contactUsSetting->contact = '+977- 981343434/+01- 55313536';
        $contactUsSetting->working_hour = 'Sun-Thurs: 11-5 / Fri: 12-3 / Sat: Closed';

        $contactUsSetting->save();
    }

    public function seedCompanySettings() {
        $companySetting = app(CompanySetting::class);

        $companySetting->company_logo_id = CuratorSeederHelper::resolveFileData(public_path('/photos/logo.png'))->id;
        $companySetting->company_name = "Sherpalaya Pvt. Ltd.";
        $companySetting->company_address = "Kathmandu, thamel, street no 6";
        $companySetting->company_email = "sherpalaya@gmail.com";
        $companySetting->company_contact_number = "+977 9800112233";

        $companySetting->facebook_url = "https://www.facebook.com/sherpalaya.trek.1/";
        $companySetting->instagram_url = "https://www.instagram.com/sherpalaya/";
        $companySetting->youtube_url = "https://www.youtube.com/@sherpalaya";
        $companySetting->tiktok_url = "https://www.tiktok.com/@sherpalaya";

        $companySetting->save();

    }
}
