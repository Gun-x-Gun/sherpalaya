<?php

namespace Database\Seeders;

use App\Models\Expedition;
use App\Models\Peak;
use App\Models\Tour;
use App\Models\Trek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class EssentialTipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $essentialTips = [
            [
                'title' => 'Physical Fitness',
                'description' => "Train regularly to improve your strength."
            ],
            [
                'title' => 'Physical Fitness',
                'description' => "Train regularly to improve your strength."
            ],
            [
                'title' => 'Physical Fitness',
                'description' => "Train regularly to improve your strength."
            ],
            [
                'title' => 'Physical Fitness',
                'description' => "Train regularly to improve your strength."
            ],
            [
                'title' => 'Physical Fitness',
                'description' => "Train regularly to improve your strength."
            ],
        ];

        $this->createEssentialTips(
            Trek::first(),
            $essentialTips
        );
        $this->createEssentialTips(
            Trek::find(2),
            $essentialTips
        );
        $this->createEssentialTips(
            Peak::first(),
            $essentialTips
        );
        $this->createEssentialTips(
            Expedition::first(),
            $essentialTips
        );
        $this->createEssentialTips(
            Tour::first(),
            $essentialTips
        );
        $this->createEssentialTips(
            Tour::find(2),
            $essentialTips
        );
        $this->createEssentialTips(
            Tour::find(3),
            $essentialTips
        );

    }
    protected function createEssentialTips(Model $model, array $tips): void
    {
        foreach ($tips as $tip) {
            if (isset($tip) && is_array($tip)) {
                $model->essentialTips()->create($tip);
            }
        }
    }
}
