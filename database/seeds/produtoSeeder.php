<?php

use Illuminate\Database\Seeder;

class produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            [
                'categoria_id' => 1,
                'nome' => 'Check-in de hospedagem',
                'descricao' => 'Dê seu check-in e acomchegue-se nas nossas instalações, temos os melhores serviços da região.',
                'preco' => 0,
            ],
            [
                'categoria_id' => 1,
                'nome' => 'Ajudante de serviços gerais',
                'descricao' => 'Dê seu check-in e acomchegue-se nas nossas instalações, temos os melhores serviços da região.',
                'preco' => 30,
            ],
            [
                'categoria_id' => 1,
                'nome' => 'Ajudante de serviços gerais',
                'descricao' => 'Dê seu check-in e acomchegue-se nas nossas instalações, temos os melhores serviços da região.',
                'preco' => 30,
            ],
            [
                'categoria_id' => 2,
                'nome' => 'Motorista particular',
                'descricao' => 'Não quer perder tempo esperando aplicativos ou lidando com demais contratempos? aproveite nosso motorista particular para aproveitar sem contratempos!',
                'preco' => 90,
            ],
            [
                'categoria_id' => 2,
                'nome' => 'Pousada Taxi',
                'descricao' => 'Nem perca tempo com aplicativos ou procurando um taxi, se é apenas uma carona que você precisa podemos dar uma mãozinha.',
                'preco' => 45,
            ],
            [
                'categoria_id' => 3,
                'nome' => 'Guia local',
                'descricao' => 'Veja rapidamente quais são os melhores pontos turísticos do estado e planeje seu melhor lazer!',
                'preco' => 60,
            ],

            [
                'categoria_id' => 3,
                'nome' => 'Guia personalizado',
                'descricao' => 'Se quiser companhia e segurança até mesmo nas aventuras mais radicais? nosso guia personalizado não gosta de se aventurar sozinho!',
                'preco' => 60,
            ],
            [
                'categoria_id' => 4,
                'nome' => 'Massagem profissional',
                'descricao' => 'Cansado da viagem? deixe-nos ajudar a relaxar!',
                'preco' => 75,
            ],

            [
                'categoria_id' => 4,
                'nome' => 'Massoterapia e acupuntura',
                'descricao' => 'Novas técnicas e formas para relaxar ainda melhor',
                'preco' => 75,
            ],
            [
                'categoria_id' => 4,
                'nome' => 'Beleza e estética',
                'descricao' => 'Quer dar um retoque no visual? faça sem ter que sair do seu quarto.',
                'preco' => 90,
            ],
            [
                'categoria_id' => 5,
                'nome' => 'MTB equipada',
                'descricao' => 'Gosta de se aventurar sob duas rodas? alugue nossa MTB e tenha em mãos o melhor equipamento para suas trilhas!.',
                'preco' => 120,
            ],
            [
                'categoria_id' => 5,
                'nome' => 'City Slim',
                'descricao' => 'Caso prefira pedalar no esfalto, desfrute da leveza e velocidade da nossa slim fibra de carbono!',
                'preco' => 180,
            ],
            [
                'categoria_id' => 5,
                'nome' => 'Bike Family',
                'descricao' => 'Bicicleta para três ou quatro pessoas para compartilhar toda a pedalada!',
                'preco' => 180,
            ],
            [
                'categoria_id' => 6,
                'nome' => 'Carro popular',
                'descricao' => 'Precisa de um veículo próprio por algumas horas? consiga sem depender de nenhuma agência!',
                'preco' => 180,
            ],
            [
                'categoria_id' => 6,
                'nome' => 'Pousada Bugre',
                'descricao' => 'Precisa de um veículo próprio por algumas horas? consiga sem depender de nenhuma agência!',
                'preco' => 180,
            ],
            [
                'categoria_id' => 7,
                'nome' => 'Jetsky',
                'descricao' => 'Pra quem gosta de radicalizar a praia!',
                'preco' => 330,
            ],
            [
                'categoria_id' => 7,
                'nome' => 'Lancha',
                'descricao' => 'Pra quem quer conforto e privacidade',
                'preco' => 780,
            ],
            [
                'categoria_id' => 8,
                'nome' => 'Barraca',
                'descricao' => 'Barraca de camping para duas ou quatro pessoas',
                'preco' => 80,
            ],
            [
                'categoria_id' => 8,
                'nome' => 'Kit de acessórios',
                'descricao' => 'utilidades para trilha como bussolas, bolsas de água, botas e demais utilidades!',
                'preco' => 80,
            ],
            [
                'categoria_id' => 9,
                'nome' => 'Prato feito  brasileiro',
                'descricao' => 'Porção básica com feijão,arroz e duas opções de carne',
                'preco' => 15,
            ],
            [
                'categoria_id' => 9,
                'nome' => 'Marmita',
                'descricao' => 'Temos marmita simples ou a torre caso queira levar para a praia!',
                'preco' => 25,
            ],
            [
                'categoria_id' => 10,
                'nome' => 'Lasanha',
                'descricao' => 'Lasanha da casa nos sabores de bolonhesa, frango ou calabresa.',
                'preco' => 35,
            ],
            [
                'categoria_id' => 10,
                'nome' => 'Pizza',
                'descricao' => 'Pizza da casa nos sabores tradicionais. (mulsarela, calabresa, carne de sol com catupiry e frango com catupiry',
                'preco' => 40,
            ],
            [
                'categoria_id' => 11,
                'nome' => 'Porção de macaxeira com carne de sol',
                'descricao' => 'Porção para quatro pessoas do prato mais tradicional do nordeste!',
                'preco' => 40,
            ],
            [
                'categoria_id' => 11,
                'nome' => 'Tapioca Recheada',
                'descricao' => 'Nos mais diversos sabores e acompanhamentos',
                'preco' => 12,
            ],
            [
                'categoria_id' => 12,
                'nome' => 'Camarão potiguar',
                'descricao' => 'Porção de camarão potiguar para quatro pessoas',
                'preco' => 62,
            ],
            [
                'categoria_id' => 12,
                'nome' => 'Ensopado de Polvo',
                'descricao' => 'Polvo tropical ao molho nordestino!',
                'preco' => 68,
            ],
            [
                'categoria_id' => 13,
                'nome' => 'Sorvete',
                'descricao' => 'Nos mais diversos sabores',
                'preco' => 16,
            ],
            [
                'categoria_id' => 13,
                'nome' => 'Açai',
                'descricao' => 'Doce ou tradicional',
                'preco' => 20,
            ],
        ]);
    }
}
