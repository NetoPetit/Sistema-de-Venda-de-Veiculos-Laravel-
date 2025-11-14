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
            [
                'marca' => 'Volkswagen',
                'modelo' => 'Gol',
                'cor' => 'Branco',
                'ano_fabricacao' => 2023,
                'quilometragem' => 72000,
                'valor' => 52000,
                'detalhes' => 'Veículo econômico, revisões em dia e ótimo para uso urbano.',
                'img1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251114/volkswagen-gol-1.0-12v-mpi-totalflex-4p-manual-wmimagem19532059826.jpg?s=fill&w=1920&h=1440&q=75',
                'img2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251114/volkswagen-gol-1.0-12v-mpi-totalflex-4p-manual-wmimagem19532369841.jpg?s=fill&w=1920&h=1440&q=75',
                'img3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251114/volkswagen-gol-1.0-12v-mpi-totalflex-4p-manual-wmimagem19532105829.jpg?s=fill&w=1920&h=1440&q=75',
            ],
            [
                'marca' => 'Toyota',
                'modelo' => 'Etios Cross',
                'cor' => 'Prata',
                'ano_fabricacao' => 2015,
                'quilometragem' => 45000,
                'valor' => 68000,
                'detalhes' => 'Carro muito confiável, baixíssimo custo de manutenção e excelente durabilidade.',
                'img1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251031/toyota-etios-cross-1.5-16v-flex-4p-manual-wmimagem2049549229.jpg?s=fill&w=1920&h=1440&q=75',
                'img2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251031/toyota-etios-cross-1.5-16v-flex-4p-manual-wmimagem20514345912.jpg?s=fill&w=1920&h=1440&q=75',
                'img3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251031/toyota-etios-cross-1.5-16v-flex-4p-manual-wmimagem20495883635.jpg?s=fill&w=1920&h=1440&q=75',
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'HB20',
                'cor' => 'Vermelho',
                'ano_fabricacao' => 2021,
                'quilometragem' => 35000,
                'valor' => 69000,
                'detalhes' => 'Carro muito bem conservado, único dono e baixa quilometragem.',
                'img1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251025/hyundai-hb20-1.0-tgdi-flex-sport-automatico-wmimagem12243566634.jpg?s=fill&w=1920&h=1440&q=75',
                'img2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251025/hyundai-hb20-1.0-tgdi-flex-sport-automatico-wmimagem12265494680.jpg?s=fill&w=1920&h=1440&q=75',
                'img3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251025/hyundai-hb20-1.0-tgdi-flex-sport-automatico-wmimagem1225229360.jpg?s=fill&w=1920&h=1440&q=75',
            ],
            [
                'marca' => 'Ford',
                'modelo' => 'Ka',
                'cor' => 'Prata',
                'ano_fabricacao' => 2017,
                'quilometragem' => 88000,
                'valor' => 41500,
                'detalhes' => 'Ótimo para trabalho diário, manutenção acessível.',
                'img1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251114/ford-ka-1.5-tivct-flex-se-manual-wmimagem11490878131.jpg?s=fill&w=1920&h=1440&q=75',
                'img2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251114/ford-ka-1.5-tivct-flex-se-manual-wmimagem11491274417.jpg?s=fill&w=1920&h=1440&q=75',
                'img3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251114/ford-ka-1.5-tivct-flex-se-manual-wmimagem11491587622.jpg?s=fill&w=1920&h=1440&q=75',
            ],
            [
                'marca' => 'Renault',
                'modelo' => 'Kwid',
                'cor' => 'Prata',
                'ano_fabricacao' => 2024,
                'quilometragem' => 19000,
                'valor' => 58500,
                'detalhes' => 'Compacto, moderno e econômico, ideal para quem busca eficiência.',
                'img1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251110/renault-kwid-1-0-12v-sce-flex-outsider-manual-wmimagem04082866036.webp?s=fill&w=1920&h=1440&q=75',
                'img2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251110/renault-kwid-1-0-12v-sce-flex-outsider-manual-wmimagem04083018416.webp?s=fill&w=1920&h=1440&q=75',
                'img3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251110/renault-kwid-1-0-12v-sce-flex-outsider-manual-wmimagem04082961322.webp?s=fill&w=1920&h=1440&q=75',
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
