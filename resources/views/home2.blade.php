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

    <button type="button" id="novoServicoForm" class="btn btn-primary">Solicitar Atendimento</button>
    <button type="button"  id="newRentForm" class="btn btn-secondary">Alugueis</button>
    <button type="button" id="currentValue" class="btn btn-success">Cozinha</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>
</div>

<div id="section">

    <form action="" method="POST" name="token" id="servicoForm" class="section">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Selecione a modalidade</label>
            <select class="form-control" id="ServicoCategoria" name="ServicoCategoria">
               <option>Selecione</option>
            </select>
        </div>
        <div class="form-group row">
            <label for="registerSexInput" class="">Serviço</label>
            <div class="col-md-12">
                <select class="custom-select" id="servico" name="servico">
                    <option>Selecione</option>
                </select>
                <div id="servicoDesc"></div>
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
            <select class="form-control" id="AluguelCategoria" name="AluguelCategoria">
               <option>Selecione</option>
            </select>
        </div>
        <div class="form-group row">
            <label for="registerSexInput" class="">Modalidade</label>
            <div class="col-md-12">
                <select class="custom-select" id="Aluguel" name="Aluguel">
                    <option>Selecione</option>
                </select>
                <div id="AluguelDesc" class="width:100%"></div>
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

        const produtos = JSON.parse('{!! $produtos !!}');
        const categorias = JSON.parse('{!! $categorias !!}');
        console.log(produtos);
        console.log(categorias);
        const servicos  = categorias[0]; //seelecionar apenas as categorias referentes a atendimento
        const alugueis = categorias[1];
        // console.log(alugueis.categorias);
        // console.log(alugueis);
        // console.log(servicos);
        for(let servico of servicos.categorias){

            const option = document.createElement   ('option');
            option.innerText = servico.categoria;
            option.id = servico.id;
        
            $('#ServicoCategoria').append(option);
        }
        for(let aluguel of alugueis.categorias){
 
            const option = document.createElement('option');
            option.innerText = aluguel.categoria;
            option.id = servico.id;
            
            // console.log(option);
            $('#AluguelCategoria').append(option);
        }
        $('#ServicoCategoria').on('change', (event) => {
            $('#servicoDesc').html('');

            let chave = event.currentTarget.selectedIndex -1;
            // -1 para adequar a identação de array entre o objeto php e o objeto javascript  
            $('#servico').html('');
            op = document.createElement('option');
            op.innerText = 'Selecione';
            $('#servico').append(op);
            for(let produto of produtos[chave].produtos)
            {   
                const option  = document.createElement('option');
                option.innerText = produto.nome;
                option.id = produto.id;
                $('#servico').append(option);
            }
        });

        $('#AluguelCategoria').on('change' , (event) => {
            $('#AluguelDesc').html('');
            let chave = event.currentTarget.selectedIndex + 3;
            // -3 também para adaptar a posicao do Array.
            $('#Aluguel').html('');
            $('#AluguelDesc').html('');
            op = document.createElement('option');
            op.innerText = 'Selecione';
            $('#Aluguel').append(op);
            for(let produto of produtos[chave].produtos){
                const option = document.createElement('option');
                option.innerText = produto.nome;
                option.id = produto.id;
                $('#Aluguel').append(option); 
            }
        });

        $('#Aluguel').on('change' , (event) => {
                $('#AluguelDesc').html('');

                let chaveProduto = event.currentTarget.selectedIndex -1;
                let chave = document.getElementById('AluguelCategoria').selectedIndex;
                chave = chave + 3;
                console.log(chave);
                let Produto = produtos[chave].produtos[chaveProduto];
                console.log(Produto);
                let descricao = document.createElement('textarea'); 
                descricao.innerText = Produto.descricao;
                console.log(descricao);
                document.getElementById('AluguelDesc').appendChild(descricao);
                // document.getElementById('#')
                
        });
        $('#servico').on('change' , (event) => {
                $('#servicoDesc').html('');
                let chaveProduto = event.currentTarget.selectedIndex -1;
                let chave = document.getElementById('AluguelCategoria').selectedIndex;
                chave = chave + 1;
                // console.log(chave);
                let Produto = produtos[chave].produtos[chaveProduto];
                // console.log(Produto);
                let descricao = document.createElement('div'); 
                descricao.innerText = Produto.descricao;
                // console.log(descricao);
                document.getElementById('servicoDesc').appendChild(descricao);
        }); 
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });
        function service() {
            console.log('serivcess');
        }
        $('#servicoForm').hide();
        $('#saldo').hide();
        $('.section').hide();
        $('#saldo-parcial-button').on('click', (event) => {
            console.log(event)
        });
        $('#novoServicoForm').on('click' , (event) =>{
            var section = event.target.id;
            
            console.log(section);
            $('.section').hide();
            $(`#servicoForm`).toggle();
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