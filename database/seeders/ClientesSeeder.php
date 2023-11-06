<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Aléxis Cordeiro',
            'email' => 'alexis@gmail.com',
            'endereco' => 'Rua XV',
            'logradouro' => 'Rua XV',
            'cep' => '10100020-10',
            'bairro' => 'IDOSO',
        ]);
        Cliente::create([
            'nome' => 'Alec Fumaça',
            'email' => 'alexis@gmail.com',
            'endereco' => 'Rua XV',
            'logradouro' => 'Rua XV',
            'cep' => '10100020-10',
            'bairro' => 'IDOSO',
        ]);
    }
}
