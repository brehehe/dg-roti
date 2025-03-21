<div>
    <section class="bg-gradient-to-b from-main to-nav-main/80 h-screen pt-32">
        <div class="flex gap-4 px-10 ">

            <!-- ini bagian kue -->
            <div class="w-full flex flex-col">
                <!-- ini bagian kue besar -->
                <div class="flex flex-col items-center justify-center">
                    <img src="{{ asset('storage/' . $get_cake?->image) }}" alt="" class="w-[500px]">
                    <h1 class="text-4xl text-main-menu">{{ $get_cake?->name }}</h1>
                </div>
                <!-- ini bagian menu kecil -->
                <div class="grid grid-cols-6 gap-4 mt-6">
                    @foreach ($cakes as $cake)
                        <div wire:click="choiceCake({{ $cake->id }})"
                            class="bg-main flex items-center justify-center  rounded-full p-3 {{ $cake->id == $get_cake->id ? 'border-4 border-border-search' : null }} hover:border-4 hover:border-border-search transition-all ease-out duration-400">
                            <img src="{{ asset('storage/' . $cake->image) }}" alt="">
                        </div>
                    @endforeach
                </div>

            </div>

            <!-- ini bagian menu -->
            <div class=" w-1/2 flex flex-col p-4 gap-4">

                <div class="bg-gradient-to-b from-white to-nav-main px-4 py-10 rounded-2xl">
                    <h1 class="text-4xl text-main-menu">{{ $get_cake->name }}</h1>
                    <h1 class="mt-4 text-2xl text-main-menu">Rp. {{ number_format($get_cake->price, 0, ',', '.') }}</h1>
                    <p class="mt-4 font-plus-jakarta-sans text-main-menu">
                        {{ $get_cake->description }}
                    </p>
                    <div class="mt-4 font-plus-jakarta-sans text-main-menu">
                        <h4>Ingredients : </h4>
                        @if ($get_cake->ingredients && $get_cake->ingredients->isNotEmpty())
                            <ul class="list-disc ml-6">
                                @foreach ($get_cake->ingredients as $ingredient)
                                    <li>{{ $ingredient->name }}</li>
                                @endforeach
                            </ul>
                        @else
                            <ul class="list-disc ml-6">
                                <li>Tidak ada bahan.</li>
                            </ul>
                        @endif
                    </div>

                </div>

                <button class="bg-main-menu py-4 text-xl text-white rounded-2xl">
                    Pesan Sekarang
                </button>

            </div>

        </div>
    </section>
</div>
