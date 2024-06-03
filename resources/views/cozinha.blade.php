<?php

use App\Models\cliente;
use App\Models\extra;
use App\Models\pedido;
use App\Models\pizza;
use App\Models\sabor;
use App\Models\tamanho;

?>

<style>
    th {
        padding: 10px;
        border: #000 solid 1px;
    }
</style>

<body class="w-screen h-screen bg-[#F9EFDB]">
    <section class="flex flex-col justify-center items-center overflow-y-scroll mb-10 mt-10">
        <div class="font-semibold mb-12 text-3xl border-b-2 border-zinc-400">
            Cozinha
        </div>
        <table class="w-8/12">
            <thead class="bg-[#EBD9B4]">
                <tr>
                    <th>Sabor</th>
                    <th>Tamanho</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody class="bg-zinc-100">
                <?php
                $info = pedido::where('pronta', false)->get();

                foreach ($info as $key => $value) {
                    $pizza = pizza::where('id',$value['pizzas_id'])->first();
                    $tamanho = tamanho::where('id',$pizza['tamanhos_id'])->first();
                    $sabor = sabor::where('id',$pizza['sabores_id'])->first();
                    $extra = extra::where('id',$pizza['extras_id'])->first();
                    $cliente = cliente::where('id', $value['clientes_id'])->first();
                    ?>
                    <tr>
                        <th>
                            <?php echo $sabor['sabor'] ?>
                        </th>
                        <th>
                            <?php echo $tamanho['tamanho'] ?>
                        </th>
                        <th>
                            <?php echo $cliente['nome'] ?>
                        </th>
                        <th>
                            <?php echo ($value['tipo'] == 'e') ? 'entrega' : 'balcão' ?>
                        </th>
                        
                        <th>
                            <?php echo $value['preco'] ?>
                        </th>
                        
                        <th>
                            <form action="{{route('pedidosConcluir')}}" method="post">
                                @csrf
                                <input type="hidden" name="id"value="{{$value['id']}}">
                                <button type="submit">
                                    <abbr title="MARCAR COMO CONCLUIDO">✅</abbr>
                                </button>
                            </form>
                            <form action="{{route('pedidosDel')}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{$value['id']}}">
                                <button type="submit">
                                    <abbr title="EXCLUIR">🗑️</abbr>
                                </button>
                            </form>
                        </th>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </section>
</body>
