<?php

use App\Models\cliente;
use App\Models\extra;
use App\Models\sabor;
use App\Models\tamanho;

?>

<body class="w-screen h-screen bg-[#F9EFDB]">
    <section class="w-full flex flex-col items-center mt-10 ">
        <div class="font-semibold mb-12 text-3xl border-b-2 border-zinc-400">
            Pedidos
        </div>
        <form action="{{route('pedidosAdd')}}" method="post" class="w-[800px] grid grid-cols-12 gap-2">
            @csrf
            <select name="tamanho"
                class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4">
                <?php 
                $info = tamanho::all();

                foreach ($info as $key => $value) {
                    ?>
                    <option value="{{$value['id']}}">{{$value['tamanho']}}</option>
                    <?php
                }
                ?>
            </select>
            <select name="sabor"
                class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4">
                <?php

                $info = sabor::all();

                foreach ($info as $key => $value) {
                    ?>
                    <option value="<?php echo $value['id']; ?>">
                        <?php echo $value["sabor"] ?>
                    </option>
                <?php } ?>
            </select>
            <select name="extra"
                class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4">
                <?php
                $info = extra::all();

                foreach ($info as $key => $value) {
                    ?>
                    <option value="<?php echo $value['id']; ?>">
                        <?php echo $value["extra"] ?>
                    </option>
                <?php } ?>
            </select>
            <input type="text" id="clienteSerch" placeholder="Pesquise o cliente"
                class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4">
            <select name="cliente" id="cliente"
                class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4">
                <?php
                $infoCliente = cliente::all();

                foreach ($infoCliente as $key => $value) {
                    ?>
                    <option value="<?php echo $value['id']; ?>">
                        <?php echo $value["nome"] ?>
                    </option>
                <?php } ?>
            </select>
            <select name="formaPagamento"
                class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4">
                <option value="dinheiro">Dinheiro</option>
                <option value="Pix">Pix</option>
                <option value="credito">Crédito</option>
                <option value="debito">Débito</option>
            </select>
            <select name="retirada"
                class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4">
                <option value="e">Entrega</option>
                <option value="b">Balcao</option>
            </select>
            <div class="col-span-12 flex justify-center">
                <button type="submit" name="adicionar"
                    class="bg-[#209E2C] rounded-full p-2 text-md font-bold text-white w-[250px] flex justify-center">Adicionar</button>
            </div>
        </form>


    </section>
</body>

<?php

$cliente = '';
$clienteID = '';
foreach ($infoCliente as $key => $value) {
    if ($key != 0) {
        $cliente .= ',';
        $clienteID .= ',';
    }
    $cliente .= '"' . $value['nome'] . '"';
    $clienteID .= '"' . $value['id'] . '"';
}


?>
<script>
    document.getElementById("clienteSerch").addEventListener("keypress", e => {
        pesquisa();
    });

    function pesquisa() {
        let output = document.getElementById("cliente");
        const clienteList = [<?php echo $cliente; ?>]
        const clienteIDList = [<?php echo $clienteID; ?>]
        let found = []
        let foundID = []
        let serch = document.getElementById("clienteSerch").value;
        output.innerHTML = ""
        for (let i = 0; i < clienteList.length; i++)
            //alert(examesList[i].includes(serch))
            if (clienteList[i].toLowerCase().includes(serch.toLowerCase())) {
                found = found.concat(clienteList[i]);
                foundID = foundID.concat(clienteIDList[i]);
            }
        if (found.length > 0) {
            for (let i = 0; i < found.length; i++) {
                let opt = document.createElement("option");
                opt.value = foundID[i];
                opt.innerHTML = found[i];
                output.appendChild(opt);
            }
        }
        else {
            output.innerHTML = "nenhum cliente encontrado";
        }
    }
</script>