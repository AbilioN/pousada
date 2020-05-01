@extends('layout.app')

@section('body')
<meta name="csrf-token" content="{{ csrf_token() }}">

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


#section {
    padding: 30px;
    border: 1px solid white;
    border-radius: .25rem;
    height: auto;
    transition: all .5 ease-in-out;
}
.kingao{
    height: auto;
    /* border: 2px solid red; */
}
</style>

<div id="section">
    <div>
        {{-- @foreach ($categorias[1]->categorias as $categoria)
            <h1>{{$categoria->categoria}}</h1>


        @endforeach --}}
        <button type="button" id="novoServicoForm" class="btn btn-primary">Solicitar Atendimento</button>
        <button type="button" id="newRentForm" class="btn btn-secondary">Alugueis</button>
        <button type="button" id="currentValue" class="btn btn-success">Cozinha</button>
    </div>
    <div class="container col-8 ">

        <form action="/nova-os" method="POST" name="token" id="servicoForm" class="section">
            @csrf
            <div class="row">
                <div class="form-group col-6">
                    <label for="exampleFormControlSelect1">Selecione a modalidade</label>
                    <select class="form-control" id="ServicoCategoria" name="servicoCategoria">
                        <option value="0">Selecione</option>
                        @foreach (collect($categorias)->firstWhere('setor', 'Servicos')->categorias as $servico)
                        <option value="{{$servico->id}}">{{$servico->categoria}}</option>
                        @endforeach
                    </select>
                </div>
    
                <div class="form-group col-6">
                    <label for="registerSexInput" class="">Serviço</label>
                    <div class="col-md-12">
                        <select class="custom-select" id="servico" name="produto_id">
                            <option value="0">Selecione</option>
                        </select>   
                    </div>
                </div>
            </div>
           
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Gostaria de adicionar alguma observação ou comentário? </label>
                <textarea class="form-control" id="comentarioServico" name="comentario" rows="5"></textarea>
            </div>
            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </form>
        <div id="produtoDesc" class="container col-12 kingao">
            {{-- <h2 id="descTitulo">Titulo</h2>
            <p id="descDescricao">Lorem Impsum</p>
            <h3 id="descPreco">666</h3> --}}
        </div>
        {{-- <div class="section" id="currentValueSection">
            <h2>container do cansado</h2>
            <form action="">
                <label for="">Local</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>

        </div> --}}
    </div>
    <div class="container">
        <form action="/nova-os" id="aluguelForm" class="section" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-6">
                    <label for="exampleFormControlSelect1">Selecione a modalidade</label>
                    <select class="form-control" id="aluguelCategoria" name="aluguelCategoria">
                        <option value="0">Selecione</option>
                        @foreach (collect($categorias)->firstWhere('setor', 'Alugueis')->categorias as $aluguel)
                        <option value="{{$aluguel->id}}">{{$aluguel->categoria}}</option>
                        @endforeach
                    </select>
                </div>
    
                <div class="form-group col-6">
                    <label for="registerSexInput" class="">Serviço</label>
                    <div class="col-md-12">
                        <select class="custom-select" id="aluguel" name="produto_id">
                            <option value="0">Selecione</option>
                        </select>   
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Gostaria de adicionar alguma observação ou comentário? </label>
                <textarea class="form-control" id="comentarioAluguel" name="comentario" rows="5"></textarea>
            </div>
            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </form>

        <div id="aluguelDesc">

        </div>
    </div>
</div>

@endsection



@section('footer')
<script>
function genericFind(arrayVariable,indexVariableName,indexVariableValue) {
    return _.find(arrayVariable, function(o) { return o[indexVariableName] == indexVariableValue; });
}


