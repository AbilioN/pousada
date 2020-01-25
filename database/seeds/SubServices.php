<?php

use Illuminate\Database\Seeder;

class SubServices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_services')->insert([
            [
                'service_id' => 1,
                'serviceType' => 'Check-in de hospedagem',
                'description' => 'Dê seu check-in e acomchegue-se nas nossas instalações, temos os melhores serviços da região.',
                'servicePrice' => 30,

            ],
            [
                'service_id' => 1,
                'serviceType' => 'Ajudante de serviços gerais',
                'description' => 'Saia livremente sem se preocupar com os afazeres, nossa hospitalidade manterá sempre seu quarto limpo e agradável.',
                'servicePrice' => 50,
                
            ],
            [
                'service_id' => 1,
                'serviceType' => 'Tour imediato',
                'description' => 'Há muito o que aproveitar! venha conosco conhecer!',
                'servicePrice' => 30,
                
            ],
            [
                'service_id' => 2,
                'serviceType' => 'Motorista particular',
                'description' => 'Não quer perder tempo esperando aplicativos ou lidando com demais contratempos? aproveite nosso motorista particular para aproveitar sem contratempos!',
                'servicePrice' => 30,

            ],
            [
                'service_id' => 2,
                'serviceType' => 'Temos nosso próximo serviço de taxi, quer agendar?',
                'description' => 'Atendemos com horário marcado ou se preferir, basta mandar a localização no nosso aplicativo e vamos te buscar!',
                'servicePrice' => 50,
                
            ],
            [
                'service_id' => 3,
                'serviceType' => 'Guia local',
                'description' => 'Veja rapidamente quais são os melhores pontos turísticos do estado e planeje seu melhor lazer! ',
                'servicePrice' => 50,
                
            ],
            [
                'service_id' => 3,
                'serviceType' => 'Guia personalizado',
                'description' => 'Se quiser companhia e segurança até mesmo nas aventuras mais radicais? nosso guia personalizado não gosta de se aventurar sozinho!',
                'servicePrice' => 380,

            ],
            [
                'service_id' => 4,
                'serviceType' => 'Massagem e estética',
                'description' => 'temos os melhores massagistas do estado, e seus cuidados com a beleza estão logo ao lado!',
                'servicePrice' => 50,
                
            ],
            [
                'service_id' => 4,
                'serviceType' => 'Aculputura e massoterapia',
                'description' => 'Pode deitar e flutuar!',
                'servicePrice' => 85,

            ],
         
        ]);
    }
}
