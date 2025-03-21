<header class="bg-nav-main p-4 fixed top-0 w-full">

    <div class="flex justify-between items-center px-10 py-5">
        <!-- ini search bar -->
        <input type="text"
            class="bg-white text-border-search border border-border-search w-60 rounded-xl px-2 py-1 font-plus-jakarta-sans"
            placeholder="Cari Disini">

        <!-- logo navbar -->
        <img src="{{ asset('assets/logo.png') }}" alt="" class="w-[100px]">

        <!-- ini menu -->
        <nav>
            <ul class="flex gap-4">
                <li class="text-menu-active">Beranda</li>
                <li class="text-main-menu">Menu</li>
                <li class="text-main-menu">Tentang</li>
                <li class="text-main-menu">Kontak</li>
            </ul>
        </nav>
    </div>

</header>
