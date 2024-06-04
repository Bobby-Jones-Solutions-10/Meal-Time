<section class="w-screen h-[calc(100vh-8rem)] items-center justify-center flex flex-col bg-[#F9EFDB]">
  <div class="w-[700px] flex flex-wrap gap-16 justify-center items-center">
    <a href="{{route('sabor')}}"
      class="bg-[#EBD9B4] w-[180px] flex justify-center items-center flex-col rounded-lg p-4">
      <img src="{{asset('img/chefeCozinha.png')}}" class="w-16 h-16">
      <p class="text-black font-semibold pt-2">SABOR</p>
    </a>
    <a href="{{Route('extra')}}"
      class="bg-[#EBD9B4] w-[180px] flex justify-center items-center flex-col rounded-lg p-4">
      <img src="{{asset("img/chapeu.png")}}" class="w-16 h-16">
      <p class="text-black font-semibold pt-2">EXTRA</p>
    </a>
    <a href="{{Route('dashboard')}}"
      class="bg-[#EBD9B4] w-[180px] flex justify-center items-center flex-col rounded-lg p-4">
      <img src="{{asset("img/entrega.png")}}" class="w-16 h-16">
      <p class="text-black font-semibold pt-2">VOLTAR</p>
    </a>
  </div>
</section>