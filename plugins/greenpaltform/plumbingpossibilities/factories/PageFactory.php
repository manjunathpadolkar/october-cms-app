<?php namespace GreenPaltform\PlumbingPossibilities\Factories;

use GreenPaltform\PlumbingPossibilities\Models\Page;
use October\Rain\Database\Factories\Factory;

/**
 * PageFactory
 */
class PageFactory extends Factory
{

    protected $model = Page::class;
    /**
     * definition for the default state.
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->words(4, true),
            "sub_title" => $this->faker->paragraph(),
            "content" => $this->faker->text,
        ];
    }
}
