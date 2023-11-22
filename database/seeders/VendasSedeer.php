<?php

namespace Database\Seeders;

use App\Models\Venda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendasSedeer extends Seeder
{

    public function run(): void
    {
        Venda::create(
            [
                'numero_da_venda' => 2,
                'produto_id' => 10,
                'cliente_id' => 11,

            ]
        );
        Venda::create(
            [
                'numero_da_venda' => 3,
                'produto_id' => 7,
                'cliente_id' => 8,

            ]
        );
    }
}
