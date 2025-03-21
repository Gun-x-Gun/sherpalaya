<?php

namespace App\Filament\Fields;

use Closure;
use Exception;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Repeater;
use Filament\Support\Concerns\EvaluatesClosures;

/**
Repeater::make('costs_include')
        ->hiddenLabel()
        ->afterStateHydrated(function($component, $state){
            $component->state($state['en']);
        })
        ->schema([
            TextInput::make('en')
                ->prefixIcon('heroicon-o-check-badge')
                ->prefixIconColor('success'),
            TextInput::make('fr')
                ->prefixIcon('heroicon-o-check-badge')
                ->prefixIconColor('success'),
        ]),
]),
 */

class TranslatableRepeater
{
    use EvaluatesClosures;

    protected ?Closure $getFieldUsing = null;

    public static function make(string $name)
    {
        return new static($name);
    }

    public function field(Closure $field): static{
        $this->getFieldUsing = $field;
        return $this;
    }

    public function __construct(
        protected string $name,
    ) {}

    public function simple(string $field): Repeater
    {

        if(!is_subclass_of($field, Field::class)){
            throw new Exception(Field::class . " expected. Got " . $field);
        }

        $enField = $field::make('en');

        $frField = $field::make('fr');

        $getFieldUsing = $this->getFieldUsing;

        if(!is_null($getFieldUsing)){
            $enField = $getFieldUsing($enField);
            $frField = $getFieldUsing($frField);
        }

        return Repeater::make($this->name)
            ->afterStateHydrated(function ($component, $state) {
                $component->state($state['en']);
            })
            ->dehydrateStateUsing(function($state){
                // dd($state);
                return $state;
            })
            ->schema([
                $enField,
                $frField,
            ]);
    }
}
