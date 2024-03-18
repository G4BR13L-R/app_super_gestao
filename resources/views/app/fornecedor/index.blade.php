<h3>Fornecedor</h3>

@php
    /*
    if(empty($variavel) {} // retornar true se a variavel estiver vazia
    -''
    -0
    -0.0
    -'0'
    -null
    -false
    -array()
    -$var
    */

 @endphp

@isset($fornecedores)

    @forelse($fornecedores as $fornecedor)
        Iteração Atual: {{ $loop->iteration }}
        <br>
        Fornecedores: {{ $fornecedor ['nome'] }}
        <br>
        Status: {{ $fornecedor ['status'] }}
        <br>
        CNPJ: {{ $fornecedor ['cnpj'] ?? ''}}
        <br>
        Telefone: ({{ $fornecedor ['ddd'] ?? ''}}) {{ $fornecedor ['ddd'] ?? ''}}
        <br>
        @if($loop->first)
            Primeira iteração do Loop
        @endif

        @if($loop->last)
            Ultima iteração do Loop
        @endif
        <hr>
    @empty
        Não existem Fornecedores Cadastrados
    @endforelse
@endisset
