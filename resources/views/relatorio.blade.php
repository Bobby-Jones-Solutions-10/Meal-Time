<?php

use App\Models\pedido;

?>
<style>
    th {
        padding: 10px;
        border: #000 solid 1px;
    }
</style>
<body class="w-full h-screen bg-[#F9EFDB]">
    <div class="flex flex-col justify-center items-center">
        <div class="font-semibold mb-12 text-3xl border-b-2 border-zinc-400 mt-10">
            Relatórios
        </div>
        <div class="w-6/12 flex flex-wrap justify-center items-center">
            <table class="w-8/12">
                <thead class="bg-[#EBD9B4]">
                    <tr>
                        <th>preço</th>
                        <th>dia</th>
                    </tr>
                </thead>
            <tbody class="bg-zinc-100">
            <?php 
                $info = pedido::all();
                $total = 0;
                foreach ($info as $key => $value) {
                    echo '<tr><th>' . $value['preco'] . '</th><th>' . $value['created_at'] . '</th></tr>';
                    $total += $value['preco'];
                }
            
            ?>
            </tbody>
            </table>
        </div>
        <br>
        <h2 style="font-weight: 800;">total: {{$total}}</h2>
    </div>
</body>