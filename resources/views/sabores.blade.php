<?php

use App\Models\sabor;

$info = sabor::all();
$info2 = null;
foreach ($info as $key => $value) {
    if (isset($_GET["id"]) && $_GET["id"] == $value['id']) {
        $info2 = $value;
    }
}
?>

<body class="w-screen h-screen bg-[#F9EFDB]">
    <section class="flex flex-col justify-center items-center overflow-y-scroll mb-10 mt-10">
        <div class="w-full flex flex-col items-center mt-10 ">
            <div class="font-semibold mb-12 text-3xl border-b-2 border-zinc-400">
                Sabores
            </div>
            <form method="POST" action="<?php echo ($info2 != null)? route('saborUpdate') : route('saborAdd') ?>" class="w-[800px] grid grid-cols-12 gap-2 mb-12">
                @csrf
                <?php if ($info2 != null) { ?>
                    <input type="hidden" name="id" value="<?php echo $info2['id'] ?>">
                <?php } ?>
                <input type="text" name="sabor" placeholder="Nome" class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4" value="<?php echo ($info2 != null) ? $info2['sabor'] : null ?>" />
                <input type="number" step="0.01" name="preco" placeholder="Preço" min="0.01" class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4" value="<?php echo ($info2 != null) ? $info2['preco'] : null ?>" />
                <button type="submit" name="<?php echo ($info2 != null) ? 'updateSabor' : 'addSabor' ?>" class="bg-[#209E2C] rounded-md p-2 text-md font-bold text-white w-[100px] hover:bg-green-500 col-span-2 justify-center flex">
                    <?php echo ($info2 != null) ? 'Atualizar' : 'Adicionar' ?>
                </button>
                <a href="{{route('sabor')}}" class="bg-zinc-500 rounded-md p-2 text-md font-bold text-white w-[150px] hover:bg-zinc-400 col-span-2 justify-center flex">Limpar campos</a>
            </form>

            <table class="w-[800px] border-2">
                <thead class="bg-[#EBD9B4]">
                    <tr>
                        <th>Sabor</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody class="bg-zinc-100">
                    <?php
                    foreach ($info as $key => $value) {
                    ?>
                        <tr>
                            <th>
                                <?php echo $value['sabor']; ?>
                            </th>
                            <th>
                                <?php echo $value['preco']; ?>
                            </th>
                            <th>
                                <a href="{{route('sabor')}}?id=<?php echo $value['id']; ?>">
                                    <abbr title="EDITAR">✏️</abbr>
                                </a>
                                <form action="{{route('saborDel')}}" method="post">
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
        </div>
    </section>
</body>