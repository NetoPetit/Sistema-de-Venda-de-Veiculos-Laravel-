<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarrosTrabalho;

class CarrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carros = [
            [
                'marca' => 'Toyota',
                'modelo' => 'Corolla',
                'cor' => 'Prata',
                'ano_fabricacao' => 2022,
                'quilometragem' => 15000,
                'valor' => 120000,
                'detalhes' => 'Automático, completo, único dono.',
                'img1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251111/toyota-corolla-2.0-vvtie-flex-xei-direct-shift-wmimagem12300524092.jpg?s=fill&w=1920&h=1440&q=75',
                'img2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251111/toyota-corolla-2.0-vvtie-flex-xei-direct-shift-wmimagem12293243818.jpg?s=fill&w=1920&h=1440&q=75',
                'img3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251111/toyota-corolla-2.0-vvtie-flex-xei-direct-shift-wmimagem12310600224.jpg?s=fill&w=1920&h=1440&q=75',
            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Civic',
                'cor' => 'Preto',
                'ano_fabricacao' => 2021,
                'quilometragem' => 23000,
                'valor' => 110000,
                'detalhes' => 'Versão Sport, bancos de couro.',
                'img1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251105/honda-civic-2.0-16v-flexone-sport-4p-cvt-wmimagem15303291554.jpg?s=fill&w=1920&h=1440&q=75',
                'img2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251105/honda-civic-2.0-16v-flexone-sport-4p-cvt-wmimagem15302730485.jpg?s=fill&w=1920&h=1440&q=75',
                'img3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251105/honda-civic-2.0-16v-flexone-sport-4p-cvt-wmimagem15303336083.jpg?s=fill&w=1920&h=1440&q=75',
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Onix',
                'cor' => 'Branco',
                'ano_fabricacao' => 2023,
                'quilometragem' => 28000,
                'valor' => 80000,
                'detalhes' => 'Baixo consumo e ótimo estado.',
                'img1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251112/chevrolet-onix-1.0-turbo-flex-plus-lt-manual-wmimagem01375167727.jpg?s=fill&w=1920&h=1440&q=75',
                'img2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251112/chevrolet-onix-1.0-turbo-flex-plus-lt-manual-wmimagem01375250828.jpg?s=fill&w=1920&h=1440&q=75',
                'img3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251112/chevrolet-onix-1.0-turbo-flex-plus-lt-manual-wmimagem01375405325.jpg?s=fill&w=1920&h=1440&q=75',
            ],
            [
                'marca' => 'Fiat',
                'modelo' => 'Uno',
                'cor' => 'Prata',
                'ano_fabricacao' => 2015,
                'quilometragem' => 58000,
                'valor' => 45000,
                'detalhes' => 'Bom custo benefício e ótimo estado.',
                'img1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202509/20250930/fiat-uno-1.0-evo-attractive-8v-flex-4p-manual-wmimagem1159217338.jpg?s=fill&w=1920&h=1440&q=75',
                'img2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202509/20250930/fiat-uno-1.0-evo-attractive-8v-flex-4p-manual-wmimagem11593411534.jpg?s=fill&w=1920&h=1440&q=75',
                'img3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202509/20250930/fiat-uno-1.0-evo-attractive-8v-flex-4p-manual-wmimagem1159423450.jpg?s=fill&w=1920&h=1440&q=75',
            ],
        ];

        foreach ($carros as $carro) {
            CarrosTrabalho::updateOrCreate(
                ['modelo' => $carro['modelo']],
                $carro
            );
        }
    }
}
