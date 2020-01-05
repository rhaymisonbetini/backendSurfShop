<?php

use App\Products;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            $this->createProduct();
        }
    }

    public function createProduct()
    {
        $faker = Faker\Factory::create('pt_BR');
        $product = new Products;
        $product->name = $faker->randomElement(['Prancha de Surf', 'Óculos Oakley', 'Camiseta Especial', 'Chinelo Hawaii', 'Boné SurfBlow']);
        $product->description = $faker->randomElement(['Produto de ótima qualidade importado', 'Produto todo trabalhado e com otimo acabamento', 'Linha especial do sul da Califónia']);
        if ($product->name === 'Camiseta Especial') {
            $product->picture = 'https://surfalive.fbitsstatic.net/img/p/camiseta-para-surf-rip-curl-wave-manga-longa-grey-92604/254905.jpg?w=800&h=800&v=no-change';
            $product->price = 125.00;
        } elseif ($product->name === 'Prancha de Surf') {
            $product->picture = 'https://decathlonpro.vteximg.com.br/arquivos/ids/229897-500-500/sb-100-7-soft-1.jpg?v=636550461508530000';
            $product->price = 300.00;
        } elseif ($product->name === 'Óculos Oakley') {
            $product->picture = 'https://static.netshoes.com.br/produtos/oculos-de-sol-oakley-holbrook-masculino/06/654-2190-006/654-2190-006_zoom1.jpg';
            $product->price = 179.25;
        } elseif ($product->name === 'Chinelo Hawaii') {
            $product->picture = 'https://cea.vteximg.com.br/arquivos/ids/1800068-468-560/Chinelo-Havaianas-Surf-Branco-8725348-Branco_1.jpg?v=636416948359900000';
            $product->price = 25.90;
        } else {
            $product->picture = 'https://surfalive.fbitsstatic.net/img/p/bone-surf-alive-foundation-trucker-camuflado-93564/257764.jpg?w=800&h=800&v=no-change';
            $product->price = 37.90;
        }

        $product->user_id =  (float)rand(1,10);
        $product->save();
    }
}
