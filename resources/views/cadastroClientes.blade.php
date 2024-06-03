<?php 
use App\Models\cliente;
?>

<head>

  <script>
    function getEndereco(cep) {
      let url = 'https://viacep.com.br/ws/' + cep + '/json';
      let xmlHttp = new XMLHttpRequest();
      xmlHttp.open('GET', url);

      xmlHttp.onreadystatechange = () => {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
          let info = xmlHttp.responseText;
          info = JSON.parse(info);
          document.getElementById('logradouro').value = info.logradouro;
          document.getElementById('bairro').value = info.bairro;
          document.getElementById('localidade').value = info.localidade;
          document.getElementById('uf').value = info.uf;
          document.getElementById('ibge').value = info.ibge;

        }
      }
      xmlHttp.send();

    }
  </script>
</head>

<body class="w-screen h-screen">
  <section class="flex bg-[#F9EFDB] h-[74%]">
    <?php

    $info = null;
    if (isset($_GET["id"])) {
      $info = cliente::find($_GET["id"]);
    }
    ?>
    <div class="w-full flex flex-col items-center mt-10 ">
      <div class="font-semibold mb-16 text-3xl">
        Clientes
      </div>
      <form action="<?php echo ($info != null)? route('clientesUpdate') : route('clientesAdd')?>" method="post" class="w-[800px] grid grid-cols-12 gap-2">
      @csrf
        <?php if ($info != null) { ?> 
          <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
        <?php } ?>
        <input type="text" name="CPF" placeholder="CPF" required
          class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4"
          value="<?php echo ($info != null) ? $info->CPF : null ?>" />

        <input type="text" name="nome" placeholder="Nome Completo" required
          class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4"
          value="<?php echo ($info != null) ? $info->nome : null ?>" />

        <input type="number" name="cep" placeholder="CEP" required id="cep"
          class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4"
          value="<?php echo ($info != null) ? $info->CEP : null ?>" onchange="getEndereco(this.value);" />

        <input type="text" required name="logradouro"
          class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4" placeholder="Endereço"
          id="logradouro" value="<?php echo ($info != null) ? $info->logradouro : null ?>" />

        <input type="text" required name="numero" placeholder="Numero"
          value="<?php echo ($info != null) ? $info->numeroCasa : null ?>"
          class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4" />

        <input type="text" required name="bairro" placeholder="Bairro" id="bairro"
          class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4"
          value="<?php echo ($info != null) ? $info->bairro : null ?>" />

        <!--<input type="text" required name="complemento" placeholder="Complemento"
          value="< ?php// echo ($info != null) ? $info[0]['complemento'] : null ?>"
          class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4" />-->

        <input type="text" readonly required name="localidade" placeholder="Cidade" id="localidade"
          class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4" />

        <input type="text" readonly required name="uf" placeholder="UF" id="uf"
          class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4" />

        <input type="text" readonly required name="ibge" placeholder="IBGE" id="ibge"
          class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4" />

        <input type="text" required name="contato" placeholder="Contato"
          value="<?php echo ($info != null) ? $info->contato : null ?>"
          class="bg-white border rounded-md p-2 text-md font-bold text-zinc-600 col-span-4" />



        <div class="col-span-12 justify-center grid">
          <button type="submit" name="<?php echo ($info != null) ? 'atualizar' : 'cadastrar' ?>"
            class="bg-[#209E2C] rounded-md p-2 text-md font-bold text-white hover:bg-green-500">
            <?php echo ($info != null) ? 'Atualizar' : 'Cadastrar' ?>
          </button>
  </div>
  </section>
  <?php
    if ($info != null) {
      echo "<script>getEndereco(document.getElementById('cep').value)</script>";
    }
  ?>
</body>
