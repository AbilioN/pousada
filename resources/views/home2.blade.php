@extends('layout.app')

@section('body')
<meta name="csrf-token" content="{{ csrf_token() }}">

<h1>Home Usuario</h1>
<p>One piece é sensacional 2!</p>
<p>Bem vindo {{$user->name}} !</p>









<style>
    @keyframes pulse {
        0% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
            box-shadow: 0px 0px 5px 2px black;
        }

        50% {
            transform: translate(-50%, -50%) scale(0.25);
            opacity: 0.5;
            box-shadow: 0px 0px 0px 0px black;
        }

        100% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
            box-shadow: 0px 0px 5px 2px black;
        }
    }


    /* tracker.style.backgroundColor = 'red';
    tracker.style.width = '10px';
    tracker.style.height = '10px';
    tracker.style.borderRadius = '50%';
    tracker.style.position = 'absolute'; */
    #tracker {
        background-color: transparent;
        border: 2px solid black;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        position: absolute;
        transform: translate(-50%, -50%);
        animation: pulse 3s infinite ease-in-out;
    }


    #bt-context-menu {
        position: absolute;
        width: 150px;
    }
</style>







<div>

    <button type="button" id="newServiceForm" class="btn btn-primary">Solicitar Atendimento</button>
    <button type="button"  id="newRentForm" class="btn btn-secondary">Alugueis</button>
    <button type="button" id="currentValue" class="btn btn-success">Cozinha</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>
</div>

<div id="section">

    <form action="" method="POST" name="token" id="serviceForm" class="section">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Selecione o serviço</label>
            <select class="form-control" id="serviceType" name="serviceType">
                @foreach($services as $service)
                <option value="{{ $service->id }}">{{$service->serviceSector}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <label for="registerSexInput" class="">Modalidade</label>
            <div class="col-md-12">
                <select class="custom-select" id="serviceSubType" name="serviceSubType">
                </select>
            </div>

        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Gostaria de adicionar alguma observação ou comentário? </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </div>
    </form>

    <form action="" method="POST" name="token" id="rentForm" class="section">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Selecione a categoria de aluguel</label>
            <select class="form-control" id="rent" name="rent">
                @foreach($rents as $rent)
                <option value="{{ $rent->id }}">{{$rent->rentSector}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <label for="registerSexInput" class="">Modalidade</label>
            <div class="col-md-12">
                <select class="custom-select" id="rentType" name="rentType">
                </select>
            </div>

        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Gostaria de adicionar alguma observação ou comentário? </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </div>
    </form>

   
    

    <div class="section" id="currentValueSection">
        <h2>container do cansado</h2>
        <form action="">
            <label for="">Local</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </form>

    </div>

</div>
@endsection



@section('footer')
<script>
    $(function() {

        const services = JSON.parse('{!! $services !!}');
        const rents = JSON.parse('{!! $rents !!}');

        console.log(services);
        console.log(rents);

        $('#serviceType').on('change', (event) => {
            // console.log('teste');
            // console.log(event.target.value);
            console.log(services);
            const subServices = services[event.target.value - 1].sub_services;

            $('#serviceSubType').html(''); //equivalente a serviceSubType.innerHTML = ''

            // subServices.forEach(subService => {
            //     // callback que vai rodar para cada elemento, equivalente ao for...let...of... abaixo

            //     const serviceType = subService.serviceType;

            //     const option = document.createElement('option');
            //     option.innerText = serviceType;
            //     option.id = subService.id

            //     $('#serviceSubType').append(option);

            // });

            for (let subService of subServices) {
                // codigo que vai rodar para cada elemento, equivalente ao array.forEach(element => {}) acima

                const serviceType = subService.serviceType;
                // console.log(serviceType);

                let option = document.createElement('option');
                option.innerText = serviceType;
                option.id = subService.id

                $('#serviceSubType').append(option);
            }

        });

        $('#rent').on('change' , (event) =>{
            // console.log('rent');
            console.log(rents);
            // console.log(event.target.value);
             const rentTypes = rents[event.target.value - 1].rents_types;
            //  console.log(rentTypes);
             $('#rentType').html('');

             for (let rentType of rentTypes) {
                // codigo que vai rodar para cada elemento, equivalente ao array.forEach(element => {}) acima

                const rentTypes = rentType.rentType;
                // console.log(rentTypes)
                let option = document.createElement('option');
                option.innerText = rentTypes;
                option.id = rents.id;

                $('#rentType').append(option);
            }

        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });


        function service() {
            console.log('serivcess');
        }



        function getServices() {
            $.ajax({
                type: "GET",
                url: "{{ route('getServicesJson')}}",
                success: function(response) {
                    // alert('cheguei');
                    console.log(response);
                },
            });
        }

        $('#serviceForm').hide();
        $('#saldo').hide();
        $('.section').hide();
        


        $('#saldo-parcial-button').on('click', (event) => {
            console.log(event)
        });
        $('#newServiceForm').on('click' , (event) =>{
            var section = event.target.id;
            console.log(section);
            $('.section').hide();
            $(`#serviceForm`).toggle();
        });
        $('#newRentForm').on('click' , (event) =>{
            $('.section').hide();
            $('#rentForm').toggle();

        });
        $('#currentValue').on('click' , (event) =>{
            // console.log('uashaushas');
            $('.section').hide();
            $('#currentValueSection').toggle();

        });


        // $('body').on('mousemove', function(event) {

        //     // nao uso $('#') pra nao por o [0] necessario para acessar 
        //     // propriedades nativas de um objeto no DOM do browser.
        //     let tracker = document.getElementById('tracker'); 

        //     // se tracker for == 0 (variavel 0 do tipo number), [], null, undefined, '' ele eh avaliado como false, portanto apos negado entra no if 
        //     // (OBJETOS vazios, no entanto, sao avaliados como true).
        //     if (!tracker) {
        //         // no primeiro click definimos o objeto tracker, adicionamos ele no DOM e setamos seu id para da proxima vez 
        //         // que o evento for disparado ele nao execute esse bloco if
        //         tracker = document.createElement('div');
        //         $(event.currentTarget).append(tracker);
        //         tracker.id = 'tracker';

        //         // tracker.style.animation = '';
        //     }


        //     // mudamos apenas a posicao conforme o mouse anda pela tela 
        //     tracker.style.top = `${event.clientY}px`;
        //     tracker.style.left = `${event.clientX}px`;

        // });


        // $('body').on('click', function(event) {
        //     if (event.which === 1) {
        //         $('#bt-context-menu').remove();
        //         console.log($('#bt-context-menu'));
        //     }
        // });


        // $('body').on('contextmenu', function(event) {

        //     if (event.which === 3) {
        //         event.preventDefault();


        //         let contextMenu = document.getElementById('bt-context-menu');

        //         if (!contextMenu) {
        //             contextMenu = document.createElement('div');
        //             contextMenu.id = 'bt-context-menu';
        //             contextMenu.className = 'd-flex flex-column';
        //             contextMenu.innerHTML = `
        //                 <button style='font-size: 12px' class="btn btn-primary">Garantista™</button>
        //             `

        //             $(contextMenu).hide();

        //             $('body').append(contextMenu);
        //         }

        //         $(contextMenu).toggle();

        //         contextMenu.style.top = `${event.clientY}px`;
        //         contextMenu.style.left = `${event.clientX}px`;
        //     }
        // });
    });
</script>



@endsection