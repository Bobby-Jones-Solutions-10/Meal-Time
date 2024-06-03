<body class="w-screen h-screen items-center justify-start flex flex-col bg-[#F9EFDB]">
  <img src="{{asset('img/logoMealTime.png')}}" alt="Isso e uma logo" class="w-56 h-56">
  <div class="w-[700px] flex flex-wrap gap-16 justify-center items-center">
    <a href="{{Route('funcionarios')}}" class="bg-[#EBD9B4] w-[180px] flex justify-center items-center flex-col rounded-lg p-4">
      <img src="{{asset('img/chefeCozinha.png')}}" class="w-16 h-16">
      <p class="text-black font-semibold pt-2">FUNCIONÁRIOS</p>
    </a>
    <a href="{{Route('cozinha')}}" class="bg-[#EBD9B4] w-[180px] flex justify-center items-center flex-col rounded-lg p-4">
      <img src="{{asset('img/chapeu.png')}}" class="w-16 h-16">
      <p class="text-black font-semibold pt-2">COZINHA</p>
    </a>
    <a href="{{Route('pedidos')}}" class="bg-[#EBD9B4] w-[180px] flex justify-center items-center flex-col rounded-lg p-4">
      <img src="{{asset('img/entrega.png')}}" class="w-16 h-16">
      <p class="text-black font-semibold pt-2">PEDIDOS</p>
    </a>
    <a href="{{Route('clientes')}}" class="bg-[#BFCCB5] w-[180px] flex justify-center items-center flex-col rounded-lg p-4">
      <img src="{{asset('img/cliente.png')}}" class="w-16 h-16">
      <p class="text-black font-semibold pt-2">CLIENTES</p>
    </a>
    <a href="{{Route('relatorio')}}" class="bg-[#BFCCB5] w-[180px] flex justify-center items-center flex-col rounded-lg p-4">
      <img src="{{asset('img/relatorio.png')}}" class="w-16 h-16">
      <p class="text-black font-semibold pt-2">RELATÓRIOS</p>
    </a>
    <a href="{{Route('config')}}" class="bg-[#BFCCB5] w-[180px] flex justify-center items-center flex-col rounded-lg p-4">
      <img src="{{asset('img/engrenagem.png')}}" class="w-16 h-16">
      <p class="text-black font-semibold pt-2">CONFIGURAÇÕES</p>
    </a>
  </div>
  <br>
</body>