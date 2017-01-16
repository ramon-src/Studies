<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('pages')->insert([[
            'title' => 'Home',
            'slug' => str_slug('Home'),
            'description' => "Somos a Aerovale, uma empresa pública nacional com mais de 40 anos de experiência, comprometida com as pessoas, com a segurança, o conforto e o bom atendimento. Estamos entre as três maiores operadoras aeroportuárias do mundo e, desde 1973, contribuímos para simplificar e enriquecer a experiência dos clientes, viajantes ou parceiros de negócios, que utilizam nossos 60 aeroportos espalhados pelo Brasil.",
            'symbol' => '',
            'color_symbol' => '#239EDD',
        ], [
            'title' => 'Empreendimento',
            'slug' => str_slug('Empreendimento'),
            'description' => "Somos sócios – com 49% de participação – dos aeroportos de Brasília, no Distrito Federal, Guarulhos e Viracopos, em São Paulo, Confins, em Minas Gerais e Galeão, no Rio de Janeiro. Nossas conquistas ao longo dos anos mostram que estamos em constante evolução, investindo em treinamento e tecnologia na busca da melhoria da prestação de serviços e de soluções aeroportuárias.",
            'symbol' => 'briefcase',
            'color_symbol' => '#1668AF',
        ], [
            'title' => 'Infraestrutura',
            'slug' => str_slug('Infraestrutura'),
            'description' => "Estamos entre as três maiores operadoras aeroportuárias do mundo e, desde 1973, contribuímos para simplificar e enriquecer a experiência dos clientes, viajantes ou parceiros de negócios, que utilizam nossos 60 aeroportos espalhados pelo Brasil. São mais de 130 milhões de passageiros transportados ao ano, representando cerca de 60% do movimento aéreo no País, o que nos coloca em posição de destaque no cenário da aviação nacional.",
            'symbol' => 'plane',
            'color_symbol' => '#239EDD',
        ], [
            'title' => 'Galeria',
            'slug' => str_slug('Galeria'),
            'description' => "Um pouco da nossa bela história em fotos",
            'symbol' => 'camera-retro',
            'color_symbol' => '#199B93',
        ], [
            'title' => 'Mídia',
            'slug' => str_slug('Mídia'),
            'description' => "Estamos entre as três maiores operadoras aeroportuárias do mundo e, desde 1973, contribuímos para simplificar e enriquecer a experiência dos clientes, viajantes ou parceiros de negócios, que utilizam nossos 60 aeroportos espalhados pelo Brasil. São mais de 130 milhões de passageiros transportados ao ano, representando cerca de 60% do movimento aéreo no País, o que nos coloca em posição de destaque no cenário da aviação nacional.",
            'symbol' => 'bullhorn',
            'color_symbol' => '#119947',
        ], [
            'title' => 'Contato',
            'slug' => str_slug('Contato'),
            'description' => "Estamos a sua disposição sempre que precisar, mantenha contato conosco.",
            'symbol' => 'commenting-o',
            'color_symbol' => '#96C438',
        ]
        ]);
    }
}
