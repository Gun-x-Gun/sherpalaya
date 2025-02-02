<?php

namespace Database\Seeders;

use App\Enums\WebsiteSettingType;
use App\Helpers\CuratorSeederHelper;
use App\Models\WebsiteSetting;
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
    }

    public function seedLandingPageSettings()
    {
        $landingPageSetting = app(LandingPageSetting::class);

        $landingPageSetting->expedition_activity_image_id = null;
        $landingPageSetting->expedition_activity_content = null;
        $landingPageSetting->trek_activity_image_id = null;
        $landingPageSetting->trek_activity_content = null;
        $landingPageSetting->tour_activity_image_id = null;
        $landingPageSetting->tour_activity_content = null;
        $landingPageSetting->peak_activity_image_id = null;
        $landingPageSetting->peak_activity_content = null;
        $landingPageSetting->traveller_count = null;
        $landingPageSetting->association_count = null;
        $landingPageSetting->customer_feedback = null;
        $landingPageSetting->success_rate = null;

        $landingPageSetting->save();
    }

    public function seedPageSettings()
    {
        $pageSetting = app(PageSetting::class);

        $pageSetting->expedition_page_cover_image_id = null;
        $pageSetting->expedition_page_content = null;

        $pageSetting->trek_page_cover_image_id = null;
        $pageSetting->trek_page_content = null;

        $pageSetting->tour_page_cover_image_id = null;
        $pageSetting->tour_page_content = null;

        $pageSetting->peak_page_cover_image_id = null;
        $pageSetting->peak_page_content = null;

        $pageSetting->service_page_cover_image_id = null;
        $pageSetting->service_page_content = null;

        $pageSetting->save();
    }

    public function seedContactUsSettings()
    {
        $contactUsSetting = app(ContactUsSetting::class);

        $contactUsSetting->content = null;
        $contactUsSetting->address = null;
        $contactUsSetting->contact = null;
        $contactUsSetting->working_hour = null;

        $contactUsSetting->save();
    }
}
