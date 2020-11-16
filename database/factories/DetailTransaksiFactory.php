<?php

namespace Database\Factories;

use App\Models\detail_transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailTransaksiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = detail_transaksi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'transaksi_id'=> 1, 
            'barang_id' => 1,
            'jumlah'=> $this->faker->numberBetween(1,100),
            'harga_beli' => $this->faker->randomNumber(),
            'discount' => 0

        ];
    }
}