<?php

namespace Database\Seeders;

use App\Enums\WebsiteSettingType;
use App\Helpers\CuratorSeederHelper;
use App\Models\WebsiteSetting;
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
        $this->setWebsiteSettings();

        WebsiteSetting::insert(
            Arr::map($this->websiteSettings, function ($websiteSetting, $key) {
                $websiteSetting['value'] = $websiteSetting['value'] ?? null;
                $websiteSetting['default_value'] = $websiteSetting['value'];
                $websiteSetting['created_at'] = now();
                $websiteSetting['updated_at'] = $websiteSetting['created_at'];
                if (isset($websiteSetting['image'])) {
                    unset($websiteSetting['image']);
                }
                return $websiteSetting;
            })
        );

        $this->seedMedia();
    }

    protected function setWebsiteSettings()
    {
        $this->websiteSettings = [
            // Common Settings
            [
                'name' => 'Favicon',
                'identifier' => 'favicon',
                'description' => 'Set favicon for website.',
                'type' => WebsiteSettingType::IMAGE,
                'image' => public_path('photos/logo.png'),
            ],
            [
                'name' => 'Header Logo',
                'identifier' => 'header-logo',
                'description' => 'Set logo for website header.',
                'type' => WebsiteSettingType::IMAGE,
                'image' => public_path('photos/logo.png'),
            ],
            [
                'name' => 'Footer Logo',
                'identifier' => 'footer-logo',
                'description' => 'Set logo for website footer.',
                'type' => WebsiteSettingType::IMAGE,
                'image' => public_path('photos/logo.png'),
            ],

            // Home Page
            // [
            //     'name' => 'President Image',
            //     'identifier' => 'president-image',
            //     'description' => "Set president's image in homepage.",
            //     'type' => WebsiteSettingType::IMAGE,
            // ],

            [
                'name' => "President's Message",
                'identifier' => 'president-message',
                'description' => "Set president's message in homepage.",
                'type' => WebsiteSettingType::HTML,
                'value' => '
                <p class="text-justify">
                    Nepal Hydrogeological Association represents all groundwater professionals within multiple
                    discipline from all over the Nepal who has been working on various aspects of groundwater resources
                    including and not limited to development also with ground water investigation,
                    exploration,regulation and management in Nepal. Since its establishment, it has been advocating
                    continuously for the betterment of professionals working on groundwater sector mostly within the
                    theme of groundwater investigation, exploration, regulation and management in Nepal.
                </p>
                <p class="text-justify">
                    We look forward working together with all groundwater enthusiast from all over the world.
                </p>
                ',
            ],

            // Membership Page
            // [
            //     'name' => 'Membership Form',
            //     'identifier' => 'membership-form',
            //     'description' => 'Set membership form in member page.',
            //     'type' => WebsiteSettingType::FILE,
            // ],

            // Contact us Page
            [
                'name' => 'Address',
                'identifier' => 'contact-address',
                'description' => 'Set address in Contact Us page.',
                'type' => WebsiteSettingType::HTML,
                'value' => 'Babarmahal, Kathmandu <br/> Nepal',
            ],
            [
                'name' => 'Email',
                'identifier' => 'contact-email',
                'description' => 'Set email in Contact Us page.',
                'type' => WebsiteSettingType::HTML,
                'value' => ' nepalnha@gmail.com <br/> info@nha.org.np',
            ],
            [
                'name' => 'Map Location',
                'identifier' => 'contact-location',
                'description' => 'Set map location in Contact Us page.',
                'type' => WebsiteSettingType::HTML,
                'value' => '<iframe class="aspect-square w-full" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d883.1968309669285!2d85.3251832291932!3d27.692967398924896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19af4b88d033%3A0xa4a2abc2b0649497!2sNHA%20Office%20at%20GWRDB!5e0!3m2!1sen!2snp!4v1606490798454!5m2!1sen!2snp&amp;q=iframe" allowfullscreen=""></iframe>',
            ],

            // Journal Page
            // [
            //     'name' => 'Journal Template',
            //     'identifier' => 'journal-template',
            //     'description' => 'Set journal template in journal page of website.',
            //     'type' => WebsiteSettingType::FILE,
            // ],
        ];
    }

    protected function seedMedia()
    {
        collect($this->websiteSettings)
            ->map(function ($websiteSetting) {
                // dd($websiteSetting);
                if ($websiteSetting['type'] != WebsiteSettingType::IMAGE) {
                    return $websiteSetting;
                }

                if (!isset($websiteSetting['image']) || !is_string($websiteSetting['image'])) {
                    return $websiteSetting;
                }

                $model = WebsiteSetting::where('identifier', $websiteSetting['identifier'])
                    ->first();

                // dd($model);

                if (is_null($model)) {
                    return $websiteSetting;
                }

                // $related = $model->file();

                CuratorSeederHelper::seedBelongsTo(
                    $model,
                    'value',
                    $websiteSetting['image']
                );

                return $websiteSetting;
            });
    }
}
