<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ini cdn untuk menghubungkan tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- cdn untuk menyambungkan ke font -->
    <link href="https://fonts.cdnfonts.com/css/fredoka-one" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/plus-jakarta-sans" rel="stylesheet">

    <style type="text/tailwindcss">
        @theme {
            /* ini untuk cutom font */
            --font-fredoka-one: 'Fredoka One', sans-serif;
            --font-plus-jakarta-sans: 'Plus Jakarta Sans', sans-serif;
            /* ini untuk custom warna */
            --color-nav-main: #FFF0EB;
            --color-main: #FFE7DF;
            --color-border-search: #E1967C;
            --color-clifford: #da373d;
            --color-menu-active: #904E37;
            --color-main-menu: #E1967C;

        }
    </style>
    @livewireScripts
</head>

<body class="font-fredoka-one">
    @include('layouts.user.header')
    @yield('content')
    @livewireScripts
</body>

</html>