$(function() {

    const servicos = {!! $categorias !!};
    $('#ServicoCategoria').on('change', (event) => {
        $('#servicoDesc').html('');
        const category_selected_id = event.currentTarget.value;
        // -1 para adequar a identação de array entre o objeto php e o objeto javascript  
        
        const service_selected = genericFind(servicos,'setor','Servicos');
        const service_category = genericFind(service_selected.categorias,'id',category_selected_id);

        op = document.createElement('option');
        $('#servico').html('');
        firstOption = document.createElement('option');
        firstOption.innerText = 'Selecione';
        firstOption.value = 0;
        $('#servico').append(firstOption);
        $('#produtoDesc').html('');

        // TODO tratar quando o sujeito escolher o selecione, posicao -1 no array nao existe.
        for (const produto of service_category.produtos) {
            const option = document.createElement('option');
            option.innerText = produto.nome;
            option.value = produto.id;
            $('#servico').append(option);
        }
        
    });


    $('#servico').on('change' , (event)=>{
        let produtoChave = event.currentTarget.selectedIndex -1;

        let categoria = $('#ServicoCategoria').children('option:selected').val() -1;
        console.log(categoria);
        const service_selected = genericFind(servicos,'setor','Servicos');
        const service_category = genericFind(service_selected.categorias,'id',category_selected_id);


        produto = categorias[0].categorias[categoria].produtos[produtoChave];
        console.log(produto);
        
        $('#produtoDesc').html('');
        
        prodTitulo = document.createElement('h2');
        prodDescricao = document.createElement('p');
        prodPreco = document.createElement('h3');

        prodTitulo.innerText = produto.nome;
        prodDescricao.innerText = produto.descricao;
        prodPreco.innerText = produto.preco;

        $('#produtoDesc').append(prodTitulo);
        $('#produtoDesc').append(prodDescricao);
        $('#produtoDesc').append(prodPreco);

    });

    
    $('#aluguelCategoria').on('change', (event) => {

        let chave = event.currentTarget.selectedIndex -1;
        // -1 para adequar a identação de array entre o objeto php e o objeto javascript  

        op = document.createElement('option');
        $('#aluguel').html('');
        firstOption = document.createElement('option');
        firstOption.innerText = 'Selecione';
        firstOption.value = 0;
        $('#aluguel').append(firstOption);
        $('#aluguelDesc').html('');

        for (let aluguel of categorias[1].categorias[chave].produtos) {
            // console.log(aluguel);
            const option = document.createElement('option');
            option.innerText = aluguel.nome;
            option.value = aluguel.id -5;
            // TODO : aluguel.id - 5 porque o seletor do html começa em 0, mas no JSON ele está pegando o id e não a posição do array, transcrever futuramente depois.

            $('#aluguel').append(option);
        }
        

    });

    $('#aluguel').on('change' , (event)=>{
        let produtoChave = event.currentTarget.selectedIndex -1;

        let categoria = $('#aluguelCategoria').children('option:selected').val() -5;
            // TODO : categoria - 5 porque o seletor do html começa em 0, mas no JSON ele está pegando o id e não a posição do array, transcrever futuramente depois.


        aluguel = categorias[1].categorias[categoria].produtos[produtoChave];
        $('#aluguelDesc').html('');
        
        aluguelTitulo = document.createElement('h2');
        aluguelDescricao = document.createElement('p');
        aluguelPreco = document.createElement('h3');

        aluguelTitulo.innerText = aluguel.nome;
        aluguelDescricao.innerText = aluguel.descricao;
        aluguelPreco.innerText = aluguel.preco;

        $('#aluguelDesc').append(aluguelTitulo);
        $('#aluguelDesc').append(aluguelDescricao);
        $('#aluguelDesc').append(aluguelPreco);

    });

    // $('#AluguelCategoria').on('change', (event) => {
    //     $('#AluguelDesc').html('');
    //     let chave = event.currentTarget.selectedIndex + 3;
    //     // -3 também para adaptar a posicao do Array.
    //     $('#Aluguel').html('');
    //     $('#AluguelDesc').html('');
    //     op = document.createElement('option');
    //     op.innerText = 'Selecione';
    //     $('#Aluguel').append(op);
    //     for (let produto of produtos[chave].produtos) {
    //         const option = document.createElement('option');
    //         option.innerText = produto.nome;
    //         option.id = produto.id;
    //         $('#Aluguel').append(option);
    //     }
    // });

    // $('#Aluguel').on('change', (event) => {
    //     $('#AluguelDesc').html('');

    //     let chaveProduto = event.currentTarget.selectedIndex - 1;
    //     let chave = document.getElementById('AluguelCategoria').selectedIndex;
    //     chave = chave + 3;
    //     console.log(chave);
    //     let Produto = produtos[chave].produtos[chaveProduto];
    //     console.log(Produto);
    //     let descricao = document.createElement('textarea');
    //     descricao.innerText = Produto.descricao;
    //     console.log(descricao);
    //     document.getElementById('AluguelDesc').appendChild(descricao);
    //     // document.getElementById('#')

    // });
    // $('#servico').on('change', (event) => {
    //     $('#servicoDesc').html('');
    //     let chaveProduto = event.currentTarget.selectedIndex - 1;
    //     let chave = document.getElementById('AluguelCategoria').selectedIndex;
    //     chave = chave + 1;
    //     // console.log(chave);
    //     let Produto = produtos[chave].produtos[chaveProduto];
    //     // console.log(Produto);
    //     let descricao = document.createElement('div');
    //     descricao.innerText = Produto.descricao;
    //     // console.log(descricao);
    //     document.getElementById('servicoDesc').appendChild(descricao);
    // });

    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }

    // });

    $('#servicoForm').hide();
    $('#saldo').hide();
    $('.section').hide();
    $('#saldo-parcial-button').on('click', (event) => {
        console.log(event)
    });
    $('#novoServicoForm').on('click', (event) => {
        var section = event.target.id;
        $('#produtoDesc').html('');

        console.log(section);
        $('.section').hide();
        $(`#servicoForm`).toggle();
    });
    $('#newRentForm').on('click', (event) => {
        $('#produtoDesc').html('');

        $('.section').hide();
        $('#aluguelForm').toggle();

    });
    $('#currentValue').on('click', (event) => {
        $('#produtoDesc').html('');
        // console.log('uashaushas');
        $('.section').hide();
        $('#currentValueSection').toggle();
    });

});
</script>



@endsection