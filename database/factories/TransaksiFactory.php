<?php

namespace Database\Factories;

use App\Models\transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = transaksi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'tanggal'=> $this->faker-> dateTimeThisYear()->format('y-m-d'),
            'no_resi'=> $this->faker-> randomNumber()
        ];
    }
}