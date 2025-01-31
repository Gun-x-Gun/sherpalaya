<?php

namespace Database\Seeders;

use App\Models\Expedition;
use App\Models\Peak;
use App\Models\Tour;
use App\Models\Trek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class KeyHighlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $highlights = [
            [
                'title' => 'A',
                'description' => 'B',
            ],
            [
                'title' => 'C',
                'description' => 'D',
            ],
            [
                'title' => 'E',
                'description' => 'F',
            ],
            [
                'title' => 'G',
                'description' => 'H',
            ],
            [
                'title' => 'I',
                'description' => 'J',
            ]
        ];

        $this->createKeyHighlights(
            Trek::first(),
            $highlights
        );
        $this->createKeyHighlights(
            Trek::find(2),
            $highlights
        );
        $this->createKeyHighlights(
            Peak::first(),
            $highlights
        );
        $this->createKeyHighlights(
            Expedition::first(),
            $highlights
        );
        $this->createKeyHighlights(
            Tour::first(),
            $highlights
        );
        $this->createKeyHighlights(
            Tour::find(2),
            $highlights
        );
        $this->createKeyHighlights(
            Tour::find(3),
            $highlights
        );
    }
    protected function createKeyHighlights(Model $model, array $points): void
    {

        foreach ($points as $point) {
            if (isset($point) && is_array($point)) {
                $model->keyHighlights()->create($point);
            }
        }
    }
}
