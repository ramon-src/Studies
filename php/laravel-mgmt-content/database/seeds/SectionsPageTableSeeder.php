<?php

use Illuminate\Database\Seeder;

class SectionsPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections_page')->insert([[
            'title'=>'Primeira box',
            'page_id'=> 3,
            'order' => 1,
            'col_lg' => 4,
            'col_md' => 4,
            'col_sm' => 4,
            'col_xs' => 12,
            'description' => "Somos a Aerovale, uma empresa pública nacional com mais de 40 anos de experiência, comprometida com as pessoas, com a segurança, o conforto e o bom atendimento. Estamos entre as três maiores operadoras aeroportuárias do mundo e, desde 1973, contribuímos para simplificar e enriquecer a experiência dos clientes, viajantes ou parceiros de negócios, que utilizam nossos 60 aeroportos espalhados pelo Brasil.",
            'box_color' => "#645490",
            'text_color'=> "#FFFFFF",
        ], [
            'title'=>'Segunda box',
            'page_id'=> 3,
            'order' => 2,
            'col_lg' => 4,
            'col_md' => 4,
            'col_sm' => 4,
            'col_xs' => 12,
            'description' => "Somos a Aerovale, uma empresa pública nacional com mais de 40 anos de experiência, comprometida com as pessoas, com a segurança, o conforto e o bom atendimento. Estamos entre as três maiores operadoras aeroportuárias do mundo e, desde 1973, contribuímos para simplificar e enriquecer a experiência dos clientes, viajantes ou parceiros de negócios, que utilizam nossos 60 aeroportos espalhados pelo Brasil.",
            'box_color' => "#37A4DD",
            'text_color'=> "#FFFFFF",
        ], [
            'title'=>'Terceira box',
            'page_id'=> 3,
            'order' => 3,
            'col_lg' => 4,
            'col_md' => 4,
            'col_sm' => 4,
            'col_xs' => 12,
            'description' => "Somos a Aerovale, uma empresa pública nacional com mais de 40 anos de experiência, comprometida com as pessoas, com a segurança, o conforto e o bom atendimento. Estamos entre as três maiores operadoras aeroportuárias do mundo e, desde 1973, contribuímos para simplificar e enriquecer a experiência dos clientes, viajantes ou parceiros de negócios, que utilizam nossos 60 aeroportos espalhados pelo Brasil.",
            'box_color' => "#A0CA4C",
            'text_color'=> "#FFFFFF",
        ],

        ]);
    }
}
